<?php
use TFS\Sendy\Sendy;

Route::get('sendy', function () {
    $sendy = new Sendy;
    $response = $sendy->processRequest([
        'command' => 'request',
        'data' => [
            'api_key' => '',
            'api_username' => '',
        ],
    ], 'sandbox');
    return response()->json([$response, 'This is just a test operation use the Sendy class to process your own sendy request!']);
});
