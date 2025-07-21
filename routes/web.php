<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

// Home
Route::get('/', function () {
    return view('home');
});

// Index
Route::get('/jobs', function () {

    $jobs = Job::with('employer')->latest()->cursorPaginate(5);

    return view('jobs.index', [
        'jobs' => $jobs
    ]);
});

// Show
Route::get('/job/{id}', function($id) {
    return view('jobs.show', [
        'job' => Job::find($id)
    ]);
} );

// Create
Route::get('/jobs/create', function() {
    return view('jobs.create');
});

// Store
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

// Edit
Route::get('/job/{id}/edit', function($id) {

    return view('jobs.edit', [
        'job' => Job::find($id)
    ]);
});


// Update
Route::patch('/job/{id}', function($id) {

    // Validate
    request()->validate([
        'title'  => ['required', 'min: 3'],
        'salary' => ['required']
    ]);

    // Authorized (Holds on...)

    // Update the job and persist
    $job = Job::findOrFail($id);

    $job->update([
        'title' => request('title'),
        'salary' => request('salary'),
    ]);

    // Redirect to the job page
    return redirect("job/". $job->id);

});

// Delete
Route::delete('/job/{id}', function($id) {

    Job::findOrFail($id)->delete();

    return redirect('/jobs');

});

// Contact
Route::get('/contact', function () {
    return view('contact');
});
