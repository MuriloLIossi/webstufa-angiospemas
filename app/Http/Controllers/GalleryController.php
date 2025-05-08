<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id = null)
    {
        $galleries = Gallery::all();
        $selected = $id ? Gallery::findOrFail($id) : null;
        return view('Gallery.gallery', compact('galleries', 'selected'));
    }

    /**
     * Display the specified resource.
     */

   /* public function show($id)
    {
        $galleries = Gallery::all();
        $selected = Gallery::findOrFail($id);
        return view('Gallery.gallery', compact('galleries', 'selected'));
    }
    */
}
