<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('home')}}">Admin <span class="sr-only">(current)</span></a>
                </li>
                @role('admin')
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Quản lý User</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route('user.create')}}">Thêm User</a>
                        <a class="dropdown-item" href="{{route('user.index')}}">Liệt kê User</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Quản lý Danh mục</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route('danhmuc.create')}}">Thêm Danh mục</a>
                        <a class="dropdown-item" href="{{route('danhmuc.index')}}">Liệt kê Danh mục</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Quản lý Ebook</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route('ebook.create')}}">Thêm Ebook</a>
                        <a class="dropdown-item" href="{{route('ebook.index')}}">Liệt kê Ebook</a>
                    </div>
                </li>
                @endrole
            </ul>

        </div>
    </nav>
</div>