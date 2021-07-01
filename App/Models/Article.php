<?php


namespace App\Models;



class Article extends Model
{
    public const TABLE = 'news';

    public string $title;
    public string $content;
}