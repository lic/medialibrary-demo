<?php

use App\Models\Article;
use Illuminate\Support\Facades\Route;

Route::get('customizing-paths', function () {

    Article::create()
        ->addMedia(storage_path('demo/library-dublin.jpg'))
        ->toMediaCollection('images');
});
