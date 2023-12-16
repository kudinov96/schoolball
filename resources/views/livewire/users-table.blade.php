 


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Пользователи') }}
        </h2>
    </x-slot>

    
        <input wire:model="search" type="search" placeholder="Search posts by title...">
 
        <h1>Search Results:</h1>
     
        <ul>
            @foreach($users as $user)
                <li>{{ $user->name }}</li>
            @endforeach
        </ul>
 
</x-app-layout>
