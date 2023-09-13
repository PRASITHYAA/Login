<?php
use App\Http\Controllers\AchievementController;
use App\Http\Controllers\CardsController;
use App\Http\Controllers\DisclaimerController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\EmploymentController;
use App\Http\Controllers\EnergyController;
use App\Http\Controllers\ForgetPasswordController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\JobApplicationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\SectorController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

// registration
Route::view('/', 'auth.Registration');
Route::Post('store', [StoreController::class, 'store']);

// login
Route::view('/login', 'auth.Login')->name('login');
Route::Post('authenticate', [LoginController::class, 'authenticate']);
Route::get('logout', [LoginController::class, 'logout']);

// dashboard
//Route::view('/home', 'auth.Home')->middleware('auth')->name('home');

//  forget password form
Route::get('forgetpassword', [ForgetPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forgetpassword', [ForgetPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [ForgetPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgetPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

Route::group(['middleware' => ['auth', 'role:Admin']], function () {
    //dashboard
    Route::view('/admin', 'admin')->middleware('auth')->name('admin');
    //  customer(user)
    Route::get('users', [UserController::class, 'index'])->name('users.index');
    Route::get('users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('users', [UserController::class, 'store'])->name('users.store');
    Route::get('users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('users/{user}', [UserController::class, 'update'])->name('users.update');
    Route::delete('users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

    // sector
    Route::get('/sector', [SectorController::class, 'index'])->name('sector.index');
    Route::get('/sector/create', [SectorController::class, 'create'])->name('sector.create');
    Route::post('/sector', [SectorController::class, 'store'])->name('sector.store');
    Route::get('/sector/{sector}', [SectorController::class, 'show'])->name('sector.show');
    Route::get('/sector/{sector}/edit', [SectorController::class, 'edit'])->name('sector.edit');
    Route::put('/sector/{sector}', [SectorController::class, 'update'])->name('sector.update');
    Route::delete('/sector/{sector}', [SectorController::class, 'destroy'])->name('sector.destroy');

    // position

    Route::get('/position', [PositionController::class, 'index'])->name('position.index');
    Route::get('/position/create', [PositionController::class, 'create'])->name('position.create');
    Route::post('/position', [PositionController::class, 'store'])->name('position.store');
    Route::get('/position/{position}', [PositionController::class, 'show'])->name('position.show');
    Route::get('/position/{position}/edit', [PositionController::class, 'edit'])->name('position.edit');
    Route::put('/position/{position}', [PositionController::class, 'update'])->name('position.update');
    Route::delete('/position/{position}', [PositionController::class, 'destroy'])->name('position.destroy');

    // energy

    Route::get('/energy', [EnergyController::class, 'index'])->name('energy.index');
    Route::get('/energy/create', [EnergyController::class, 'create'])->name('energy.create');
    Route::post('/energy', [EnergyController::class, 'store'])->name('energy.store');
    Route::get('/energy/{energy}', [EnergyController::class, 'show'])->name('energy.show');
    Route::get('/energy/{energy}/edit', [EnergyController::class, 'edit'])->name('energy.edit');
    Route::put('/energy/{energy}', [EnergyController::class, 'update'])->name('energy.update');
    Route::delete('/energy/{energy}', [EnergyController::class, 'destroy'])->name('energy.destroy');

    //  training
    Route::get('/training', [TrainingController::class, 'index'])->name('training.index');
    Route::get('/training/create', [TrainingController::class, 'create'])->name('training.create');
    Route::post('/training', [TrainingController::class, 'store'])->name('training.store');
    Route::get('/training/{training}', [TrainingController::class, 'show'])->name('training.show');
    Route::get('/training/{training}/edit', [TrainingController::class, 'edit'])->name('training.edit');
    Route::put('/training/{training}', [TrainingController::class, 'update'])->name('training.update');
    Route::delete('/training/{training}', [TrainingController::class, 'destroy'])->name('training.destroy');
});

Route::group(['middleware' => ['auth']], function () {
    // home
    Route::view('/home', 'home')->name('dashboard');
});

//   instruction
Route::view('/instruction', 'career.instruction')->name('career.instruction');

// job application

Route::get('/job_applications', [JobApplicationController::class, 'index'])->name('career.job_application.index');
Route::view('/job_application', 'career.job_application.create')->name('job_application');
Route::post('/job_application', [JobApplicationController::class, 'store'])->name('career.job_application.store');
Route::get('/job_application/{id}', [JobApplicationController::class, 'show'])->name('career.job_application.show');
Route::get('/job_application/{id}/edit', [JobApplicationController::class, 'edit'])->name('career.job_application.edit');
Route::put('/job_application/{id}', [JobApplicationController::class, 'update'])->name('career.job_application.update');
Route::delete('/job_application/{id}', [JobApplicationController::class, 'destroy'])->name('career.job_application.destroy');
Route::get('/positions-ajax', [PositionController::class, 'getPositions'])->name('positions.ajax');
Route::get('/cities-ajax', [JobApplicationController::class, 'getCities'])->name('cities.ajax');

// Use a controller method for image preview
Route::get('/image-preview/{id}', [JobApplicationController::class, 'showImagePreview'])->name('image.preview');

// card

Route::view('/card', 'career.card.create')->name('card.view');
Route::post('/card', [CardsController::class, 'store'])->name('career.card.store');
Route::get('/card/{id}', [CardsController::class, 'show'])->name('career.card.show');
Route::get('/card/{id}/edit', [CardsController::class, 'edit'])->name('career.card.edit');
Route::put('/card/{id}', [CardsController::class, 'update'])->name('career.card.update');
Route::delete('/card/{id}', [CardsController::class, 'destroy'])->name('career.card.destroy');

//  education
Route::get('/education', [EducationController::class, 'create'])->name('education.view');
Route::post('/education', [EducationController::class, 'store'])->name('career.education.store');
Route::get('/education/{id}', [EducationController::class, 'show'])->name('career.education.show');
Route::get('/education/{id}/edit', [EducationController::class, 'edit'])->name('career.education.edit');
Route::put('/education/{id}', [EducationController::class, 'update'])->name('career.education.update');
Route::delete('/education/{id}', [EducationController::class, 'destroy'])->name('career.education.destroy');


//  achievement

Route::view('/achievement', 'career.achievement.create')->name('achievement.view');
Route::post('/achievement', [AchievementController::class, 'store'])->name('career.achievement.store');
Route::get('/achievement/{id}', [AchievementController::class, 'show'])->name('career.achievement.show');
Route::get('/achievement/{id}/edit', [AchievementController::class, 'edit'])->name('career.achievement.edit');
Route::put('/achievement/{id}', [AchievementController::class, 'update'])->name('career.achievement.update');
Route::delete('/achievement/{id}', [AchievementController::class, 'destroy'])->name('career.achievement.destroy');


//  disclaimer

Route::view('/disclaimer', 'career.disclaimer.create')->name('disclaimer.view');
Route::post('/disclaimer', [DisclaimerController::class, 'store'])->name('career.disclaimer.store');
Route::get('/disclaimer/{id}', [DisclaimerController::class, 'show'])->name('career.disclaimer.show');
Route::get('/disclaimer/{id}/edit', [DisclaimerController::class, 'edit'])->name('career.disclaimer.edit');
Route::put('/disclaimer/{id}', [DisclaimerController::class, 'update'])->name('career.disclaimer.update');
Route::delete('/disclaimer/{id}', [DisclaimerController::class, 'destroy'])->name('career.disclaimer.destroy');
Route::get('acknowledgement', [DisclaimerController::class, 'acknowledgement'])->name('acknowledgement');
Route::get('download/pdf', [DisclaimerController::class, 'downloadPdf'])->name('download.pdf');

// employment

Route::view('/employment', 'career.employment.create')->name('employment.view');
Route::post('/employment', [EmploymentController::class, 'store'])->name('career.employment.store');
Route::get('/employment/{id}', [EmploymentController::class, 'show'])->name('career.employment.show');
Route::get('/employment/{id}/edit', [EmploymentController::class, 'edit'])->name('career.employment.edit');
Route::put('/employment/{id}', [EmploymentController::class, 'update'])->name('career.employment.update');
Route::delete('/employment/{id}', [EmploymentController::class, 'destroy'])->name('career.employment.destroy');


//  demo
Route::view('/demo', 'demo');
Route::post('/demo', [JobApplicationController::class, 'store'])->name('career.demo.store');
