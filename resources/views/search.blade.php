@extends('layouts.app')
@section('content')
    <section style="padding-top: 60px">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card" style="text-align: center">
                        <form action="{{ route('search') }}" method="GET"
                            style="padding-top:30px;padding-bottom:40px;padding-left:20px;padding-right:20px">
                            <input type="text" name="search" required />
                            <button type="submit">Search</button>
                        </form>
                        @if ($posts->isNotEmpty())
                        <section class="blog">
                            <div class="container">
                                <div class="blog-caption">
                                    <h2>Featured Items</h2>
                                </div>
                    
                                <div class="blog-image">
                                    @foreach ($posts as $post)
                                        <div class="blog-image-box">
                                            <div style="position: relative;" class="blog-image-box-img">
                                                <div class="price-box">
                                                    {{ $post->price }}
                                                </div>
                    
                                                <img src="{{ URL::asset('img/') }}/{{ $post->image }}" alt="">
                                            </div>
                                            <div class="blog-image-box-text">
                                                <h3>{{ $post->name }}</h3>
                                                <p>{{ $post->desc }}</p>
                                                <form method="POST" action="{{ route('addToCart', ['product' => $post->id]) }}">
                                                    @csrf
                                                    
                                                    <button type="submit" title="add to cart"> <i class="fas fa-cart-arrow-down fa-2x"></i></button>
                    
                                                </form>
                    
                    
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                    
                            </div>
                        </section>
                        @else
                            <div>
                                <h2>No posts found</h2>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection


{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Search Product</title>
</head>

<body>


    <section style="padding-top: 60px">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            Search Product
                        </div>
                        <div class="car-body" style="padding-top:30px;padding-bottom:40px;padding-left:20px;padding-right:20px">
                            <form>
                                <input type="text" class="form-control typeahead" placeholder="Search....">

                            </form>



                        </div>

                    </div>

                </div>
            </div>
        </div>

    </section>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"
        integrity="sha512-HWlJyU4ut5HkEj0QsK/IxBCY55n5ZpskyjVlAoV9Z7XQwwkqXoYdCIC93/htL3Gu5H3R4an/S0h2NXfbZk3g7w=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        var path = "{{route('autocomplete')}}"
        $('input.typeahead').typeahead({
            source: function(terms,process){
                return $.get(path,{terms:terms},function(data){
                    return process(data);
                });
            }
        })
    </script>
</body>

</html> --}}
