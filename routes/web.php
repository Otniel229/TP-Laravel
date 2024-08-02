<?php

use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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

Route::get('/post' , [PostController::class, 'list_post']);
Route::get('/modifier/post/{id}' , [PostController::class, 'modifier'])->name('post.modifier');
Route::get('/supprimer/post/{id}' , [PostController::class, 'supprimer'])->name('post.supprimer');
Route::get('/post/{id}', [PostController::class, 'affichage'])->name('post.affichage'); 
Route::get('/ajouts' , [PostController::class, 'ajouts_post']);
Route::post('/ajouts/traitement' , [PostController::class, 'ajouts_post_traitement']);
Route::post('/modifier/traitement' , [PostController::class, 'modifier_post_traitement']);
Route::post('/post/{id}/comments', [CommentController::class, 'store'])->name('comments.store');
