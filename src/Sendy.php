<?php

namespace TFS\Sendy;

use Illuminate\Support\Facades\Http;


class Sendy
{
    public function processRequest($params, $mode)
    {
        if ($mode == 'sandbox') {
            $url = 'https://apitest.sendyit.com/v1';
        } elseif ($mode == 'live') {
            $url = 'https://api.sendyit.com/v1';
        } else {
            return "Error!! You must specify the mode as either live or sandbox!";
        }
        $response = Http::post($url, $params);
        return $response->json();
    }
}
