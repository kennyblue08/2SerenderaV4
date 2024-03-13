<?php

namespace App\Http\Controllers\BackendControllers;

use App\Http\Controllers\Controller;
use App\Models\NewRequest;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view ('admin.index');
    }
    public function schedule (){
        $getSchedules = NewRequest::paginate(6);
        return view ('backend.schedule',compact('getSchedules'));
    }
   
}
