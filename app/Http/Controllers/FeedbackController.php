<?php

namespace App\Http\Controllers;

use App\Http\Requests\FeedbackRequest;
use App\Model\Agent;
use Illuminate\Http\Request;
use App\Model\Feedback as FeedbackModel;

class FeedbackController extends Controller
{
    public function feedback_home(){
        $agents = Agent::pluck('fname','id');
        return view('feedback-form',compact('agents'));
    }

    public function feedback_submit(FeedbackRequest $request){


        FeedbackModel::create($request->all());
        return $request->all();

    }
}
