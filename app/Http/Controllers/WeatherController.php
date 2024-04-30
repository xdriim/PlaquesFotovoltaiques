<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function index(){
        return view('weather.app');
    }

    public function search(Request $request){

        $notFound = false;

        $data = $request->validate([
            'city' => 'required'
        ]);

        $city = 'Barcelona';
        $key = config('services.owm.key');

        $response = Http::get("https://api.openweathermap.org/data/2.5/weather?q=".$city."&lang=es"."&appid=".$key)->json();

        if($response['cod'] == "200") {

            $weather = $response['weather'][0]['description'];
            $main = $response['weather'][0]['main'];
            $temp = $response['main']['temp'] - 273;
            $name = $response['name'];
            $country = $response['sys']['country'];
            $ok = $response['cod'];

            return view('plaques.index', compact('weather', 'main', 'temp', 'name', 'country', 'ok', 'notFound'));
        } else {
            $notFound = true;
            return view('plaques.index', compact('notFound', 'city'));
        }
    }
}
