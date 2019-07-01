<?php

use App\Customer;
use Illuminate\Database\Seeder;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customer = new Customer();
        $customer->name = 'Nguyễn Văn Anh';
        $customer->age = 20;
        $customer->phone = '0352299103';
        $customer->email = 'nguyenvananh@gmail.com';
        $customer->address = "Hà Nội";
        $customer->image = 'images/DRjO0TpjWvEU8qIPDFSzyiznVcOzw0lDUCzgEwbr.png';
        $customer->save();
    }
}
