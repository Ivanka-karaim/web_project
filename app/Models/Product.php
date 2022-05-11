<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Product {
    public int $id, $price;
    public String $title, $description, $category;
    public function __construct(int $id)
    {
        $products =json_decode(file_get_contents('../storage/app/public/allProducts.json'), true);
        $index = array_search($id, array_column($products, "id"));
        if($index === false) {
           return null;
        }
        $product = $products[$index];
        $this->id = $product['id'];
        $this->title = $product['title'];
        $this->category=$product['category'];
        $this->description = $product['description'];
        $this->price = $product['price'];
    }
}
