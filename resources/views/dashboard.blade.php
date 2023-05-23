@extends('ProjectNavbar.navbar')

@section('contant')

@if (!Auth::check())
    not authinticated 
@endif
<a href="{{route('profile.show')}}">profile</a>
<a href="{{route('logout')}}">logout</a>

<br><br><br><br>
{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('STAFF') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div>
</x-app-layout> --}}
@endsection

