<?php

namespace App\Providers;

use Dedoc\Scramble\Scramble;
use Illuminate\Support\ServiceProvider;

class SwaggerServiceProvider extends ServiceProvider
{
  public function boot(): void
  {
    Scramble::registerApi('default', ['api_path' => '']);

    Scramble::routes(fn() => true);
  }
}
