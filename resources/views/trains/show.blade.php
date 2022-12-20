@extends('layouts.app')

@section('title', $train->stazione_partenza . '-' . $train->stazione_arrivo)

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Id: {{ $train->id }}
                <br>
                Stazione di partenza: {{ $train->stazione_partenza }}
                <br>
                Stazione di arrivo: {{ $train->stazione_arrivo }}
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Compagnia: {{ $train->azienda }}</li>
                <li class="list-group-item">Ora partenza: {{ $train->ora_partenza }}</li>
                <li class="list-group-item">Ora arrivo: {{ $train->ora_arrivo }}</li>
                <li class="list-group-item">Codice: {{ $train->codice_treno }} Carrozze: {{ $train->numero_carrozze }}</li>
                <li class="list-group-item">
                    @if ($train->cancellato === 0)
                        @if ($train->in_orario === 1)
                            In orario
                        @else
                            In ritardo
                        @endif
                    @else
                        <span class="text-danger">CANCELLATO</span>
                    @endif
                </li>


            </ul>
        </div>

        <a href="{{ route('trains.index') }}">
            Torna indietro
        </a>
    </div>
@endsection
