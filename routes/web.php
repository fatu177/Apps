<?php

use App\Livewire\Dashboard\DashboardIndex;
use App\Livewire\Support\Create;
use App\Livewire\Support\Index;
use App\Livewire\Support\SupportCreate;
use App\Livewire\Support\SupportEdit;
use App\Livewire\Support\SupportIndex;
use Illuminate\Support\Facades\Route;

Route::get('/', DashboardIndex::class)->name('Dashboard.Index');
Route::get('/support', SupportIndex::class)->name('Support.Index');
Route::get('/support/create', SupportCreate::class)->name('Support.Create');
Route::get('/support/{id}/edit', SupportEdit::class)->name('Support.Edit');


