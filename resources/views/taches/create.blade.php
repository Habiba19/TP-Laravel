@extends("layout.master")
@section('content')
    {{-- Affiche les erreurs --}}
    @if ($errors->any())
        <div class="alert alert-danger"
            style="margin-top: 2rem">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- formulaire de saisie d'une tâche la fonction 'route' utilise un nom de route 'csrf_field' ajoute un champ caché qui permet de vérifier que le formulaire vient du serveur. --}}
    
    <form action="{{ route('taches.store') }}"
        method="POST">
        {!! csrf_field() !!}
        <div class="text-center"
            style="margin-top: 2rem">
            <h3><i class="far fa-edit"></i> Création d'une tâche</h3>
            <hr class="mt-2 mb-2">
        </div>
        <div class="form-group row">
            <label class="col-md-3 form-control-label"
                for="expiration">
                <strong>
                    Date d'expiration:
                </strong>
            </label>
            <div class="col-md-3">
                <div class="input-group date">
                    <span class="input-group-addon">
                        <i class="far fa-calendar"></i>
                    </span>
                    <input type="date"
                        class="form-control"
                        name="expiration"
                        id="expiration"
                        value="{{ old('expiration') }}"
                        class="form-control"
                        placeholder="aaaa-mm-jj">
                </div>
            </div>
        </div>
        <div class="form-group row">
            {{-- la catégorie --}}
            <label class="col-md-3 form-control-label"
                for="categorie"></label>
            <div class="col-md-4">
                {{-- input de la catégorie --}}
            </div>
            <label class="col-md-2 form-control-label"
                for="select">
                <strong>Accomplie ?</strong>
            </label>
            <div class="btn-group btn-group-toggle"
                data-toggle="buttons"
                class="col-md-2">
                <label class="btn btn-outline-primary @accomplie(old('accomplie')) active @endaccomplie">
                    <input type="radio"
                        name="accomplie"
                        value="O"
                        id="accomplie-on"> Oui
                </label>
            <label class="btn btn-outline-primary @accomplie(old('accomplie')) @else active @endaccomplie">
                    <input type="radio"
                        name="accomplie"
                        value="N"
                        id="accomplie-off"> Non
                </label>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 form-control-label"
                for="textarea-input">Description :</label>
            <div class="col-md-9">
                <textarea name="description"
                    id="description"
                    rows="6"
                    class="form-control"
                    value="{{ old('description') }}"
                    pla
                    ceholder="Description.."></textarea>
            </div>
        </div>
        <div class="text-center">
            <button class="btn btn-success"
                type="submit">Valide</button>
        </div>
    </form>
@endsection
