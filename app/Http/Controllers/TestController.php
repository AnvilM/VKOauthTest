<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use VK\OAuth\VKOAuth;

class TestController extends Controller
{
    function auth(Request $request): \Illuminate\Http\JsonResponse
    {
        $oauth = new VKOAuth();

        return response()->json(
            $oauth->getAccessToken(
                config('services.vk.client_id'),
                config('services.vk.client_secret'),
                config('services.vk.redirect_uri'),
                $request->query('code')
            )
        );
    }

    function test()
    {
        return response('aboba');
    }
}
