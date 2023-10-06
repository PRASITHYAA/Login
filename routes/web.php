<?php
use App\Http\Controllers\AchievementController;
use App\Http\Controllers\CardsController;
use App\Http\Controllers\CourseLevelController;
use App\Http\Controllers\CourseTitleController;
use App\Http\Controllers\DisclaimerController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\EmploymentController;
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
use App\Http\Controllers\FrontController;
use App\Http\Controllers\Auth\VerifyEmailController;

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
Route::view('/', 'auth.Registration')->middleware('guest');
Route::Post('store', [StoreController::class, 'store'])->middleware('guest');
// login
Route::view('/login', 'auth.Login')->name('login')->middleware('guest');
Route::Post('authenticate', [LoginController::class, 'authenticate'])->middleware('guest');
//verify
Route::get('/email/verify/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
    ->middleware(['signed', 'throttle:6,1'])
    ->name('verification.verify')->middleware('guest');
//logout
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

//  forget password form
Route::get('forgetpassword', [ForgetPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get')->middleware('guest');
Route::post('forgetpassword', [ForgetPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post')->middleware('guest');
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

    //  training

    Route::get('/training', [TrainingController::class, 'index'])->name('training.index');
    Route::get('/training/create', [TrainingController::class, 'create'])->name('training.create');
    Route::post('/training', [TrainingController::class, 'store'])->name('training.store');
    Route::get('/training/{training}', [TrainingController::class, 'show'])->name('training.view');
    Route::delete('/training/{training}', [TrainingController::class, 'destroy'])->name('training.destroy');

    //course_level
    Route::get('/course_level', [CourseLevelController::class, 'index'])->name('course_level.index');
    Route::get('/course_level/create', [CourseLevelController::class, 'create'])->name('course_level.create');
    Route::post('/course_level', [CourseLevelController::class, 'store'])->name('course_level.store');
    Route::get('/course_level/{course_level}/edit', [CourseLevelController::class, 'edit'])->name('course_level.edit');
    Route::put('/course_level/{course_level}', [CourseLevelController::class, 'update'])->name('course_level.update');
    Route::delete('/course_level/{course_level}', [CourseLevelController::class, 'destroy'])->name('course_level.destroy');

    // course_title

    Route::get('/course_title', [CourseTitleController::class, 'index'])->name('course_title.index');
    Route::get('/course_title/create', [CourseTitleController::class, 'create'])->name('course_title.create');
    Route::post('/course_title', [CourseTitleController::class, 'store'])->name('course_title.store');
    Route::get('/course_title/{course_title}', [CourseTitleController::class, 'show'])->name('course_title.show');
    Route::get('/course_title/{course_title}/edit', [CourseTitleController::class, 'edit'])->name('course_title.edit');
    Route::put('/course_title/{course_title}', [CourseTitleController::class, 'update'])->name('course_title.update');
    Route::delete('/course_title/{course_title}', [CourseTitleController::class, 'destroy'])->name('course_title.destroy');
});

Route::group(['middleware' => ['auth']], function () {
    // home
    Route::view('/home', 'overview')->name('dashboard');
    Route::view('/careers', 'home')->name('careers');
    Route::view('/trainings', 'trainings')->name('trainings');
    Route::get('/user-careers-list', [FrontController::class, 'userCareers'])->name('user.careers.list');
    Route::get('/user-trainings-list', [FrontController::class, 'userTrainings'])->name('user.trainings.list');
    Route::view('/change-password', 'change_password')->name('change.password');
    Route::post('/change-password',  [UserController::class, 'changePassword'])->name('change.password');
    Route::view('/profile', 'profile')->name('profile');
    Route::post('/profile', [UserController::class, 'updateProfile'])->name('profile');
    Route::get('/trainings/{id}', [TrainingController::class ,'trainingView'])->name('trainings.views');
    Route::get('/trainings/{id}/edit', [TrainingController::class ,'trainingView'])->name('trainings.edit');
    Route::delete('/trainings/{id}', [TrainingController::class ,'destroy'])->name('trainings.destroy');
    Route::view('/trainings/apply', 'trainings_apply')->name('trainings.apply');
    Route::post('/trainings/apply/store', [TrainingController::class, 'store'])->name('trainings.apply.store');
});

//   instruction
Route::view('/instruction', 'career.instruction')->name('career.instruction');

// job application

Route::get('/job_applications', [JobApplicationController::class, 'index'])->name('career.job_application.index');
Route::get('/job_application', [JobApplicationController::class, 'create'])->name('job_application');
Route::post('/job_application', [JobApplicationController::class, 'store'])->name('career.job_application.store');
Route::get('/job_application/{id}', [JobApplicationController::class, 'show'])->name('career.job_application.show');
Route::get('/job_application/{id}/edit', [JobApplicationController::class, 'edit'])->name('career.job_application.edit');
Route::put('/job_application/{id}', [JobApplicationController::class, 'update'])->name('career.job_application.update');
Route::delete('/job_application/{id}', [JobApplicationController::class, 'destroy'])->name('career.job_application.destroy');
Route::get('/positions-ajax', [PositionController::class, 'getPositions'])->name('positions.ajax');
Route::get('/cities-ajax', [JobApplicationController::class, 'getCities'])->name('cities.ajax');
Route::get('/states-ajax', [JobApplicationController::class, 'getStates'])->name('states.ajax');
Route::get('/course-levels-ajax', [CourseLevelController::class, 'getCourseLevels'])->name('course.levels.ajax');
Route::get('/course-titles-ajax', [CourseTitleController::class, 'getCourseTitles'])->name('course.titles.ajax');

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

// employment

Route::get('/employment', [EmploymentController::class, 'create'])->name('employment.view');
Route::post('/employment', [EmploymentController::class, 'store'])->name('career.employment.store');
Route::get('/employment/{id}', [EmploymentController::class, 'show'])->name('career.employment.show');
Route::get('/employment/{id}/edit', [EmploymentController::class, 'edit'])->name('career.employment.edit');
Route::put('/employment/{id}', [EmploymentController::class, 'update'])->name('career.employment.update');
Route::delete('/employment/{id}', [EmploymentController::class, 'destroy'])->name('career.employment.destroy');

//  achievement

Route::get('/achievement', [AchievementController::class, 'create'])->name('achievement.view');
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
