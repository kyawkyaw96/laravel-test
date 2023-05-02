<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Http;
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



// Route::get('/', function () {
//     return view("index",["myName"=>"kyaw kyaw","age"=>27])->name("page.home");
// });


Route::get("/",[TestController::class,"mySelf"])->name("page.home");


Route::get("/about-us",[TestController::class,"age"])->name("page.about");
Route::get("/contact-us",[TestController::class,"phone"])->name("page.contact");


//static route test

Route::get("name", fn () => "kyaw kyaw");

Route::get("full-name",[TestController::class,"mySelf"]);

Route::view("profile","admin.profile")->name("page.profile");

Route::get("run",[TestController::class,"run"])->name("run");


//dynamic route

Route::get("area/{w}/{b}",[TestController::class,"area"]);

Route::get("/products/price-max/{amount}", function ($amount) {
    // $products = file_get_contents("https://fakestoreapi.com/products");
    // $productArray = json_decode($products);
    // $filterProducts = array_filter($productArray, fn ($product) => $product->price < $amount);
    // dd($filterProducts);

    $response = Http::get("https://fakestoreapi.com/products");
    return $response->collect()->where("price", "<", "$amount");
});

Route::get("/products/price-min/{amount}", function ($amount) {
    // $products = file_get_contents("https://fakestoreapi.com/products");
    // $productArray = json_decode($products);
    // $filterProducts = array_filter($productArray, fn ($product) => $product->price > $amount);
    // dd($filterProducts);

    return $response = Http::get("https://fakestoreapi.com/products")->collect()->where("price", ">", "$amount");
});

Route::get("/products/price-between/{min}/and/{max}", function ($min, $max) {
    // $products = file_get_contents("https://fakestoreapi.com/products");
    // $productArray = json_decode($products);
    // $filterProducts = array_filter($productArray, fn ($product) => $product->price < $min && $product->price > $max);
    // dd($filterProducts);

    return $response=Http::get("https://fakestoreapi.com/products")->collect()->whereBetween("price",[$min,$max]);
});
