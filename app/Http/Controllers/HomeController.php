<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use DB;

class HomeController extends BaseController{
	public function getIndex(){
		$items = DB::table('items')->get();
		return \View::make('home', array(
			'items' => $items
		));
	}

}