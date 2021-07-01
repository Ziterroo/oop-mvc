<?php


namespace App\Models;



class User extends Model
{
    public const TABLE = 'users';

    public string $email;
    public string $name;

}