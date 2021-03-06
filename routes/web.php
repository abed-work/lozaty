<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DiscoverLozaty;
use App\Http\Controllers\FlavorController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\GlobalPresenceController;
use App\Http\Controllers\OverviewController;
use App\Http\Controllers\CompositionController;
use App\Http\Controllers\ContactController;

use Illuminate\Support\Facades\Route;

use App\Models\Video;
use App\Models\GlobalPresence;
use App\Models\Flavor;
use App\Models\Overview;
use App\Models\Composition;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
})->name('language');

Route::get('/', function ($locale=null) {
    if (isset($locale) && in_array($locale, config('app.available_locales'))) {
        app()->setLocale($locale);
    }
    
    return view('welcome');
})->name('home');



Route::get('/discover', function () {
    return view('discover',[
        'flavors'       => Flavor::all(),
        'overview'      => Overview::all(),
        'composition'   => Composition::all()
    ]); 
})->name('discover');

Route::get('/videos', function () {
    return view('videos',[
        'videos' => Video::all()
    ]);
})->name('videos');

Route::get('/global-presence', function () {
    return view('global-presence',[
        'countries' => GlobalPresence::select('country_code')->get()
    ]);
})->name('global-presence');

Route::get('/contact-us', function () {
    return view('contact');
})->name('contact');


Route::get('/login', [AuthController::class,'index'])->name('login');
Route::post('/login', [AuthController::class,'authenticate']);

Route::post('/send-mail', [ContactController::class,'sendMail']);


Route::middleware('auth')->prefix('dashboard')->name('dashboard.')->group(function () {

    Route::post('/logout', [AuthController::class,'logout'])->name('logout');
    
    Route::get('/', [AdminController::class,'index'])->name('home');

    Route::resource('videos', VideoController::class);

    Route::get('global-presence/active', [GlobalPresenceController::class,'getActiveCountries']);
    Route::resource('global-presence', GlobalPresenceController::class);

    Route::resource('discover-lozaty', DiscoverLozaty::class);

    Route::post('/overview/{id}',[OverviewController::class,'store'])->name('overview');

    Route::post('/composition/{id}',[CompositionController::class,'store'])->name('composition');

    Route::resource('flavors', FlavorController::class);


});
