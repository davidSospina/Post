<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=[
            ['title' => 'Post 1', 'id' => '1', 'url' => 'post/holaMundo1', 'content' => 'Hola mundo - contenido 1', 'posted' => 'yes', 'category_id' => '1'],
            ['title' => 'Post 2', 'id' => '2', 'url' => 'post/holaMundo2', 'content' => 'Hola mundo - contenido 2', 'posted' => 'yes', 'category_id' => '2'],
            ['title' => 'Post 3', 'id' => '3', 'url' => 'post/holaMundo3', 'content' => 'Hola mundo - contenido 3', 'posted' => 'no', 'category_id' => '1'],
            ['title' => 'Post 4', 'id' => '4', 'url' => 'post/holaMundo4', 'content' => 'Hola mundo - contenido 4', 'posted' => 'yes', 'category_id' => '3'],
        ];
        return view ('posts', compact('posts'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }
}
