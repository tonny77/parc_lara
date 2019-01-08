@extends('layouts.nav')
@section('content')

    <h2 class="page-header">Todo編集</h2>
    {!! Form::open(['route' => ['todo.update', $todo->id], 'method' => 'PUT']) !!}
        <div class="form-group">
            <label>タイトル</label>
            {!! Form::input('text', 'title', $todo->title, ['required', 'class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            <label>内容</label>
            {!! Form::input('text', 'content', $todo->content, ['required', 'class' => 'form-control']) !!}
        </div>
        <button type="submit" class="btn btn-success pull-right">編集</button>
    {!! Form::close() !!}

@endsection