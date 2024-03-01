<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'title',
        'level1',
        'level2',
        'level3',
        'price',
        'price_sp',
        'quantity',
        'properties',
        'similar_products',
        'measure',
        'picture',
        'show_on_main',
        'description'
    ];

    public static function getFieldMapping(): array
    {
        return [
            'Код' => 'code',
            'Наименование' => 'title',
            'Уровень1' => 'level1',
            'Уровень2' => 'level2',
            'Уровень3' => 'level3',
            'Цена' => 'price',
            'ЦенаСП' => 'price_sp',
            'Количество' => 'quantity',
            'Поля свойств' => 'properties',
            'Совместные покупки' => 'similar_products',
            'Единица измерения' => 'measure',
            'Картинка' => 'picture',
            'Выводить на главной' => 'show_on_main',
            'Описание' => 'description'
        ];
    }
}
