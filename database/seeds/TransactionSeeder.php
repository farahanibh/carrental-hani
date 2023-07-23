<?php 
 
use Illuminate\Database\Seeder; 
use App\Transaction; 
 
class TransactionSeeder extends Seeder 
{ 
    /** 
     * Run the database seeds. 
     * 
     * @return void 
     */ 
    public function run() 
    { 
        $transaction_seed = [ 
            ['id'=>'1','totalPrice'=>'160.00','transferType'=>'online','dateTransfer'=>'2022-06-26'], 
        ]; 
 
        foreach ($transaction_seed as $transaction_seed) 
        { 
            Transaction::firstOrCreate($transaction_seed); 
        } 
    } 
}
