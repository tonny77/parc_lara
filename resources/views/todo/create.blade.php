@extends('layouts.nav')
@section('content')

    <h2 class="page-header">Todo作成</h2>
    {!! Form::open(['route' => 'todo.store']) !!}
        <div class="form-group">
            {!! Form::input('text', 'title', null, ['required', 'class' => 'form-control', 'placeholder' => 'タイトル']) !!}
        </div>
        <div class="form-group">
            {!! Form::input('text', 'content', null, ['required', 'class' => 'form-control', 'placeholder' => '内容']) !!}
        </div>
        <button type="submit" class="btn btn-success pull-right">作成</button>
    {!! Form::close() !!}

@endsection