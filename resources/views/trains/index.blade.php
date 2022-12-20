@extends ('layouts.app')

@section('title', 'Trains')

@section('content')
    <div class="container">
        <div class="row row-cols-4 g-3">
            @foreach ($trains as $train)
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            Stazione di partenza: {{ $train->stazione_partenza }}
                            <br>
                            Stazione di arrivo: {{ $train->strazione_arrivo }}
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Compagnia: {{ $train->azienda }}</li>
                            <li class="list-group-item">Ora partenza: {{ $train->ora_partenza }}</li>
                            <li class="list-group-item">Ora arrivo: {{ $train->ora_arrivo }}</li>
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
