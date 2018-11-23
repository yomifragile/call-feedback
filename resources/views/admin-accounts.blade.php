@extends('admin-base')

@section('title','AccountController')

@section('content')


    @isset($show)

        {{ Html::cover_heading('Edit ' . $agent->full_name) }}
        {{ Form::model($agent,['url' => action('AgentController',$agent)]) }}
        {{ Form::form_errors() }}
        {{ Form::input_under_label('fname','First Name') }}
        {{ Form::input_under_label('lname','Last Name') }}
        {{ Form::submit_generic('Submit') }}
        {{ Form::close() }}

    @else


        @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
                Successfully edited {{Session::get('agent_success_name')}}
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

            @foreach($agents as $agent)
                <tbody>
                <tr>
                    <th scope="row">{{ $agent->id }}</th>
                    <td>{{ $agent->full_name }}</td>
                    <td>{!! $agent->dashboard_action !!}</td>
                </tr>
                </tbody>
            @endforeach

        </table>

    @endif

    @include('_modal',['id' => 'delete_modal','title' => 'Warning!','text' => 'Are you sure you want to delete?', 'trigger' => 'trigger_me'])

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

                            console.log(msg);
                            if(msg.success_delete == true){

                                window.location.replace('{{action('AdminController')}}');

                            }

                        }
                    });
                });

            });
        });
    </script>
@endsection
