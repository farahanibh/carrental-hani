<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Car;
use App\Booking;

class ProductController extends Controller
{
    public function index() 
    { 
         $product = Booking::with('user' , 'car') -> get();

         return view ('product.index', compact('product'));
    }

    public function create() 
    { 
        $user = User::pluck('name', 'phoneNo' ,'id');

        $car = Car::pluck('model', 'id');

        $product = Booking::all();

        return view('product.create', compact('user' , 'car', 'product'));
    }

    public function store(Request $request) 
    {
        Booking::create([
            'userID' => auth()->user()->id,
            'carID' => $request->carID,
            'datePickup' => $request -> datePickup,
            'dateReturn' => $request -> dateReturn,
            'location' => $request -> location, 
            'duration' => $request -> duration,
        ]);

        return redirect()->route('product.show', Booking::get()->last());
    }

    public function show(Booking $product)
    {
        return view('product.show', compact('product'));
    }

}
