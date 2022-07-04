<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use guzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\DB;


class NewsController extends Controller
{
    public function getData(){
        $client=new Client();
		
		$token = '73606313f8af1d60930bb7847fe5f8d4';
		
        $url = 'https://gnews.io/api/v4/search?token='.urlencode($token).'&lang=hi&country=in&max=15&q=all';

        $request=$client->get($url);
        $response=$request->getBody();
        $result=json_decode($response);
        return view('welcome',['articles'=>$result->articles]);
    }
    
}
