<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Validator;
use Illuminate\Support\Facades\DB;

use App\dates;
use Uploadcare\Api;




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

        $search = Request::get('search'); //<-- we use global request to get the param of URI

        $dates = dates::where('user_name','like','%'.$search.'%')
            ->orderBy('user_name')
            ->paginate(20);

        return view('pages.search',compact('dates'));
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
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_name' => 'required',
            'site_name' => 'required',

        ]);


        // process the login
        if ($validator->fails()) {
            return redirect('/dates/create')
                ->withErrors($validator)
                ->withInput();
        } else {
            $dateMatch = DB::table('dates')->where([
                ['user_name', '=', Input::get('user_name')],
                ['site_name', '=', Input::get('site_name')],
            ])->get();



            if (count($dateMatch) != null){

                DB::table('dates')
                    ->where([['user_name', Input::get('user_name')],
                        ['site_name', '=', Input::get('site_name')]])
                    ->update(
                        ['picture_rate' => (intval('picture_rate' + Input::get('picture_rate')) /2 ), 'cool_rate' => (intval('cool_rate' + Input::get('cool_rate')) /2 ), 'repeat_rate' => (intval('repeat_rate' + Input::get('repeat_rate')) /2 ), 'nice_rate' => (intval('nice_rate' + Input::get('nice_rate')) /2 )]);
//Need logic for adding to reviews, updating screen shots




            } else {



                $date = new \App\dates;
                $date->user_name = Input::get('user_name');
                $date->site_name = Input::get('site_name');
               $date->picture_path1 = Input::get('picture_path1');
                $date->picture_path2 = Input::get('picture_path2');
                $date->picture_path3 = Input::get('picture_path3');
                $date->picture_rate = Input::get('picture_rate');
                $date->cool_rate = Input::get('cool_rate');
                $date->repeat_rate = Input::get('repeat_rate');
                $date->nice_rate = Input::get('nice_rate');
                $date->review = Input::get('review');
                $date->save();
                // user doesn't exist
            }



        }

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
//        $array= unserialize($dates['review']);

        return view('show')->withdate($dates);
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
