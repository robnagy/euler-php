<?php

namespace App\Providers;

use App\Contracts\SolutionServiceInterface;
use App\Services\SolutionService;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Log;

class SolutionServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(
            'App\Contracts\SolutionServiceInterface',
            'App\Services\SolutionService');
    }
}
