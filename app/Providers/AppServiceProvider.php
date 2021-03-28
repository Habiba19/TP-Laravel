<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::if('accomplie', function ($expr) {
            return (empty(with($expr)) || with($expr) === 'N' ? false
           : true);
            });
            Blade::directive(
            'frdatetime',
            function ($expr) {
            $ret = "<?php ";
            $ret .= "setlocale(LC_TIME, 'fr_FR');";
            $ret .= "echo Carbon\Carbon::parse(with({$expr}))->for
           matLocalized(\"%A %d %B %Y\");";
            $ret .= "?>";
            return $ret;
            }
        );
    }

}
