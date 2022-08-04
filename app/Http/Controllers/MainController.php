<?php

namespace App\Http\Controllers;

use App\Models\Firm;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function firm(){
        $firm = Firm::all()->first;
        return view('admin.firm.index', compact('firm'));
    }
}
