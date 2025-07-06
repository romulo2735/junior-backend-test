<?php

namespace App\Http\Controllers\Contacts;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class StoreContactController extends Controller
{
    public function __invoke(ContactRequest $request)
    {
        Contact::create($request->validated());

        return redirect()->route('contacts.index');
    }
}
