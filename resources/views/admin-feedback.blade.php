@extends('admin-base')

@section('title','Feedbacks')

@section('content')

    {{ Html::cover_heading('Feedback') }}

    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Account Holder</th>
            <th scope="col">Agent Name</th>
            <th scope="col">Rating</th>
            <th scope="col">Description</th>
            <th scope="col">Date</th>
        </tr>
        </thead>

        @foreach($feedbacks as $feedback)
            <tbody>
                <tr>
                    <th scope="row">{{ $feedback->id }}</th>
                    <td>{{ $feedback->account->full_name }}</td>
                    <td>{{ $feedback->agents->full_name }}</td>
                    <td>{!! $feedback->rating_stars !!}</td>
                    <td>{{ $feedback->feedback_desc }}</td>
                    <td>{{ $feedback->date_submitted }}</td>
                </tr>
            </tbody>
        @endforeach

    </table>
@endsection
