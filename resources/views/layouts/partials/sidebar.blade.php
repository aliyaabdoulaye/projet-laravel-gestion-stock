<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{ route('dashboard') }}" class="brand-link">
    <span class="brand-text font-weight-light">Gestion Stock</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="info">
        <a href="#" class="d-block">{{ Auth::user()->name }}</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">

        <li class="nav-item">
          <a href="{{ route('dashboard') }}" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Tableau de bord</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{ route('ventes.create') }}" class="nav-link">
            <i class="nav-icon fas fa-shopping-cart"></i>
            <p>Effectuer une vente</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{ route('approvisionnements.create') }}" class="nav-link">
            <i class="nav-icon fas fa-truck"></i>
            <p>Ajouter un approvisionnement</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{ route('produits.index') }}" class="nav-link">
            <i class="nav-icon fas fa-box"></i>
            <p>Produits & Stocks</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-chart-bar"></i>
            <p>Rapports</p>
          </a>
        </li>

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
