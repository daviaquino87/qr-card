<?php

namespace App\Repositories;

abstract class PersonRepository {
    abstract function createPerson($data);
    abstract function findById($data);
    abstract function generateQrcode($data);
}
