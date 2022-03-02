<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class homeController extends Controller
{
    function index(){
        $data=[
            'product'=>Product::all(),
            'category'=>Category::all(),
        ];
        return view("home",$data);
    }
    public function categoryFilter($cat_id){
        $data=[
            'product'=>Product::where(['category_id'=>$cat_id])->get(),
            'category'=>Category::all(),
        ];
        return view("home",$data);
    }
    public function singleView($pro_id){
        $data=[
            'product'=>Product::find($pro_id),
            'category'=>Category::all(),
        ];
        return view("singleView",$data);
    }
}
