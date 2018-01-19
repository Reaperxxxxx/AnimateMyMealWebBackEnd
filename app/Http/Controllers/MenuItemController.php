<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MenuItem;
use Illuminate\Support\Facades\DB ;

class MenuItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $listMenuItems =  MenuItem::all();
       return view('menuitem.index')->with('listMenuItems',$listMenuItems);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('menuitem.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'price' => 'required',
            'imageurl' => 'image|nullable|max:1999'
        ]);
        // Handle File Upload
        if($request->hasFile('imageurl')){
            // Get filename with the extension
            $filenameWithExt = $request->file('imageurl')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('imageurl')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('imageurl')->storeAs('public/images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }
        // Create Post
        $menuItem = new MenuItem();
        $menuItem->name = $request->input('name');
        $menuItem->price = $request->input('price');

        //$post->user_id = auth()->user()->id;
        $menuItem->imageurl = $fileNameToStore;
        $menuItem->save();
        return redirect('/menuitems')->with('success', 'item added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $menuItem = MenuItem::find($id);

        return view('menuitem.show')->with('menuitem', $menuItem);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menuItem = MenuItem::find($id);
        // Check for correct user

        if($menuItem->imageurl != 'noimage.jpg'){
            // Delete Image
            Storage::delete('public/images/'.$menuItem->imageurl);
        }

        $menuItem->delete();
        return redirect('/menuitems')->with('success', 'Meal Removed');
    }
}
