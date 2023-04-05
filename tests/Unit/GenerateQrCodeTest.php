<?php

use Tests\CreatesApplication;
use App\Models\Person;
use App\Repositories\InMemoryRepository\PersonRepositoryInMemory;
use App\UseCases\GenerateQrCodeUseCase\GenerateQrCode as sut;

uses(CreatesApplication::class);
beforeEach()->createApplication();

it('should be able possible to generate a QrCode',function(){
    $personRepositoryInMemory = new PersonRepositoryInMemory();
    $personFactory = Person::factory();
    $sut = new sut($personRepositoryInMemory);

    $person = $personFactory->make();

    $personCreated = $personRepositoryInMemory->createPerson($person);
    $returQrCode = $sut->execute(['id' => $personCreated['id']]);

    $this->assertMatchesRegularExpression('/qrcodes\/[a-zA-Z0-9]{32}\.png/', $returQrCode);
});
