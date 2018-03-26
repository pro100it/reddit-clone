@extends('layouts.app')

@section('content')

<div class="col-md-10 col-md-offset-1">
    <div class="row">
        @auth
        <div style="text-align: right">  
            <a class="btn btn-default btn-sm" href="{{ route('create_post_path') }}"><span class="glyphicon glyphicon-plus" aria-hidden="true">Добавить</span></a>
        </div>
        @endauth
    <div class="table-responsive">
        <table class="table">
            @foreach($posts as $post)
                <thead>
                    <tr class="bg-warning">
                        <th><a href="{{ route('post_path', ['post' => $post->id]) }}">{{ $post->title }}</a></th>
                    @if($post->wasCreatedBy( Auth::user()))
                    <th style="text-align:right">
                                <form action="{{ route('delete_post_path', ['post' => $post->id]) }}" method="POST">
                                    <div class="btn-group btn-group-sm" role="group">
                                        <a href="{{ route('edit_post_path', ['post' => $post->id]) }}" class="btn btn-success"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></button>
                                    </div>    
                                </form>
                    </th>
                    @endif
                    </tr>
                </thead>    
                <tbody>
                    <tr>
                        <td colspan="2"><a href="{{$post->url}}">{!!$post->description!!}</a></td>
                    </tr>
                    <tr>
                        <td>Отправлено {{ $post->created_at ? $post->created_at->diffForHumans(): '-' }} by <b>{{ $post->user->name }}</b></td>
                        <td>Изменено   {{ $post->updated_at ? $post->updated_at->diffForHumans(): '-' }} by <b>{{ $post->user->name }}</b></td>
                    </tr>    
                </tbody>    
            </div>
        </div>
    @endforeach
</div>
    {{ $posts->render() }}
@endsection