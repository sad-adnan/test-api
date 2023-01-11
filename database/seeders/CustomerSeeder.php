<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::factory()->count(5)->hasInvoices(10)->create();
        Customer::factory()->count(10)->hasInvoices(5)->create();
        Customer::factory()->count(15)->hasInvoices(1)->create();
        Customer::factory()->count(20)->hasInvoices(8)->create();
        Customer::factory()->count(5)->create();
    }
}
