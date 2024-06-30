<nav class="navbar navbar-expand-lg bg-gradient">
    <div class="container-fluid">
        <a class="navbar-brand text-white" href="#"><i class="bi bi-globe-americas text-warning"></i><span
                class="text-color-2"> C</span>137<span></span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="{{route('dashboard')}}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Produtos
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('products')}}">Listar</a></li>
                        <li><a class="dropdown-item" href="{{route('products.create')}}">Cadastrar</a></li>
                        @if(Auth::user()->level>0)
                        <li><a class="dropdown-item" href="{{route('products.all')}}">Todos os produtos</a></li>
                        @endif
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Categorias
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('categories')}}">Listar</a></li>
                        <li><a class="dropdown-item" href="{{route('categories.create')}}">Cadastrar</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="{{route('users')}}">Usuários</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="bi bi-person-circle"></i> {{Auth::user()->name}}

                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <form action="{{route('logout')}}" method="post">
                                @csrf()
                                <button class="dropdown-item" type="submit">Logout</>
                        </li>

                        </form>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>