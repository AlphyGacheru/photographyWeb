@extends('layouts/layouts')
@section('headLinks')
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>



    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB6o_CDuc8A1R_lpH5FMHYK_xoLpuoXwXY&callback=initMap&libraries=&v=weekly" defer>

</script>



      <script>
              function initMap() {
          const nation_media = { lat:  -1.2797873723111453, lng: 36.82239816333776};
          
const map = new google.maps.Map(document.getElementById("map"), {
    center: nation_media,
    zoom: 12,
    styles: [
      { elementType: "geometry", stylers: [{ color: "#242f3e" }] },
      { elementType: "labels.text.stroke", stylers: [{ color: "#242f3e" }] },
      { elementType: "labels.text.fill", stylers: [{ color: "#746855" }] },
      {
        featureType: "administrative.locality",
        elementType: "labels.text.fill",
        stylers: [{ color: "#d59563" }],
      },
      {
        featureType: "poi",
        elementType: "labels.text.fill",
        stylers: [{ color: "#d59563" }],
      },
      {
        featureType: "poi.park",
        elementType: "geometry",
        stylers: [{ color: "#263c3f" }],
      },
      {
        featureType: "poi.park",
        elementType: "labels.text.fill",
        stylers: [{ color: "#6b9a76" }],
      },
      {
        featureType: "road",
        elementType: "geometry",
        stylers: [{ color: "#38414e" }],
      },
      {
        featureType: "road",
        elementType: "geometry.stroke",
        stylers: [{ color: "#212a37" }],
      },
      {
        featureType: "road",
        elementType: "labels.text.fill",
        stylers: [{ color: "#9ca5b3" }],
      },
      {
        featureType: "road.highway",
        elementType: "geometry",
        stylers: [{ color: "#746855" }],
      },
      {
        featureType: "road.highway",
        elementType: "geometry.stroke",
        stylers: [{ color: "#1f2835" }],
      },
      {
        featureType: "road.highway",
        elementType: "labels.text.fill",
        stylers: [{ color: "#f3d19c" }],
      },
      {
        featureType: "transit",
        elementType: "geometry",
        stylers: [{ color: "#2f3948" }],
      },
      {
        featureType: "transit.station",
        elementType: "labels.text.fill",
        stylers: [{ color: "#d59563" }],
      },
      {
        featureType: "water",
        elementType: "geometry",
        stylers: [{ color: "#17263c" }],
      },
      {
        featureType: "water",
        elementType: "labels.text.fill",
        stylers: [{ color: "#515c6d" }],
      },
      {
        featureType: "water",
        elementType: "labels.text.stroke",
        stylers: [{ color: "#17263c" }],
      },
    ],
  });

  const marker = new google.maps.Marker({
            position: nation_media,
            map: map,
          });


}

      </script>
@endsection

@section('content')
<main class="container">
        <h1 style="text-align: center; padding-top: 15vh; padding-bottom:5vh;">Contact Me</h1>


<br>
<br>

<section class="contactFormRow">
 <div class="shade" style=" overflow:hidden; ">
    <div class="blackboard">
            <div class="form">
                    <p>
                            <input type="text" placeholder="Enter Your Name:" />
                    </p>
                    <p>
                            <input type="text" placeholder="Enter Your Email:"  />
                    </p>
                    <p>
                            <input type="tel" placeholder="Enter Your Telephone No.:"  />
                    </p>
                    <p>
                            <input type="text" placeholder="Enter Subject:" />
                    </p>
                    <p>
                            <textarea placeholder="Enter Message:" ></textarea>
                    </p>
                    <p class="wipeout">
                            <input type="submit" value="Send" />
                    </p>
            </div>
    </div>
</div>


<div  class="phoneSection">
    <span style="font-size: 19px;"><i class="fa fa-phone" aria-hidden="true" style="color: white; padding-right: 0.5rem;"></i> + 254 714 502 062</span>
    <br>
    <span style="font-size: 19px;"><i class="fa fa-envelope-o" aria-hidden="true" style="color: white; padding-right: 0.5rem;"></i> p.ogola02@gmail.com </span>
<br>
    <span style="font-size: 19px;"><i class="fa fa-map-marker" aria-hidden="true" style="color: white; padding-right: 0.5rem;"></i>Nation Media, 3rd Floor, Moi avenue.</span>
</div>
<br>

</section>
<div id="map"></div>
</main>


@endsection
