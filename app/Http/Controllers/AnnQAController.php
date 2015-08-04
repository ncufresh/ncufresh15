<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AnnQA;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AnnQAController extends Controller{
    public function store(Request $request){
		AnnQA::create([
			"url" => $request->url,
			"title" => $request->title
		]);
		return redirect('admin/qa');
    }

    public function update(Request $request, $id){
		$ann = AnnQA::findOrFail($id);
		$ann->title = $request->title;
		$ann->url = $request->url;
		$ann->save();
		return redirect('admin/qa');
    }

    public function destroy($id){
		AnnQA::findOrFail($id)->delete();
		return redirect('admin/qa');
    }
}
