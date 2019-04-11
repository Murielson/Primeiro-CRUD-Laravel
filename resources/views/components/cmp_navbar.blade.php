
{{-- Navbar --}}

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#indexNavbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="indexNavbar">
        <ul class="navbar-nav mr-auto">
            <li @if($current == 'home') class="nav-item active" @else class="nav-item" @endif>
                <a class="nav-link" href="{{ route('index') }}">Home</a>
            </li>
            <li @if($current == 'produto') class="nav-item active" @else class="nav-item" @endif>
                <a class="nav-link" href="{{ route('indexProd') }}">Produtos</a>
            </li>
            <li @if($current == 'categoria') class="nav-item active" @else class="nav-item" @endif>
                <a class="nav-link" href="{{ route('categorias') }}">Categorias</a>
            </li>
            <li @if($current == 'novaCat') class="nav-item active" @else class="nav-item" @endif>
                <a class="nav-link" href="{{ route('createCat') }}">Nova Categoria</a>
            </li>
        </ul>
    </div>
</nav>

{{-- ===== --}}