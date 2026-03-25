<?php

namespace App\Repositories;

class CompanyRepository{

    public function plunk(){
        return [
            1 => ['name' => 'Company 1', 'contacts' => 3],
            2 => ['name' => 'Company 2', 'contacts' => 5],
        ];
    }
}
