<?php

namespace App\UseCases\CreatePersonUseCase;

use App\Repositories\PersonRepository;

class CreatePerson {
    private $personRepository;

    public function __construct(PersonRepository $personRepository)
    {
        $this->personRepository = $personRepository;
    }

    public function execute($data){
        $rules = [
            'name' => 'string|required',
            'email' => 'email|required',
            'github' => 'string|required',
            'linkedin' => 'string|required'
        ];

        $customErrors = [
            'required' => 'O parâmetro :attribute é obrigátorio.',
            'string' => 'O parâmetro :attribute deve ser uma string',
            'email' => 'O parâmetro :attribute deve ser um email valido',
        ];

        validRules($data, $rules, $customErrors);

        return $this->personRepository->createPerson($data);
    }
}
