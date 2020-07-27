<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests\Categories\StoreCategoryRequest;
use App\Http\Requests\Categories\UpdateCategoryRequest;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('categories.index')->with(compact('categories'));
    }

    public function show(Category $category){
        return view('categories.show')->with(compact('category'));
    }

    public function create(){
        return view('categories.create');
    }

    public function store(StoreCategoryRequest $request){
        Category::create($request->all());
        return redirect('/categories');
    }

    public function edit(Category $category){
        return view('categories.edit')->with(compact('category'));
    }

    public function update(Category $category, UpdateCategoryRequest $request){
        $category->update($request->all());
        return redirect('/categories');
    }

    public function destroy(Category $category){
        $category->delete();
        return redirect('/categories');
    }
}
