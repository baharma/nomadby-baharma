<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests\Admin\GalleryRequest;
use App\TravelPackge;
use File;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Gallery::with(['travel_package'])->paginate('5');

        return view('admin.include.gallery.index', [
            'items' => $items,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $travel_packages = TravelPackge::all();
        return view('admin.include.gallery.create', [
            'travel_packages' => $travel_packages
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GalleryRequest $request)
    {

        if ($request->file('image')) {
            $image = $request->file('image');
            $filename = date('YmdHi') . $image->getClientOriginalName();
            $image->move(public_path('public/Image'), $filename);

            $dataarray = array(
                'travel_packages_id' => $request->travel_packages_id,
                'image' => $filename
            );
            Gallery::create($dataarray);
        }
        return redirect()->route('gallery.index')->with('message', 'Data created !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {

        $item = Gallery::find($gallery->id);
        $travel_packages = TravelPackge::all();

        return view('admin.include.gallery.edit', [
            'item' => $item,
            'travel_packages' => $travel_packages
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(GalleryRequest $request, Gallery $gallery)
    {
        if ($request->file('image')) {
            $image = $request->file('image');
            $path = 'public/Image/' . $gallery->image;
            if (File::exists($path)) {
                File::delete($path);
            }
            $path = date('YmdHi') . $image->getClientOriginalName();
            $image->move(public_path('public/Image'), $path);
            $dataarray = array(
                'travel_packages_id' => $request->travel_packages_id,
                'image' => $path
            );
        } else {
            $dataarray = array(
                'travel_packages_id' => $request->travel_packages_id
            );
        }
        Gallery::whereId($gallery->id)->update($dataarray);
        return redirect()->route('gallery.index')->with('message', 'Data Edit !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        $items = Gallery::find($gallery->id);
        unlink("public/Image/" . $items->image);
        Gallery::where("id", $items->id)->delete();
        return redirect()->route('gallery.index')->with('message', 'Data Delete !');;
    }
}
