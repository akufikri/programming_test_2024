@extends('template')

@section('content')
    <section>
        <div class="max-w-xl mx-auto">
            <h2>Hasil Proses</h2>
            <p>Inputan dari user: {{ $input }}</p>
            <p>Urutan bilangan dari besar ke kecil: {{ $sortedNumber }}</p>
        </div>
    </section>
@endsection
