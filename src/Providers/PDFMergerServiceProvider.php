<?php

namespace GFernandezMe\LaravelPDFMerger\Providers;

use GFernandezMe\LaravelPDFMerger\PDFMerger;
use Illuminate\Support\ServiceProvider;

class PDFMergerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
      $this->app->singleton('PDFMerger', function ($app) {
          $pdfMerger = new PDFMerger($app['files']);
          return $pdfMerger;
      });
    }
}
