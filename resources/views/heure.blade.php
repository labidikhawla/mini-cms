<x-layout>
    <x-slot:title>Heure du serveur - Mini-CMS</x-slot:title>

    <h1 class="text-3xl font-bold">Heure du serveur</h1>
    <p class="mt-4 text-gray-700">Il est {{ $heure }}, le {{ $date }}.</p>
    <a href="{{ route('time') }}" class="text-gray-600 hover:text-gray-900">Heure</a>
</x-layout>