<?php

namespace App\Http\Controllers\Life;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\LifePictures;
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
        
        $show = Life::findOrFail($id);      /*findOrFail()找不到$id會丟一個錯誤訊息*/
        $pics = LifePictures::where('lifes_id',$id)->get();
        return view('life.show',[
            'show' => $show,
            'pictures' => $pics
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $category = [
            'food' => '食',
            'play' => '樂',
            'edu'  => '育',
            'live' => '住',
            'traffic' => '行'
        ];
        $show = Life::findOrFail($id);
        $pics = LifePictures::where('lifes_id',$id)->get();
        return view('life.backstage',[
            'show' => $show,    /*$show裡面的儲存所有內容，傳過去view後的變數叫做show*/
            'category' => $category,
            'pictures' => $pics
        ]);
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
        $life = Life::findOrFail($id);
        $life->category = $request->category;
        $life->video = $request->video;
        $life->content = $this->sanitize($request->content);
        $life->save();
        //$life->update($request->all()); /*將新輸入的資料更新到資料庫*/
        return redirect('life/'.$id);
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

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function introduce($category)
    {
        //
        return view('life.category.'.$category);                    
    }
    public function add_pictures(Request $request,$id)
    {
        $Life_pictures = new LifePictures;
        $Life_pictures->lifes_id = $id; /*假設要找小木屋鬆餅，id為1，那加圖片是根據此id*/
        $Life_pictures->url = $request->url;
        $Life_pictures->save();
        return redirect('life/edit/'.$id);
    }
    public function delete_pictures($id)
    {
        $Life_pictures = LifePictures::findOrFail($id);
        $Life_pictures->delete();
        return back();
    }
    private function sanitize($dirty) {
        return strip_tags($dirty,
            '<img><table><thead><tbody><tr><td><th><h1><h2><h3><pre><ins><a><p><s><strong><em><span><ul><ol><li><blockquote>'
        );
    }
}
