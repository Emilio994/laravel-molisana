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
                <p> Nome : {{ $pasta['titolo'] }}</p>
                <p> Tipo : {{ $pasta['tipo'] }}</p>
                <p> Tempo di cottura : {{ $pasta['cottura'] }}</p>
                <p> Peso : {{ $pasta['peso'] }}</p>
                <p> Descrizione : <br> {{ $pasta['descrizione'] }}</p>
            </div>
            

        </div>            
        @endforeach
        
    </div>
@endsection 

@section('footer_content')
    <p>Prodotti Footer</p>
@endsection