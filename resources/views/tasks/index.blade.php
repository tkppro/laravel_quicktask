@extends('layouts.app')

@section('content')
<div class="container">
    <div class="offset-sm-2 col-md-8">
        <div class="card">
            <div class="card-header">
                @lang('common.header.new_task')
            </div>

            <div class="card-body">
                @include('common.errors')
                <!-- New Task Form -->
                {!! Form::open(['class' => 'form-horizontal']) !!}

                <!-- Task Name -->
                    <div class="form-group">
                        {!! Form::label('task-name', @trans('common.form.label.task'), [
                            'class' => 'col-md-3 col-form-label'
                        ]) !!}
                        <div class="col-md-6">
                            {!! Form::text('name', '', [
                                'id' => 'task-name',
                                'class' => 'form-control'
                            ]) !!}

                        </div>
                    </div>

                    <!-- Add Task Button -->
                    <div class="form-group">
                        <div class="col-sm-3 col-md-6">
                            {!! Form::button('<i class="fa fa-plus"> '.@trans("common.form.button.add_task").'</i>',
                            [
                                'type' => 'submit',
                                'class' => 'btn btn-primary'
                            ] )  !!}
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-header">
                @lang('common.header.current_tasks')
            </div>
            @if($tasks->count() > @config('setting.task.minimum'))
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <th>@lang('common.table.task')</th>
                            <th>@lang('common.table.created_at')</th>
                            <th>@lang('common.table.action')</th>
                        </thead>
                        <tbody>
                            @foreach($tasks as $task)
                            <tr>
                                <td class="table-text"><div>{{ $task->name }}</div></td>
                                <td>{{ $task->created_at }}</td>
                                <!-- Task Delete Button -->
                                <td>
                                    {!! Form::open([
                                        'method' => 'delete',
                                        'route' => ['tasks.delete',$task->id] ,
                                    ]) !!}

                                        {!! Form::submit(@trans('common.form.button.delete'), [
                                            'class' => 'btn btn-danger',
                                        ]) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <p class="text-center">@lang('common.text.no_task')</p>
            @endif
        </div>

    </div>
</div>
@endsection
