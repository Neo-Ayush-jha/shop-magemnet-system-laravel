<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class productController extends Controller
{
    public function index(){
        $data=[
            "products"=>Product::all(),
        ];
        return view("productPage.home",$data);
    }
    public function store(Request $req){
        $pro = new Product();
        $pro->title = $req->title;
        $pro->brand = $req->brand;
        $pro->price = $req->price;
        $pro->discount_price = $req->discount_price;
        // img
        $file =$req->image;
        $fileName = $file ->getClientOriginalName();
        $file->move("product_image", $fileName);
        $pro->image = $fileName;
        

        $pro->qty = $req->qty;
        $pro->category_id = $req->category_id;
        $pro->description = $req->description;
        $pro->save();
        return redirect()->route("home");
    }
    public function create(){
        $data = [
            'category' => Category::all()
        ];
        return view("productPage.insert",$data);
    }
    public function edit(Request $req, $id){
        $data = [
            "product"=>Product::find($id)
        ];
        return view("productPage.edit",$data);
    }
    public function delete(Request $req, $id){
        $pro = Product::find($id);
        $pro->delete();
        return redirect()->route("home");
    }
}
