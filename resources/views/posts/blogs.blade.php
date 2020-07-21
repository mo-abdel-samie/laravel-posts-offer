

<section>
    <div class="container">
        <h1>posts</h1>
        @if( count($posts) > 0)
            @foreach ($posts as $post)
                <div class="row d-flex justify-content-center">
                    <div class="col-6">
                        <div class="card mb-2 border-info ">
                            <a class="card-header text-bold text-info btn" href="posts/{{$post->id}}"><h1 >{{$post->title}}</h1></a>
                            <small>{{$post->created_at}} </small>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="row">
                <div class="col-12 border ">
                    <p>No posts found</p>
                </div>
            </div>
        @endif
    </div>
</section>
