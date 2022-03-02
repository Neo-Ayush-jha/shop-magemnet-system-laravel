<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    public function index(){
        return view("category_home",['category'=>Category::all()]);
    }
    public function store(Request $req){
        $req->validate([
            'cat_title'=>'required'
        ]);
        $req->validate([
            'cat_description'=>'required'
        ]);
        $v = new Category();
        $v->cat_title = $req->cat_title;
        $v->cat_description= $req->cat_description;
        $v->save();
        $req->Session()->flash("message","Data is inserted");
        return redirect("/category");
    }
    public function delete(Request $req, $id){
        $data= Category::find($id);
        $data->delete();
        return redirect("/category");
    }
    public function edit(Request $req, $id){
        $data = [
            "category"=>Category::find($id)
        ];
        return view("/category/edit",$data);
    }
}