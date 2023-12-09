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

            $usersCount = User::with('roles')->get()->filter(
                fn ($user) => $user->roles->where('name', 'user')->toArray()
            )->count();
            $workersCount = User::with('roles')->get()->filter(
                fn ($user) => $user->roles->where('name', 'worker')->toArray()
            )->count();
            $memberCount = User::with('roles')->get()->filter(
                fn ($user) => $user->roles->where('name', 'member')->toArray()
            )->count();
            $users = User::all()->count();
           
            return view('home', compact('branches', 'roles', 'usersCount', 'workersCount', 'memberCount', 'users'));
        }
       
    }

    public function getUserByRoles($name)
    {
        if (Auth::user()->hasRole('system_admin')) {
            $users = User::with(['profile', 'branch'])->role($name)->get();
            $roles = Role::all();
            return view('list-users', compact('users', 'roles', 'name'));
        }
        dd('access denied');
    }

    public function getAllBranches()
    {
        if (Auth::user()->hasRole('system_admin')) {
            $branches = Branch::all();
            $roles = Role::all();
            return view('branches', compact('branches', 'roles'));
        }
        dd('Access denied');
    }

    public function getUserByBranches($id)
    {
        if (Auth::user()->hasRole('system_admin')) {
            $users = User::with(['profile', 'branch'])->where('branch_id', $id)->get();
            $roles = Role::all();
            $branch_name = Branch::where('id', $id)->first()->name;
            return view('users-branch', compact('users', 'roles', 'branch_name'));
        }
        dd('Access denied');
    }
}
