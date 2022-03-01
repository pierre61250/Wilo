<?php 

namespace App\Services;

use App\Repository\ContactRepository;

class ContactService {

    private $contactRepository;

    public function __construct(ContactRepository $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }

}

?>