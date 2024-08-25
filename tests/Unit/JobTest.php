<?php

use App\Models\Employer;
use App\Models\Job;

test('it belongs to an employer', function () {
    //Arrange
    $employer = \App\Models\Employer::factory()->create();
    $job = \App\Models\Job::factory()->create([
        'employer_id' => $employer->id,
    ]);
    //Act and Assert
    expect($job->employer->is($employer))->toBeTrue(); //php artisan test
});

it('can have tags', function () {
    $job = Job::factory()->create();

    $job->tag('Frontend');

    expect($job->tags)->toHaveCount(1);
});