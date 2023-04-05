<?php

use Tests\CreatesApplication;
use App\Models\Person;
use App\Repositories\InMemoryRepository\PersonRepositoryInMemory;
use App\UseCases\FindPersonUseCase\FindPerson as sut;

uses(CreatesApplication::class);
beforeEach()->createApplication();

it('should be able possible to find a person by name',function(){
    $personRepositoryInMemory = new PersonRepositoryInMemory();
    $personFactory = Person::factory();
    $sut = new sut($personRepositoryInMemory);

    $person = $personFactory->make();

    $personCreated = $personRepositoryInMemory->createPerson($person->toArray());

    $findPerson = $sut->execute(['id' => $personCreated['id']]);

    expect($findPerson)->toBeTruthy();
    expect($personRepositoryInMemory->persons[0]['name'])->toBe($findPerson['name']);
});

it('should returned null when a person does not exist',function(){
    $personRepositoryInMemory = new PersonRepositoryInMemory();
    $sut = new sut($personRepositoryInMemory);

    $findPerson = $sut->execute(['id' => 'invalidId']);

    expect($findPerson)->toBeNull();
    expect($personRepositoryInMemory->persons)->toHaveLength(0);
});
