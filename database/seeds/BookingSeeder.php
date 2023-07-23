<?php 
 
use Illuminate\Database\Seeder; 
use App\Booking; 
 
class BookingSeeder extends Seeder 
{ 
    /** 
     * Run the database seeds. 
     * 
     * @return void 
     */ 
    public function run() 
    { 
        $booking_seed = [ 
            ['id'=>'1','datePickup'=>'2022-06-07','dateReturn'=>'2005-08-07','timePickup'=>'08:45:25','timeReturn'=>'08:45:25','locationPickup'=>'UiTM Jasin','locationReturn'=>'Malacca Central','userID'=>'2'], 
        ]; 
 
        foreach ($booking_seed as $booking_seed) 
        { 
            Booking::firstOrCreate($booking_seed); 
        } 
    } 
}
