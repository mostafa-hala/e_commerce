@extends('layouts.app')
@section('content')
    <section class="blog">
        <div class="container">
            <div class="blog-caption">
                <h2>Featured Items</h2>
            </div>
            
                <div class="blog-image">
                    @foreach ($prods as $prod)
                    <div class="blog-image-box">
                        <div style="position: relative;" class="blog-image-box-img">
                            <div class="price-box">
                                {{$prod->price}}
                            </div>

                            <img src="{{ URL::asset('img/') }}/{{ $prod->image }}" alt="">
                        </div>
                        <div class="blog-image-box-text">
                            <h3>{{ $prod->name }}</h3>
                            <p>{{ $prod->desc }}</p>
                            <p class="price">Price</p>
                           <h3> {{$prod->price}}</h3>
                        </div>
                    </div>
                    @endforeach
                </div>
           
        </div>
    </section>
    <section class="blog">
        <div class="container">
            <div class="blog-caption">
                <h2>Trending Items</h2>
            </div>
            
                <div class="blog-image">
                    
                    @foreach ($prods as $prod)
                    <div class="blog-image-box">
                        <div class="blog-image-box-img">
                            <img src="{{ URL::asset('img/') }}/{{ $prod->image }}" alt="">
                        </div>
                        <div class="blog-image-box-text">
                            <h3>{{ $prod->name }}</h3>
                            <p>{{ $prod->desc }}</p>
                            <p class="price">Price</p>
                           <h3> {{$prod->price}}</h3>
                        </div>
                    </div>
                    @endforeach
                </div>
                
                <a href="#" class="btn show-more">show more</a>
        </div>
    </section>

   
@endsection
