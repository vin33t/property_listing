<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Models\Media;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('backend.category.index', compact('categories'));
    }

    public function create()
    {
        return view('backend.category.create');
    }

    public function store(CategoryRequest $request)
    {
        $category = Category::create($request->all());
        $category->addMedia($request->file('media'))->toMediaCollection();
        return redirect('category/');
    }

    public function edit(Category $category)
    {
        return view('backend.category.edit', compact('category'));
    }

    public function update(Category $category, CategoryRequest $request)
    {
        $category->update($request->all());
        $category->clearMediaCollection();
        $category->addMedia($request->file('media'))->toMediaCollection();
        return redirect('category/');
    }

    public function destroy(Category $category)
    {
        $category->clearMediaCollection();
        $category->delete();
        return redirect('category/');
    }
}
