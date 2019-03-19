<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Setting;
use Session;

class SettingController extends Controller
{
    public function index()
    {
    	return view('dashboard.settings');
    }

    public function save(Request $request)
    {
    	$data = $this->validate($request, [
    		'site_name' => 'required',
    		'email'		=> 'required|email|string',
    		'keywords'	=> '',
    		'description'	=> '',
    		'maintenance'	=> '',
    		'maintenance_message' => ''
    	]);

    	Setting::orderBy('id', 'desc')->update($data);

    	Session::flash('success', 'Settings Has Been Updated Successfully');

    	return redirect()->route('setting.index');
    }
}
