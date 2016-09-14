<?php

use Illuminate\Database\Seeder;

class CompanyTableSeeder extends Seeder{

    public function run()
    {
        $companies = [
            [
                "name"            => "KOPERASI SIMPAN PINJAM",
                "address"         => "sengonagung purwosari pasuruan",
                "telephone"       => "0343-613882",
                "email"           => "asp@gmail.com",
                "npwp"            => "8712349",
                "month_period"    => "09",
                "year_period"     => "2016"
            ]
        ];

        DB::table('companies')->insert($companies);
    }
} 