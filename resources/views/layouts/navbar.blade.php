<div class="container-fluid">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    @foreach ($navigasi as $item => $url)
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{$url}}">{{$item}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </nav>
</div>