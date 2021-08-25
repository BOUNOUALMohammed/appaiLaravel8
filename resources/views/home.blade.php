
@extends("layouts.master")

@section("contenu")

<div class="row">
    <div class="col-12 p-4">
        <div class="jumbotron ">
                <h1 class="display-3">Bienvenu, <strong>{{userFullName()}}</strong></h1>
                @foreach (auth()->user()->roles as $role )
                <p>{{$role->nom}}</p>
                @endforeach
                <p class="lead">Ceci est une application web de paiements IETP.</p>
                <hr class="my-4">
                <p>réalisé par Bounoual Mohammed et Brahimi Ayman.</p>
                <p class="lead">
                </p>
        </div>
    </div>
</div>


@endsection
