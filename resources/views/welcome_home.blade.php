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
                                {{ $prod->price }}
                            </div>

                            <img src="{{ URL::asset('img/') }}/{{ $prod->image }}" alt="">
                        </div>
                        <div class="blog-image-box-text">
                            <h3>{{ $prod->name }}</h3>
                            <p>{{ $prod->desc }}</p>
                            <h3>Cart <i class="fas fa-cart-arrow-down"></i></h3>
                            

                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
    <section>
        {{-- <div class="container"> --}}
            <div class="adv">
                <div class="left">
                    <img src="enduser/images/offer-left.jpg" alt="">

                </div>
                <div class="right">
                    <img src="enduser/images/offer-right.jpg" alt="">
                </div>
            </div>


        {{-- </div> --}}
    </section>
    <section class="blog">
        <div class="container">
            <div class="blog-caption">
                <h2>Trending Items</h2>
            </div>

            <div class="blog-image">

                @foreach ($prods as $prod)
                    <div class="blog-image-box">
                        <div style="position: relative;" class="blog-image-box-img">
                            <div class="price-box">
                                {{ $prod->price }}
                            </div>

                            <img src="{{ URL::asset('img/') }}/{{ $prod->image }}" alt="">
                        </div>
                        <div class="blog-image-box-text">
                            <h3>{{ $prod->name }}</h3>
                            <p>{{ $prod->desc }}</p>
                            <h3>Cart <i class="fas fa-cart-arrow-down"></i></h3>

                        </div>
                    </div>
                @endforeach
            </div>

            <button type="button" class="btn btn-secondary btn-lg show">Load More</button>
        </div>
    </section>
    <div class="owner">
        <div class="owner-container">
            <div class="owner-script">
                <h1><i class="fas fa-quote-left"></i></h1>
                <h2>
                    ‘Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti nihil exercitationem sequi facilis
                    pariatur sapiente ipsam praesentium.’
                </h2>
                <p><img src="enduser/images/Capture4.PNG" alt=""></p>
                <h4>MD SHAHIN ALAM</h4>

            </div>
        </div>
    </div>
    <section class="Blog">
        <div class="container">
            <div class="Blog-caption">
                <h2>LATEST BLOGS</h2>
            </div>
            <div class="Blog-image">
                <div class="Blog-image-box">
                    <div class="Blog-image-box-img">
                        <img src="enduser/images/Layer_23.png">
                    </div>
                    <div class="Blog-image-box-text">
                        <h3>Some Headline Here </h3>
                        <p>Most people who get sick with COVID-19 will have only mild illness and should recover at
                            home. Care at home can help stop the spread of COVID-19</p>
                        <button type="button" class="btn btn-outline-secondary">Show More</button>

                    </div>
                </div>
                <div class="Blog-image-box">
                    <div class="Blog-image-box-img">
                        <img src="enduser/images/Layer_24.png">
                    </div>
                    <div class="Blog-image-box-text">
                        <h3>Some Headline Here </h3>
                        <p>Most people who get sick with COVID-19 will have only mild illness and should recover at
                            home. Care at home can help stop the spread of COVID-19</p>
                        <button type="button" class="btn btn-outline-secondary">Show More</button>
                    </div>
                </div>
                <div class="Blog-image-box">
                    <div class="Blog-image-box-img">
                        <img src="enduser/images/Layer_25.png">
                    </div>
                    <div class="Blog-image-box-text">
                        <h3>Some Headline Here </h3>
                        <p>Most people who get sick with COVID-19 will have only mild illness and should recover at
                            home. Care at home can help stop the spread of COVID-19</p>
                        <button type="button" class="btn btn-outline-secondary">Show More</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="Shop">
        <div class="container">
            <div class="Shop-caption">
                <h2>SHOP BY BRAND</h2>
            </div>
            <div class="Shop-image">
                <div class="Shop-image-box">
                    <div class="Shop-image-box-img">
                        <img src="enduser/images/logo4.png">
                    </div>
                </div>
                <div class="Shop-image-box">
                    <div class="Shop-image-box-img">
                        <img src="enduser/images/logohover.png">
                    </div>
                </div>
                <div class="Shop-image-box">
                    <div class="Shop-image-box-img">
                        <img src="enduser/images/logo4.png">
                    </div>
                </div>
                <div class="Shop-image-box">
                    <div class="Shop-image-box-img">
                        <img src="enduser/images/logohover.png">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- start final page -->
    <section class="final">
        <div class="container">
            <div class="final-captions">
                <div class="final-captions-text2">
                    <h5>SHOPS</h5>
                    <ul>
                        <li>
                            <a href="#about">New In</a>
                        </li>
                        <li>
                            <a href="#symptoms">Women</a>
                        </li>
                        <li>
                            <a href="#prevention">Men</a>
                        </li>
                        <li>
                            <a href="#protect">Schule Shoes</a>
                        </li>
                        <li>
                            <a href="#FAQ">Bags&Accessories</a>
                        </li>
                        <li>
                            <a href="#FAQ">Sales&Special Offers</a>
                        </li>
                        <li>
                            <a href="#FAQ">LookBook</a>
                        </li>
                    </ul>

                </div>
                <div class="final-captions-text3">
                    <h5>Information</h5>
                    <ul>
                        <li>
                            <a href="#">About Us</a>
                        </li>
                        <li>
                            <a href="#">Customer Service</a>
                        </li>
                        <li>
                            <a href="#">New Collection</a>
                        </li>
                        <li>
                            <a href="#">Best Sellers</a>
                        </li>
                        <li>
                            <a href="#">Manufactures</a>
                        </li>
                        <li>
                            <a href="#">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="#">Term&Condition</a>
                        </li>
                        <li>
                            <a href="#">Blog</a>
                        </li>
                    </ul>

                </div>
                <div class="final-captions-text4">
                    <h5>Customer Service</h5>

                    <ul>
                        <li>
                            <a href="#">Search Keys</a>
                        </li>
                        <li>
                            <a href="#">Advanced Search</a>
                        </li>
                        <li>
                            <a href="#">Orders&Returns</a>
                        </li>
                        <li>
                            <a href="#">Contact Us</a>
                        </li>
                        <li>
                            <a href="#">RSS</a>
                        </li>
                        <li>
                            <a href="#">Helps&FAQs</a>
                        </li>
                        <li>
                            <a href="#">Consultant</a>
                        </li>
                        <li>
                            <a href="#">Store Location</a>
                        </li>
                    </ul>
                </div>
                <div class="final-captions-text1">
                    <h5 style="color: azure">NEWSLETTER</h5>
                    <h3 style="color: azure">
                        Sign Up For New Letter
                    </h3>
                    <textarea class="form-control" placeholder="Type Your Email" id="floatingTextarea"></textarea>
                    
                    <div class="final-icons">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-youtube"></i>
                        <i class="fab fa-google"></i>
                        
                    </div>
                </div>



            </div>
        </div>
    </section>
    <!-- end final page -->
@endsection
