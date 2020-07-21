
@extends('layouts.master')
{{-- @include('includes.navbar') --}}

@section("content")

    <article>


        <section class=" about-us">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 ml-md-auto col-md-7 col-lg-6 pb-5 pb-md-0">
                        <h2>About Us</h2>
                        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum rem cupiditate provident quos pariatur totam, ducimus non adipisci et sequi nisi, soluta autem animi molestias.</p>
                        <p class="mt-4">
                        <a class="btn btn-dark ml-3" href="#">Register</a>
                        </p>
                    </div>

                    <div class="col-10 col-sm-6 col-md-5 col-lg-4 m-auto pb-5 pb-md-0">
                        <img alt="image" class="img-fluid rounded-0" src="./imgs/draws/browsers.svg">
                    </div>
                </div>
            </div>
        </section>

        <section class=" border-bottom py-4">
            <div class="container">
                <h1>Our Blogs</h1>
                @if( count($posts) > 0)
                <div class="row d-flex justify-content-start mt-4">
                    @foreach ($posts as $post)

                            <div class="col-lg-4 mb-4">
                                <div class="card mb-2 border-info ">
                                    <a class="card-header text-bold text-info btn" href="posts/{{$post->id}}"><h1 >{{$post->title}}</h1></a>
                                    <small>{{$post->created_at}} </small>
                                </div>
                            </div>

                    @endforeach
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

        <section class="skills py-5">
            <div class="container py-5">
                <div class="row">
                    <div class="col-lg-4 bg-main-color d-flex align-items-center text-center rounded">
                        <div>
                            <h2 class=" text-center font-weight-bold ">Our skills</h2>
                            <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non nam mollitia laudantium dignissimos exercitationem eligendi maiores.</p>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="skills-box">
                            <label for="html">HTML 5</label>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <label for="html">CSS 3</label>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 70%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <label for="html">javaScript</label>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 65%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <label for="html">bootstrap</label>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 80%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="timeline">
            <div class="container">
                <h2>Experiance</h2>
                <div class="row ">
                    <div class="col-lg-6 border-right border-main-color position-relative">
                        <div class="year-left">2018</div>
                        <i class=" bolet-left"></i>
                        <div class=" bg-white p-4 rounded m-2 box-left">
                            <h3 class=" main-color font-weight-bold">Heading one</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae fugiat dolores excepturi. Necessitatibus quo est aliquid, veritatis doloribus, officia magni hic cumque nulla magnam laudantium.</p>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-end">
                    <div class="col-lg-6 border-left  border-main-color text-lg-left text-right position-relative mr-1">
                        <div class="year-right">2019</div>
                        <i class=" bolet-right"></i>
                        <div class="bg-white p-4 rounded m-3 box-right">
                            <h3 class=" main-color font-weight-bold">Heading two</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae fugiat dolores excepturi. Necessitatibus quo est aliquid, veritatis doloribus, officia magni hic cumque nulla magnam laudantium.</p>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-lg-6 border-right border-main-color position-relative">
                        <div class="year-left">2020</div>
                        <i class=" bolet-left"></i>
                        <div class=" bg-white p-4 rounded m-2 box-left">
                            <h3 class=" main-color font-weight-bold">Heading three</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae fugiat dolores excepturi. Necessitatibus quo est aliquid, veritatis doloribus, officia magni hic cumque nulla magnam laudantium.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="my-features">
            <div class="container">
                <h2 class=" main-color font-weight-bold text-center mb-5">My features</h2>
                <div class="row mb-2">
                    <div class="col-lg-4 text-center">
                        <img class=" img-fluid"  src="imgs/coding.png" alt="">
                        <h4 class=" font-weight-bold my-2">Development</h4>
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, minus!</p>
                    </div>
                    <div class="col-lg-4 text-center">
                        <img class=" img-fluid" src="imgs/target.png" alt="">
                        <h4 class=" font-weight-bold my-2">SEO</h4>
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, minus!</p>
                    </div>
                    <div class="col-lg-4 text-center">
                        <img class=" img-fluid" src="imgs/browser.png" alt="">
                        <h4 class=" font-weight-bold my-2">Smart UI</h4>
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, minus!</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 text-center">
                        <img class=" img-fluid" src="imgs/responsive.png" alt="">
                        <h4 class=" font-weight-bold my-2">Responsiv</h4>
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, minus!</p>
                    </div>
                    <div class="col-lg-4 text-center">
                        <img class=" img-fluid" src="imgs/fast-time.png" alt="">
                        <h4 class=" font-weight-bold my-2">Faster</h4>
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, minus!</p>
                    </div>
                    <div class="col-lg-4 text-center">
                        <img class=" img-fluid" src="imgs/call-center.png" alt="">
                        <h4 class=" font-weight-bold my-2">call servieces</h4>
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, minus!</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact-Us">

            <div class="container">
                <div class="overlay"></div>
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-lg-6">
                        <form action="">
                            <h2 class=" text-center font-weight-bold">Contact Us</h2>
                            <div class=" form-group">
                                <label for="name">Name</label>
                                <input class=" form-control" type="text" placeholder="name">
                            </div>
                            <div class=" form-group">
                                <label for="name">Email</label>
                                <input class=" form-control" type="email" placeholder="email">
                            </div>
                            <div class=" text-center mt-3 ">
                                <input class="btn bg-main-color submit" type="submit" value="submit">
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>

    </article>

@stop


