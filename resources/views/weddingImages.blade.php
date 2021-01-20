@extends('layouts/layouts')
@section('content')
    <h1 style="text-align: center; padding-top: 15vh; padding-bottom:5vh;">WEDDING PHOTOGRAPHS</h1>

    <main class="container">
        <section class="cardBlog">
            <div class="cardBlogContent" data-aos="fade-up">
                <img src="{{ asset('images/weddingImages/wedding1.jpg') }}" alt="" loading="lazy"/>
            </div>
            <div class="cardBlogContent" data-aos="fade-up">
                <img src="{{ asset('images/weddingImages/wedding2.jpg') }}" alt="" loading="lazy"/>
            </div>
            <div class="cardBlogContent" data-aos="fade-up">
                <img src="{{ asset('images/weddingImages/wedding3.jpg') }}" alt="" loading="lazy"/>
            </div>
            <div class="cardBlogContent" data-aos="fade-up">
                <img src="{{ asset('images/weddingImages/wedding4.jpg') }}" alt="" loading="lazy"/>
            </div>
            <div class="cardBlogContent" data-aos="fade-up">
                <img src="{{ asset('images/weddingImages/wedding5.jpg') }}" alt="" loading="lazy"/>
            </div>
            <div class="cardBlogContent" data-aos="fade-up">
                <img src="{{ asset('images/weddingImages/wedding6.jpg') }}" alt="" loading="lazy"/>
            </div>
            <div class="cardBlogContent" data-aos="fade-up">
                <img src="{{ asset('images/weddingImages/wedding7.jpg') }}" alt="" loading="lazy"/>
            </div>
            <div class="cardBlogContent" data-aos="fade-up">
                <img src="{{ asset('images/weddingImages/wedding8.jpg') }}" alt="" loading="lazy"/>
            </div>
            <div class="cardBlogContent" data-aos="fade-up">
                <img src="{{ asset('images/weddingImages/wedding9.jpg') }}" alt="" loading="lazy"/>
            </div>
            <div class="cardBlogContent" data-aos="fade-up">
                <img src="{{ asset('images/weddingImages/wedding10.jpg') }}" alt="" loading="lazy"/>
            </div>
            <div class="cardBlogContent" data-aos="fade-up">
                <img src="{{ asset('images/weddingImages/wedding11.jpg') }}" alt="" loading="lazy"/>
            </div>
            <div class="cardBlogContent" data-aos="fade-up">
                <img src="{{ asset('images/weddingImages/wedding12.jpg') }}" alt="" loading="lazy"/>
            </div>
            <div class="cardBlogContent" data-aos="fade-up">
                <img src="{{ asset('images/weddingImages/wedding13.jpg') }}" alt="" loading="lazy"/>
            </div>
            <div class="cardBlogContent" data-aos="fade-up">
                <img src="{{ asset('images/weddingImages/wedding14.jpg') }}" alt="" loading="lazy"/>
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

    </script>
@endsection
