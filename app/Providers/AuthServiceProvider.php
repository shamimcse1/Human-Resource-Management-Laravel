<?php

namespace App\Providers;

use App\Models\User;
use App\Policies\HrPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        /* define a admin user role */
        // Gate::define('isHr', function (User $user) {
        //     if ($user->role == "hr") {
        //         return true;
        //     }
        //     return false;
        // });

        Gate::define('isHr', [HrPolicy::class, 'hr']);

        /* define a manager user role */
        Gate::define('isEmployee', function ($user) {
            return $user->role == 'employee';
        });
    }
}
