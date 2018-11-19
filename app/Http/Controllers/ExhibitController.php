<?php

namespace App\Http\Controllers;
use App\User;
use App\Exhibit;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ExhibitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $exhibits =Exhibit::orderBy('updated_at', 'desc')->get();
        return view('exhibits.index',compact('exhibits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('exhibits.create');;
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
      $exhibit = new Exhibit();
      $exhibit->exhibit_name = request('exhibit_name');
      $exhibit->image_URL = request('image_URL');
      $exhibit->description = request('description');
      $exhibit->user_id = \Auth::id();
      $exhibit->artist =request('artist');
      $exhibit->year =request('year');
      $exhibit->save();
      return redirect('/exhibits');;
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
      $exhibit=\App\Exhibit::find($id);
      return view('exhibits.edit',compact('exhibit'));
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
      $exhibit =Exhibit::find($id);
      $exhibit->exhibit_name = $request->input('exhibit_name');
      $exhibit->image_URL = $request->input('image_URL');
      $exhibit->description = $request->input('description');
      $exhibit->user_id = \Auth::id();
      $exhibit->artist = $request->input('artist');
      $exhibit->year = $request->input('year');
      $exhibit->save();
      return redirect('/exhibits');
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
        $exhibit =Exhibit::find($id);
        $exhibit->delete();
        return redirect('/exhibits');
    }
    public function welcome()
    {
      $exhibits =Exhibit::orderBy('updated_at', 'desc')->get();
      return view('welcome',compact('exhibits'));
    }
}
