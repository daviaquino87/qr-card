<?php

namespace App\Repositories\InMemoryRepository;

use App\Repositories\PersonRepository;
use Faker\Core\Uuid;
use Illuminate\Support\Fluent;
use Illuminate\Support\Str;

class PersonRepositoryInMemory extends PersonRepository {
    public $persons;

    public function __construct()
    {
        $this->persons = [];
    }

    public function createPerson($data)
    {
        $person = [
            'id' => (String) Uuid::uuid3(),
            'name' => $data['name'],
            'email' => $data['email'],
            'github' => $data['github'],
            'linkedin' => $data['linkedin'],
        ];

        $personFluent = new Fluent($person);
        array_push($this->persons, $personFluent);

        return $personFluent;
    }

    public function findById($data)
    {
        foreach($this->persons as $person){
            if($person['id'] === $data['id']){
                return $person;
            }

            return null;
        }
    }

    public function generateQrCode($data)
    {
        $imageName = Str::random(32);
        return 'qrcodes/'.$imageName.'.png';
    }
}
