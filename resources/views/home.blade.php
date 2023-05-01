@extends('layouts.app', ['title' => 'Home Page'])
@section('content')

<x-alert>
    <x-slot name="title">
        <h1>Header <strong>Slot</strong></h1>
    </x-slot>
    this is home page
    <x-slot name="footer">
        <h3>Footer</h3>
    </x-slot>
</x-alert>
@endsection