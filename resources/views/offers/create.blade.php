@extends('layouts.app')

@section('content')
<section class=" container">
    <h1>create post</h1>
    <div class="row d-flex justify-content-center">
        <div class="col-lg-6 p-3 border rounded shadow">
            <form method="POST" action="{{ route('offers.store')}}">

                @csrf

                <div class=" form-row">
                    <label for="offername">{{__('offers.offer name lable')}}:</label>
                    <input class=" form-control" type="text" name="name">
                    @error('name')
                        <small class=" text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class=" form-row">
                    <label for="offerprice">{{__('offers.offer price lable')}}:</label>
                    <input class=" form-control" type="number" name="price" placeholder="offer price">
                    @error('price')
                        <small class=" text-danger" >{{$message}}</small>
                    @enderror
                </div>
                <div class=" form-row">
                    <label for="detials">{{__('offers.offer detials lable')}}:</label>
                    <textarea class=" form-control" name="details"  cols="30" rows="5"></textarea>
                    @error('details')
                        <small class=" text-danger">{{$message}}</small>
                    @enderror
                </div>
                <input  type="number" name="user_id" value= "{{Auth::user()->id}}" hidden>

                <div>
                    <button type="submit" class="btn btn-success mt-3">{{__('offers.offer save btn')}}</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
