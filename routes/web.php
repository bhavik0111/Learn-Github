<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\PracticeController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ProjectsController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\HomeSliderController;
use App\Http\Controllers\Admin\PartnerLogoController;
use App\Http\Controllers\Admin\RecentWorksController;
use App\Http\Controllers\Admin\AboutSettingController;
use App\Http\Controllers\Admin\WorkSolutionController;
use App\Http\Controllers\Admin\GlobalSettingController;

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
Route::get('/clear', function () {
    Artisan::call('optimize:clear');
    echo 'Cache Cleared';
    exit;
});

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/service/{id}', [HomeController::class, 'service'])->name('service');
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');

Route::get('/project/{type}', [HomeController::class, 'flat'])->name('front.project');
Route::get('/project/details/{id}', [HomeController::class, 'show'])->name('front.project.show');

Route::get('/portfolio', [HomeController::class, 'portfolio'])->name('front.portfolio');
// Route::get('/4bhk-flats', [HomeController::class, 'flat_4'])->name('front.flats.4bhk');

//**********contact Us...**********
Route::get('/contactus', [HomeController::class, 'contactus'])->name('contactus');
Route::post('/contact-us-mailed', [HomeController::class, 'contactmailsend'])->name('contact_mail_send');


Route::group(['prefix' => 'admin'], function () {
    Auth::routes();
});

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {

    Route::get('/dashbord', [AdminController::class, 'dashbord'])->name('admin.dashbord');

    Route::get('/profile', [AdminController::class, 'profile'])->name('admin.profile.adminprofile');
    Route::post('/profile-update/{id}', [AdminController::class, 'profileupdate'])->name('admin.profile.update');

    Route::get('/home-slider/create', [HomeSliderController::class, 'create'])->name('admin.home_slider.create');
    Route::post('/home-slider/store', [HomeSliderController::class, 'store'])->name('admin.home_slider.store');
    Route::get('/home-slider', [HomeSliderController::class, 'index'])->name('admin.home_slider.index');
    Route::get('/home-slider/edit/{id}', [HomeSliderController::class, 'edit'])->name('admin.home_slider.edit');
    Route::post('/home-slider/update/{id}', [HomeSliderController::class, 'update'])->name('admin.home_slider.update');
    Route::delete('/home-slider/delete/{id}', [HomeSliderController::class, 'destroy'])->name('admin.home_slider.destroy');

    Route::get('/work-solution/create', [WorkSolutionController::class, 'create'])->name('admin.work_solution.create');
    Route::post('/work-solution/store', [WorkSolutionController::class, 'store'])->name('admin.work_solution.store');
    Route::get('/work-solution', [WorkSolutionController::class, 'index'])->name('admin.work_solution.index');
    Route::get('/work-solution/edit/{id}', [WorkSolutionController::class, 'edit'])->name('admin.work_solution.edit');
    Route::post('/work-solution/update/{id}', [WorkSolutionController::class, 'update'])->name('admin.work_solution.update');
    Route::delete('/work-solution/delete/{id}', [WorkSolutionController::class, 'destroy'])->name('admin.work_solution.destroy');

    Route::get('/recent_work/create', [RecentWorksController::class, 'create'])->name('admin.recent_work.create');
    Route::post('/recent_work/store', [RecentWorksController::class, 'store'])->name('admin.recent_work.store');
    Route::get('/recent_work', [RecentWorksController::class, 'index'])->name('admin.recent_work.index');
    Route::get('/recent_work/edit/{id}', [RecentWorksController::class, 'edit'])->name('admin.recent_work.edit');
    Route::post('/recent_work/update/{id}', [RecentWorksController::class, 'update'])->name('admin.recent_work.update');
    Route::delete('/recent_work/delete/{id}', [RecentWorksController::class, 'destroy'])->name('admin.recent_work.destroy');

    Route::get('/project/create', [ProjectsController::class, 'create'])->name('admin.project.create');
    Route::post('/project/store', [ProjectsController::class, 'store'])->name('admin.project.store');
    Route::get('/project', [ProjectsController::class, 'index'])->name('admin.project.index');
    Route::get('/project/edit/{id}', [ProjectsController::class, 'edit'])->name('admin.project.edit');
    Route::post('/project/update/{id}', [ProjectsController::class, 'update'])->name('admin.project.update');
    Route::delete('/project/delete/{id}', [ProjectsController::class, 'destroy'])->name('admin.project.destroy');

    Route::get('/service/create', [ServiceController::class, 'create'])->name('admin.services.create');
    Route::post('/service/store', [ServiceController::class, 'store'])->name('admin.services.store');
    Route::get('/service', [ServiceController::class, 'index'])->name('admin.services.index');
    Route::get('/service/edit/{id}', [ServiceController::class, 'edit'])->name('admin.services.edit');
    Route::post('/service/update/{id}', [ServiceController::class, 'update'])->name('admin.services.update');
    Route::delete('/service/delete/{id}', [ServiceController::class, 'destroy'])->name('admin.services.destroy');

    Route::get('/portfolio/create', [PortfolioController::class, 'create'])->name('admin.portfolio.create');
    Route::post('/portfolio/store', [PortfolioController::class, 'store'])->name('admin.portfolio.store');
    Route::get('/portfolio', [PortfolioController::class, 'index'])->name('admin.portfolio.index');
    Route::get('/portfolio/edit/{id}', [PortfolioController::class, 'edit'])->name('admin.portfolio.edit');
    Route::post('/portfolio/update/{id}', [PortfolioController::class, 'update'])->name('admin.portfolio.update');
    Route::delete('/portfolio/delete/{id}', [PortfolioController::class, 'destroy'])->name('admin.portfolio.destroy');

    // *All logo
    Route::get('/logo/create', [PartnerLogoController::class, 'create'])->name('admin.logos.create');
    Route::post('/logo-store', [PartnerLogoController::class, 'store'])->name('admin.logos.store');
    Route::get('/all-logos', [PartnerLogoController::class, 'index'])->name('admin.logos.index');
    Route::get('/logo/edit/{id}', [PartnerLogoController::class, 'edit'])->name('admin.logos.edit');
    Route::post('/logo/update/{id}', [PartnerLogoController::class, 'update'])->name('admin.logos.update');
    Route::delete('/logo/delete/{id}', [PartnerLogoController::class, 'destroy'])->name('admin.logos.destroy');

    Route::get('/about-us-setting', [AboutSettingController::class, 'create'])->name('admin.about.create');
    Route::post('/about-us-setting-store', [AboutSettingController::class, 'store'])->name('admin.about.store');

    // *global setting
    Route::get('global-settings', [GlobalSettingController::class, 'create'])->name('admin.global_setting.create');
    Route::post('/global-settings-tore', [GlobalSettingController::class, 'store'])->name('admin.global_setting.store');



    // ********** practice data **********

    Route::get('/practice/create', [PracticeController::class, 'create'])->name('admin.practice.create');
    Route::post('/practice-store', [PracticeController::class, 'store'])->name('admin.practice.store');
    Route::get('/practice', [PracticeController::class, 'index'])->name('admin.practice.index');




});













