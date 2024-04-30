<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PlaquesFotovoltaiques extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index(){
        $notFound = false;

        $city = 'Barcelona';
        $key = config('services.owm.key');

        $response = Http::get("https://api.openweathermap.org/data/2.5/weather?q=".$city."&lang=es"."&appid=".$key)->json();
        $responseM = Http::get('http://apiplaques.xdriim.es/api/plaques/');
        $dada = $responseM->json();

        
        if($response['cod'] == 200) {

            $weather = $response['weather'][0]['description'];
            $main = $response['weather'][0]['main'];
            $temp = $response['main']['temp'] - 273;
            $name = $response['name'];
            $country = $response['sys']['country'];
            $ok = $response['cod'];

            return view('plaques/index', compact('weather', 'main', 'temp', 'name', 'country', 'ok', 'notFound', 'dada'));
        } else {
            $notFound = true;
            return view('plaques/index', compact('notFound', 'city', 'dada'));
        }

        
        
    }

    public function create(){
        return view ('plaques/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $response = Http::post('http://apiplaques.xdriim.es/api/plaques/', [
            'latitud' => $request->latitud,
            'longitud' => $request->longitud,
            'nom' => $request->nom,
            'tipus_equipament' => $request->tipus_equipament,
            'adreca' => $request->adreca,
            'nom_barri' => $request->nom_barri,
            'energia_prod_kWh' => $request->energia_prod_kWh,
            'potencia_kWp' => $request->potencia_kWp,
            'emissions_estalv_KgCo2eq' => $request->emissions_estalv_KgCo2eq
        ]);
        return redirect()->route('plaques.index');
    }

    public function read($id)
    {
        $response = Http::get('http://apiplaques.xdriim.es/api/plaques/');
        $identif = $id;
        $dada = $response->json();
        return view ('plaques/read', compact('dada', 'identif'));
    }

    public function ver($id)
    {
        $response = Http::get('http://apiplaques.xdriim.es/api/plaques/' . $id);
        $data = $response->json();
        return view ('plaques/vista', compact('data'));
    }

    public function search(Request $request)
    {
        $emissions = $request->input('emissions');
        $response = Http::get('http://apiplaques.xdriim.es/api/plaquess/' . $emissions);
        $dada = $response->json();
        return view ('plaques/search', compact('dada'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $response = Http::put('http://apiplaques.xdriim.es/api/plaques/'.$request->id, [
            'latitud' => $request->latitud,
            'longitud' => $request->longitud,
            'nom' => $request->nom,
            'tipus_equipament' => $request->tipus_equipament,
            'adreca' => $request->adreca,
            'nom_barri' => $request->nom_barri,
            'energia_prod_kWh' => $request->energia_prod_kWh,
            'potencia_kWp' => $request->potencia_kWp,
            'emissions_estalv_KgCo2eq' => $request->emissions_estalv_KgCo2eq
        ]);
   
        $dada = $response->json();
        return redirect()->route('plaques.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $response = Http::delete('http://apiplaques.xdriim.es/api/plaques/'.$id);
        return redirect()->route('plaques.index');
    }
}
