<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\InvestorRelationController;
use App\Http\Controllers\ProductFrontController;
use App\Http\Controllers\NewsEventController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\InfoController;
use App\Http\Controllers\Admin\CategoryController;

require __DIR__.'/auth.php';
Route::get('admin', function() {
    return redirect('login');
})->name('dashboard');

if(config('app.env') === 'local') {
    Route::get('refresh_db', function () {
        \Artisan::call('migrate:fresh --seed');
        return 'Database Refreshed!';
    });
    Route::get('migrate_db', function () {
        \Artisan::call('migrate');
        return 'Database Migrated!';
    });
}

Route::group(['as' => 'pages.'], function () {
    Route::get('/', [PageController::class, 'home'])->name('home');
    Route::get('falak', [PageController::class, 'falak'])->name('falak');
    Route::get('basmati-rice', [PageController::class, 'basmatiRice'])->name('basmatiRice');
    Route::get('non-basmati-rice', [PageController::class, 'nonBasmatiRice'])->name('nonBasmatiRice');
    Route::get('organic-rice', [PageController::class, 'organicRice'])->name('organicRice');
    Route::get('rice-syrup', [PageController::class, 'riceSyrup'])->name('riceSyrup');
    Route::get('rice-protein', [PageController::class, 'riceProtien'])->name('riceProtien');
    Route::get('solids', [PageController::class, 'solids'])->name('solids');
    Route::get('other-leading-brands', [PageController::class, 'otherLeadingBrands'])->name('otherLeadingBrands');
    Route::get('private-labelling', [PageController::class, 'privateLabelling'])->name('privateLabelling');
    Route::get('search', [SearchController::class, 'index'])->name('search');
    Route::get('contact-us', [ContactController::class, 'index'])->name('contact');
    Route::get('careers', [CareerController::class, 'index'])->name('career');
    Route::get('sustainability', [PageController::class, 'sustainability'])->name('sustainability');
    Route::get('maize-corn-starch', [PageController::class, 'maize'])->name('maize');
    Route::get('news', [NewsEventController::class, 'index'])->name('news');
    Route::get('investor-relations', [InvestorRelationController::class, 'index'])->name('investorRelation');
    Route::get('about-us', [AboutController::class, 'index'])->name('about');
    Route::get('dextrose-monohydrate', [PageController::class, 'dextroseMonohydrate'])->name('dextroseMonohydrate');
    Route::resource('products', ProductFrontController::class);
});

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']], function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('products', ProductController::class);
    Route::get('product/list', [ProductController::class, 'getList'])->name('products.getList');
    Route::get('product/reorder', [ProductController::class, 'reorder'])->name('products.reorder');

    Route::resource('sliders', SliderController::class);
    Route::get('slider/list', [SliderController::class, 'getList'])->name('sliders.getList');
    Route::get('slider/reorder', [SliderController::class, 'reorder'])->name('sliders.reorder');

    Route::resource('news', NewsController::class);
    Route::get('new/list', [NewsController::class, 'getList'])->name('news.getList');
    Route::get('new/reorder', [NewsController::class, 'reorder'])->name('news.reorder');
    
    Route::resource('categories', CategoryController::class);
    Route::get('category/list', [CategoryController::class, 'getList'])->name('categories.getList'); 
    Route::get('category/reorder', [CategoryController::class, 'reorder'])->name('categories.reorder');

    Route::resource('settings', SettingController::class);
    Route::get('setting/list', [SettingController::class, 'getList'])->name('settings.getList'); 

    Route::resource('info', InfoController::class);
    Route::get('information/list', [InfoController::class, 'getList'])->name('info.getList');
    Route::get('information/reorder', [InfoController::class, 'reorder'])->name('info.reorder');
});