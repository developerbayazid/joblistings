<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Models\Posts;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {

    $jobs = Job::with('employer')->latest()->cursorPaginate(5);

    return view('jobs.index', [
        'jobs' => $jobs
    ]);
});

Route::get('/job/{id}', function($id) {
    return view('jobs.show', [
        'job' => Job::find($id)
    ]);
} );

Route::get('/jobs/create', function() {
    return view('jobs.create');
});

Route::post('/jobs', function() {

    request()->validate([
        'title'  => ['required', 'min: 3'],
        'salary' => ['required']
    ]);

    Job::create([
        'title'       => request('title'),
        'salary'      => request('salary'),
        'employer_id' => 1
    ]);

    return redirect('/jobs');
});

Route::get('/contact', function () {
    return view('contact');
});
