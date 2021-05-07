@extends('layouts.app')

@section('title')
Prodotti
@endsection

@section('header_content')
    
@endsection
@section('main_content')
    <div class="products_wrapper">
        @foreach ($formati as $key => $formato)
        
        <div class='type_section'>
            <h1> LE {{ strtoupper($key) }}</h1>
            @foreach ($formato as $index => $pasta)
            <div class="product_template">
                <img src="{{ asset($pasta['src'])}}" alt="{{ $pasta['titolo']}}">
                <div class="layover">
                    <a href="{{ route('pagina-dettaglio', ['id' => $index])}}">{{ $pasta['titolo']}}</a>
                </div>
            </div>
                
            @endforeach
        </div>           
        @endforeach
        
    </div>
@endsection 

@section('footer_content')
    <p>Prodotti Footer</p>
@endsection