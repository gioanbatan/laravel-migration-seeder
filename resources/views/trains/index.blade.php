@extends ('layouts.app')

@section('title', 'Trains')

@section('content')
    <div class="container">
        <div class="row row-cols-4">
            @foreach ($trains as $train)
                {{ $train->azienda }}
                {{ $train->stazione_partenza }}
                {{ $train->ora_partenza }}
                {{ $train->ora_arrivo }}
                {{ $train->strazione_arrivo }}
            @endforeach
        </div>
    </div>

@endsection
