<?php
    namespace App\Domain;
    use Illuminate\Support\Facades\Http;
    class CensusAPI{
        public static function fetchCities(){
            $cityData = Http::get("http://data.wa.gov/resource/ktqk-i4iw.json")->json();
            return $cityData;
        }
    }
?>