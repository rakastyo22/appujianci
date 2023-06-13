<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Jenssegers\Blade\Blade;

class Dashboard extends CI_Controller {

	public function index()
	{
        view('backend/Dashboard/index');
	}

    public function table()
    {
        view('backend/Dashboard/table');
    }

    public function tes(){

       // $views = VIEWPATH;
       // $cache = APPPATH . 'cache';
       // $blade = new Blade($views, $cache);

       // echo $blade->make('template/backend/tes', ['name' => 'isma' ])->render();

        view('template/backend/tes', ['name' => 'isma' ]);
    }

}    
