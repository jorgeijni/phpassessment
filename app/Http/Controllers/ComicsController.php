<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp;
use Spatie\JsonApiPaginate\JsonApiPaginateServiceProvider;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function conexion(){
        $comics = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://xkcd.com/info.0.json',
            // You can set any number of default request options.
            //'timeout'  => 2.0,
            //'auth' => ['admin', 'admin123'],
        ]);
        return $comics;
    }


    public function index()
    {
        $comics = $this->conexion();

        $responseComics = $comics->request('GET');//, 'comic'
        $comics =  json_decode($responseComics->getBody()->getContents(), true);
        //dd($comics);
        return view('comics.index',  compact('comics', 'Response'));
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
