<?php

namespace App\Http\Controllers;

use App\Http\Requests\AgentRequest;
use App\Model\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function show(Account $account)
    {
        $data = Account::find($account)->first();
        $is_form = true;
        $is_accounts = true;

        return view('admin-accounts-agents',compact('is_form','data','is_accounts'));
    }

    public function update(Account $account, AgentRequest $request)
    {
        $data = Account::find($account)->first();
        $data->update($request->all());

        return redirect(route('accounts'))->with(['success' => true,'agent_success_name' => $data->full_name]);
    }

    public function destroy(Account $account)
    {
        try{
            $account->delete();
            return ['success_delete' => true];
        }catch (\Exception $exception){
            return ['success_delete' => false];
        }
    }

    public function create()
    {
        $is_create = true;
        $is_accounts = true;
        return view('admin-accounts-agents',compact('is_create','is_accounts'));
    }

    public function store(AgentRequest $request)
    {
        $data = Account::create($request->all());

        return redirect(route('accounts'))->with(['success' => true,'agent_success_name' => $data->full_name]);
    }
}
