<?php

namespace App\Http\Controllers\Contacts;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class ListContactsController extends Controller
{
    public function __invoke()
    {
        $contacts = Contact::query()->latest()->paginate(10);

        return view('contacts.index', compact('contacts'));
    }
}
