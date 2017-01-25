<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class userController extends Controller
{
    //
    public function show($id)
    {
    	$user=User::find($id);
    	$things=$user->things;

    	return view('site.offers',compact('things'));



    }

    public function showRequests($id)
    {
    	$request=User::find($id);
    	$requests=$request->requests;

    	return view('site.requests',compact('requests'));
    }
}
