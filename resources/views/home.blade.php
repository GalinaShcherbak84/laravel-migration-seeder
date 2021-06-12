@extends('layouts.main')

@section('content')
    <div class="container">
        <h1> I nostri viaggi</h1>
        @foreach ($pacchetti as $pacchetto)
            <div class="card">
                <h2>{{$pacchetto['destinazione']}}</h2>
                <p>Durata viaggio {{$pacchetto['giorni']}} giorni</p>
                <p>Prezzo viaggio {{$pacchetto['prezzo']}},00 euro</p>
                <p>Vi aspetta: {{$pacchetto['descrizione']}}</p>
                <p>Data di partenza: {{$pacchetto['partenza']}}</p>
                <p>Città di partenza: {{$pacchetto['partenza_da']}}</p>
                <p>Posti disponibili: {{$pacchetto['posti']}}</p>
                @if (!$loop->last)
                    <hr>
                @endif
            </div>
        @endforeach
        <div>{{$pacchetti->links()}}</div>
    </div>
@endsection
