<?php


namespace App\Models;


use App\interfaces\HasPriceInterface;

class Service extends Model implements HasPriceInterface
{
    use HasPriceTrait;

    public const TABLE = 'services';

    public string $title;
}