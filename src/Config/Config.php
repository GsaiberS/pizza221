<?php
namespace App\Config;
class Config{
const FILE_PRODUCTS=".\Storage\data.json";
const FILE_ORDERS=".\storage\order.json";
const TYPE_FILE="file";
const TYPE_DB="db";

// настройки подключения
const MYSQL_DNS = 'mysql:dbname=pizzais;host=localhost; charset=utf8';
const MYSQL_USER = 'root';
const MYSQL_PASSWORD = '';
const TABLE_PRODUCTS="products";
const TABLE_ORDERS="orders";

// Режим хранения данных 
const STORAGE_TYPE= self::TYPE_DB;
}