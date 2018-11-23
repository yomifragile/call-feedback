@extends('admin-base')

@section('title','Agents')

@section('content')


        @isset($is_create)

            @isset($is_users)
                {{ Html::cover_heading('Add user') }}

                {{ Form::open(['url' => route('users.store'), 'method' => 'POST']) }}
                {{ Form::form_errors() }}
                {{ Form::input_under_label('name','Name') }}
                {{ Form::input_under_label('email','Email','email') }}
                {{ Form::input_under_label('password','Password','password') }}
                {{ Form::input_under_label('password_confirmation','Confirm Password','password') }}
                {{ Form::submit_generic('Submit') }}
                {{ Form::close() }}

            @else

                @isset($is_accounts)
                    {{ Html::cover_heading('Add account') }}
                    {{ Form::open(['url' => route('accounts.store'), 'method' => 'POST']) }}
                @endisset

                @isset($is_agents)
                    {{ Html::cover_heading('Add agent') }}
                    {{ Form::open(['url' => route('agents.store'), 'method' => 'POST']) }}
                @endisset

                {{ Form::form_errors() }}
                {{ Form::input_under_label('fname','First Name') }}
                {{ Form::input_under_label('lname','Last Name') }}
                {{ Form::submit_generic('Submit') }}
                {{ Form::close() }}

            @endisset

    @endisset

    @isset($is_form)

        {{ Html::cover_heading('Edit ' . $data->full_name) }}




            @isset($is_accounts)
                {{ Form::model($data,['url' => route('accounts.update',$data)]) }}
            @endisset

            @isset($is_agents)
                {{ Form::model($data,['url' => route('agents.update',$data)]) }}
            @endisset



            {{ Form::form_errors() }}
            {{ Form::input_under_label('fname','First Name') }}
            {{ Form::input_under_label('lname','Last Name') }}
            {{ Form::submit_generic('Submit') }}
            {{ Form::close() }}



    @endisset

    @isset($is_dashboard)

        @isset($is_accounts)
            {{ Html::cover_heading('Accounts') }}
        @endisset

        @isset($is_agents)
            {{ Html::cover_heading('Agents') }}
        @endisset

        @isset($is_users)
            {{ Html::cover_heading('Users') }}
        @endisset

        @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
                Successfully updated {{Session::get('agent_success_name')}}
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Action</th>
            </tr>
            </thead>

            @isset($datas)

                @foreach($datas as $data)
                    <tbody>
                    <tr>
                        <th scope="row">{{ $data->id }}</th>
                        <td>{{ $data->full_name }}</td>
                        <td>{!! $data->dashboard_action !!}</td>
                    </tr>
                    </tbody>
                @endforeach

            @endisset

        </table>

        <div class="row">
            <div class="col-md-12">
                @isset($is_accounts)
                    <a href="{{ route('accounts.create') }}"><button type="button" class="btn btn-primary">Add</button></a>
                @endisset

                @isset($is_agents)
                    <a href="{{ route('agents.create') }}"><button type="button" class="btn btn-primary">Add</button></a>
                @endisset

                @isset($is_users)
                    <a href="{{ route('users.create') }}"><button type="button" class="btn btn-primary">Add</button></a>
                @endisset

            </div>
        </div>

        @include('_modal',['id' => 'delete_modal','title' => 'Warning!','text' => 'Are you sure you want to delete?', 'trigger' => 'trigger_me'])

    @endisset





@endsection
@section('scripts')
    <script type="text/javascript">
        $(document).ready(function () {
            $('.delete_action').on('click',function (event) {
                event.preventDefault();
                var href = null;
                var href = $(this).attr('href');
                $('#delete_modal').modal('show');

                $('#trigger_me').click(function () {
                    $.ajax({
                        url : href,
                        method : 'GET',
                        success : function (msg) {
                            if(msg.success_delete == true){

                                @isset($is_agents)
                                    window.location.replace('{{route('accounts')}}');
                                @endif

                                @isset($is_accounts)
                                    window.location.replace('{{route('agents')}}');
                                @endif

                                @isset($is_users)
                                    window.location.replace('{{route('users')}}');
                                @endif


                            }

                        }
                    });
                });

            });
        });
    </script>
@endsection
