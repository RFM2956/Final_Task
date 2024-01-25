<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slide;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class SlideController extends Controller
{
    public function index()
    {
        $slides = Slide::all();
        return view('admin.slide.index', compact('slides'));
    }

    public function create()
    {
        $slides = Slide::all();
        return view('admin.slide.create', compact('slides'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image_path' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->all();

        // Create the slide
        $created = Slide::create($data);

        if ($request->hasFile('image_path')) {
            $img = $request->file('image_path');
            $extension = $img->getClientOriginalExtension();
            $randomName = Str::random(10);
            $imagePath = 'front/assets/image/';
            $lastName = $randomName . "." . $extension;
            $lasPath = $imagePath . $randomName . "." . $extension;

            // Save the image using Storage facade
            Storage::putFileAs('public/'.$imagePath, $img, $lastName);

            // Update the slide with the image path
            $created->update(['image_path' => 'storage/'.$lasPath]);
        }

        return redirect()->route('admin.slide.index');
    }

    public function edit($id)
    {
        $slide = Slide::find($id);
        return view('admin.slide.edit', compact('slide'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'head' => 'required|max:255',
            'title' => 'required|max:255',
            'image_path' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $slides = Slide::find($id);

        if ($request->hasFile('image_path')) {
            if ($slides->img !== null) {
                // Delete the old image using Storage facade
                Storage::delete($slides->img);
            }

            $newImage = $request->file('image_path');
            $extension = $newImage->getClientOriginalExtension();
            $randomName = Str::random(10);
            $imagePath = 'front/assets/image/';
            $newImageName = $randomName . "." . $extension;
            $newImagePath = $imagePath . $newImageName;

            // Save the new image using Storage facade
            Storage::putFileAs('public/'.$imagePath, $newImage, $newImageName);

            $slides->image_path = 'storage/'.$newImagePath;
        }

        $slides->head = $request->head;
        $slides->title = $request->title;

        $slides->save();

        return redirect()->route('admin.slide.index');
    }

    public function destroy($id)
    {
        $slide = Slide::find($id);

        if ($slide->image_path !== null) {
            // Delete the associated image using Storage facade
            Storage::delete($slide->image_path);
        }

        $slide->delete();

        return redirect()->back();
    }
}
