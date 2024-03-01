<?php

namespace App\Validators\ApiValidators;

use App\Models\Product;
use App\Services\Import\CsvProductParser;
use Illuminate\Http\UploadedFile;

use function Symfony\Component\Translation\t;

final class ImportValidator
{
    private string $errors;

    public function validate(UploadedFile $data):bool
    {
        if (!$this->isValidExtension($data)){
            $this->addError('upload file must have .csv extension');
            return false;
        }

        if (!$this->isValidHeaders($data)){
            $this->addError('csv import file has invalid headers');
        }

        return empty($this->errors);
    }

    public function getError(): string
    {
        return $this->errors;
    }

    private function isValidExtension(UploadedFile $data): bool
    {
        return $data->getClientOriginalExtension() === 'csv';
    }

    private function isValidHeaders(UploadedFile $data): bool
    {
        $parser = new CsvProductParser();

       $headers = $parser->getHeaders($data);
       $modelFields = Product::getFieldMapping();

        for ($i=0; $i<count($headers); $i++){
            if (!isset($modelFields[$headers[$i]])){
                return false;
            }
        }
        return true;
    }

    private function addError(string $error):void
    {
        $this->errors = $error;
    }

}