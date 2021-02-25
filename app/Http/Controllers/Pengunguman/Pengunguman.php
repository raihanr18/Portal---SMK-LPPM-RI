<?php

namespace App\Http\Controllers\Pengunguman;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Announce;

class Pengunguman extends Controller
{
    
    public function show(){

        $announce = Announce::orderby('id', 'desc')->get();

        return view('admin.announce', compact('announce'));

    }

    public function formAdd(){

        $form = Announce::orderby('id', 'desc')->get();

        return view('content.addpengunguman', compact('form'));

    }

}
