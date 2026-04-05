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
    public function run(): void
    {
        $countries = file_get_contents(storage_path('countries/languages.json'));
        $languages_array = json_decode($countries, true);

        foreach ($languages_array as $single_country) {

            $country_name = $single_country['country'];
            $country_id = Country::firstWhere('country_name', $country_name)->id;

            $language = $single_country['language'];

            foreach ($language as $language) {
                $language = new Language();
                $language->language_name = $language;
                $language->country_id = $country_id;
                $language->save();
            }
        }
    }
}
