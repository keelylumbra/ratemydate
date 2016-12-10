<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;


use App\dates;


class DatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $dates = dates::all();


        return view('browse', ['dates' => $dates]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {

//        $this->validate($request, [
////            'user_name' => 'required',
////            'site_name' => 'required',
////        ]);
////
////        // process the login
////        if ($validator->fails()) {
////            return redirect('post/create')
////                ->withErrors($validator)
////                ->withInput();
////        } else {
//
//            $date = new dates;
//            $date->user_name = $request->get('user_name');
//            $date->site_name = $request->get('site_name');
//            $date->picture_path = $request->get('picture_path');
//            $date->picture_rate = $request->get('picture_rate');
//            $date->cool_rate = $request->get('cool_rate');
//            $date->repeat_rate = $request->get('repeat_rate');
//            $date->nice_rate = $request->get('nice_rate');
//            $date->review = $request->get('review');
//            $date->save();
//        $this->store($request);
//
//
//            // redirect
//            Session::flash('message', 'Successfully created review!');
//            return Redirect::to('dates');
//        }

        $date = new \App\dates;
        $date->user_name = Input::get('user_name');
        $date->site_name = Input::get('site_name');
        $date->picture_path = Input::get('picture_path');
        $date->picture_rate = Input::get('picture_rate');
        $date->cool_rate = Input::get('cool_rate');
        $date->repeat_rate = Input::get('repeat_rate');
        $date->nice_rate = Input::get('nice_rate');
        $date->review = Input::get('review');
        $date->save();

            return Redirect::to('dates');

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dates = dates::findOrFail($id);

        return view('browse')->withdate($dates);
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
