@extends('layouts/layouts')
@section('content')
    <div id="page-content-wrapper">
        <div class="page-content">
            <div>
                <div class="row">
                    <div class="col-md-12">
                        <div id="header">
                            <div id="header-image">
                                <div id="photo_section_one">
                                    <div class="overlay" data-aos="fade-right">
                                        <h1>PAUL PHOTOGRAPHY</h1>
                                        <p>Lover of Beautiful and Good Stories.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div data-aos="fade-up">
                            <p id="introText">
                                I strive to create photographs that not only capture a moment, but also capture a feeling
                                and essence.
                            </p>
                        </div>

                        <main class="container">
                            <section class="card">
                                <div data-aos="fade-up">
                                    <img src="{{ asset('images/pic1.jpg') }}" alt="" />
                                </div>

                                <div data-aos="fade-up">
                                    <img src="{{ asset('images/pic2.jpg') }}" alt="" />
                                </div>

                                <div data-aos="fade-up">
                                    <img src="{{ asset('images/pic3.jpg') }}" alt="" />
                                </div>


                                <div data-aos="fade-up">
                                    <img src="{{ asset('images/pic4.jpg') }}" alt="" />
                                </div>

                                <div data-aos="fade-up">
                                    <img src="{{ asset('images/pic5.jpg') }}" alt="" />
                                </div>

                                <div data-aos="fade-up">
                                    <img src="{{ asset('images/pic6.jpg') }}" alt="" />
                                </div>

                                <div data-aos="fade-up">
                                    <img src="{{ asset('images/pic7.jpg') }}" alt="" />
                                </div>

                                <div data-aos="fade-up">
                                    <img src="{{ asset('images/pic8.jpg') }}" alt="" />
                                </div>

                                <div data-aos="fade-up">
                                    <img src="{{ asset('images/pic9.jpg') }}" alt="" />
                                </div>


                                <div data-aos="fade-up">
                                    <img src="{{ asset('images/pic10.jpg') }}" alt="" />
                                </div>

                                <div data-aos="fade-up">
                                    <img src="{{ asset('images/pic11.jpg') }}" alt="" />
                                </div>

                                <div data-aos="fade-up">
                                    <img src="{{ asset('images/pic12.jpg') }}" alt="" />
                                </div>

                                <div data-aos="fade-up">
                                    <img src="{{ asset('images/pic13.jpg') }}" alt="" />
                                </div>

                                <div data-aos="fade-up">
                                    <img src="{{ asset('images/pic14.jpg') }}" alt="" />
                                </div>

                                <div data-aos="fade-up">
                                    <img src="{{ asset('images/pic15.jpg') }}" alt="" />
                                </div>

                                <div data-aos="fade-up">
                                    <img src="{{ asset('images/pic16.jpg') }}" alt="" />
                                </div>

                                <div data-aos="fade-up">
                                    <img src="{{ asset('images/pic17.jpg') }}" alt="" />
                                </div>

                                <div data-aos="fade-up">
                                    <img src="{{ asset('images/pic18.jpg') }}" alt="" />
                                </div>


                            </section>



                        </main>


                    </div>
                </div>
            </div>

        </div>
    </div>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 120,
            duration: 3000,
        });

    </script>

    <script>
        let anime = document.querySelector('#header-image');
        let images = [
            '/images/paulphotography1.jpg',
            '/images/paulphotography2.jpg'
        ];

        let index = 0;

        setInterval(function() {
            anime.style.backgroundImage = 'url(' + images[index] + ')';
            index++;
            if (index >= images.length) {
                index = 0;
            }
        }, 5000);

    </script>
@endsection
