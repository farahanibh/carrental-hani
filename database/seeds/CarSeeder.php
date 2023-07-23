<?php 
 
use Illuminate\Database\Seeder; 
use App\Car; 
 
class CarSeeder extends Seeder 
{ 
    /** 
     * Run the database seeds. 
     * 
     * @return void 
     */ 
    public function run() 
    { 
         
        $car_seed = [ 
            ['id'=>'1','plateNo'=>'VHQ428','model'=>'Perodua Myvi','pricePerDay'=>'100.00'], 
            ['id'=>'2','plateNo'=>'ATI9100','model'=>'Proton Exora','pricePerDay'=>'120.00'], 
            ['id'=>'3','plateNo'=>'PEA1812','model'=>'Perodua Axia','pricePerDay'=>'90.00'], 
            ['id'=>'4','plateNo'=>'QIM1807','model'=>'Perodua Ativa','pricePerDay'=>'140.00'], 
        ]; 
 
        foreach ($car_seed as $car_seed) 
        { 
            Car::firstOrCreate($car_seed); 
        } 
    } 
}
