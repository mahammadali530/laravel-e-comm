<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\UserController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\iconController;
use App\Http\Controllers\loginController;
use App\Http\Middleware\RedirectIfAuthenticatedAndNotLoggedIn;

Route::middleware([RedirectIfAuthenticatedAndNotLoggedIn::class])->group(function () {
    Route::get('/index', function () {
        return view('index');
    })->name('home');
    // Route::get('/components-alerts', function () {
    //     return view('components-alerts');
    // });

    // Route::get('/components-accordion', function () {
    //     return view('components-accordion');
    // });

    // Route::get('/components-badges', function () {
    //     return view('components-badges');
    // });

    // Route::get('/components-breadcrumbs', function () {
    //     return view('components-breadcrumbs');
    // });

    // Route::get('/components-buttons', function () {
    //     return view('components-buttons');
    // });

    // Route::get('/components-cards', function () {
    //     return view('components.cards');
    // });

    // Route::get('/components-carousel', function () {
    //     return view('components-carousel');
    // });

    // Route::get('/components-list-group', function () {
    //     return view('components-list-group');
    // });

    // Route::get('/components-modal', function () {
    //     return view('components-modal');
    // });

    // Route::get('/components-tabs', function () {
    //     return view('components-tabs');
    // });

    // Route::get('/components-pagination', function () {
    //     return view('components-pagination');
    // });
    // Route::get('/components-progress', function () {
    //     return view('components-progress');
    // });

    // Route::get('/components-spinners', function () {
    //     return view('components-spinners');
    // });


    // Route::get('/components-tooltips', function () {
    //     return view('components-tooltips');
    // });
    // Route::get('/forms-layouts', function () {
    //     return view('forms-layouts');
    // });
    // Route::get('/forms-validation', function () {
    //     return view('forms-validation');
    // });

    // Route::get('/tables-data', function () {
    //     return view('tables-data');
    // });
    // Route::get('/tables-general', function () {
    //     return view('tables-general');
    // });
    // Route::get('/icons-bootstrap', function () {
    //     return view('icons-bootstrap');
    // });

    // Route::get('/icons-boxicons', function () {
    //     return view('icons-boxicons');
    // });
    // Route::get('/icons-remix', function () {
    //     return view('icons-remix');
    // });
    // Route::get('/users-profile', function () {
    //     return view('users-profile');
    // });
    // Route::get('/pages-faq', function () {
    //     return view('pages-faq');
    // });

    // Route::get('/pages-contact', function () {
    //     return view('pages-contact');
    // });
    Route::get('/pages-register', function () {
        return view('pages-register');
    });
    Route::get('/pages-login', function () {
        return view('pages-login');
    });
    Route::get('/pages-error-404', function () {
        return view('pages-error-404');
    });
    Route::get('/crud', function () {
        return view('crud');
    });
    
   
});
// Route::get('/login', [FrontendController::class, 'index']);
//  Route::post('/login', [FrontendController::class, 'index']);
 Route::get('/login', function () {
    return view('frontend.partials.login');
});
Route::get('/logoutt', function () {
    Session::forget('user');
    return redirect('login');
});

Route::view('/Register','frontend.partials.Register');

 Route::post("/login", [loginController::class, 'add']);
 Route::post("/Register", [loginController::class, 'Register']);
 Route::get("/", [FrontendController::class, 'index']);

 //Route::get('logout', [FrontendController::class, 'logout'])->name('logout');




//Route::get('/', [FrontendController::class, 'home']);
Route::post('/add_to_cart', [FrontendController::class, 'addToCart']);
Route::get('/cartlist', [FrontendController::class, 'cartlist']);
Route::get('/removecart/{id}', [FrontendController::class, 'removeCart']);

Route::get('/ordernow', [FrontendController::class, 'ordernow']);
Route::post('/orderplace', [FrontendController::class, 'orderplace']);
Route::get('/myorders', [FrontendController::class, 'myorders']);


// Route::get('/order-form/{product_id}', [FrontendController::class, 'showOrderForm']);

// Route::get('/master', [UsersController::class, 'master']);

// register

Route::view('pages-register', 'pages-register');
Route::post('pages-register', [UsersController::class, 'add']);
Route::get('pages-register', [UsersController::class, 'addd']);
Route::get('logout', [UsersController::class, 'logout'])->name('logout');


// login

Route::view('/pages-login', 'pages-login')->name('login');
Route::post('pages-login', [UsersController::class, 'login'])->name('login.post');

// add data
Route::post('/crud', [iconController::class, 'icon']);
Route::get('/crud', [iconController::class, 'icon2']);

// edit delete

Route::get('delete/{id}', [iconController::class,'delete']);
Route::get('edit/{id}', [iconController::class,'edit']);
Route::put('edit-student/{id}', [iconController::class,'editstudent']);


