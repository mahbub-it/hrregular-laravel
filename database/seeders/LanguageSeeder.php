<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\Language;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $countries = file_get_contents(storage_path('countries/languages.json'));
        $languages_array = json_decode($countries, true);

        foreach ($languages_array as $single_country) {

            $country_name = $single_country['country'];
            $country_match = Country::where('country_name', $country_name)->first();

            if (isset($country_match->id)) {
                $country_id = $country_match->id;

                $languages = $single_country['languages'];

                if (isset($country_id) && !empty($country_id)) {
                    foreach ($languages as $language) {
                        $lang = new Language;
                        $lang->language_name = $language;
                        $lang->country_id = $country_id;
                        $lang->save();
                    }
                }
            }

        }
    }
}