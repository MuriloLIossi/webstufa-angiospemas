<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    /**
     * Exibe uma listagem dos recursos.
     *
     * @param int|null $id ID da galeria selecionada (opcional).
     * @return \Illuminate\View\View Retorna a view com todas as galerias e, se fornecido, a galeria selecionada.
     */
    public function index($id = null)
    {
        $galleries = Gallery::all();
        $selected = $id ? Gallery::findOrFail($id) : null;
        return view('Gallery.gallery', compact('galleries', 'selected'));
    }

    /**
     * Exibe o recurso especificado.
     *
     * @param int $id ID da galeria a ser exibida.
     * @return \Illuminate\View\View Retorna a view com todas as galerias e a galeria selecionada.
     */
   /* public function show($id)
    {
        $galleries = Gallery::all();
        $selected = Gallery::findOrFail($id);
        return view('Gallery.gallery', compact('galleries', 'selected'));
    }
    */
}
