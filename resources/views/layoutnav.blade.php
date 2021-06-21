<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div>
</x-app-layout>

<div class="flex items-center justify-center w-full h-14 px-5 fill-current text-accent border-b border-gray-600"><x-svg.frog/></div> <!-- Logo-->
        
    <div class=" flex flex-col justify-between w-full bg-yellow-200"><!-- Nav item -->
        <ul class="w-full h-full bg-yellow-300">
            <li class="">
                <x-nav.nav-icon><x-svg.box/></x-nav.nav-icon>
            <li class="">
                <x-nav.nav-icon><x-svg.box/></x-nav.nav-icon>
            </li> <li class="">
                <x-nav.nav-icon><x-svg.box/></x-nav.nav-icon>
            </li> <li class="">
                <x-nav.nav-icon><x-svg.box/></x-nav.nav-icon>
            </li> <li class="">
                <x-nav.nav-icon><x-svg.box/></x-nav.nav-icon>
            </li>
        </ul>
        <ul class="flex flex-col w-full bg-yellow-500">
            <li class="">
                <x-nav.nav-icon><x-svg.box/></x-nav.nav-icon>
            <li class="">
                <x-nav.nav-icon><x-svg.box/></x-nav.nav-icon>
            </li> <li class="">
                <x-nav.nav-icon><x-svg.box/></x-nav.nav-icon>
            </li> <li class="">
            
        </ul>
    </div> 