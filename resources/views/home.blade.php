@extends('layouts.main_layout')
@section('content')
    <h3>Este texto faz parte da view home</h3>

    {{-- renderizar o component --}}
    <x-my-component />
@endsection
