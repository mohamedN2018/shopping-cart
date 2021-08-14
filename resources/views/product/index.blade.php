@extends('layouts.app')


@section('content')
<hr><br><br><br>
<section>

    @if( session()->has('success'))
        <br><div class="alert alert-success" style="text-align: center; margin: auto"> {{ session()->get('success') }}</div><br>
    @endif
    <div class="row">
    </div>
    <div class="row m-md-1">
        @foreach( $products as $product)
            <br>
            <div class="col-md-2">
                <div class="card bg-dark text-white mb-2" style="text-align: center; margin: auto;">
                    <img src="{{ $product->image }}" class="card-img-top" >
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->title }}</h5>
                        <p class="card-text">Sld on thd make up the bulk of the card's content.</p>
                        {{-- <a  href="{{ route('cart.add , $product') }}" class="button" target="_blank > Buy </a>--}}
                        {{-- <button  href="{{ route('cart.add',$product->id)}}" class="button">  Buy  </button>--}}
                        <p><strong class="price"> $ {{ $product->price }}</strong></p>
                        <a class="button" href="{{ route('cart.add',$product)}}"> Buy </a>
                    </div>
                    <br>
                </div>
            </div>
            <br>
        @endforeach
    </div>
</section>
<div class="col-md-3">
    <div class="card ml-3" style="max-width: 10rem;">
        <div class="card-header bg-info text-white"> Stats.</div>
        <div class="card-body">
            <p class="card-text"> All product: {{ $product }}</p>
            <p>
            </p>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 d-flex justify-content-center">
    </div>
</div>

@endsection
