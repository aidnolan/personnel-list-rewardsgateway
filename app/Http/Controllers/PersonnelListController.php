<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class PersonnelListController extends Controller
{
    public function index()
    {
        $client = new Client();
        $response = $client->request('GET', 'http://hiring.rewardgateway.net/list', [
            'headers' => [
                'Accept' => 'application/json',
                'Authorization' => 'Basic aGFyZDpoYXJk',
            ],
        ]);
    
        $statusCode = $response->getStatusCode();
        $body = $response->getBody();
        $data = json_decode($body);

        return view('list', ['data' => $data]);
    }
}
