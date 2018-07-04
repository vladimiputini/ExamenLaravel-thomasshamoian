<?php

namespace App\Http\Controllers;

use App\Taak;
use Illuminate\Http\Request;
use App\Http\Controllers\Session;

class TaakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $taak = Taak::all();

        return view('posts.index',compact('taak'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
                Taak::create([

            'titel' => request('titel'),
            'bericht' => request('bericht'),

        ]);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\taak  $taak
     * @return \Illuminate\Http\Response
     */
    public function show(taak $taak)
    {
        $taak = Taak::find($taak->id);

        return view('posts.show',compact('taak'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\taak  $taak
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);

        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\taak  $taak
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, taak $taak)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\taak  $taak
     * @return \Illuminate\Http\Response
     */
    public function destroy(taak $taak)
    {
        //
    }
}
