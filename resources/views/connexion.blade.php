﻿@extends('layout.app')

@section('main')
<section class="vh-100">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp" class="img-fluid"
            alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
          <form>
        
            <div class="divider d-flex align-items-center my-4">
              <p class="text-center fw-bold mx-3 mb-0">Se connecter</p>
            </div>
  
            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" class="form-control form-control-lg"
                placeholder="Enter a valid email address" />
              <label class="form-label">Email</label>
            </div>
  
            <!-- Password input -->
            <div class="form-outline mb-3">
              <input type="password" class="form-control form-control-lg"
                placeholder="Enter password" />
              <label class="form-label">Mot de passe</label>
            </div>
  
            <div class="text-center text-lg-start mt-4 pt-2">
              <button type="button" class="btn btn-primary btn-lg"
                style="padding-left: 2.5rem; padding-right: 2.5rem;">Se connecter</button>
              <p class="small fw-bold mt-2 pt-1 mb-0">Pas de compte? <a href="#!"class="link-danger">S'inscrire</a></p>
            </div>
  
          </form>
        </div>
      </div>
    </div>
  </section>
@endsection
