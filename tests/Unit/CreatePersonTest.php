<?php

use Tests\CreatesApplication;
use App\Models\Person;
use App\Repositories\InMemoryRepository\PersonRepositoryInMemory;
use App\UseCases\CreatePersonUseCase\CreatePerson as sut;

uses(CreatesApplication::class);
beforeEach()->createApplication();

it('should be able possible to create a new person',function(){
    $personRepositoryInMemory = new PersonRepositoryInMemory();
    $personFactory = Person::factory();
    $sut = new sut($personRepositoryInMemory);

    $person = $personFactory->make();
    $sut->execute($person->toArray());

    expect($personRepositoryInMemory->persons)->toHaveLength(1);
    expect($personRepositoryInMemory->persons[0]->name)->toBe($person['name']);
});
