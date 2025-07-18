<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Models\Posts;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {

    $jobs = Job::with('employer')->cursorPaginate(5);

    return view('jobs', [
        'jobs' => $jobs
    ]);
});

Route::get('/job/{id}', function($id) {
    return view('job', [
        'job' => Job::find($id)
    ]);
} );

Route::get('/posts', function () {
    return view('posts', [
        'posts' => Posts::all()
    ]);
} );

Route::get('post/{id}', function($id) {
    return view('post', [
        'post' => Posts::find($id)
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});
