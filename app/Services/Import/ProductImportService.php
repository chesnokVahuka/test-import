<?php

namespace App\Services\Import;

use App\Models\Product;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;

class ProductImportService
{
    private array $errors;
    public function import(UploadedFile $content): array
    {
       $serialized = $this->serialize($content);
       $this->create($serialized);
       return $this->errors;
    }

    private function serialize(UploadedFile $content): array
    {
        $parser = new CsvProductParser();
        $headers = $parser->getHeaders($content);
        $headers = $this->mapHeader($headers);

        $result = [];
        $row = 0;
        foreach ($content->openFile('r') as $line){
            $row++;
            $data = str_getcsv($line,';');

            if (count($data) != count($headers)){
                $this->addError(['error'=>'invalid params count in row','row' => implode(';',$data)]);
                continue;
            }
            //пропускаем первую строку с заголовками
            if ($row === 1){
                continue;
            }

            $row++;
            $params = [];
            for ($i=0; $i<count($headers); $i++){

                if ($headers[$i] == 'code' && empty($data[$i])){
                    $this->addError(['error' => 'product must have not empty code','row' => implode(';',$data)]);
                    break;
                }

                $params[$headers[$i]] = trim($data[$i]);

                if (in_array($headers[$i],['price','price_sp'])){
                    $params[$headers[$i]] = $parser->parsePrice($data[$i]);
                }
                if ($headers[$i] == 'quantity'){
                    $params[$headers[$i]] = (float)$data[$i];
                }
                if ($headers[$i] == 'show_on_main'){
                    $params[$headers[$i]] = (bool)$data[$i];
                }
            }
            if (!empty($params)){
                $result[] = $params;
            }
        }

        return $result;
    }

    private function create(array $products):void
    {
        foreach ($products as $product){
            $dbProduct = Product::where('code',$product['code'])->first();
            if (!$dbProduct){
                $this->store($product);
            }
        }
    }

    private function store(array $product): void
    {
        try {
            $dbProduct = Product::create($product);

            DB::beginTransaction();
            $dbProduct->save();
            DB::commit();
        } catch (\Throwable $e){
            DB::rollBack();
            $this->addError(['error' => "{$e->getMessage()}",'row' => implode(';',$product)]);
        }
    }


    private function mapHeader(array $headers): array
    {
        $modelFields = Product::getFieldMapping();
        $result = [];

        for ($i=0;$i<count($headers);$i++){
            $result[] = $modelFields[$headers[$i]];
        }

        return $result;
    }

    private function addError(array $error):void
    {
        $this->errors[] = $error;
    }

}