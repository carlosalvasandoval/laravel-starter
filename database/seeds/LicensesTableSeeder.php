<?php

use Illuminate\Database\Seeder;
use App\License;
use App\User;

class LicensesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        License::truncate();

        $client = User::where('name', 'client')->first();

        $license =License::create([
            'name' => 'my license',
            'license' => bcrypt('123abcd'),
            'expiration_date' => date('Y-m-d', strtotime('+1 year')),
            'status' => 1,
            'type' => 'wordpress'
        ]);

        $license->user()->associate($client);
        $license->save();
    }
}
