@extends('layouts/layouts')
@section('content')
    {{-- <h1 style="text-align: center; padding-top: 3vh; padding-bottom:1vh;">About Me</h1> --}}

    <main class="" style="padding-top: 1vh;">
        <section class="">
            {{-- <div class="aboutMePic">
                <img src="{{ asset('images/aboutMe.jpg') }}" alt="" loading="lazy" style="width:80vh;"/>
            </div> --}}
            <div class="aboutMeMobilePic">
                <img src="{{ asset('images/aboutMeMobilePic.jpg') }}" alt="" loading="lazy" style="width:80vh; text-align:centre;" />
            </div>
         <div class="container">
            <h3 style="margin-top: 20px;">Paul Ogola</h3>
            <P  style="margin-top: 0px; padding-top:0; font-size:18px; padding-bottom:1rem;">Photographer</P>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur adipisci magnam quisquam optio sequi
                molestiae dolorum. Reprehenderit eos aperiam, at, aut quod esse voluptatem aliquid vitae quidem impedit,
                velit placeatLorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur adipisci magnam quisquam optio sequi
                molestiae dolorum. Reprehenderit eos aperiam, at, aut quod esse voluptatem aliquid vitae quidem impedit,
                velit placeat.</p>
        </section>
         </div>



    </main>
@endsection
