@extends('layouts.app')

@section('title', 'My Contacts')

@section('content')
    <div class="max-w-6xl mx-auto mt-10">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">Contacts</h1>
            <a href="{{ route('contacts.create') }}"
               class="inline-block bg-blue-600 hover:bg-blue-700 text-white text-sm px-4 py-2 rounded-md transition">
                + New Contact
            </a>
        </div>

        @if(session('success'))
            <div class="mb-4 p-4 bg-green-100 text-green-800 rounded">
                {{ session('success') }}
            </div>
        @endif

        <div class="overflow-x-auto">
            <table class="w-full bg-white shadow-md rounded-lg overflow-hidden">
                <thead class="bg-blue-50 text-sm font-semibold text-gray-700 uppercase">
                <tr>
                    <th class="px-6 py-3 text-left">Name</th>
                    <th class="px-6 py-3 text-left">Email</th>
                    <th class="px-6 py-3 text-left">Phone</th>
                    <th class="px-6 py-3 text-center">Actions</th>
                </tr>
                </thead>
                <tbody class="text-sm divide-y divide-gray-200">
                @forelse ($contacts as $contact)
                    <tr class="hover:bg-blue-50 transition">
                        <td class="px-6 py-3">{{ $contact->name }}</td>
                        <td class="px-6 py-3">{{ $contact->email }}</td>
                        <td class="px-6 py-3">{{ $contact->phone }}</td>
                        <td class="px-6 py-3 text-center space-x-3">
                            <a href="{{ route('contacts.edit', $contact) }}"
                               class="text-blue-600 hover:underline">Edit</a>
                            <form action="{{ route('contacts.destroy', $contact) }}" method="POST" class="inline"
                                  onsubmit="return confirm('Delete this contact?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center text-gray-500 py-6">No contacts found.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-6">
            {{ $contacts->links() }}
        </div>
    </div>
@endsection
