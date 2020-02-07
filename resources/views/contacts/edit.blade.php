@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Modification du contact <b><!-- TODO Afficher le nom du contact -->{{$contact->name}}</b></h3>
                <form action="{{route('contacts.update', $contact)}}" method="post">
                    <!-- TODO mise en place de la form pour modifier un contact -->
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="name">Nom et Prénom</label>
                        <input name="name" type="text"
                               class="form-control @error('name') is-invalid @enderror" id="name"
                               placeholder="Entrer votre Nom et Prénom"
                               value="{{  old('name', $contact->name) }}">

                        @error('name')
                        <div class="invalid-feedback">
                            Le titre est requis
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="tel">Téléphone</label>
                        <input name="tel" type="text"
                               class="form-control @error('tel') is-invalid @enderror" id="tel"
                               placeholder="Entrer votre numéro de téléphone"
                               value="{{  old('tel', $contact->tel) }}">

                        @error('tel')
                        <div class="invalid-feedback">
                            Le numéro de téléphone est requis
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>

                        <input name="email" type="text"
                               class="form-control @error('email') is-invalid @enderror" id="email"
                               placeholder="Entrer votre email"
                               value="{{  old('email', $contact->email) }}">

                        @error('email')
                        <div class="invalid-feedback">
                            L'email est requis
                        </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Mettre à jour</button>
                </form>
            </div>
        </div>
    </div>
@endsection
