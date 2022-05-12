<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function PHPUnit\Framework\isNull;


class Products extends Model
{
    use HasFactory;


    private static function readFileJson() {
        $result = file_get_contents('../storage/app/public/allProducts.json');
        $data = json_decode($result, true);
        if (is_null($data)) return [];
        return $data;
    }

    public static function getAll() {
        return self::readFileJson();
    }

    public static function getProduct($category) {
        return array_filter(self::readFileJson(), function($item) use ($category) {
            return strtolower($item['category']) === $category;
        });
    }

    public static function createProduct($category, $description, $title, $price) {
        $post_arr = self::readFileJson();
        array_push($post_arr, [
            "id" => count($post_arr) + 1,
            "title" => $title,
            "description" => $description,
            "category" => $category,
            "price" => $price
        ]);
        $jsonData = json_encode($post_arr);
        file_put_contents('../storage/app/public/allProducts.json', $jsonData);
    }
}
