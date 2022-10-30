<?php

namespace App\Http\Controllers;

use App\TravelPackge;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests\Admin\TravelPackageRequest;

class TravelPackgeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $item  = TravelPackge::orderBy('created_at', 'desc')->paginate('10');
        return view(
            'admin.include.paketTravel.index',
            compact('item')
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.include.paketTravel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TravelPackageRequest $request)
    {
        $item = $request->all();
        $item['slug'] = Str::slug($request->title);
        try {
            TravelPackge::create($item);

            return redirect()->route('travel-package.index')->with('message', 'Data created !');
        } catch (\Exception $e) {

            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TravelPackge  $travelPackge
     * @return \Illuminate\Http\Response
     */
    public function show(TravelPackge $travelPackge)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TravelPackge  $travelPackge
     * @return \Illuminate\Http\Response
     */
    public function edit(TravelPackge $travelPackge, $id)
    {
        $items = TravelPackge::find($id);
        return view('admin.include.paketTravel.edit', ['items' => $items]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TravelPackge  $travelPackge
     * @return \Illuminate\Http\Response
     */
    public function update(TravelPackageRequest $request, TravelPackge $travelPackge, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        $item = TravelPackge::findOrFail($id);

        $item->update($data);

        return redirect()->route('travel-package.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TravelPackge  $travelPackge
     * @return \Illuminate\Http\Response
     */
    public function destroy(TravelPackge $travelPackge, $id)
    {
        $item = TravelPackge::find($id)->delete();
        return redirect()->back()
            ->with('error', 'Error during the creation!')->with('message', 'Data delete !');
    }
}
