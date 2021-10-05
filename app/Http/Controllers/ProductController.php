<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    public function showDetails(Product $product)
    {
        return view('frontend.showDetails', compact('product'));
    }

    public function index()
    {
        $products = Product::all();
        return view('admin.product.index', compact('products'));
    }

    public function create()
    {
        return view('admin.product.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:products,slug' . $request->post('id'),
            'image' => 'required|mimes:jpeg,jpg,png',
            'description' => 'required',
            // 'price' => 'required',
            'sale_price' => 'required',
        ]);

        $product = new Product();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extension = $image->extension();
            $image_name = time() . '.' . $extension;
            $image->storeAs('/public/media', $image_name);

            $product->image = $image_name;
        }

        // $imagePath = request('image')->store('uploads', 'public');

        // $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200);
        // $image->save();


        // $product->category_id = $request->category_id;
        $product->title = $request->title;
        $product->slug = $request->slug;
        // $product->image = $imagePath;
        $product->description = $request->description;
        // $product->price = $request->price;
        $product->sale_price = $request->sale_price;
        $product->active = 1;
        $product->save();

        $request->session()->flash('message', 'Product Added Successfully');
        return redirect()->route('admin.product.index');
    }

    public function edit(Product $product)
    {
        $categories = Category::all();

        return view('admin.product.edit', compact('categories', 'product'));
    }


    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
        ]);


        $product->update([
            'category_id' => $request->category_id,
            'name' => $request->name,

            'slug' => $request->slug,
            'brand' => $request->brand,
            'model' => $request->model,
            'short_desc' => $request->short_desc,
            'desc' => $request->desc,
            'keywords' => $request->keywords,
            'technical_spacification' => $request->technical_spacification,
            'uses' => $request->uses,
            'warranty' => $request->warranty,
        ]);

        $request->session()->flash('message', 'Product Updated Successfully');
        return redirect()->route('admin.product.index');
    }


    public function destroy(Product $product)
    {
        $product->delete();

        request()->session()->flash('message', 'Product Deleted Successfully');
        return redirect()->route('admin.product.index');
    }

    public function status($status, Product $product, Request $request)
    {
        $product->status = $status;
        $product->save();

        request()->session()->flash('message', 'Product Status Updated Successfully');
        return redirect()->route('admin.product.index');
    }
}
