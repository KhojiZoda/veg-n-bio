<div class="sidebar">
  <nav class="sidebar-nav">
    @if (Auth::user()->role == "admin")
      <ul class="nav">
        <li class="nav-title text-center">
          <span>Gestion</span>
        </li>
        <li class="nav-item nav-dropdown">
          <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Salariés</a>
          <ul class="nav-dropdown-items">
            <li class="nav-item">
              <a class="nav-link" href="/register"><i class="icon-puzzle"></i> Ajouter un salarié</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/admin/users"><i class="icon-puzzle"></i> Liste des salariés</a>
            </li>
          </ul>
        </li>
        <li class="nav-item nav-dropdown">
          <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Fournisseurs</a>
          <ul class="nav-dropdown-items">
            <li class="nav-item">
              <a class="nav-link" href="/admin/providers/new"><i class="icon-puzzle"></i> Ajouter un Fournisseur</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/admin/providers"><i class="icon-puzzle"></i> Liste des Fournisseurs</a>
            </li>
          </ul>
        </li>
        <li class="nav-title text-center">
          <span>Restauration</span>
        </li>
        <li class="nav-item nav-dropdown">
          <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Restaurants</a>
          <ul class="nav-dropdown-items">
            <li class="nav-item">
              <a class="nav-link" href="/admin/restaurant/new"><i class="icon-puzzle"></i> Ajouter un restaurant</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/admin/restaurant"><i class="icon-puzzle"></i> Liste des restaurants</a>
            </li>
          </ul>
        </li>
        <li class="nav-item nav-dropdown">
          <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Menus</a>
          <ul class="nav-dropdown-items">
            <li class="nav-item">
              <a class="nav-link" href="/admin/menu/new"><i class="icon-puzzle"></i> Composer un menu</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/admin/menu"><i class="icon-puzzle"></i> Liste des menus</a>
            </li>
          </ul>
        </li>
        <li class="nav-item nav-dropdown">
          <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Plats</a>
          <ul class="nav-dropdown-items">
            <li class="nav-item">
              <a class="nav-link" href="/admin/meal/new"><i class="icon-puzzle"></i> Ajouter un plat</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/admin/meal"><i class="icon-puzzle"></i> Liste des plats</a>
            </li>
          </ul>
        </li>
        <li class="nav-item nav-dropdown">
          <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Commandes</a>
          <ul class="nav-dropdown-items">
            <li class="nav-item">
              <a class="nav-link" href="/admin/orders/new"><i class="icon-puzzle"></i> Créer une commandes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/admin/orders"><i class="icon-puzzle"></i> Liste des commandes</a>
            </li>
          </ul>
        </li>
        <li class="nav-item nav-dropdown">
          <a class="nav-link" href="/admin/marketplace"><i class="icon-puzzle"></i> Place de marché</a>
        </li>
        <li class="nav-item nav-dropdown">
          <a class="nav-link" href="/reservation/index"><i class="icon-puzzle"></i> Reservations</a>
        </li>
      </ul>
    @endif
  </nav>
  <button class="sidebar-minimizer brand-minimizer" id="minimizer" type="button"></button>
</div>
