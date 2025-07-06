@extends('layouts.app')

@section('title', 'Edit Contact')

@section('content')
    @include('contacts.form', ['contact' => $contact])
@endsection
