<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get("/",[App\Http\Controllers\PostController::class, "index"])
->name("post.index")
->middleware("auth");

Route::get("/admin/post/create",[App\Http\Controllers\PostController::class, "create"])
->name("admin.post.create")
->middleware("auth");
Route::post("/admin/post/save", [App\Http\Controllers\PostController::class, "store"])
->name("admin.post.save")
->middleware("auth");
Route::get("/admin/post/index",[App\Http\Controllers\HomeController::class, "postIndex"])
->name("admin.post.index")
->middleware("auth");

Route::get("/edit/{id}",[App\Http\Controllers\HomeController::class, "edit"])
->name("admin.post.edit")
->middleware("auth");
Route::post("/update",[App\Http\Controllers\HomeController::class, "update"])
->name("admin.post.update")
->middleware("auth");
Route::get("/delete/{id}",[App\Http\Controllers\HomeController::class, "destroy"])
->name("admin.post.delete")
->middleware("auth");












