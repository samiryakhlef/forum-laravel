<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Http\Controllers\UsersController;
 
class UsersController extends Controller
{
    public function create()
    {
        return view('infos');
    }
 
    public function store(Request $request)
    {
        return 'Le nom est ' . $request->input('nom');
    }
}