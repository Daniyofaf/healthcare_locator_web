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


  <style>
    /* Reset some default styles */
    body{
      margin: 0;
      display: flex;
    flex-direction: column;
    min-height: 100vh;
    }

    .main{
      flex-grow: 1; /* This will make the content grow to fill available space */
      margin-bottom: auto;    }

      form{
        margin-top: -400px;
      }


    /* Basic styling for search result items */
    .search-results {
      flex-grow: 1;
      list-style-type: none;
      padding: 0;
      margin: 20px;
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
      padding-right: 10px;
    }

    .result-title {
      font-weight: bold;
    }

    .result-description {
      color: #555;
    }

    /* Styling for map view on the right */
    .result-map {
      flex: 1;
      height: 200px;
      /* Adjust the height as needed */
      background-color: #ddd;
      /* Placeholder background color */
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

    #container1 {
      padding-left: 200px;
      padding-bottom: 400px;
    }

    #container1 p {
      font-size: 50px;
    }

   


  </style>




</head>

<body style="background-color: white">
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
          <br>

          <div class="search-results">
        <!-- Your search result items -->
        @if(count($results) > 0)

@foreach($results as $result)

<!-- <h2>{{ $result->h_name }}</h2>
        <p><strong>Address:</strong> {{ $result->Region }}, {{ $result->Zone }}, {{ $result->Wereda }}</p>
        <p><strong>Service:</strong> {{ $result->Service }} </p> -->


<ul class="search-results">

  <li class="search-result">
    <div class="result-info">
      <h2 class="result-title">{{ $result->h_name }}</h2>
      <p class="result-description"><strong>Address:</strong> {{ $result->Region }}, {{ $result->Zone }}, {{ $result->Wereda }}</p>
      <p><strong>Service:</strong> {{ $result->Service }} </p>

    </div>
    <div class="result-map" id="map1">
      <!-- You can add the map here using JavaScript -->
      <iframe class="" src="about:blank" frameborder="0" style="border:0; width: 100%; height: 200px;" allowfullscreen=""></iframe>

    </div>


    <div class="result-map" id="map1">
      <script>
        function initMap() {
          var latitude = {
            {
              $result - > Latitude
            }
          }; // Replace with your database field containing latitude
          var longitude = {
            {
              $result - > Longitude
            }
          }; // Replace with your database field containing longitude
          var mapOptions = {
            center: {
              lat: latitude,
              lng: longitude
            },
            zoom: 15 // Adjust the zoom level as needed
          };
          var map = new google.maps.Map(document.getElementById('map1'), mapOptions);
          var marker = new google.maps.Marker({
            position: {
              lat: latitude,
              lng: longitude
            },
            map: map,
            title: '{{ $result->Location }}' // Replace with your database field containing the location name
          });
        }
        initMap();
      </script>
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







    </div>

  </div>

  </div>
  <!-- End Hero Section -->



  </div>
<footer>
@extends('layouts.footer')
</footer>
 



  <div id="preloader"></div>
  <!-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


  <script src="https://maps.googleapis.com/maps/api/js?key=d5a598af7770c913"></script>



</body>

</html>