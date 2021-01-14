@extends('layouts/layouts')
@section('content')
    {{-- <h3 style="padding-top: 50vh; text-align:center;">Services Page Coming Soon... Still Under Construction By Alphy Gacheru!</h3> --}}

        <h1 style="text-align: center; padding-top: 15vh; padding-bottom:15vh;">Services</h1>
   
  
      <main class="container">
        <section class="cardServices">
          <img src="{{ asset('images/pic10.jpg')}}" alt="" />
          <div>
            <h3>Family Photography</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod error
              enim laudantium, animi veniam libero eveniet culpa unde perferendi.
            </p>
            <a href="{{ route('familyImages')}}" class="btn">More Family Pictures...</a>
          </div>
        </section>
  
        <section class="cardServices" data-aos="fade-left">
          <img src="{{ asset('images/weddingServices.jpg')}}" alt="" />
          <div>
            <h3>Wedding Photography</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod error
              enim laudantium, animi veniam libero eveniet culpa unde perferendis
              illo fugit corporis, voluptatibus totam dolorum, maiores magnam
              officia. Ab, delectus.
            </p>
            <a href="{{ route('weddingImages')}}" class="btn">More Wedding Pictures...</a>
          </div>
        </section>
  
        <section class="cardServices" data-aos="fade-right">
          <img src="{{ asset('images/pic1.jpg')}}" alt="" />
          <div>
            <h3>Travel Photography</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod error
              enim laudantium, animi veniam libero eveniet culpa unde perferendis
              illo fugit corporis, voluptatibus totam dolorum, maiores magnam
              officia. Ab, delectus.
            </p>
            <a href="{{ route('travelImages')}}" class="btn">More Travel Pictures...</a>
          </div>
        </section>

        <section class="cardServices" data-aos="fade-right">
            <img src="{{ asset('images/natureServices.jpg')}}" alt="" />
            <div>
              <h3>Nature Photography</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod error
                enim laudantium, animi veniam libero eveniet culpa unde perferendis
                illo fugit corporis, voluptatibus totam dolorum, maiores magnam
                officia. Ab, delectus.
              </p>
              <a href="{{ route('natureImages')}}" class="btn">More Nature Pictures...</a>
            </div>
          </section>
  
        <section class="cardServices" data-aos="fade-left">
          <img src="{{ asset('images/pic5.jpg')}}" alt="" />
          <div>
            <h3>Fashion Photography</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod error
              enim laudantium, animi veniam libero eveniet culpa unde perferendis
              illo fugit corporis, voluptatibus totam dolorum, maiores magnam
              officia. Ab, delectus.
            </p>
            <a href="{{ route('fashionImages')}}" class="btn">More Fashion Pictures...</a>
          </div>
        </section>
  
        <section class="cardServices" data-aos="fade-right">
          <img src="{{ asset('images/portraitServices.jpg')}}" alt="" />
          <div>
            <h3>Portrait Photography</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod error
              enim laudantium, animi veniam libero eveniet culpa unde perferendis
              illo fugit corporis, voluptatibus totam dolorum, maiores magnam
              officia. Ab, delectus.
            </p>
            <a href="{{ route('portraitImages')}}" class="btn">More Portrait Pictures...</a>
          </div>
        </section>
      </main>
      <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

      <script>AOS.init({
        offset: 400, // offset (in px) from the original trigger point
        delay: 0, // values from 0 to 3000, with step 50ms
        duration: 1000 // values from 0 to 3000, with step 50ms
      });</script>
@endsection


{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-size: 1.3rem;
  font-family: 'Oswald', sans-serif;
  background: #f9f9f9;
}

a {
  color: #333;
  text-decoration: none;
}

.container {
  max-width: 1100px;
  margin: auto;
  overflow: auto;
  padding: 0 2rem;
}

.main-header {
  height: 55vh;
  padding: 2rem;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-align: center;
}

.main-header h1 {
  font-size: 4rem;
  margin-bottom: 2rem;
  line-height: 1.2;
}

.main-header h1 span {
  color: #b50d10;
}

.main-header p {
  font-size: 2rem;
}

img {
  width: 100%;
}

.card {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  grid-gap: 2rem;
  background: #f1f1f1;
  margin-bottom: 2rem;
}

.card h3 {
  margin-bottom: 2rem;
}

.card img {
  height: 400px;
}

.card > div {
  padding: 2rem;
}

.card:nth-child(even) img {
  order: 2;
}


.btn {
  display: inline-block;
  background: #000;
  color: #fff;
  padding: 0.8rem 1.8rem;
  margin-top: 2rem;
  cursor: pointer;
}

.btn:hover {
  opacity: 0.8;
}

@media(max-width:600px) {
  .card {
    display: block;
  }
}

    </style>
</head>
<body>
    <header class="main-header">
        <h1><span>Acrylic Painting</span> Gallery</h1>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias,
          quam!
        </p>
      </header>
  
      <main class="container">
        <section class="card">
          <img src="{{ asset('images/pic10.jpg')}}" alt="" />
          <div>
            <h3>Acrylic Painting One</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod error
              enim laudantium, animi veniam libero eveniet culpa unde perferendis
              illo fugit corporis, voluptatibus totam dolorum, maiores magnam
              officia. Ab, delectus.
            </p>
            <a href="#" class="btn">Buy Now</a>
          </div>
        </section>
  
        <section class="card" data-aos="fade-left">
          <img src="{{ asset('images/weddingServices.jpg')}}" alt="" />
          <div>
            <h3>Acrylic Painting Two</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod error
              enim laudantium, animi veniam libero eveniet culpa unde perferendis
              illo fugit corporis, voluptatibus totam dolorum, maiores magnam
              officia. Ab, delectus.
            </p>
            <a href="#" class="btn">Buy Now</a>
          </div>
        </section>
  
        <section class="card" data-aos="fade-right">
          <img src="{{ asset('images/pic1.jpg')}}" alt="" />
          <div>
            <h3>Acrylic Painting Three</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod error
              enim laudantium, animi veniam libero eveniet culpa unde perferendis
              illo fugit corporis, voluptatibus totam dolorum, maiores magnam
              officia. Ab, delectus.
            </p>
            <a href="#" class="btn">Buy Now</a>
          </div>
        </section>
  
        <section class="card" data-aos="fade-left">
          <img src="{{ asset('images/natureServices.jpg')}}" alt="" />
          <div>
            <h3>Acrylic Painting Four</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod error
              enim laudantium, animi veniam libero eveniet culpa unde perferendis
              illo fugit corporis, voluptatibus totam dolorum, maiores magnam
              officia. Ab, delectus.
            </p>
            <a href="#" class="btn">Buy Now</a>
          </div>
        </section>
  
        <section class="card" data-aos="fade-right">
          <img src="{{ asset('images/portraitServices.jpg')}}" alt="" />
          <div>
            <h3>Acrylic Painting Five</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod error
              enim laudantium, animi veniam libero eveniet culpa unde perferendis
              illo fugit corporis, voluptatibus totam dolorum, maiores magnam
              officia. Ab, delectus.
            </p>
            <a href="#" class="btn">Buy Now</a>
          </div>
        </section>
      </main>
</body>
</html> --}}