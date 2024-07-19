<?php
use App\Http\Controllers\homecontroller;
use Illuminate\Support\Facades\Route;

Route::get('/',[homecontroller::class,'Name']);