@extends('layouts/layouts')
@section('content')
<h1 style="text-align: center; padding-top: 15vh; padding-bottom:5vh;">Blog</h1>

    <main class="container">
        <section class="cardBlog">
            <div class="cardBlogContent">
                <img src="{{ asset('images/pic1.jpg') }}" alt="" />
                <p style="font-size: 16px; padding-top:0.4rem;">May 9, 2018 at 6:09 pm <span style="float:right;">Written By
                        Paul Ogola</span></p>
                <h4 style="font-weight:bolder;"><a href="{{ route('eachBlog')}}">Benefits of Paul's Photography capturing your Wedding</a></h4>
            </div>

            <div class="cardBlogContent" data-aos="fade-left">
                <img src="{{ asset('images/pic2.jpg') }}" alt=""  loading="lazy" />
                <p style="font-size: 16px; padding-top:0.4rem;">May 9, 2018 at 6:09 pm <span style="float:right;">Written By
                    Paul Ogola</span></p>
            <h4 style="font-weight:bolder;"><a href="{{ route('eachBlog')}}">Benefits of Using Drones in Aerial Photography</a></h4>
            </div>

            <div class="cardBlogContent" data-aos="fade-up">
                <img src="{{ asset('images/pic3.jpg') }}" alt=""  loading="lazy" />
                <p style="font-size: 16px; padding-top:0.4rem;">May 9, 2018 at 6:09 pm <span style="float:right;">Written By
                    Paul Ogola</span></p>
            <h4 style="font-weight:bolder;"><a href="{{ route('eachBlog')}}">Best Location Ideas for Your Next Photo Shoot</a></h4>
            </div>


            <div class="cardBlogContent" data-aos="fade-left">
                <img src="{{ asset('images/pic4.jpg') }}" alt=""  loading="lazy" />
                <p style="font-size: 16px; padding-top:0.4rem;">May 9, 2018 at 6:09 pm <span style="float:right;">Written By
                    Paul Ogola</span></p>
            <h4 style="font-weight:bolder;"><a href="{{ route('eachBlog')}}">8 Most Popular Photography Genres</a></h4>
            </div>

            <div class="cardBlogContent" data-aos="fade-up">
                <img src="{{ asset('images/pic5.jpg') }}" alt=""  loading="lazy" />
                <p style="font-size: 16px; padding-top:0.4rem;">May 9, 2018 at 6:09 pm <span style="float:right;">Written By
                    Paul Ogola</span></p>
            <h4 style="font-weight:bolder;"><a href="{{ route('eachBlog')}}">8 Most Popular Photography Genres</a></h4>
            </div>

            <div class="cardBlogContent" data-aos="fade-left">
                <img src="{{ asset('images/pic6.jpg') }}" alt=""  loading="lazy" />
                <p style="font-size: 16px; padding-top:0.4rem;">May 9, 2018 at 6:09 pm <span style="float:right;">Written By
                    Paul Ogola</span></p>
            <h4 style="font-weight:bolder;"><a href="{{ route('eachBlog')}}">8 Most Popular Photography Genres</a></h4>
            </div>




        </section>

   

    </main>

    <div class="pagination" id="pagination">
        <a href="">&laquo;</a>
        <a class="active" href="">1</a>
        <a  href="">2</a>
        <a href="">3</a>
        <a href="">4</a>
        <a href="">5</a>
        <a href="">&raquo;</a>
      </div>




<script src="https://unpkg.com/aos@next/dist/aos.js"></script>

<script>
    AOS.init({
        offset: 400, // offset (in px) from the original trigger point
        delay: 0, // values from 0 to 3000, with step 50ms
        duration: 2000 // values from 0 to 3000, with step 50ms
    });

</script>
@endsection
