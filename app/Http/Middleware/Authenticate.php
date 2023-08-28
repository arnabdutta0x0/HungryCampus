<?php
namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        if (!$request->expectsJson()) 
        {
            // Check if the user is authenticated
            $user = $request->user();

            if (!$user) {
                // Redirect to the signpage if the user is not authenticated
                return '/';
            }

            // Check the user's role
            if ($user->role == 'admin') {
                // Redirect admin to admin.blade.php
                return route('/admin');
            } else {
                // Redirect user to main.blade.php
                return route('/main');
            }
        }

        return null;
    }
}
