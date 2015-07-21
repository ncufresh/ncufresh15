<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\FileUpload;
use App\Helpers\SitemapHelper;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class FileController extends Controller
{

    public function __construct() {
        SitemapHelper::push('檔案上傳', 'file');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $img_files = FileUpload::where('is_img', true)
            ->orderby('updated_at', 'desc')
            ->get();
        $files = FileUpload::where('is_img', false)
            ->orderby('updated_at', 'desc')
            ->get();
        return view('file.index', ['img_files' => $img_files, 'files' => $files]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return redirect('file');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('fileName')) {
            $files = $request->file('fileName');
            foreach($files as $file) {
                $is_img = (substr($file->getMimeType(), 0, 5) == 'image');
                $uploadFolder = base_path().'/storage/app/';
                $newname = uniqid();
                while(file_exists($uploadFolder.$newname)) {
                    $newname = uniqid();
                }
                $file->move($uploadFolder, $newname);
                $fileRecord = new FileUpload;
                $fileRecord->name = $file->getClientOriginalName();
                $fileRecord->url = $newname;
                $fileRecord->is_img = $is_img;
                $fileRecord->save();
            }
        }
        return redirect('file');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $file = FileUpload::where('url', $id)->first();
        return response()->download(base_path().'/storage/app/'.$id, $file->name);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $file = FileUpload::findOrFail($id);
        return view('file.edit', ['file' => $file]);
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
        $file = FileUpload::findOrFail($id);
        $file->update($request->all());
        return redirect('file');
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
