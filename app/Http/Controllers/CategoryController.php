<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'slug' => 'required',
        ]);

        $category = new Category();

        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->status = 1;
        $category->save();

        $request->session()->flash('message', 'Category Added Successfully');
        return redirect()->route('admin.category.index');
    }

    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
        ]);

        $category->update([
            'name' => $request->name,
            'slug' => $request->slug,
        ]);

        $request->session()->flash('message', 'Category Successfully Updated');
        return redirect()->route('admin.category.index');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        request()->session()->flash('message', 'Category Successfully Deleted');
        return redirect()->route('admin.category.index');
    }

    public function status($status, Category $category, Request $request)
    {
        $category->status = $status;
        $category->save();

        $request->session()->flash('message', 'Status Updated Successfully');
        return redirect()->route('admin.category.index');
    }
}
