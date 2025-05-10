<?php

use App\Http\Controllers\ToDoList;
use Illuminate\Support\Facades\Route;

Route::get('/', [ToDoList::class, 'index'])->name('home');   
Route::get('/test', [ToDoList::class, 'welcome'])->name('welcome');    
Route::get('todolist/create',[ToDoList::class, 'create'])->name('create');
Route::put('todolist/update',[ToDoList::class, 'update'])->name('update');
// Route::get('profile',function(){
//     return view('profile');
// });

Route::post('todolist/tambah/data', [ToDoList::class, 'store'])->name('tambah');


Route::delete('todolist/delete/{id}', [ToDoList::class, 'destroy'])->name('delete');