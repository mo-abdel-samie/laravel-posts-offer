@extends('layouts.master')

@section('content')
    <section>
        <div class="container">
            <h1>create new post</h1>
            {!! Form::open(['action' => 'PostController@store','method' => 'POST','enctype'=>'multipart/form-data']) !!}
                <div class="form-group">
                    {{Form::label('title', 'Title')}}
                    {{Form::text('title','',['class'=>'form-control', 'placeholder'=>'title'])}}
                </div>
                <div class="form-group">
                    {{Form::label('body', 'post')}}
                    {{Form::textarea('body','',['class'=>'form-control', 'placeholder'=>'body text'])}}
                </div>
                <div class="form-group ">
                    {{Form::label('cover_img', 'cover image')}}
                    {{Form::file('cover_img',['class'=>' form-control-file'])}}
                </div>
                {{Form::submit('Submit' , ['class' => 'btn btn-primary'])}}
            {!! Form::close() !!}
        </div>
    </section>
@endsection
