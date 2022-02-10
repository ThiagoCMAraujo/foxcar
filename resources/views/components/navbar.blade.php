<style>
    .padding-l {
        padding-left: 11px;
    }

</style>
<head>
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
        <img width="30" height="30" src="/images/car-flat.png" alt="">FoxCar
    </a>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active padding-l">
                <a class="nav-link" href="">Início</a>
            </li>
            <li class="nav-item padding-l">
                <a class="nav-link" href="#">Carros</a>
            </li>
            <li class="nav-item padding-l">
                <a class="nav-link" href="{{ route('locacoes') }}">Aluguéis</a>
            </li>
            <li class="nav-item padding-l">
                <a class="nav-link" href="#">Clientes</a>
            </li>
            <li class="nav-item padding-l">
                <a class="nav-link" href="#">Sobre Nós</a>
            </li>
            <div class="">
                <li class="nav-item padding-l">
                    <a class="nav-link" href="{{route('login')}}">Login</a>
                </li>
            </div>
        </ul>
    </div>
</nav>

