@extends('layouts/layouts')
@section('content')
  

    <div class="slide-container" style="padding-top:30vh;">


<div style="text-align: center;">
    <h3 style="padding-bottom: 25vh; ">A Word From My Clients
    </h3>
    <div class="slide fade">
       
        <div >
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem tenetur quod id libero ut autem.</p>
            <h4 style="color: yellowgreen;">Debra Mallowah </h4>
            <p><strong>Chief Development Business Officer, Safaricom</strong></p>


           
          </div>
    </div>
    <div class="slide fade">
       
        <div >
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem tenetur quod id libero ut autem.</p>
            <h4 style="color: yellowgreen;">Kevin Spacey</h4>
            <p><strong>C.E.O, Julliard</strong></p>
          </div>
    </div>
    <div class="slide fade">
       
        <div >
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem tenetur quod id libero ut autem.</p>
            <h4 style="color: yellowgreen;">Alphy Gacheru</h4>
            <p><strong>Actor</strong></p>
          </div>
    </div>
    <div class="slide fade">
       
        <div >
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem tenetur quod id libero ut autem.</p>
            <h4 style="color: yellowgreen;">Sammy Mwangi</h4>
            <p><strong>Director, Heartstrings Entertainment</strong></p>
          </div>
    </div>
</div>



        <a href="" class="prev" title="Previous"><i class="fa fas fa-chevron-left fa-lg"></i></a>
        <a href="" class="next" title="Next"><i class="fa fas fa-chevron-right fa-lg"></i></a>
    </div>
    <div class="dots-container" style="padding-bottom:18vh;">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>

    <script>
        var currentSlide = 0;
        const slides = document.querySelectorAll(".slide")
        const dots = document.querySelectorAll('.dot')

        const init = (n) => {
            slides.forEach((slide) => {
                slide.style.display = "none"
                dots.forEach((dot) => {
                    dot.classList.remove("active")
                })
            })
            slides[n].style.display = "block"
            dots[n].classList.add("active")
        }
        document.addEventListener("DOMContentLoaded", init(currentSlide))


        const next = () => {
            currentSlide >= slides.length - 1 ? currentSlide = 0 : currentSlide++
            init(currentSlide)
        }

        const prev = () => {
            currentSlide <= 0 ? currentSlide = slides.length - 1 : currentSlide--
            init(currentSlide)
        }

        document.querySelector(".next").addEventListener('click', next)
        document.querySelector(".prev").addEventListener('click', prev)


        setInterval(() => {
            next()
        }, 5000);

        dots.forEach((dot, index) => {
            dot.addEventListener("click", () => {
                init(index)
                currentSlide = i
            })
        })

    </script>
@endsection
