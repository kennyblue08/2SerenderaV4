<?php

namespace App\Http\Controllers\FrontendControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NewRequest;
use App\Models\VisitorInterest;
use App\Models\Interest;

class FrontendController extends Controller
{
    public function index (){
        $getInterests = Interest::all(); 
        return view ('frontend.index',compact('getInterests'));
    }

    public function submitRequest (Request $request){
        $selectedInterestIds = explode(",", $request->input('selectedItemIds'));
   
        $newRequest = new NewRequest();
        $newRequest->date_time= $request->input('date_time');
        $newRequest->company_name= $request->input('company_name');
        $newRequest->visitor_name= $request->input('visitor_name');
        $newRequest->email= $request->input('email');
        $newRequest->mobile_number= $request->input('mobile_number');
        $newRequest->save();

        foreach ($selectedInterestIds as $interestId) {
            VisitorInterest::create([
                'user_id' => $newRequest->id, 
                'interest_id' => $interestId
            ]);
        }
        return redirect()->back()->with (['status'=> true,"message"=>"Submitted SuccessFully, We have sent Email Verification "]);


    }
}
