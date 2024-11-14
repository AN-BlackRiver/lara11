<?php

namespace App\Http\Controllers;

use App\Http\Requests\Jobs\CreateRequest;
use App\Http\Requests\Jobs\UpdateRequest;
use App\Mail\JobPosted;
use App\Models\Employer;
use App\Models\Job;
use Auth;
use Illuminate\Http\Request;
use Mail;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::with('employer')->latest()->simplePaginate(3);

        return view('jobs.index', ['jobs' => $jobs,]);
    }

    public function show(Job $job)
    {
        return view('jobs.show', ['job' => $job]);
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function store(CreateRequest $request)
    {
        $data = $request->validated();

        $data['employer_id'] = 21;

        $job  = Job::query()->create($data);

        Mail::to(Auth::user()->email)->send(new JobPosted($job));

        return redirect('jobs');
    }

    public function edit(Job $job)
    {
        return view('jobs.edit', ['job' => $job]);
    }

    public function update(Job $job, UpdateRequest $request)
    {
        $job->updateOrFail($request->validated());

        return view('jobs.show', ['job' => $job]);
    }

    public function destroy(Job $job, Request $request)
    {
        $job->deleteOrFail();

        return redirect("/jobs");
    }

}
