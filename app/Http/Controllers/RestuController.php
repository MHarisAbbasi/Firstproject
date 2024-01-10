<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\resturent;
use Session;
use App\Models\user;
use Crypt;
class RestuController extends Controller
{
    function index(){
        return view('home');
    }

    function listData(){
        $data =  resturent::all();
        return view('list',['data'=>$data]);
    }

    function addData(Request $req){
        $rest = new resturent;
        $rest->name = $req->input('name');
        $rest->email = $req->input('email');
        $rest->address = $req->input('address');
        $rest->save(); 
        $req->session()->flash('status', 'Resturant Added successfully');
        return redirect('list');
    }
    function delete($id){
        resturent::find($id)->delete();
        Session::flash('status', 'Resturent Deleted successfully');
        return redirect('list');

    }

    function edit($id){
        $data = resturent::find($id);
        return view('edit',['data'=>$data]);

    }

    function update(Request $req){
        $rest = resturent::find($req->input('id'));
        $rest->name = $req->input('name');
        $rest->email = $req->input('email');
        $rest->address = $req->input('address');
        $rest->save(); 
        $req->session()->flash('status', 'Updated data successfully');
        return redirect('list');
    }

    
    function register(Request $req){
        $data = new user;
        $data->name = $req->input('name');
        $data->email = $req->input('email');
        $data->password =Crypt::encrypt($req->input('password'));
        $data->contact = $req->input('contact');
        $data->save();
        $req->session()->put('user', $req->input('name'));
        return redirect('/');

    }

    function login(Request $req){
        $user = user::where('email',$req->input('email'))->get();
        // return Crypt::decrypt($user[0]->password);
        if(Crypt::decrypt($user[0]->password)==$req->input('password')){
            $req->session()->put('user', $user[0]->name);
            return redirect('/');
        }
    }
}