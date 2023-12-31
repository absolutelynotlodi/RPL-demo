<?php

class PDOUtil
{
    public static function createMySQLConnection(): PDO
    {
    $link = new PDO("mysql:host=localhost;dbname=rpl2023", "root", "");
    $link->setAttribute(PDO::ATTR_AUTOCOMMIT, false);
    $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $link;
    }
}