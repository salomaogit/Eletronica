<nav class="navbar bg-dark">
    <ul class="nav">
        <li class="nav-item"><a href="?pag=inicio" class="nav-link">Início</a></li>
        <li class="nav-item"><a href="?pag=quemsomos" class="nav-link">Quem Somos?</a></li>
        <!-- <li class="nav-item"><a href="?pag=faleconosco" class="nav-link">Fale Conosco</a></li> -->
        <li class="nav-item"><a href="?pag=servicos" class="nav-link">Serviços</a></li>
    </ul>
    <form id="busca" class="btn-group" action="http://www.google.com/search" method="GET">
        <!-- <input type="text"> -->
        <input type=hidden name=sitesearch/>
        <input type=text name=q size=20>
        <!-- <input type=submit value=Procurar> -->
        <button class="btn btn-primary"><i class="fas fa-search"></i></button>
    </form>
</nav>