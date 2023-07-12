<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    CompetenciaController,
    EstadoController,
    CompetidorController,
    PerfilController,
    UsuarioController,
    LogoutController,
    HomeController,
    RegistroController,
    LoginController,
    CompetenciaCompetidorController,
    CompetenciaJuezController,
    PuntajeController,
    SolicitudController,
    CompetenciaCompetidorPoomsaeController,
    CategoriaController,
    CategoriaGraduacionController,
    CategoriaPoomsaeController,
    PaisController,
    PermisoController,
    PoomsaeController,
    RelojController,
    NotificacionController
};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/* esta son las rutas para invitados */
Route::group(['middleware' => ['guest']], function() {
        /**
         * registro Routes
         */
        Route::get('/registro', [RegistroController::class, 'show'])->name('registro.show');
        Route::post('/registro', [RegistroController::class, 'register'])->name('registro.perform');

        /**
         * Login Routes
         */
        Route::get('/login', [LoginController::class, 'show'])->name('login.show');
        Route::post('/login', [LoginController::class, 'perform'])->name('login.perform');

});
