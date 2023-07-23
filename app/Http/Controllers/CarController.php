<?php 
 
namespace App\Http\Controllers; 
 
use App\Car; 
use Illuminate\Http\Request; 
 
class CarController extends Controller 
{ 
    /** 
     * Display a listing of the resource. 
     * 
     * @return \Illuminate\Http\Response 
     */ 
    public function index() 
    { 
         $car = Car::all();

         return view('car.index', compact('car'));
    } 
 
    /** 
     * Show the form for creating a new resource. 
     * 
     * @return \Illuminate\Http\Response 
     */ 
    public function create() 
    { 
        return view('car.create'); 
    } 
 
    /** 
     * Store a newly created resource in storage. 
     * 
     * @param  \Illuminate\Http\Request  $request 
     * @return \Illuminate\Http\Response 
     */ 
    public function store(Request $request) 
    { 

        $request->validate([ 
            'plateNo' => 'required', 
            'model' => 'required', 
            'pricePerDay' => 'required', 

        ]); 

        Car::create($request->all()); 
    
        return redirect()->route('car.index') 
                        ->with('success','Car created successfully.'); 
    } 
 
    /** 
     * Display the specified resource. 
     * 
     * @param  \App\Car  $car 
     * @return \Illuminate\Http\Response 
     */ 
    public function show(Car $car) 
    { 
        return view('car.show',compact('car')); 
    } 
 
    /** 
     * Show the form for editing the specified resource. 
     * 
     * @param  \App\Car  $car 
     * @return \Illuminate\Http\Response 
     */ 
    public function edit(Car $car) 
    { 
        return view('car.edit',compact('car')); 
    } 
 
    /** 
     * Update the specified resource in storage. 
     * 
     * @param  \Illuminate\Http\Request  $request 
     * @param  \App\Car  $car 
     * @return \Illuminate\Http\Response 
     */ 
    public function update(Request $request, Car $car) 
    { 
        $request->validate([ 
            'plateNo' => 'required', 
            'model' => 'required',  
            'pricePerDay' => 'required', 
        ]); 
   
        $input = $request->all();
        
        $car->update($input);
   
        return redirect()->route('car.index') 
                        ->with('success','Car updated successfully'); 
    } 
 
    /** 
     * Remove the specified resource from storage. 
     * 
     * @param  \App\Car  $car 
     * @return \Illuminate\Http\Response 
     */ 
    public function destroy(Car $car) 
    { 
        $car->delete(); 
   
        return redirect()->route('car.index') 
                        ->with('success','Car deleted successfully'); 
 
    } 
}
