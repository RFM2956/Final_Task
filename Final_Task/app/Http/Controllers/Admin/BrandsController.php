<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brands;
use App\Http\Requests\ImageUploadRequest;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class BrandsController extends Controller
{
    public function index()
    {
        $images = Brands::all();
        return view('admin.brands.index', compact('images'));
    }

    public function create()
    {
        $img = Brands::all();
        return view('admin.brands.create', compact('img'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'img' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        if ($request->hasFile('img')) {
            $img = $request->file('img');
            $extension = $img->getClientOriginalExtension();
            $randomName = Str::random(10);
            $imagePath = 'public/front/assets/image/';
            $lastName = $randomName . "." . $extension;
            $lasPath = 'storage/front/assets/image/' . $randomName . "." . $extension;

            // Save the image using Storage facade
            Storage::putFileAs($imagePath, $img, $lastName);

            $brand = new Brands(['img' => $lasPath]);
            $brand->save();

            return redirect()->route('admin.brands.index');
        }
    }

    public function edit($id)
    {
        $brand = Brands::findOrFail($id);
        return view('admin.brands.edit', compact('brand'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'img' => 'image|mimes:jpeg,png,jpg,gif,svg',
            // Add other validation rules as needed
        ]);

        $brand = Brands::findOrFail($id);

        if ($request->hasFile('img')) {
            // Delete the old image using Storage facade
            if (Storage::exists($brand->img)) {
                Storage::delete($brand->img);
            }

            $newImage = $request->file('img');
            $extension = $newImage->getClientOriginalExtension();
            $randomName = Str::random(10);
            $imagePath = 'public/front/assets/image/';
            $newImageName = $randomName . "." . $extension;
            $newImagePath = 'storage/front/assets/image/' . $newImageName;

            // Save the new image using Storage facade
            Storage::putFileAs($imagePath, $newImage, $newImageName);

            $brand->img = $newImagePath;
        }

        $brand->save();

        return redirect()->route('admin.brands.index');
    }

    public function destroy($id)
    {
        $brand = Brands::findOrFail($id);

        // Delete the associated image using Storage facade
        if (Storage::exists($brand->img)) {
            Storage::delete($brand->img);
        }

        $brand->delete();

        return redirect()->route('admin.brands.index')->with('success', 'Image deleted successfully.');
    }
}
