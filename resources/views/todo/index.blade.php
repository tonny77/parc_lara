@extends('layouts.nav')
@section('content')

    <div class="d-flex justify-content-between">
        <h2 class="page-header">Todo一覧</h2>

        <p class="pull-right">
            <a class="btn btn-success" href="{{ route('todo.create') }}">追加</a>
        </p>
    </div>

        <table class="table table-hover todo-table">
            <thead>
                <tr>
                    <th>やること</th>
                    <th>作成日時</th>
                    <th>更新日時</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            @foreach ($todos as $todo)
            <tbody>
                <tr>
                    <td>{{ $todo->title }}</td>
                    <td>{{ $todo->created_at }}</td>
                    <td>{{ $todo->updated_at }}</td>
                    <td><a class="btn btn-success" href="{{ route('todo.show', $todo->id) }}">詳細</a></td>
                    <td><a class="btn btn-info" href="{{ route('todo.edit', $todo->id) }}">編集</a></td>
                    {!! Form::open(['route'=>['todo.destroy', $todo->id], 'method'=>'DELETE']) !!}
                        <td><button class="btn btn-danger" type="submit">削除</button></td>
                    {!! Form::close() !!}
                </tr>
            </tbody>
            @endforeach
        </table>

@endsection