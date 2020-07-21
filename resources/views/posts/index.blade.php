@extends('layouts.master')

@section('content')
    <section>
        <div class="container">
            <h1>posts</h1>
            @if( count($posts) > 0)
                @foreach ($posts as $post)
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-6">
                            <img class=" img-fluid" height="300px" src="/storage/cover_imgs/{{$post->cover_img}}" alt="{{$post->cover_img}}">
                        </div>
                        <div class="col-6 border-info ">
                            <div class="mb-2 d-flex justify-content-center align-content-center ">
                                <a class="card-header text-bold text-info btn" href="posts/{{$post->id}}"><h1 >{{$post->title}}</h1></a>
                                <small>{{$post->created_at}} </small>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="paginate position-relative">
                    {{$posts->links()}}
                </div>
            @else
                <div class="row">
                    <div class="col-12 border ">
                        <p>No posts found</p>
                    </div>
                </div>
            @endif
        </div>
    </section>
@endsection
