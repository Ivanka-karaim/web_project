<?php
namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use App\Models\Products;
use Illuminate\Http\Request;
class MainController extends Controller {
    public function index()
    {
        return view('index');
    }
    public function categories() {
        $categories = Category::getAll();
        return view('allProducts', compact('categories'));
    }
    public function productsByCategory($category) {
        $products = Products::getProduct($category);
        $name_category = Category::getAll()[$category];
        $key_category = key(Category::getAll());
        return view('products', compact(['products', 'name_category','key_category']));
    }
    public function addProduct() {
        $categories = Category::getAll();
        return view('addProduct', compact('categories'));
    }
    public function addProductPost(Request $request){
        $categories = Category::getAll();
        Products::createPost($request->category, $request->description, $request->title, $request->price);
        return response()->view('addProduct', [
            "categories" => $categories,
            "status" => true
        ], 200);
    }
    public function searchProduct($category, $id){
        $product = new Product($id);
        return view('product', compact('product'));
    }

}
