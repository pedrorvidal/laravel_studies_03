@extends('layouts.main_layout')
@section('content')
    <h3>Este texto faz parte da view home</h3>

    {{-- renderizar o component --}}
    <x-my-component message="mensagem passada para dentro do componente" />

    {{-- renderizar component dentro de subpasta --}}
    <x-admin.admin-card :name="$myName" teste="olá mundo" />

    <h3>Este texto faz parte da view</h3>

    <p>{{ $myName }}</p>
@endsection
