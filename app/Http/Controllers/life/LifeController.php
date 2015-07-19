<?php

namespace App\Http\Controllers\Life;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Life;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LifeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        return view('life.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        /*$validator = Validator::make($request->all(),[
            'category' => 'required',
            'content' => 'required'
        ]);
        if($validator->fails()){
            return back()
                ->withErrors($validator)
                ->withInput();
        }
        Life::created($request->all());
        return redirect('life');*/
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
        $validator = Validator::make($request->all(),[
            'category' => 'required',
            'content' => 'required'
        ]);
        if($validator->fails()){
            return back()
                ->withErrors($validator)
                ->withInput();
        }
        $answer = Life::find($id);
        $answer->category = $requset->category;
        $answer->video = $request->video;
        $answer->content = $request->content;
        $answer->save();
        //Life::update($request->all());
        return redirect('life');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
