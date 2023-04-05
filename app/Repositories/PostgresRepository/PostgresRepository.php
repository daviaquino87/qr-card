<?php

namespace App\Repositories\PostgresRepository;

use App\Models\Person;
use App\Repositories\PersonRepository;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostgresRepository extends PersonRepository {
    public $person;

    public function __construct(Person $person)
    {
        $this->person = $person;
    }

    public function createPerson($data)
    {
        $person = new Person();

        $person->name = $data['name'];
        $person->email = $data['email'];
        $person->github = $data['github'];
        $person->linkedin = $data['linkedin'];
        $person->save();

        return $person;
    }

    public function findById($data)
    {
        return $this->person->where('id',$data['id'])->first();
    }

    public function generateQrCode($data)
    {
        $URL = env('PROD_URL');

        $urlPerson = $URL.$data['id'];
        $client = new Client();

        $image = $client->request('GET',"https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=$urlPerson");
        $imageName = Str::random(32);
        Storage::put('qrcodes/'.$imageName.'.png', $image->getBody());

        return 'qrcodes/'.$imageName.'.png';
    }
}
