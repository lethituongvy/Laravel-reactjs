<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
  function index(){
    $categories = Category::all();
    foreach($categories as $category)
    {
      $category->name;
    }

    return view('/admin/category/index',['categories'=> $categories]);
  }

  function addCategory(){
    $categories = Category::all();
    return view('admin/category/create',['categories'=>$categories]);
  }

  function store(Request $request){
    $name=$request->input('name');
    $categories = new Category;
    $categories->name=$name;
    $categories ->save();
  }

  function edit($id)
  {
    $categories = Category::find($id);
    return view('admin.category.edit',['categories'=>$categories]);
  }

  function update($id,Request $request)
  {  
    $categories=  Category::find($id);
    $name = $request->input('name');
    $categories->name = $name;      
    $categories->save();
    return redirect('admin/category/index');
  }
  
  function delete($id){
    Category::find($id)->delete();
    return redirect('admin/category/index');
  }
}
