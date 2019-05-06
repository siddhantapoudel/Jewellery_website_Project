<?php require 'header.php' ?>;



<!-- CREATE BANNER SLIDESHOW -->

<div class="header-mid" id="banner" style="margin-top: 55px;">
    <div class="container">

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="img12.jpg">
                </div>

                <div class="item">
                    <img src="img11.jpg">
                </div>

                <div class="item">
                    <img src="img13.jpg">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

</div>

</header>
<div class="container" style="padding-bottom: 20px;">
  <hr>
  <blockquote id="products" class="modal-title text-center" style="border-left:3px solid orange">
    <span style="color:orange; font-size: 30px; font-family: 'Rochester', cursive; font-size: 2.4em; line-height: 1.5em;">Trends come and go, and style evolves. It's important to have pieces of jewelry that are timeless and look chic despite ever-changing fashions</span>
  </blockquote>
  <hr>
</div>


<div class="container">
  <h2>Our Mission <span class="glyphicon glyphicon-screenshot" style="font-size:0.8em; color:#fe980f;"></span></h2>
  <div class="section group" align='center'>
	   <div class="col span_1_of_4" style="background-color:#fdfdfa; padding:10px 10px; border-radius:5%;">
       <span style="font-size:2.5em; color:#112d91;" class="glyphicon glyphicon-user"></span><br>
       <p style="font-size:1.2em;">Customer Satisfaction</p>
       <p style="text-align:justify; padding-bottom:2px;">We understand what our customers need and shift as per the requirement of our customers.</p>
	   </div>
	   <div class="col span_1_of_4" style="background-color:#fdfdfa; padding:10px 10px; border-radius:5%;">
	      <span style="font-size:2.5em; color:#fe980f;" class="glyphicon glyphicon-tint"></span>
        <p style="font-size:1.2em;">Purity Guaranteed</p>
        <p style="text-align:justify; padding-bottom:2px;">Purchasing from us you can be assured that you are getting high quality materials which will last forever.</p>
	   </div>
	   <div class="col span_1_of_4" style="background-color:#fdfdfa; padding-top:10px; border-radius:5%;">
	      <span style="font-size:2.5em; color:#149912;" class="glyphicon glyphicon-usd"></span>
        <p style="font-size:1.2em;">Affordable Custom Design</p>
        <p style="text-align:justify; padding-bottom:30px;">Our custom designed jewels are sold at a reasonable prices for our customers.</p>
	   </div>
	   <div class="col span_1_of_4" style="background-color:#fdfdfa; padding:10px 10px; border-radius:5%;">
       <span style="font-size:2.5em; color:#991233;" class="glyphicon glyphicon-search"></span>
       <p style="font-size:1.2em;">Classic To Modern Design</p>
       <p style="text-align:justify;">We are inspired by the old jewel design as well as passionate about creating new designs.</p>
	   </div>
   </div>
  <hr>
</div>



<div class="container">
  <h2 align='center'>About Our Team <span class="glyphicon glyphicon-tower" style="font-size:0.8em; color:#fe980f;"></h2>

  <div class="section group">
     <div class="col span_1_of_3" align='center'>

     </div>
     <div class="col span_1_of_3" align='center'>
       <img class='circular--square' src="ourteam_owner.jpg" style="height:250px; width:250px;"/>
       <h4 align="center" class='head_name'>Mr. Beshraj Lamgade</h4>
       <p align="center" style="font-size:1.2em;">Owner/proprietor</p>
     </div>
     <div class="col span_1_of_3" align='center'>

     </div>
   </div>
   <div class="section group">
      <div class="col span_1_of_3" align='center'>
        <img class='circular--square' src="ourteam_dad.jpg"/>
        <h4 align="center" class='head_name'>Mr. Bal Bahadur Lamgade</h4>
        <p align="center" style="font-size:1.2em;">Financial constultant</p>
      </div>
      <div class="col span_1_of_3" align='center'>
        <img class='circular--square' src="ourteam_dai.jpg"/>
        <h4 align="center" class='head_name'>Mr. Mankumar Lamgade</h4>
        <p align="center" style="font-size:1.2em;">Advisor</p>
      </div>
      <div class="col span_1_of_3" align='center'>
        <img class='circular--square' src="owner22.JPG"/>
        <h4 align="center" class='head_name'>Mr. Bishal Sunar</h4>
        <p align="center" style="font-size:1.2em;">Constultant</p>
      </div>
    </div>
</div>

<div class="container">
  <hr>
    <h2>Check Out Our Latest Collections Here!</h2>
    <div align="center">
      <button type="button" class="btn btn-warning" style="margin:10px;" onclick="location.href='gallery.php';">Check Out Here!</button>
    </div>
  <hr>
</div>

<div class="container" style="padding-bottom: 20px;" id="location">
    <p class="modal-title text-center" style="color:orange; font-size: 30px; font-family: 'Ubuntu', sans-serif"
       >FIND US HERE <span class="glyphicon glyphicon-pushpin" style="font-size:0.8em; color:#fe980f;"></p>
</div>
<footer>
    <!-- create maps -->
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="google-map">
                    <div id="googleMap" style="height: 400px; width: 100%;"></div>

                    Add Google Map
                    <script>
                        function initMap() {
                            var uluru = {lat: 28.7826009, lng: 83.7239849};
                            var map = new google.maps.Map(document.getElementById("googleMap"), {
                                zoom: 100,
                                center: uluru,
                                zoom: 16
                            });
                            var marker = new google.maps.Marker({
                                position: uluru,
                                map: map
                            });
                        }
                    </script>
                    <script async defer
                            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDbkOBi-458tGiaTCpyZmddDXrPv6klvBc&callback=initMap">
                    </script>
                </div>
            </div>
        </div>
    </div>
</Footer>
</body>

<?php include 'footer.php'; ?>
</html>
