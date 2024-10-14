<?php

use App\Http\Requests\Jobs\CreateRequest;
use App\Models\Employer;
use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->simplePaginate(3);

    return view('jobs.index', [
        'jobs' => $jobs,
    ]);
});

Route::get('jobs/create', function () {
    return view('jobs.create');
});

Route::post('jobs',function (CreateRequest $request){
    $data = $request->validated();
    $data['employer_id'] = Employer::all()->random()->id;

    Job::query()->create($data);

    return redirect('jobs');
});

Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);

    return view('jobs.show', ['job' => $job]);
});

Route::get('/jobs/{id}/edit', function ($id) {


    $job = Job::query()->find($id);


    return view('jobs.edit', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});


Route::get('test', function () {
    $job = Job::query()->first();

    dd($job->tags);
});
