<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Policy;


class PolicyController extends Controller
{
    public function index(){
        $policy = Policy::all();
        return view('dashboard.policy.index',compact('policy'));
    }




    public function edit($id){
        $policy = Policy::find($id);
      return view('dashboard.policy.update',compact('policy'));
    }


    public function update(Request $request,$id){
      $policy = Policy::find($id);
      $request->validate([
          'text'=>'required | min:10',
      ]);

      $policy->update([
        'text'=>$request->text,
    ]);
 
    $request->session()->flash('successMsg','the Policy has been updated');
        return redirect('/policy');

   
    }
}
