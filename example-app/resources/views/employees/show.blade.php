@extends('layouts.navigation')

@section('content')
<div class="container">
    <div class="main-body">
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="{{ $employee->slika }}" onerror="this.onerror=null;this.src='https://bootdey.com/img/Content/avatar/avatar7.png';" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4>{{$employee->ime}} {{$employee->prezime}}</h4>
                      <p class="text-secondary mb-1">{{$employee->odijel}}</p>
                      <a class="btn btn-primary"href="{{ route('edit', $employee->id) }}">Uredi</a>
                    </div>
                  </div>
                </div>
                <div class="card mt-3">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                      <h6 class="mb-0">Godišnji odmor</h6>
                      <span class="text-secondary">{{$employee->dan_go}}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                      <h6 class="mb-0">Slobodni Dani</h6>
                      <span class="text-secondary">{{$employee->dan_sd}}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                      <h6 class="mb-0">Plaćeni Dopust</h6>
                      <span class="text-secondary">{{$employee->dan_pd}}</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Ime i prezime</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{$employee->ime}} {{$employee->prezime}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Spol</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{$employee->spol}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Godina rođenja</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{$employee->godina_rodjenja}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Početak Rada</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{$employee->pocetak_rada}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Vrsta Ugovora</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{$employee->vrsta_ugovora}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Trajanje ugovora</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{$employee->trajanje_ugovora}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Odijel</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{$employee->odijel}}
                    </div>
                  </div>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  @endsection