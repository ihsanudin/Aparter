<?php namespace App\Http\Controllers;

use DB;
use Cookie;
use View;

class SiteController extends Controller {
    public function home()
    {
    	$id = Cookie::get("NIK");
		$nik = $DB::table("ppl_dukcapil_ktp")
				->where("id","=", $id)
				->get();
		Cookie::make("NIK", $nik->nik);
        return View::make('index');
	}

	public function parkir()
	{
		return View::make('parkir');
	}

	public function terminal()
	{
		return View::make('terminal');
	}

	public function tentang()
	{
		return View::make('tentang');
	}

	public function notifikasi()
	{
		return View::make('notifikasi');
	}

	public function admin()
	{
		return View::make('notif');
	}

	public function login()
	{
		return View::make('login');
	}

	public function check(){
		return View::make("check");
	}
}
