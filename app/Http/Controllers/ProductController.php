<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // calling
    public function index(){
        $data = ["data" => Product::all()];
        return view("home",$data);

    }
    // post store method
    public function store(Request $req){

        // $req->validate([
        //     'name' => 'required',
        //     'description' => 'description',
        //     'price' => 'price',
        //     'image' => 'image',
        // ]);
        $p = new Product();
        $p-> name = $req->name;
        $p-> description = $req->description;
        $p-> price = $req->price;
        // $p-> image = $req->image;

       // image work
        // $file = $req->image;
        // $fileName = $file->getClientOriginalName();
        // $file->move("product_image", $fileName);
        // $p->image = $fileName;
        $p->save();
        return redirect("/");
    }
    // delete method
    public function delete(Request $req, $id){
        $data = Product::find($id);
        $data->delete();
        return redirect("/");

    }
    
       
    }






