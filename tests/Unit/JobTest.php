<?php

/***
 * What is test driven development
 * Write test before development and then write code to make test work
 * 
 */
// to process to check 
// 1.
// test('it belongs to an  employer', function () {
//     expect(true)->toBeTrue();
// });

/** 
 * Process to test is a 3 step process
 * 1. Arrange -> arrange data
 * 2. Act -> perform action
 * 3. Assert -> check the output
 * */

use App\Models\Employer;
use App\Models\Job;

// 2.
it('belongs to an  employer', function () {
    // Arrange
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id
    ]);

    // Act
    $employerTest = $job->employer->is($employer);

    // Asserrt
    expect($employerTest)->toBeTrue();


    /**
     * Error ->  A facade root has not been set
     * For that we need to go pest file and set refresh database in Unit testing also
     * 
     * uses(Tests\TestCase::class,
     * Illuminate\Foundation\Testing\RefreshDatabase::class,
     * )->in('Feature', "Unit");
     * 
     */
});


// TDD -> test dariven development
it('can have tags', function() {
    ///AAA
    $job = Job::factory()->create();
    // let's say our new job has a tag till now we don't have any 
    // method or property tag() in job model so let's say we going
    // to fail test and then write code to make 
    $job->tag("Frontend");

    expect($job->tags)->toHaveCount(1);
});