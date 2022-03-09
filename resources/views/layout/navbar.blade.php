<!-- Image and text -->
<header
    class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
    <a href="/"
        class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none justify-content-center">
        <img class="img-fluid w-25"
            src="https://upload.wikimedia.org/wikipedia/fr/thumb/3/3b/Logo_Carrefour.svg/958px-Logo_Carrefour.svg.png"
            alt="Carrefour logo">
    </a>

    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li> <button class="btn btn-primary"><a class="text-white" href="/categories">categories</a></button> </li>
        <li><button class="btn btn-primary mx-4"><a class="text-white" href="/produits">produits</a></button></li>
        
        @if ($isAdmin ?? '')
        <li><button class="btn btn-primary"><a class="text-white" href="/users">Users</a></button></li>
        @endif
        
    </ul>

    <div class="col-md-3 text-end">
        <button type="button" class="btn btn-outline-primary me-2"
            onclick="self.location.href='/deconnexion'">Déconnexion</button>


    </div>
</header>
