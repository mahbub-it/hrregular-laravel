<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $countries = file_get_contents(storage_path('countries/countries.json'));

        $countries_array = json_decode($countries, true);

        $country_name = array_column($countries_array, 'name');

        $country_code = array_column($countries_array, 'code');

        foreach ($countries_array as $single_country) {
            $country = new Country();
            $country->country_name = $single_country['name'];
            $country->country_code = $single_country['code'];
            $country->flag_img = strtolower($single_country['code']) . '.png';
            $country->save();
        }
    }
}
