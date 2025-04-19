@extends('layouts.main_layout')
@section('content')
    {{--<div class="text-center">--}}
    {{--    @foreach ($pessoas_linguas as $pessoa => $linguas)--}}
    {{--        {{--component--}}
    {{--        <x-card-pessoa :$pessoa :$linguas />--}}
    {{----}}
    {{--    @endforeach--}}
    {{--</div>--}}
    {{--componentes slots--}}
    {{--<div class="row">--}}
    {{--    <div class="col">--}}
    {{--        <h4>Como funciona um slot</h4>--}}
    {{--        <x-other-card>--}}
    {{--            <h1 class="text-danger">--}}
    {{--                Este é o slot--}}
    {{--            </h1>--}}
    {{--        </x-other-card>--}}
    {{--    </div>--}}
    {{--</div>--}}
    <x-multi-slot>
        <x-slot:title>
            Este é o título
        </x-slot>
        <x-slot:content>
            Este é o content
        </x-slot>
        <x-slot:footer>
            Este é o footer
        </x-slot>
    </x-multi-slot>
@endsection
