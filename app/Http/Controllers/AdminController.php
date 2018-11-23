<?php

namespace App\Http\Controllers;

use App\Model\Account;
use App\Model\Agent;
use App\Model\User;
use Illuminate\Http\Request;
use App\Model\Feedback;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin-dashboard');
    }

    public function feedback()
    {
        $feedbacks = Feedback::all();

        return view('admin-feedback',compact('feedbacks'));
    }

    public function accounts()
    {
        $datas = Account::all();
        $is_accounts = true;
        $is_dashboard = true;

        return view('admin-accounts-agents',compact('datas','is_dashboard','is_accounts'));
    }

    public function agents()
    {
        $datas = Agent::all();
        $is_agents = true;
        $is_dashboard = true;

        return view('admin-accounts-agents',compact('datas','is_dashboard','is_agents'));
    }

    public function users()
    {
        $datas = User::all();
        $is_users = true;
        $is_dashboard = true;

        return view('admin-accounts-agents',compact('datas','is_dashboard','is_users'));
    }

    public function feedback_logout()
    {
        Auth::logout();
        return redirect()->route('feedback');
    }
}
