<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class PrestashopController extends Controller
{
    public function index()
    {
        $client = new Client();
        $response = $client->request('GET', env('PRESTASHOP_API_URL') . '/products', [
            'headers' => [
                'Authorization' => 'Basic ' . base64_encode(env('PRESTASHOP_API_KEY') . ':')
            ]
        ]);

        $products = json_decode($response->getBody(), true);

        return response()->json($products);
    }
}
