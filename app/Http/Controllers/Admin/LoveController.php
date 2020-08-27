<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Love;
use App\Category;
class LoveController extends Controller
{
    function index()
    {
        $love = DB::table('love')->get();
        $categories = Category::all();
        return view('admin.love.index', ['love' => $love,'categories'=>$categories]);
        echo json_encode($love);
    }
    function form(){
        $categories = Category::all();
        return view('admin.love.create',['categories'=>$categories]);
    }
    function store(Request $request){
        $name = $request->name;
        $ages = $request->ages;
        $address = $request->address;
        $facebook = $request->facebook;
        $job = $request->job;
        $image = $request->image->store("public");
        $height = $request->height;
        $weight = $request->weight;
        $description = $request->description;
        $price = $request->price;
        $category = $request->category;

        $love = new Love();
        $love->name = $name;       
        $love->ages = $ages;
        $love->address = $address;
        $love->facebook = $facebook;
        $love->job = $job;
        $love->image = '/storage/'.$image;
        $love->height = $height;
        $love->weight = $weight;
        $love->description = $description;
        $love->price = $price;
        $love->category_id= $category;
        $love->save();
        return redirect('/admin/love/index');    
    }
    function destroy($id){
     $love = Love::find($id);
     $love->delete();
    return redirect('/admin/love/index');  

    }
    function edit($id){
        $love = Love::find($id);
        $categories = Category::all();
        return view('admin.love.edit',['loves'=>$love,'categories'=> $categories]);
       }
   function update($id,Request $request)
    {   $name = $request->name;
        $ages = $request->ages;
        $address = $request->address;
        $facebook = $request->facebook;
        $job = $request->job;
        $image = $request->image;
        $height = $request->height;
        $weight = $request->weight;
        $description = $request->description;
        $price = $request->price;
        $category = $request->category;
        $love = Love::find($id);
        $love->name = $name;       
        $love->ages = $ages;
        $love->address = $address;
        $love->facebook = $facebook;
        $love->job = $job;
        $love->image = $image;
        $love->height = $height;
        $love->weight = $weight;
        $love->description = $description;
        $love->price = $price;
        $love->category_id=$category;
        $love->save();
        return redirect('/admin/love/index'); 
    }
   
 }


