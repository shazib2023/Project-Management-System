@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Create Project') }}</div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <!-- <th>ID</th> -->
                                <th>Name</th>
                                <th>Description</th>
                                <th>Start</th>
                                <th>End </th>
                                <!-- <th>Status</th> -->
                                <!-- <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th> -->
                                <th>Add Task</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($projects as $project)
                                <tr>
                                    <!-- <td>{{ $project->id }}</td> -->
                                    <td>{{ $project->name }}</td>
                                    <td> {{ $project->description }} </td>
                                    <td>{{ $project->start_date }}</td>
                                    <td>{{ $project->end_date }}</td>
                                    <!-- <td>{{ $project->status }}</td>
                                    <td>{{ $project->created_at }}</td>
                                    <td>{{ $project->updated_at }}</td> -->
                                    <td>
                                        <a href="{{route('add.task', $project->id)}}" class="btn btn-primary">Add</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footerScript')
    @if(Session::has('success'))
        <script type="text/javascript">
            $(function() {
                toastr.success("{{ Session::get('success') }}");
            })
        </script>
    @endif
    @if(Session::has('failed'))
        <script type="text/javascript">
            $(function() {
                toastr.error("{{ Session::get('failed') }}");
            })
        </script>
    @endif
@stop