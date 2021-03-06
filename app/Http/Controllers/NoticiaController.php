<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['noticias']=Noticia::orderBy('id', 'DESC')->get();
        return view('noticia.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('noticia.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $campos=[
            'TituloNoticia'=>'required|string|max:100',
            'Descripcion'=>'required|string|max:200',
            'Enlace'=>'required|string|max:500',
        ];

        $mensaje=[
            'required'=>'El :attribute es abligatorio.',
            'Descripcion.required'=>'La :attribute es abligatoria.',
        ];

        $this->validate($request, $campos, $mensaje);
        /** 
         * RECIENDO DATOS NOTICIAS
        */
        // $datoNoticia = request()->all();
        $datoNoticia = request()->except('_token');
        Noticia::insert($datoNoticia);
        // return response()->json($datoNoticia);
        return redirect('noticia');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function show(Noticia $noticia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $noticia=Noticia::findOrFail($id);
        return view('noticia.edit', compact('noticia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $campos=[
            'TituloNoticia'=>'required|string|max:100',
            'Descripcion'=>'required|string|max:200',
            'Enlace'=>'required|string|max:300',
        ];

        $mensaje=[
            'required'=>'El :attribute es abligatorio.',
            'Descripcion.required'=>'La :attribute es abligatoria.',
        ];

        $this->validate($request, $campos, $mensaje);

        $datoNoticia = request()->except('_token', '_method');
        Noticia::where('id', '=', $id)->update($datoNoticia);
        
        $noticia=Noticia::findOrFail($id);
        // return view('noticia.edit', compact('noticia'));
        return redirect('noticia');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Noticia::destroy($id);
        return redirect('noticia');
    }
}
