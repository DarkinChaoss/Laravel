<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li @if($current == "home")class="nav-item active" @else class="nav-item"@endif>
        <a class="nav-link" href="/">Home </span></a>
      </li>
      <li @if($current == "produtos")class="nav-item active" @else class="nav-item"@endif>
        <a class="nav-link" href="/produtos">Produtos</a>
      </li>
      <li @if($current == "categorias")class="nav-item active" @else class="nav-item"@endif">
        <a class="nav-link" href="/categorias">Categorias</a>
    </ul>
  </div>
</nav>