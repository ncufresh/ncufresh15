<?php namespace App\Http\Controllers\Campus;

use App\Http\Controllers\Controller;

class CampusController extends Controller {

	public function __construct() {
		
	}

	public function index() {
		return view('campus/backstage');
	} 
}