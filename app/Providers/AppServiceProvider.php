<?php

namespace App\Providers;

use App\Models\Student;
use Illuminate\Support\Facades\View;
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
        //

        View::share('title', 'Student Admin');
        // View::composer('student.index', function ($view) {
        //     $view->with('students', Student::all());
        // });
    }
}
