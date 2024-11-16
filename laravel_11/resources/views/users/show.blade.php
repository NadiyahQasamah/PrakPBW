<x-aap-layout title="Users">
    <x-slot name="heading">{{ $user?->name }}</x-slot>
    <div>{{ $user->email }}</div>
    <div>Registered at {{ $user->created_at->diffForHumans() }}</div>
</x-aap-layout>
