<ul class="navBar">
    @foreach ($navigasi as $item => $url)
    <li><a href="{{$url}}">{{$item}}</a></li>
    @endforeach
</ul>