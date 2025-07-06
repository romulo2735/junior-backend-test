<?php

namespace App\Http\Controllers\Contacts;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class DeleteContactController extends Controller
{
    public function __invoke(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('contacts.index');
    }
}
