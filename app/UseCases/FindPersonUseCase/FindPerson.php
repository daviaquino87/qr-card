<?php

namespace App\UseCases\FindPersonUseCase;

use App\Repositories\PersonRepository;

class FindPerson {
    private $personRepository;

    public function __construct(PersonRepository $personRepository)
    {
        $this->personRepository = $personRepository;
    }

    public function execute($data){
        $rules = [
            'id' => 'string|required'
        ];

        $customErrors = [
            'string' => 'O parâmetro :attribute deve ser uma string',
            'required' => 'O parâmetro :attribute é obrigátorio.',
        ];

        validRules($data, $rules, $customErrors);

        return $this->personRepository->findById($data);
    }
}
