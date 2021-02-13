<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuSettingController extends Controller
{
    private $view = 'pages/menu_settings';
    private $moduleName = 'Menu Settings';
    private $route = 'menu_settings';

    // Index Page Code ---
    public function index()
    {   
        $response['moduleName'] = $this->moduleName;
        return view("{$this->view}/index", $response);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
