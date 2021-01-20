@extends('layouts/layouts')
@section('content')
    <h1 style="text-align: center; padding-top: 15vh; padding-bottom:5vh;">NATURE PHOTOGRAPHS</h1>

    <main class="container">
        <section class="cardBlog">
            <div class="cardBlogContent" data-aos="fade-up">
                <img src="{{ asset('images/natureImages/nature1.jpg') }}" alt="" loading="lazy"  />
            </div>
            <div class="cardBlogContent" data-aos="fade-up">
                <img src="{{ asset('images/natureImages/nature2.jpg') }}" alt="" loading="lazy" />
            </div>
            <div class="cardBlogContent" data-aos="fade-up">
                <img src="{{ asset('images/natureImages/nature3.jpg') }}" alt="" loading="lazy" />
            </div>
            <div class="cardBlogContent" data-aos="fade-up">
                <img src="{{ asset('images/natureImages/nature4.jpg') }}" alt="" loading="lazy" />
            </div>
            <div class="cardBlogContent" data-aos="fade-up">
                <img src="{{ asset('images/natureImages/nature5.jpg') }}" alt="" loading="lazy" />
            </div>
            <div class="cardBlogContent" data-aos="fade-up">
                <img src="{{ asset('images/natureImages/nature6.jpg') }}" alt="" loading="lazy" />
            </div>
            <div class="cardBlogContent" data-aos="fade-up">
                <img src="{{ asset('images/natureImages/nature7.jpg') }}" alt="" loading="lazy" />
            </div>
            <div class="cardBlogContent" data-aos="fade-up">
                <img src="{{ asset('images/natureImages/nature8.jpg') }}" alt="" loading="lazy" />
            </div>
            <div class="cardBlogContent" data-aos="fade-up">
                <img src="{{ asset('images/natureImages/nature9.jpg') }}" alt="" loading="lazy" />
            </div>
            <div class="cardBlogContent" data-aos="fade-up">
                <img src="{{ asset('images/natureImages/nature10.jpg') }}" alt="" loading="lazy" />
            </div>
            <div class="cardBlogContent" data-aos="fade-up">
                <img src="{{ asset('images/natureImages/nature13.jpg') }}" alt="" loading="lazy" />
            </div>
            <div class="cardBlogContent" data-aos="fade-up">
                <img src="{{ asset('images/natureImages/nature11.jpg') }}" alt="" loading="lazy" />
            </div>
            <div class="cardBlogContent" data-aos="fade-up">
                <img src="{{ asset('images/natureImages/nature12.jpg') }}" alt="" loading="lazy" />
            </div>
            <div class="cardBlogContent" data-aos="fade-up">
                <img src="{{ asset('images/natureImages/nature14.jpg') }}" alt="" loading="lazy" />
            </div>
            <div class="cardBlogContent" data-aos="fade-up">
                <img src="{{ asset('images/natureImages/nature15.jpg') }}" alt="" loading="lazy" />
            </div>
            <div class="cardBlogContent" data-aos="fade-up">
                <img src="{{ asset('images/natureImages/nature16.jpg') }}" alt="" loading="lazy" />
            </div>
         





        </section>



    </main>





    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <script>
        AOS.init({
            offset: 400, // offset (in px) from the original trigger point
            delay: 0, // values from 0 to 3000, with step 50ms
            duration: 2000 // values from 0 to 3000, with step 50ms
        });

        document.querySelectorAll('img')
            .forEach((img) =>
                img.addEventListener('load', () =>
                    AOS.refresh()
                )
            );

    </script>
@endsection
