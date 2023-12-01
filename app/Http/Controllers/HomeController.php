<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->hasRole('system_admin')) {
            $branches = Branch::all();
            $roles = Role::all();
            return view('home', compact('branches', 'roles'));
        }
        dd('user');
    }

    public function getUserByRoles($name)
    {
        if (Auth::user()->hasRole('system_admin')) {
            $users = User::with('profile')->role($name)->get();
            $roles = Role::all();
            return view('list-users', compact('users', 'roles'));
        }
        dd('access denied');
    }

    public function getAllBranches()
    {
        if (Auth::user()->hasRole('system_admin')) {
            $branches = Branch::all();
            $roles = Role::all();
            //yet to create the view
            return view('branches', compact('branches', 'roles'));
        }
        dd('Access denied');
    }

    public function getUserByBranches($id)
    {
        if (Auth::user()->hasRole('system_admin')) {
            $users = User::with('profile')->where('branch_id', $id)->get();
            $roles = Role::all();
            //yet to create the view
            return view('users-branch', compact('users', 'roles'));
        }
        dd('Access denied');
    }
}
