<?php

namespace App\UseCases\GenerateQrCodeUseCase;

use App\Repositories\PersonRepository;

class GenerateQrCode {

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
            'required' => 'O parâmetro :attribute é obrigátorio.',
            'string' => 'O parâmetro :attribute deve ser uma string'
        ];

        validRules($data, $rules, $customErrors);

        return $this->personRepository->generateQrcode($data);
    }
}
