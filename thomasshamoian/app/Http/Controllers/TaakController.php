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
        $taak = Taak::orderBy('created_at', 'desc')->get();

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
    public function show($id)
    {
        $taak = Taak::find($id);

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
        $taak = Taak::find($id);

        return view('posts.edit', compact('taak'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\taak  $taak
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //1# Store the data
        $taak = Taak::find($id);

        $taak->titel = $request->input('titel');
        $taak->bericht = $request->input('bericht');
//        $taak->Einddatum = $request->input('Einddatum');

////        $nerd = Nerd::find($id);
//        $post->titel       = Input::get('titel');
//        $post->inhoud      = Input::get('inhoud');
//        $post->Einddatum   = Input::get('Einddatum');

        $taak->save();

//
        return view('posts.show',compact('taak'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\taak  $taak
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
         $taak = Taak::find($id)->delete();

//        $posts->forcedelete();

//        Session::flash('success', 'The post was successfully deleted.');
        return redirect('/');
    }
}
