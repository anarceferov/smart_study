<?php

namespace App\Http\Controllers\Back;

use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;
use Illuminate\Http\Client\Response;
use Illuminate\Http\Request;
use App\Models\Test;
use GuzzleHttp\Client;


class TestController extends Controller
{
    function index()
    {
        //  $response = Http::get('https://jsonplaceholder.typicode.com/posts');
        //  return $response->json();

        //  return Http::dd()->get('https://jsonplaceholder.typicode.com/posts');

    }
}
