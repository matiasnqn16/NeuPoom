<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\RolPermiso;
use Illuminate\Support\Facades\Auth;

class AppServiceProvider extends ServiceProvider
{
    static $composed;
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Menú dinamico
        view()->composer(['*'], function ($view) {
            static $data = null;
            static $dataGestion = null;

            if (is_null($data) && is_null($dataGestion)) {
                $user = Auth::user();
                $data = [];
                $dataGestion = [];
                if ($user) {
                    $data = RolPermiso::where('idRol', $user->rol->id)
                        ->whereHas('permiso', function($query) {
                            $query->where('nombrePermiso', 'NOT LIKE', 'Gestión%');
                        })->get();
                    $dataGestion = RolPermiso::where('idRol', $user->rol->id)
                        ->whereHas('permiso', function($query) {
                            $query->where('nombrePermiso', 'LIKE', 'Gestión%');
                        })->get();
                }
            }
        
            $view->with([
                'menus' => $data,
                'menusGestiones' => $dataGestion
            ]);
        });
    }
}
