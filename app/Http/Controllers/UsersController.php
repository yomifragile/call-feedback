<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Model\User;

class UsersController extends Controller
{
    public function create()
    {
        $is_create = true;
        $is_users = true;
        return view('admin-accounts-agents',compact('is_create','is_users'));
    }

    public function store(UserRequest $request)
    {
        $data = User::create($request->all());

        return redirect(route('users'))->with(['success' => true,'agent_success_name' => $data->name]);
    }

    public function show(User $users)
    {
        $data = User::find($users)->first();
        $is_form = true;
        $is_users = true;

        return view('admin-accounts-agents',compact('is_form','data','is_users'));
    }

    public function update(User $users, UserRequest $request)
    {
        $data = User::find($users)->first();
        $data->update($request->all());

        return redirect(route('users'))->with(['success' => true,'agent_success_name' => $data->full_name]);
    }

    public function destroy(User $users)
    {
        try{
            $users->delete();
            return ['success_delete' => true];
        }catch (\Exception $exception){
            return ['success_delete' => false];
        }
    }
}
