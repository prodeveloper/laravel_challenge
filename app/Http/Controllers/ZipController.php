<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ZipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function getSearch()
    {
        //load form
        $results=[];
        return view('search',['results'=>$results]);
    }
    public function postSearch()
    {
        $search=\Input::get('search');
       $results=\App\ZipCode::where('City','=',$search)
       ->orWhere('State','=',$search)
       ->orWhere('Zipcode','=',$search)
       ->get();
        return view('search',['results'=>$results]);
        //search render results
    }
}
