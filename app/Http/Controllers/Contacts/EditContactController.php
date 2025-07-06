<?php

namespace App\Http\Controllers\Contacts;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class EditContactController extends Controller
{
    public function __invoke(Contact $contact)
    {
        return view('contacts.edit', compact('contact'));
    }
}
