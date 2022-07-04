<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use guzzleHttp\Exception\RequestException;

class TestController extends Controller
{
    public function searchData(Request $request){
        $client = new Client();
		$token = '73606313f8af1d60930bb7847fe5f8d4';
        $language = $request->language;
		$country = $request->country;
		//print_r($query );exit;
		$url = 'https://gnews.io/api/v4/search?token='.urlencode($token).'&lang='.$language.'&country='.$country.'&max=10&q=all';

        $req = $client->get($url);
        $response = $req->getBody();
        $result= json_decode($response);
        return view('welcome',['articles'=>$result->articles]);
        
    }
}
