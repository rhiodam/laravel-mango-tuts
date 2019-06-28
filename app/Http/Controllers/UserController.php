<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    //
    public function json(){
        return Datatables::of(User::all())->make(true);
    }

    public function index(){
        return view('user.view');
    }
}
