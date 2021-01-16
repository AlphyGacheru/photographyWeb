@extends('layouts/layouts')
@section('content')

    <h1 style="text-align: center; padding-top: 15vh; padding-bottom:5vh;">Services</h1>


    <main class="container">
        <section class="cardServices">
            <img src="{{ asset('images/pic10.jpg') }}" alt="" />
            <div>
                <h3>Family Photography</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod error
                    enim laudantium, animi veniam libero eveniet culpa unde perferendi.
                </p>
                <a href="{{ route('familyImages') }}" class="btn">More Family Pictures...</a>
            </div>
        </section>

        <section class="cardServices" data-aos="fade-left">
            <img src="{{ asset('images/weddingServices.jpg') }}" alt="" loading="lazy" />
            <div>
                <h3>Wedding Photography</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod error
                    enim laudantium, animi veniam libero eveniet culpa unde perferendis
                    illo fugit corporis, voluptatibus totam dolorum, maiores magnam
                    officia. Ab, delectus.
                </p>
                <a href="{{ route('weddingImages') }}" class="btn">More Wedding Pictures...</a>
            </div>
        </section>

        <section class="cardServices" data-aos="fade-right">
            <img src="{{ asset('images/pic1.jpg') }}" alt="" loading="lazy" />
            <div>
                <h3>Travel Photography</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod error
                    enim laudantium, animi veniam libero eveniet culpa unde perferendis
                    illo fugit corporis, voluptatibus totam dolorum, maiores magnam
                    officia. Ab, delectus.
                </p>
                <a href="{{ route('travelImages') }}" class="btn">More Travel Pictures...</a>
            </div>
        </section>

        <section class="cardServices" data-aos="fade-right">
            <img src="{{ asset('images/natureServices.jpg') }}" alt="" loading="lazy" />
            <div>
                <h3>Nature Photography</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod error
                    enim laudantium, animi veniam libero eveniet culpa unde perferendis
                    illo fugit corporis, voluptatibus totam dolorum, maiores magnam
                    officia. Ab, delectus.
                </p>
                <a href="{{ route('natureImages') }}" class="btn">More Nature Pictures...</a>
            </div>
        </section>

        <section class="cardServices" data-aos="fade-left">
            <img src="{{ asset('images/pic5.jpg') }}" alt="" />
            <div>
                <h3>Fashion Photography</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod error
                    enim laudantium, animi veniam libero eveniet culpa unde perferendis
                    illo fugit corporis, voluptatibus totam dolorum, maiores magnam
                    officia. Ab, delectus.
                </p>
                <a href="{{ route('fashionImages') }}" class="btn">More Fashion Pictures...</a>
            </div>
        </section>

        <section class="cardServices" data-aos="fade-right">
            <img src="{{ asset('images/portraitServices.jpg') }}" alt="" loading="lazy" />
            <div>
                <h3>Portrait Photography</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod error
                    enim laudantium, animi veniam libero eveniet culpa unde perferendis
                    illo fugit corporis, voluptatibus totam dolorum, maiores magnam
                    officia. Ab, delectus.
                </p>
                <a href="{{ route('portraitImages') }}" class="btn">More Portrait Pictures...</a>
            </div>
        </section>

        <h1 style="text-align: center; padding-top: 15vh; padding-bottom:5vh;">My Pricing Plans</h1>

        <section class="cardPricing">
            <div class="cardPricingContent" >
                <div style=" padding-bottom: 1.5rem;"><i class="fa far fa-star fa-lg"></i></div>
                <p style="font-size:18px;">Ksh 15,000</p>
                <p>
                <p style="padding-bottom: 1.5rem; font-size:45px; color:yellowgreen;">Starter</p>
                <p>20 Photos</p>
                <p>1 Photo Shoot</p>
                <p>1 Hour</p>

                <div id="btnBook"><span class="noselect">Book Now</span>
                    <div id="circle"></div>
                </div>
            </div>

            <div class="cardPricingContent" >
                <div style=" padding-bottom: 1.5rem;">
                    <i class="fa far fa-star fa-lg"></i>
                    <i class="fa far fa-star fa-lg"></i>

                </div>
                <p style="font-size:18px;">Ksh 25,000</p>
                <p>
                <p style="padding-bottom: 1.5rem; font-size:45px; color:yellowgreen;">Premium</p>
                <p>50 Photos</p>
                <p>2 Photo Shoot</p>
                <p>2 Hour</p>

                <div id="btnBook"><span class="noselect">Book Now</span>
                    <div id="circle"></div>
                </div>
            </div>

            <div class="cardPricingContent" >
                <div style=" padding-bottom: 1.5rem;">
                    <i class="fa far fa-star fa-lg"></i>
                    <i class="fa far fa-star fa-lg"></i>
                    <i class="fa far fa-star fa-lg"></i>

                </div>
                <p style="font-size:18px;">Ksh 45,000</p>
                <p>
                <p style="padding-bottom: 1.5rem; font-size:45px; color:yellowgreen;">Ultimate</p>
                <p>120 Photos</p>
                <p>5 Photo Shoot</p>
                <p>4 Hour</p>

                <div id="btnBook"><span class="noselect">Book Now</span>
                    <div id="circle"></div>
                </div>
            </div>
        </section>

    </main>


    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <script>
        AOS.init({
            offset: 400, // offset (in px) from the original trigger point
            delay: 0, // values from 0 to 3000, with step 50ms
            duration: 1000 // values from 0 to 3000, with step 50ms
        });

    </script>
@endsection
