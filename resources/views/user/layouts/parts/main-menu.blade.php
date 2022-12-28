
<div class="mainmenu-area">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('product') }}">Semua Produk</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Kategori Produk
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @foreach ($categories as $category)
                                <a class="dropdown-item" href="../product/search.php?search=category&keyword=SSD">{{ $category['name'] }}</a>
                            @endforeach
                        </div>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0" action="" method="get">
                    <input class="form-control mr-sm-2" type="search" placeholder="Cari Produk" name="keyword" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="go">Go!</button>
                </form>
                </form>
            </div>
        </nav>
    </div>
</div>