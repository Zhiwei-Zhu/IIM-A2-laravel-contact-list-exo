@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Créer un contact</h3>
                <!-- TODO mise en place de la form pour créer un contact -->
                <form action="{{route('contacts.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>

                        <input name="name" type="text"
                               class="form-control @error('name') is-invalid @enderror" id="name"
                               placeholder="Entrer votre nom et prénom"
                               value="{{  old('name', "") }}">
                    @error('name')
                        <div class="invalid-feedback">
                            la valeure entrer est requise ou incomplète
                        </div>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="tel">téléphone</label>

                        <input name="tel" type="text"
                               class="form-control @error('tel') is-invalid @enderror" id="tel"
                               placeholder="Entrer votre numéro de téléphone" maxlength="10"
                               value="{{  old('tel', "") }}">
                        @error('tel')
                        <div class="invalid-feedback">
                            la valeure entrer est requise
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">email</label>

                        <input name="email" type="text"
                               class="form-control @error('email') is-invalid @enderror" id="email"
                               placeholder="Entrer votre email"
                               value="{{  old('email', "") }}">
                        @error('email')
                        <div class="invalid-feedback">
                            la valeure entrer est requise
                        </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Créer</button>
                </form>
            </div>
        </div>
    </div>
@endsection
