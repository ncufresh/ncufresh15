<?php

namespace App\Http\Controllers\Document;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\document;

class DocumentController extends Controller
{
    public function index() {
		return view('document\document_layout');	//到頁面(第一次是到104校曆?)
	}

	public function editor() {
		return view('document\editor');
	}

	public function store(Request $request) {
		document::create($request->all());
		document(45);
		return re;
	}

	public function document_1($id_1) {
		if($id_1===1){

		}elseif($id_1===2){

		}elseif($id_1===3){

		}elseif($id_1===4){

		}elseif($id_1===5){
			
		}

		$content = document::where('category',1)->value('text');
		return view('document\page')->with('text',$content);
	}
	public function document_2($id_1,$id_2) {
		if($id_1===1){
			if($id_2===1){

			}elseif($id_2===2){
				
			}elseif($id_2===3){
				
			}elseif($id_2===4){
				
			}elseif($id_2===5){
				
			}elseif($id_2===6){
				
			}

		}elseif($id_1===2){
			if($id_2===1){

			}elseif($id_2===2){
				
			}elseif($id_2===3){
				
			}elseif($id_2===4){
				
			}elseif($id_2===5){
				
			}elseif($id_2===6){
				
			}
		}elseif($id_1===3){
			if($id_2===1){

			}elseif($id_2===2){
				
			}elseif($id_2===3){
				
			}elseif($id_2===4){
				
			}elseif($id_2===5){
				
			}elseif($id_2===6){
				
			}elseif($id_2===7){
				
			}elseif($id_2===8){
				
			}elseif($id_2===9){
				
			}

		}elseif($id_1===4){
			if($id_2===1){

			}elseif($id_2===2){
				
			}elseif($id_2===3){
				
			}elseif($id_2===4){
				
			}elseif($id_2===5){
				
			}elseif($id_2===6){
				
			}elseif($id_2===7){
				
			}elseif($id_2===8){
				
			}elseif($id_2===9){
				
			}

		}elseif($id_1===5){
			if($id_2===1){

			}elseif($id_2===2){
				
			}
		}

		$content = document::where('category',1)->value('text');
		return view('document\page')->with('text',$content);
	}
	public function document_3($id_1,$id_2,$id_3) {
		if($id_1===1){
			if($id_2===1){
				if($id_3===1){

				}elseif($id_3===2){

				}
			}elseif($id_2===2){
				if($id_3===1){

				}elseif($id_3===2){
					
				}elseif($id_3===3){
					
				}elseif($id_3===4){
					
				}elseif($id_3===5){
					
				}elseif($id_3===6){
					
				}
			}elseif($id_2===3){
				if($id_3===1){

				}elseif($id_3===2){
					
				}elseif($id_3===3){
					
				}elseif($id_3===4){
					
				}
			}elseif($id_2===4){
				if($id_3===1){

				}elseif($id_3===2){
					
				}
			}elseif($id_2===5){
				if($id_3===1){

				}elseif($id_3===2){
					
				}
			}elseif($id_2===6){
				
			}

		}elseif($id_1===2){
			if($id_2===1){
				if($id_3===1){

				}elseif($id_3===2){
					
				}
			}elseif($id_2===2){
				if($id_3===1){

				}elseif($id_3===2){
					
				}elseif($id_3===3){
					
				}elseif($id_3===4){
					
				}elseif($id_3===5){
					
				}elseif($id_3===6){
					
				}
			}elseif($id_2===3){
				if($id_3===1){

				}elseif($id_3===2){
					
				}elseif($id_3===3){
					
				}elseif($id_3===4){
					
				}
			}elseif($id_2===4){
				if($id_3===1){

				}elseif($id_3===2){
					
				}
			}elseif($id_2===5){
				if($id_3===1){

				}
			}elseif($id_2===6){
				
			}
		}elseif($id_1===3){
			if($id_2===1){
				if($id_3===1){

				}elseif($id_3===2){
					
				}elseif($id_3===3){
					
				}elseif($id_3===4){
					
				}elseif($id_3===5){
					
				}elseif($id_3===6){
					
				}elseif($id_3===7){
					
				}
			}
		}elseif($id_1===4){
			if($id_2===1){
				if($id_3===1){

				}elseif($id_3===2){
					
				}elseif($id_3===3){
					
				}elseif($id_3===4){
					
				}
			}
		}

		$content = document::where('category',1)->value('text');
		return view('document\page')->with('text',$content);
	}
}
