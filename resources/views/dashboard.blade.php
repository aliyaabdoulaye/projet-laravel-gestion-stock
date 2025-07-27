@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="content-header">
    <div class="container-fluid">
      <h1 class="m-0">Tableau de bord</h1>
    </div>
  </div>

  <section class="content">
    <div class="container-fluid">

      <div class="row">
        <!-- Exemple : Ventes aujourd'hui, accessible Employe et Gerant -->
        @role('Employe|Gerant')
        <div class="col-lg-3 col-6">
          <div class="small-box bg-info">
            <div class="inner">
              <h3>{{ $ventesAujourdHui }}</h3>
              <p>Ventes aujourd'hui</p>
            </div>
            <div class="icon"><i class="fas fa-shopping-cart"></i></div>
            <a href="{{ route('ventes.index') }}" class="small-box-footer">
              Voir les ventes <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        @endrole

        <!-- Produits en stock, accessible uniquement Gerant -->
        @role('Gerant')
        <div class="col-lg-3 col-6">
          <div class="small-box bg-success">
            <div class="inner">
              <h3>{{ $produitsEnStock }}</h3>
              <p>Produits en stock</p>
            </div>
            <div class="icon"><i class="fas fa-box"></i></div>
            <a href="{{ route('produits.index') }}" class="small-box-footer">
              Gérer les produits <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        @endrole

        <!-- Alertes stock, uniquement Gerant -->
        @role('Gerant')
        <div class="col-lg-3 col-6">
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>{{ $alertesStock }}</h3>
              <p>Alertes de stock</p>
            </div>
            <div class="icon"><i class="fas fa-exclamation-triangle"></i></div>
            <a href="{{ route('alerte-stocks.index') }}" class="small-box-footer">
              Voir alertes <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        @endrole

        <!-- Gestion Fournisseurs, uniquement Gerant -->
        @role('Gerant')
        <div class="col-lg-3 col-6">
          <div class="small-box bg-primary">
            <div class="inner">
              <h3>{{ $fournisseursCount }}</h3>
              <p>Fournisseurs</p>
            </div>
            <div class="icon"><i class="fas fa-truck"></i></div>
            <a href="{{ route('fournisseurs.index') }}" class="small-box-footer">
              Gérer fournisseurs <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        @endrole

        <!-- Clients, accessible Employe et Gerant -->
        @role('Employe|Gerant')
        <div class="col-lg-3 col-6">
          <div class="small-box bg-secondary">
            <div class="inner">
              <h3>{{ $clientsCount }}</h3>
              <p>Clients enregistrés</p>
            </div>
            <div class="icon"><i class="fas fa-users"></i></div>
            <a href="{{ route('clients.index') }}" class="small-box-footer">
              Gérer clients <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        @endrole

        <!-- Utilisateurs (Gestion admin), uniquement Gerant -->
        @role('Gerant')
        <div class="col-lg-3 col-6">
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>{{ $usersCount }}</h3>
              <p>Utilisateurs</p>
            </div>
            <div class="icon"><i class="fas fa-user-cog"></i></div>
            <a href="{{ route('users.index') }}" class="small-box-footer">
              Gérer utilisateurs <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        @endrole

      </div>

    </div>
  </section>
</div>
@endsection
