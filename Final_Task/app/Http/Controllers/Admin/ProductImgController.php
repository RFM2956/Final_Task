<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\ProductsImg;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ProductImgController extends Controller
{
    public function index()
    {
        $productImage  = ProductsImg::all();
        
        return view('admin.productimgs.index', compact('productImage'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.productimgs.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        if ($request->hasFile('file')) {
            $img = $request->file;
            $extension = $img->getClientOriginalExtension();
            $randomName = Str::random(10);
            $imagePath = 'public/front/assets/image/'; // Adjusted path with 'public/'
            $lastName = $randomName . "." . $extension;
            $lasPath = 'storage/front/assets/image/' . $randomName . "." . $extension; // Adjusted path with 'storage/'

            // Save the image using Storage facade
            Storage::putFileAs($imagePath, $img, $lastName);

            $data = [
                'img' => $lasPath,
                'category_id' => $request->category_id,
                // Add other fields as needed
            ];

            $created = ProductsImg::create($data);

            if ($created) {
                return redirect()->route('admin.products.index')->with('success', 'Image uploaded successfully.');
            }
        }
    }

    public function edit($id)
    {
        $categories = Category::all();
        $productImg = ProductsImg::findOrFail($id);
        return view('admin.productimgs.edit', compact('productImg', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'img' => 'image|mimes:jpeg,png,jpg,gif',
            // Add other validation rules as needed
        ]);

        $productImg = ProductsImg::findOrFail($id);

        $data = [
            'author' => $request->author,
            'title' => $request->title,
            'price' => $request->price,
            'percent' => $request->percent,
            'category_id' => $request->category_id,
            // Add other fields as needed
        ];

        if ($request->hasFile('img')) {
            // Delete the old image using Storage facade
            if (Storage::exists($productImg->img)) {
                Storage::delete($productImg->img);
            }

            $newImage = $request->img;
            $extension = $newImage->getClientOriginalExtension();
            $randomName = Str::random(10);
            $imagePath = 'public/front/assets/image/'; // Adjusted path with 'public/'
            $newImageName = $randomName . "." . $extension;
            $newImagePath = 'storage/front/assets/image/' . $newImageName; // Adjusted path with 'storage/'

            // Save the new image using Storage facade
            Storage::putFileAs($imagePath, $newImage, $newImageName);

            $data['img'] = $newImagePath;
        }

        $productImg->update($data);

        return redirect()->route('admin.products.index');
    }

    public function destroy($id)
    {
        $productImg = ProductsImg::findOrFail($id);

        // Delete the associated image using Storage facade
        if (Storage::exists($productImg->img)) {
            Storage::delete($productImg->img);
        }

        $productImg->delete();
        return redirect()->back();
    }
}
