<?php
namespace TFS\Sendy;

use Illuminate\Support\ServiceProvider;

class SendyServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
    }
    public function register()
    { }
}
