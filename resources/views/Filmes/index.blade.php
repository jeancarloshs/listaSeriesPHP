<x-layout title="Filmes">

    <ul class="list-group">
        @foreach ($filmes as $filme)
              <li class="list-group-item list-group-item-action">{{ $filme }}</li>
        @endforeach
    </ul>

</x-layout>
