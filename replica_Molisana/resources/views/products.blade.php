@extends('layouts.app')

@section('title')
Prodotti
@endsection

@section('header_content')
    
@endsection

@section('main_content')
    <div class="products_wrapper">
        @foreach ($paste as $pasta)
        <div class="product_template">
            <div class="poster">
                <img src= {{$pasta['src']}} alt="">
            </div>
            <div class="infos">
                <p> {{ $pasta['titolo'] }}</p>
                <p>{{ $pasta['tipo'] }}</p>
                <p>{{ $pasta['cottura'] }}</p>
                <p>{{ $pasta['peso'] }}</p>
                <p>{{ $pasta['descrizione'] }}</p>
            </div>
            

        </div>            
        @endforeach
        
    </div>
@endsection 

@section('footer_content')
    <p>Prodotti Footer</p>
@endsection