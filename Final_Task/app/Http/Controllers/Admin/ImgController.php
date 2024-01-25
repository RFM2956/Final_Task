<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Img;
use App\Http\Requests\ImageUploadRequest;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ImgController extends Controller
{
    public function index()
    {
        $images = Img::all();
        return view('admin.images.index', compact('images'));
    }

    public function create()
    {
        $imgs = Img::all();
        return view('admin.images.create', compact('imgs'));
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

            $img = new Img(['img' => $lasPath]);
            $img->save();

            return redirect()->route('admin.images.index')->with('success', 'Image uploaded successfully.');
        }
    }

    public function destroy($id)
    {
        $file = Img::findOrFail($id);

        // Delete the associated image using Storage facade
        if (Storage::exists($file->img)) {
            Storage::delete($file->img);
        }

        $deleted = $file->delete();

        if ($deleted) {
            return redirect()->route('admin.images.index')->with('success', 'Image deleted successfully.');
        }
    }

    public function edit($id)
    {
        $img = Img::findOrFail($id);
        return view('admin.images.edit', compact('img'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $mainImg = Img::findOrFail($id);

        $randomName = Str::random(10);
        $imagePath = 'public/front/assets/image/'; // Adjusted path with 'public/'

        if ($request->hasFile('img')) {
            // Delete the old image using Storage facade
            if (Storage::exists($mainImg->img)) {
                Storage::delete($mainImg->img);
            }

            $img = $request->img;
            $extension = $img->getClientOriginalExtension();
            $lastName = $randomName . "." . $extension;
            $lasPath = 'storage/front/assets/image/' . $randomName . "." . $extension; // Adjusted path with 'storage/'

            // Save the new image using Storage facade
            Storage::putFileAs($imagePath, $img, $lastName);

            $data['img'] = $lasPath;
        }

        $updated = $mainImg->update($data);

        if ($updated) {
            return redirect()->route('admin.images.index')->with('success', 'Image has been successfully uploaded.');
        }
    }
}
