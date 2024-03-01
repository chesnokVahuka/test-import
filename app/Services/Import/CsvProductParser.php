<?php

namespace App\Services\Import;

use Illuminate\Http\UploadedFile;

final class CsvProductParser
{
    public function getHeaders(UploadedFile $data): array
    {
        $headers = $data->openFile('r')->fgetcsv(';');

        for ($i=0; $i<count($headers); $i++){
            $headers[$i] = trim($headers[$i]);
        }
        return $headers;
    }

    public function parsePrice(string $price): float
    {
        $price = str_replace([' ',' ',"\t"],'.',$price);
        return (float)$price;
    }

}