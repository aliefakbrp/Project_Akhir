
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item {{ $halaman == "homepage" ? 'active' : ''}}">
                <a class="nav-link" href="/homepage">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item {{ $halaman == "Pesan Hotel" ? 'active' : ''}}">
                <a class="nav-link" href="/homepage/pesanhotel">Daftar</a>
            </li>
            <li class="nav-item {{ $halaman == "Daftar Vaksin" ? 'active' : ''}}">
                <a class="nav-link" href="homepage/1">Contact</a>
            </li>
            <li class="nav-item {{ $halaman == "Daftar Vaksin" ? 'active' : ''}}">
                <a class="nav-link" href="#">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" >Register</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
    </div>
</nav>
