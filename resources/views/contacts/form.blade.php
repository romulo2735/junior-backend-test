@extends('layouts.app')

@section('title')
    {{ isset($contact) ? 'Edit Contact' : 'Add Contact' }}
@endsection

@section('content')
    <h1 class="text-3xl font-bold mb-6">
        {{ isset($contact) ? 'Edit Contact' : 'Add Contact' }}
    </h1>

    <form method="POST" action="{{ isset($contact) ? route('contacts.update', $contact->id) : route('contacts.store') }}" class="max-w-lg bg-white p-6 rounded shadow">
        @csrf
        @if(isset($contact))
            @method('PUT')
        @endif

        <div class="mb-4">
            <label for="name" class="block font-semibold mb-1">Name</label>
            <input
                type="text"
                id="name"
                name="name"
                value="{{ old('name', $contact->name ?? '') }}"
                class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                required
            />
            @error('name')
            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="email" class="block mb-1 font-semibold">Email</label>
            <input
                type="email"
                name="email"
                id="email"
                class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                value="{{ old('email', $contact->email ?? '') }}"
                required
            />
            @error('email')
            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="phone" class="block font-semibold mb-1">Phone</label>
            <input
                type="tel"
                id="phone"
                name="phone"
                value="{{ old('phone', $contact->phone ?? '') }}"
                class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
            @error('phone')
            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <button
            type="submit"
            class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-2 rounded transition"
        >
            {{ isset($contact) ? 'Update' : 'Add' }}
        </button>
    </form>
@endsection
