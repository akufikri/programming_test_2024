@extends('template')
@section('content')
    <section>
        <div class="max-w-xl mx-auto">
            <h2>Hasil Proses</h2>
            <p>Inputan dari user: {{ $input }}</p>
            <p>Bilangan yang diproses: {{ $processedNumber }}</p>
            @if ($isPrime)
                <p>{{ $processedNumber }} adalah bilangan prima</p>
            @else
                <p>{{ $processedNumber }} bukan bilangan prima</p>
            @endif
        </div>
    </section>
@endsection
