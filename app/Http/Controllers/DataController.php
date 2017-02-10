<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data;
use Illuminate\Support\Facades\View;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data = Data::all();

     // load the view and pass the nerds
     return View::make('data.index')
         ->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return View::make('data.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $rules = array(

         'nama_data'       => 'required',
         'detail_data'      => 'required',
     );
     $validator = Validator::make(Input::all(), $rules);

     // process the login
     if ($validator->fails()) {
         return Redirect::to('data/create')
             ->withErrors($validator);
     } else {
         // store
         $data = new Data;
         $data->nama_data = $request->nama_data;
         $data->detail_data = $request->detail_data;
         $data->save();

         // redirect
         Session::flash('message', 'Successfully created data!');
         return Redirect::to('data');
     }
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
