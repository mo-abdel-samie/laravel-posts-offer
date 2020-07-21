@extends('layouts.master')


@section('article')
<section class="login-form">

</section>
<div class="container">
    <div class="row d-flex justify-content-center py-5">
        <div class="col-8">
            <Form>
                <div class=" form-group">
                    <label for="name">name</label>
                    <input class=" form-control" type="text" >
                </div>
                <div class=" form-group">
                    <label for="pass">password</label>
                    <input class=" form-control" type="password" >
                </div>
                <div>
                    <button class="btn btn-primary py-3 px-4">submit</button>
                </div>
            </Form>
        </div>
    </div>
</div>

@endsection
