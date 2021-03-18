<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public $request;
    public $allUsers;

    public function __construct(Request $request, User $allUsers)
    {
        $this->middleware('auth');
        $this->request = $request;
        $this->allUsers = $allUsers;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth()->User();
        return view('Admin.index', compact('user'));
    }
    
    public function viewUsers()
    {
        $user = Auth()->User();
        $uri = $this->request->route()->uri();
        $exploder = explode('/', $uri);
        $currentUrl = $exploder[1];
        $allUsers = $this->allUsers->all();

        return view('Admin.users.index', compact('user', 'currentUrl', 'allUsers'));
    }
    
    public function viewProducts()
    {
        $user = Auth()->User();
        $uri = $this->request->route()->uri();
        $exploder = explode('/', $uri);
        $currentUrl = $exploder[1];

        return view('Admin.products.index', compact('user', 'currentUrl'));
    }
}
