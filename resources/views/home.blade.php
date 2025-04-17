@extends('layouts.main_layout')
@section('content')
    <div class="text-center">
        @foreach ($pessoas_linguas as $pessoa => $linguas)
            {{--component--}}
            <x-card-pessoa :$pessoa :$linguas />

        @endforeach
    </div>
@endsection
