<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    //

  public function postGuzzleRequest()

{

    $client = new \GuzzleHttp\Client();

    $url = "http://api.worldbank.org/v2/datacatalog?format=json";

    $myBody['name'] = "Demo";

    $request = $client->post($url,  ['body'=>$myBody]);

    $response = $request->send();



    dd($response);

}
public function getGuzzleRequest()

{

    $client = new \GuzzleHttp\Client();

    $request = $client->get('http://api.worldbank.org/v2/datacatalog?format=json');

    $response = $request->getBody();



    dd($response);

}
   
}
