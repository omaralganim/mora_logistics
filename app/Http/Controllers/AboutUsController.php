<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutUs;

class AboutUsController extends Controller
{
    public function index(){

        $aboutus = AboutUs::first();
        return view('dashboard.aboutus.index',compact('aboutus'));
    }




    public function edit($id){
        $aboutus = AboutUs::find($id);
          return view('dashboard.aboutus.update',compact('aboutus'));
    }


    public function update(Request $request, $id){
        $aboutus = AboutUs::find($id);
        $request->validate([
            'text'=>'required',
            'city'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'adress'=>'required ',
            'workdays'=>'required',
            'worktimes'=>'required',

        ]);

        $aboutus->update([
            'text'=>$request->text,
            'city'=>$request->city,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'adress'=>$request->adress,
            'workdays'=>$request->workdays,
            'worktimes'=>$request->worktimes,


        ]);
        $request->session()->flash('successMsg','the About us information has been updated');
        return redirect('/aboutus');

    }
}
