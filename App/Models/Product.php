<?php


namespace App\Models;


use App\interfaces\HasPriceInterface;
use App\interfaces\HasTitle;

class Product extends Model implements HasPriceInterface, HasTitle
{
    use HasPriceTrait;
    public const TABLE = 'products';

    public string $title;
    public string $description;

    public function getTitle(): string
    {
        return $this->title;
    }
}