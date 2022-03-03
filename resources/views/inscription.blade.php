@extends('layout.app')
@section('main')
    <!-- main -->
    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                        class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form method="post">

                        <div class="divider d-flex align-items-center my-4">
                            <p class="text-center fw-bold mx-3 mb-0">S'inscrire</p>
                        </div>


                        <div class="d-flex justify-content-between align-items-center">
                            <!-- nom input -->
                            <div class="form-outline mb-4">
                                <label class="form-label">Nom</label>
                                <input type="text" name="nom" class="form-control form-control-lg"
                                    placeholder="Nom" />

                            </div>
                            <!-- prenom input -->
                            <div class="form-outline mx-2 mb-4">
                                <label class="form-label">Prénom</label>
                                <input type="text" name="prenom" class="form-control form-control-lg" placeholder="Prénom" />
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control form-control-lg"
                                    placeholder="Email" />

                            </div>
                            <!-- Password input -->
                            <div class="form-outline mx-2 mb-4">
                                <label class="form-label">Mot de passe</label>
                                <input type="password" name="password" class="form-control form-control-lg" placeholder="Mot de passe" />
                            </div>
                        </div>


                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="button" class="btn btn-primary btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;">Se connecter</button>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Pas de compte? <a href="#!"
                                    class="link-danger">S'inscrire</a></p>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
