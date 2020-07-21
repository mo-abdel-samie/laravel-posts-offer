@extends('layouts.master')

@section('content')
    <section>
        <div class="container">
            <a href="/posts" class="btn btn-light mb-2">GoBack</a>
            <div class="card">
                <img src="/storage/cover_imgs/{{$post->cover_img}}" width="600px" height="750px" alt="">
                <h1 class="card-header">{{$post->title}} </h1>
                <div class="card-body">
                    <p class="card-text">
                        {{$post->body}}
                    </p>
                    <small>{{$post->created_at}} </small>
                    <div class="pt-2 text-right ">
                        <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Eitd</a>
                        {!! Form::open(['action' => ['PostController@destroy',$post->id],'method' => 'POST' , 'class'=>'d-inline']) !!}
                            {{Form::hidden('_method','DELETE')}}
                            {{Form::submit('delete',['class'=>'btn btn-danger'])}}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
