<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use App\Models\Job;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;


class JobController extends Controller
{

    public function index(Job $jobs)
    {
        $jobs = Job::latest()->with(['employer', 'tags'])->get()->groupBy('featured');

        return view('jobs.index', [
            'jobs' => $jobs[0],
            'featured' => $jobs[1], 
            'tags' => Tag::all(),
        ]);
    }

    public function jobsIndex()
    {
        $jobs = Job::paginate(10);
        return view('jobs.jobs-index', compact('jobs'), [
            'jobs' => Job::all(),
            'employer' => Employer::all(),
            'tags' => Tag::all(),
        ]);
    }

    public function show(Job $job)
    {
        return view('jobs.show', [
            'job' => $job,
            'jobs' => Job::all(),
            'employer' => Employer::all(),
            'tags' => Tag::all(),
        ]);
    }

    public function companies()
    {    
        $jobs = Job::paginate(10);
        return view('jobs.companies', compact('jobs'), [
            'jobs' => Job::all(),
            'employer' => Employer::all()
        ]);
    }

    public function create() {
        return view('jobs.create');
    }

    public function store(Request $request) {
        $attributes = $request->validate([
            'title' => ['required'],
            'salary' => ['required'],
            'workPlace' => ['required'],
            'emplType' => ['required', Rule::in(['Částečný úvazek', 'Plný úvazek'])],
            'url' => ['required', 'active_url'],
            'tags' => ['nullable'],
        ]);

        
        $attributes['featured'] = $request->has('featured');

        $job = Auth::user()->employer->jobs()->create(Arr::except($attributes, 'tags'));

        if ($attributes['tags'] ?? false) {
            foreach (explode(',', $attributes['tags']) as $tag) {
                $job->tag($tag);            
            }
        }
        
        return redirect('/');
    }

    public function edit(Job $job) {

        return view('jobs.edit', [
            'job' => $job,
            'jobs' => Job::all(),
            'employer' => Employer::all(),
            'tags' => Tag::all(),
        ]);
    }

    public function update(Request $request, Job $job) {

        $request->validate([
            'title' => ['required'],
            'salary' => ['required'],
            'workPlace' => ['required'],
            'emplType' => ['required', Rule::in(['Částečný úvazek', 'Plný úvazek'])],
            'url' => ['required', 'active_url'],
            'tags' => ['nullable'],
        ]);

        $job->update([
            'title' => request('title'),
            'salary' => request('salary'),
            'workPlace' => request('workPlace'),
            'emplType' => request('emplType'),
            'url' => request('url'),
        ]);

        return redirect('/jobs/' . $job->id);
    }

    public function delete(Job $job) {

        $job->delete();

        return redirect('/jobs-index');
    }
}