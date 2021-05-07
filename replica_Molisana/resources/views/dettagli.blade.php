@extends('layouts.app')

@section('title')
Dettaglio
@endsection

@section('header_content')

@endsection
@section('main_content')
    <div class="details_wrapper">
        <div class="posters">
            <img src="{{ asset($formato['src-h']) }}" alt="">
            <img src="{{ asset($formato['src-p']) }}" alt="">
        </div>
        <div class="infos">
            @foreach ($formato as $keyword => $value)
                @if (!str_contains($keyword, 'src'))
                <p> {!! ucfirst($keyword) . ' : ' . $value !!}</p>                    
                @endif
            @endforeach

        </div>
    </div>
@endsection