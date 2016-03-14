<?php

use Illuminate\Database\Seeder;

class SaleReportsDailyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subscriptions = \Laravel\Cashier\Subscription::all();
        foreach($subscriptions as $subscription){
            $day = $subscription->created_at->format('Y-m-d');
            $quantity = $subscription->quantity;
            $totals[$day]=totals[$day]+$quantity;

//            foreach($totals as $day => $total){
//                $rd = new \App\SaleReportsDaily();
//                $rd->day=$day;
//                $rd->total=$total;
//                $rd->save();
//            }
        }
    }
}
