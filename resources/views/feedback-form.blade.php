@extends('base')

@section('title','FeedbackController')

@section('content')

    {{ Html::cover_heading('Leave a feedback') }}

    {{ Form::form_success() }}

    {{ Form::form_errors() }}
    {{ Form::open(['url' => route('feedback.submit'),'method' => 'POST']) }}
    {{ Form::input_under_label('account_id','Account Number') }}
    {{ Form::select_under_label('agent_id','Agent Name',$agents) }}

    {{ Form::ratings('rating','Rating') }}
    {{ Form::textarea_under_label('feedback_desc','Feedback') }}
    {{ Form::submit_generic('Submit') }}
    {{ Form::close() }}

@endsection
