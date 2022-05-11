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

//    public static function findPost($id) {
//        $index = array_search($id, array_column(self::readFile(), "id"));
//        if($index === false) {
//            return $id;
//        }
//        return self::readFile()[$index];
//    }
//
    public static function createPost($category, $description, $title, $price) {
        $post_arr = self::readFileJson();
        array_push($post_arr, [
            "id" => count($post_arr) + 1,
            "title" => $title,
            "description" => $description,
            "category" => $category,
            "price" => $price
        ]);
        self::writeFile($post_arr);
    }

    public static function writeFile($data) {
        $jsonData = json_encode($data);
        file_put_contents('../storage/app/public/allProducts.json', $jsonData);
    }
}
