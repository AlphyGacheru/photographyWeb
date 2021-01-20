@extends('layouts/layouts')
@section('content')

    {{-- <h1 style="text-align: center; padding-top: 15vh; padding-bottom:5vh;">Blog</h1>
    --}}
    <main class="container">
        <section class="eachBlog">
            <h1 style="text-align: center; padding-top: 15vh; padding-bottom:3vh;">Benefits of Paul's Photography capturing
                your Wedding</h1>
            <div style="padding-left:5rem; padding-right:5rem;">
                <p style="font-size: 16px; padding-top:0.4rem;">May 9, 2018 at 6:09 pm <span style="float:right;">Written By
                        Paul Ogola</span></p>
            </div>

            <div class="eachBlogContentImage" data-aos="fade-left">
                <img src="{{ asset('images/pic1.jpg') }}" alt="" />

            </div>

            <div style="" class="eachBlogContentText">


                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta neque fugiat quia tempora numquam
                    deserunt eligendi dicta distinctio laborum suscipit voluptatem odit labore dolor perspiciatis veniam
                    enim dignissimos mollitia cum, deleniti consectetur et nostrum voluptatibus accusantium. Aperiam
                    laborum, fugiat mollitia modi debitis magnam nulla ratione qui unde repellendus minima molestias eum eos
                    in dolorem et rem quasi ipsum illo nisi voluptates laudantium dolor? Sed cum voluptatibus ratione
                    corporis doloribus possimus provident dolor modi iure, dicta quos veritatis, quisquam nemo ab eligendi
                    architecto impedit! Consequatur ipsam inventore, sit id beatae explicabo aspernatur voluptatibus amet
                    architecto rem veniam cumque maiores sed unde!</p>
            </div>




        </section>



    </main>


    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <script>
        AOS.init({
            offset: 0, // offset (in px) from the original trigger point
            delay: 0, // values from 0 to 3000, with step 50ms
            duration: 2000 // values from 0 to 3000, with step 50ms
        });

    </script>
@endsection
