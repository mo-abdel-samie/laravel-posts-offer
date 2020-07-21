<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

use App\Models\Offer;



class OffersController extends Controller
{
    public function index(){
        // $offers = offer::all();
        $offers = offer::orderBy('created_at' , 'desc')->paginate(9);
        return view('offers.index')->with('offers',$offers);
    }

    public function myoffers(){
        // $offers = offer::all();
        $offers = offer::orderBy('created_at' , 'desc')->get();
        return view('offers.myoffers')->with('offers',$offers);
    }

    public function create(){

        return view("offers.create");
    }

    public function store(Request $request){

        //validate data before insert
        $validationRouls = [
            'name' => 'required | max:100 | unique:offers,name',
            'price' => 'required | numeric ',
            'details' => 'required ',
        ];

        $messages = [
            'name.required'  => __('messages.offer name required'),
            'name.unique'    => __('messages.offer name unique'),
            'price.required' => __('messages.offer price required'),
        ];

        $validator = Validator::make($request->all(),$validationRouls,$messages);

        if($validator -> fails()){
            return redirect()->back()->withErrors($validator)->withInputs($request->all());
        }
        //affter validation

        // $offer = offer::create([
        //     'name'    => $request ['name']  ,
        //     'price'   => $request ['price'] ,
        //     'details' => $request ['details'] ,
        // ]);

        $offer = new offer;
        $offer->name = $request->input('name');
        $offer->price = $request->input('price');
        //how to insert this by session direct
        $offer->user_id = $request->input('user_id');
        $offer->details = $request->input('details');
        $offer->save();

        return redirect('offers')->with(['success'=>'Add successfuly']);
    }

    public function cart(){
        return "cart";
    }

    public function heart(){
        return "heart";
    }
}
