<?php
namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use App\Models\Products;
use Illuminate\Http\Request;
class MainController extends Controller {

    protected $categories=['door'=>'Двері', 'washer'=>'Душові кабіни', 'mirror'=>'Дзеркала', 'window'=>'Вікна'];
    public function index()
    {
        return view('index');
    }
    public function categories() {
        return view('allProducts', ['categories'=>$this->categories]);
    }
    public function productsByCategory($category) {
        $products = Products::getProduct($category);
        $name_category = $this->categories[$category];
        return view('products', compact(['products', 'name_category','category']));
    }
    public function addProduct() {
        return view('addProduct', ['categories'=>$this->categories]);
    }
    public function addProductPost(Request $request){
        Products::createProduct($request->category, $request->description, $request->title, $request->price);
        return response()->view('addProduct', [
            "categories" => $this->categories,
            "status" => true
        ], 200);
    }
    public function searchProduct($category, $id){
        $product = new Product($id);
        return view('product', compact('product'));
    }

}
