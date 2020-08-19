# Overview
This is a Laravel SDK consuming <a target="_blank" href="https://sendypublicapi.docs.apiary.io/">Sendy Public API</a>, allowing you to easily make your request.

# Installation
composer require tfs/sendy

<b>NOTE:</b> Confirm that <code>TFS\Sendy\SendyServiceProvider::class</code> service provider has been automatically registered inside your <code>config/app.config</code>

# Usage
The whole point of this, is to reduce the hassle of using Sendy's Public API
https://sendypublicapi.docs.apiary.io/

<code>
    use TFS\Sendy\Sendy;




    $sendy = new Sendy;

    //processing request
    $response = $sendy->processRequest($params, $mode);
</code>

<table>
    <tr>
        <th>Variable</th>
        <th>Type</th>
        <th>Description</th>
    </tr>
    <tr>
        <td>$params</td>
        <td>array</td>
        <td>Parameters to pass to <a target="_blank" href="https://sendypublicapi.docs.apiary.io/">Sendy Public API</a></td>
    </tr>
    <tr>
        <td>$mode</td>
        <td>string</td>
        <td>'sandbox' or 'live'</td>
    </tr>
</table>

<p>Happy Coding!!</p>

