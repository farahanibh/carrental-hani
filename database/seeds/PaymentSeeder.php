<?php

use Illuminate\Database\Seeder;
use App\Payment;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $payment_seed = [
            ['id'=>'1','method'=>'COD'],
            ['id'=>'2','method'=>'online'],
            ['id'=>'3','method'=>'debit'],
            ];

            foreach ($payment_seed as $payment_seed)
        {
            Payment::firstOrCreate($payment_seed);
        }
    }
}
