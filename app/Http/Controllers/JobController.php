<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::with('employer')->latest()->cursorPaginate(5);

        return view('jobs.index', [
            'jobs' => $jobs
        ]);
    }

    public function show( Job $job)
    {
        return view('jobs.show', [
            'job' => $job
        ]);
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function store()
    {
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
    }

    public function edit(Job $job)
    {
        return view('jobs.edit', [
            'job' => $job
        ]);
    }

    public function update(Job $job)
    {
        // Validate
        request()->validate([
            'title'  => ['required', 'min: 3'],
            'salary' => ['required']
        ]);

        // Authorized (Holds on...)

        // Update the job and persist
        $job->update([
            'title' => request('title'),
            'salary' => request('salary'),
        ]);

        // Redirect to the job page
        return redirect("jobs/". $job->id);
    }

    public function destroy(Job $job)
    {
        $job->delete();
        return redirect('/jobs');

    }
}
