<x-app title="{{$title ?? 'Contact Page'}}">
    <h3>Konten Contact</h3><p>{{$data ?? ''}}</p>
    <form action="contact" method="post">
    @csrf
    <input type="text" name="data" placeholder="Masukkan data">
        <button type="submit">submit</button>
    </form>
</x-app>


