<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;

class GroupController extends Controller
{
    function list()
    {
        return view('diakok', [
            'diaklista' => Group::csoportlista()
        ]);
    }
    function show($id){
        return view('diak', [
            'diaklista' => Group::csoportlista(),
            'id' => $id
        ]);
    }
}
