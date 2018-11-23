<?php

namespace App\Http\Controllers;

use App\Http\Requests\AgentRequest;
use Illuminate\Http\Request;
use App\Model\Agent as AgentModel;

class AgentController extends Controller
{
    public function show(AgentModel $agent)
    {
        $data = AgentModel::find($agent)->first();
        $is_form = true;
        $is_agents = true;

        return view('admin-accounts-agents',compact('is_form','data','is_agents'));
    }

    public function update(AgentModel $agent, AgentRequest $request)
    {
        $agent = AgentModel::find($agent)->first();
        $agent->update($request->all());

        return redirect(route('agents'))->with(['success' => true,'agent_success_name' => $agent->full_name]);
    }

    public function destroy(AgentModel $agent)
    {
        try{
            $agent->delete();
            return ['success_delete' => true];
        }catch (\Exception $exception){
            return ['success_delete' => false];
        }
    }

    public function create()
    {
        $is_create = true;
        $is_agents = true;
        return view('admin-accounts-agents',compact('is_create','is_agents'));
    }

    public function store(AgentRequest $request)
    {
        $data = AgentModel::create($request->all());

        return redirect(route('agents'))->with(['success' => true,'agent_success_name' => $data->full_name]);
    }
}
