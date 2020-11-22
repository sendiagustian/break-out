<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class CekController extends Controller
{
    public function index()
    {
        if (Auth::user()->level==1) {
            return redirect('/dashboard');
        }
        if (Auth::user()->level==2) {
            return redirect('/reports');
        }
        
        if (Auth::user()->level==3) {
            return redirect('/payment');
        }
        if (Auth::user()->level==4) {
            return redirect('/order');
        }
        if (Auth::user()->level==5) {
            return redirect('/list-menu');
        }
        if (Auth::user()->level==6) {
            return redirect('/order');
        }
        else {
            return redirect('/login');
            
        }
    }
}
