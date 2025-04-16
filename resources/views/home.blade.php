@extends('layouts.main_layout')
@section('content')
    <div class="text-center">
        @foreach ($pessoas_linguas as $pessoa => $linguas)
            {{--component--}}
            <x-card-pessoa :nomePessoa="$pessoa" :linguasPessoa="$linguas" />

        @endforeach
    </div>
@endsection
