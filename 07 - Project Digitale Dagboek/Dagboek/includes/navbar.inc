<div class="navbar navbar-inverse main-nav" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toon/Verberg navigatie</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Mijn Dagboek</a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="<?php if($active == 'registreer') print 'active'; ?>"><a href="registreer.php">Registreer</a></li>
        <li class="<?php if($active == 'nieuwe-paginas') print 'active'; ?>"><a href="nieuwe-paginas.php">Nieuwe pagina's</a></li>
        <li class="<?php if($active == 'dashboard') print 'active'; ?>"><a href="dashboard.php">Dashboard</a></li>
        <li class="<?php if($active == 'pagina-toevoegen') print 'active'; ?>"><a href="pagina-toevoegen.php">Nieuwe pagina</a></li>
        <li class="<?php if($active == 'dagboek-beheren') print 'active'; ?>"><a href="dagboek-beheren.php">Beheer dagboek</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li class="<?php if($active == 'login') print 'active'; ?>">
          <a href="login.php">Login</a>
        </li>
        <li>
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Welkom, Bert <b class="caret"></b></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="logout.php">Logout</a></li>
            <li class="divider"></li>
            <li class="dropdown-header">Handelingen</li>
            <li><a href="dashboard.php">Bekijk dashboard</a></li>
            <li><a href="pagina-toevoegen.php">Nieuwe pagina schrijven</a></li>
            <li><a href="dagboek-beheren.php">Dagboek beheren</a></li>
            <li><a href="zoek-gebruiker.php">Gebruiker zoeken</a></li>
          </ul>
        </li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>