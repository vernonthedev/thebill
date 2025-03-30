<x-app-layout>


    {!! $chart->container() !!}


    {{-- Added the consent cookie form --}}
    <x-laravel-cookie-guard></x-laravel-cookie-guard>
    <x-laravel-cookie-guard-scripts></x-laravel-cookie-guard-scripts>

    {!! $chart->script() !!}
</x-app-layout>
