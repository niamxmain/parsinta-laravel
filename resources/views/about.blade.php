<x-app title="{{$title ?? 'About Page'}}">
    @slot('styles')
    <style>
        body {
            background-color: indigo;
        }
    </style>
    @endslot
    <h3>Konten About</h3>
</x-app>


