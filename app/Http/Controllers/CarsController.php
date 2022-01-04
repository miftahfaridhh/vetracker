<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CarsController extends Controller
{
    public function index()
    {
        $cars = Cars::all();
        return view('cars.index', compact('cars'));

    }

    public function create()
    {
        return view('cars.create');

    }

    public function store(Request $request)
    {
        $cars = new Cars;
        $cars->owner = $request->input('owner');
        if ($request->hasfile('img')) {
            $file = $request->file('img');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/cars/', $filename);
            $cars->img = $filename;
        }
        $cars->model = $request->input('model');
        $cars->seats = $request->input('seats');
        $cars->transmission = $request->input('transmission');
        $cars->vendor = $request->input('vendor');
        $cars->location = $request->input('location');
        $cars->price = $request->input('price');
        $cars->save();

        return redirect()->back()->with('status', 'Cars Image Added');

    }

    public function edit($id)
    {
        $cars = Cars::find($id);
        return view('cars.edit', compact('cars'));
    }

    public function update(Request $request, $id)
    {
        $cars = Cars::find($id);
        $cars->owner = $request->input('owner');
        if ($request->hasfile('img')) {
            $destination = 'uploads/cars/'.$cars->img;
            if (File::exists($destination)) 
            {
                File::delete($destination);
            }
            $file = $request->file('img');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/cars/', $filename);
            $cars->img = $filename;
        }
        $cars->model = $request->input('model');
        $cars->seats = $request->input('seats');
        $cars->transmission = $request->input('transmission');
        $cars->vendor = $request->input('vendor');
        $cars->location = $request->input('location');
        $cars->price = $request->input('price');
        $cars->update();

        return redirect()->back()->with('status', 'Cars Image Updated');
    }

    public function destroy($id)
    {
        $cars = Cars::find($id);
        $destination = 'uploads/cars/'.$cars->img;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $cars->delete();
        return redirect()->back()->with('status', 'Cars Image Deleted');
    }
}
