<?php

namespace App\Http\Controllers\Contacts;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactsRequest;

class CreateContactController extends Controller
{
    public function __invoke()
    {
        return view('contacts.create');
    }
}
