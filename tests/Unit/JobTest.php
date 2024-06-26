<?php

use App\Models\Employer;
use App\Models\Job;

it('belongs to an employer', function () {
    // AAA => Arrange -> Act -> Assert

    // Arrange
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id
    ]);

    // Act and Assert together
    expect($job->employer->is($employer))->toBeTrue();

    // Assert---
});

it('can have tags', function () {
    // AAA
    $job = Job::factory()->create();

    $job->tag('Laravel');

    expect($job->tags)->toHaveCount(1);
});
