<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Amakari Healthcare Locator</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/amakari-logo.png" rel="icon">
  <link href="assets/img/" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: DevFolio
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->


  <!-- <script src="https://maps.googleapis.com/maps/api/js?key="></script> -->\
  <!-- <script src="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v6.13.1/build/ol.js"></script> -->

  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>




  <style>
    /* Reset some default styles */
    body {
      margin-top: -20px;
      display: flex;
      flex-direction: column;
      
    }

    .main {
      flex-grow: 1;
      /* This will make the content grow to fill available space */
      margin-bottom: auto;
    }

    form {
      margin-top: -350px;
    }


    /* Basic styling for search result items */
    .search-results {
      flex-grow: 1;
      list-style-type: none;
      padding: 0;
      margin: 55px;
    }

    .search-results li {
      padding: 50px;
    }

    .search-result {
      display: flex;
      border: 1px solid #ddd;
      padding: 10px;
      margin-bottom: 10px;
      background-color: #f9f9f9;
    }

    /* Styling for title and description on the left */
    .result-info {
      flex: 1;
      padding-right: 50px;
    }

    .result-title {
      font-weight: bold;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    .result-description {
      color: black;
    }

    /* Styling for map view on the right */
    .result-map {
      width: 10px;
      flex: 1;
      height: 300px;
      /* Adjust the height as needed */
      background-color: #ddd;
      /* Placeholder background color */

      align-self: center;
      align-content: center;
    }

    .result-map iframe {
      width: 10%;
    }

    .container {
      color: white;
      display: flex;
      align-items: center;
      /* Center items vertically */

    }

    .container h1 {
      margin-top: 50px;
      align-content: center;
      color: blue;
      display: flex;
      font-size: 60px;
      /* Center items vertically */

    }

    .container p {
      margin-top: 50px;
      align-content: center;
      color: blue;
      display: flex;

      /* Center items vertically */

    }

    .img {
      height: 600px;
      }
      #hero{
        background:#555 ;
      }

    #container1 {
      padding-left: 50px;
      padding-bottom: 400px;
    }

    #container1 p {
      font-size: 40px;
    }
    footer{
      align-content: center;
      margin-bottom: -50px;
        }

  </style>




</head>

<body style="background-image: url(assets/img/3.jpeg)">

<div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <header>
    <!-- ======= Header ======= -->
    @extends('layouts.header')

    <!-- End Header  -->
  </header>
  <div class="main">



    <!-- ======= Hero Section ======= -->
    <div id="hero" class="img" style="background-image: url(assets/img/3.jpeg)">
      <div class="overlay-itro"></div>
      <div class="hero-content display-table">
        <div class="table-cell">
          <div class="container" id="container1">

            <h1 class=""><strong>Search your nearby&nbsp;</strong></h1>
            <p class="hero-subtitle"><strong><span class="typed" data-typed-items="Hospitals, Clinics, Specialized Hospital, Specialized Clinic"> </span></strong></p>

          </div>

          <form action="{{ route('search') }}" method="GET" required>
            <div class="container">
              <select name="table">
                <option value="AnyHealthCare">Any HealthCare</option>
                <option value="hospital">Hospital</option>
                <option value="specialized_hospitals">Specialized Hospital</option>
                <option value="clinics">Clinic</option>
                <option value="specialized_clinics">Specialized Clinic</option>
              </select>
              <input type="text" name="query" class="form-control" placeholder="Search Healthcare ex: hospital around 22,addis abeba ...">
              <div class="input-group-append">
                <button class="btn btn-outline-primary" type="submit">Search</button>
              </div>
            </div>
          </form>
          

          <div class="search-results">
            <!-- Your search result items -->
            @if(count($results) > 0)

            @foreach($results as $result)

         


            <ul class="search-results">

              <li class="search-result">
                <div class="result-info">
                  <h2 class="result-title">{{ $result->h_name }}</h2>
                  <h5>
                    <p class="result-description"><strong>Address:</strong> {{ $result->Region }}, {{ $result->Zone }}, {{ $result->Wereda }}</p>
                  </h5>
                  <p><strong>Service:</strong>
            @foreach ($result->Service as $service)
                {{ $service }},
            @endforeach
        </p>

                </div>

                <div class="result-map" id="map1">
                  <!-- You can add the map here using JavaScript -->

                  <!-- <iframe class="" src=" @extends('layouts.map')" frameborder="0" style="border:0; width: 50%; height: 300px;" allowfullscreen=""></iframe> -->

                  @include('layouts.map')


                </div>


      









              </li>
              <!-- Add more search result items as needed -->
            </ul>







            @endforeach

            @else
            <p></p>
            @endif
          </div>




        </div>
        </section>
      </div>





      <footer>      @include('layouts.footer')
</footer>

    </div>

  </div>

  </div>
  <!-- End Hero Section -->



  </div>





 
  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>





</body>

</html>

