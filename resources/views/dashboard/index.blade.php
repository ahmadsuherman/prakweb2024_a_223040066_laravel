<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <h1>Hi, {{ Auth()->user()->name }}</h1>
</x-layout>

