<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FluentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo '<h1>Fluent String</h1>';
        $slice = Str::of('Welcome to My Youtube Channal')->after('Welcome to');
        echo $slice . '<br/>';

        $slice2 = Str::of('App\Http\Controllers\Controller')->afterLast('\\');
        echo $slice2 . '<br/>';

        $string = Str::of('Hello ')->append('World!');
        echo $string . '<br/>';

        $result = Str::of('LARAVEL 8')->lower();
        echo $result . '<br/>';

        $replaced = Str::of('Laravel 7.0')->replace('7.0','8.0');
        echo $replaced . '<br/>';

        $converted = Str::of('this is a title')->title();
        echo $converted . '<br/>';

        $slug = Str::of('Laravel 8 Framework')->slug('-');
        echo $slug . '<br/>'; 
        
        $str = Str::of('Laravel Framework')->substr(8,5);
        echo $str . '<br/>';

        $str2 = Str::of('/Laravel8/')->trim('/');
        echo $str2 . '<br/>';

        $str3 = Str::of('laravel 8')->upper();
        echo $str3; 

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
