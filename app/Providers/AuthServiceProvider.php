<?php

namespace App\Providers;

use App\Models\book;
use App\Models\User;
use App\Policies\BookPolicy;
use App\Policies\UserPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        book::class => BookPolicy::class,
        User::class => UserPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        Gate::define('access-admin', function ($user) {
            return in_array($user->role->name, ['super_admin', 'admin', 'mod']);
        });
        Gate::define('view-story', function ($user) {
            return in_array($user->role->name, ['super_admin', 'admin']);
        });
        Gate::define('view-author', function ($user) {
            return in_array($user->role->name, ['super_admin', 'admin']);
        });

        Gate::define('view-users', function ($user) {
            return $user->role->name === 'super_admin';
        });

        Gate::define('view-categories', function ($user) {
            return in_array($user->role->name, ['super_admin', 'admin']);
        });

        Gate::define('manage-creative', function ($user) {
            return in_array($user->role->name, ['super_admin', 'admin']);
        });

        Gate::define('manage-discussions', function ($user) {
            return in_array($user->role->name, ['super_admin', 'admin']);
        });

        Gate::define('manage-groups', function ($user) {
            return in_array($user->role->name, ['super_admin', 'admin']);
        });
        Gate::define('upgrade', function (User $user) {
            return $user->role->name === 'user';
        });

        Gate::define('create', function (User $user) {
            return in_array($user->role->name, ['author', 'super_admin', 'admin', 'mod']);
        });
    }
}
