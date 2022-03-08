<!-- Button trigger modal -->
@if (isset($user))
    <button type="button" class="btn btn-primary rounded" data-bs-toggle="modal"
        data-bs-target="#userModal{{ $user->id }}">
        <i class="bi bi-pen-fill"></i>
    </button>
@else
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#userModal">
        Ajout un utilisateur
    </button>
@endif

<!-- Modal -->
<div class="modal fade" id="userModal{{ isset($user) ? $user->id : '' }}" tabindex="-1"
    aria-labelledby="userModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="userModalLabel">Carrefour user : <br> {{ isset($user) ? 'Modifier' : 'Ajouter' }} un user</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="/users{{ isset($user) ? "/". $user->id : '' }}">
                    @csrf
                    <div class="divider d-flex align-items-center my-4">
                        <p class="text-center fw-bold mx-3 mb-0">{{ isset($user) ? 'Modifier' : 'Ajouter' }} un utilisateur</p>
                    </div>


                    <div class="d-flex justify-content-between align-items-center">
                        <!-- nom input -->
                        <div class="form-outline mb-4">
                            <label class="form-label">Nom</label>
                            <input type="text" name="nom" value="{{ isset($user) ? $user->name : '' }}" class="form-control form-control-lg" placeholder="Nom" />

                        </div>
                        <!-- prenom input -->
                        <div class="form-outline mx-2 mb-4">
                            <label class="form-label">Prénom</label>
                            <input type="text" name="prenom" value="{{ isset($user) ? $user->firstname : '' }}" class="form-control form-control-lg"
                                placeholder="Prénom" />
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <label class="form-label">Email</label>
                            <input type="email" value="{{ isset($user) ? $user->email : '' }}" name="email" class="form-control form-control-lg" placeholder="Email" />

                        </div>
                        <!-- Password input -->
                        @if (!isset($user))
                            <div class="form-outline mx-2 mb-4">
                            <label class="form-label">Mot de passe</label>
                            <input type="password" name="password" class="form-control form-control-lg"
                                placeholder="Mot de passe" />
                        </div>
                        @endif
                        
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <!-- Email input -->
                        <div class="form-group"> <label>Minimal</label> 
                            <select class="form-control select2 select2-hidden-accessible" value="{{ isset($user) ? $user->role_id : '' }}" name="role" style="width: 100%;" tabindex="-1" aria-hidden="true">
                           
                            @foreach ($roles as $role)
                            <option value="{{$role->id}}">{{$role->nom}}</option>
                            @endforeach
                            
                        </select> </div> <!-- /.form-group -->
                    </div>


                    <div class="text-center text-lg-start mt-4 pt-2">
                        <button type="submit" class="btn btn-primary btn-lg"
                            style="padding-left: 2.5rem; padding-right: 2.5rem;">Ajouter</button>
                        
                    </div>

                </form>
               
            </div>
        </div>
    </div>
</div>
