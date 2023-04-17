<x-layout title="Adicionar Series">
    <x-series.form :action="route('series.store')" :nome="old('nome')" :update="false" />
</x-layout>
