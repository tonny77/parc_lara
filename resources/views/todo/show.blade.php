@extends('layouts.nav')
@section('content')

    <h2 class="page-header">Todo詳細</h2>
        <div class="form-group">
            <h4 class="font-weight-bold">タイトル</h4>
            <p>{{ $todo->title }}</p>
        </div>
        <div class="form-group">
            <h4 class="font-weight-bold">内容</h4>
            <p>{{ $todo->content }}</p>
        </div>
        <a class="btn btn-info" href="{{ route('todo.edit', $todo->id) }}">編集</a>

@endsection