@extends('layouts/layouts')
@section('content')
    <h1 style="text-align: center; padding-top: 15vh; padding-bottom:5vh;">Fashion Photographs</h1>

    <main class="container">
        <section class="cardBlog">
            <div class="cardBlogContent">
                <img src="{{ asset('images/fashionImages/fashion1.jpg') }}" alt="" />
            </div>
            <div class="cardBlogContent" data-aos="fade-up">
                <img src="{{ asset('images/fashionImages/fashion2.jpg') }}" alt="" loading="lazy" />
            </div>
            <div class="cardBlogContent" data-aos="fade-up">
                <img src="{{ asset('images/fashionImages/fashion3.jpg') }}" alt="" loading="lazy" />
            </div>
            <div class="cardBlogContent" data-aos="fade-up">
                <img src="{{ asset('images/fashionImages/fashion4.jpg') }}" alt="" loading="lazy" />
            </div>
            <div class="cardBlogContent" data-aos="fade-up">
                <img src="{{ asset('images/fashionImages/fashion5.jpg') }}" alt="" loading="lazy" />
            </div>
            <div class="cardBlogContent" data-aos="fade-up">
                <img src="{{ asset('images/fashionImages/fashion6.jpg') }}" alt="" loading="lazy" />
            </div>
            <div class="cardBlogContent" data-aos="fade-up">
                <img src="{{ asset('images/fashionImages/fashion7.jpg') }}" alt="" loading="lazy" />
            </div>
            <div class="cardBlogContent" data-aos="fade-up">
                <img src="{{ asset('images/fashionImages/fashion8.jpg') }}" alt="" loading="lazy" />
            </div>
            <div class="cardBlogContent" data-aos="fade-up">
                <img src="{{ asset('images/fashionImages/fashion9.jpg') }}" alt="" loading="lazy" />
            </div>
            <div class="cardBlogContent" data-aos="fade-up">
                <img src="{{ asset('images/fashionImages/fashion10.jpg') }}" alt="" loading="lazy" />
            </div>
      
            <div class="cardBlogContent" data-aos="fade-up">
                <img src="{{ asset('images/fashionImages/fashion11.jpg') }}" alt="" loading="lazy" />
            </div>
            <div class="cardBlogContent" data-aos="fade-up">
                <img src="{{ asset('images/fashionImages/fashion12.jpg') }}" alt="" loading="lazy" />
            </div>
         </section>



    </main>





    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <script>
        AOS.init({
            offset: 400, // offset (in px) from the original trigger point
            delay: 0, // values from 0 to 3000, with step 50ms
            duration: 3000 // values from 0 to 3000, with step 50ms
        });

        document.querySelectorAll('img')
            .forEach((img) =>
                img.addEventListener('load', () =>
                    AOS.refresh()
                )
            );

    </script>
@endsection
