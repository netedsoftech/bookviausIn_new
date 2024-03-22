<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>New Site</title>
    <?php include("header_script.php");?>
    
  <body>
    <!-- Header ************************* Section start -->

    <?php include("header.php");?>

    <section id="home_one_banner">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h1 class="text-center text-white">Explore the world together</h1>
            <h3 class="text-center text-white">
              Find awesome flights, hotel, tour, car and packages
            </h3>
          </div>
        </div>
      </div>
    </section>
    <!-- api form  ************************* Section start -->
    <?php include("query_form.php");?>

    <!-- api form  ************************* Section end -->
    <section class=" mb-3">
      <div class="container">
      <div class="heading_left_area  text-center mb-5">
              <h2>  <span>Explore destinations by theme</span></h2>
              <!-- <p>Discover your ideal experience <br />with us</p> -->
            </div>
      <div class="owl-carousel mt-3 ">

<div class="holiday_theme_section">
 <img src="assets/solo.webp" alt="solo">
 <p class="text-center">Solo 
 <br>
 <small>30+ destinations</small>
 </p>

</div>
<div class="holiday_theme_section">
 <img src="assets/adventure.webp" alt="adventure">
 <p class="text-center">Adventure 
 <br>
 <small>100+ destinations</small>
 </p>
</div>
<div class="holiday_theme_section">
 <img src="assets/family.webp" alt="family">
 <p class="text-center">Family 
 <br>
 <small>60+ destinations</small>
 </p>
</div>
<div class="holiday_theme_section">
 <img src="assets/friends_group.webp" alt="friends_group">
 <p class="text-center">Friends Group 
 <br>
 <small>20+ destinations</small>
 </p>
</div>
<div class="holiday_theme_section">
 <img src="assets/wildlife.webp" alt="wildlife">
 <p class="text-center">Wildlife
 <br>
 <small>10+ destinations</small>
 </p>
</div>
<div class="holiday_theme_section">
 <img src="assets/honeymoon_romantic.webp" alt="honeymoon_romantic">
 <p class="text-center">Honeymoon_Romantic
 <br>
 <small>50+ destinations</small>
 </p>
</div>
<div class="holiday_theme_section">
 <img src="assets/religious.webp" alt="religious">
 <p class="text-center">Religious
 <br>
 <small>80+ destinations</small>
 </p>
</div>
<div class="holiday_theme_section">
 <img src="assets/water_activities.webp" alt="water_activities">
 <p class="text-center">Water Activities
 <br>
 <small>40+ destinations</small>
 </p>
</div>
<div class="holiday_theme_section">
 <img src="assets/nature.webp" alt="nature">
 <p class="text-center">Nature
 <br>
 <small>100+ destinations</small>
 </p>
</div>
</div>
      </div>
    </section>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
      integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script>
      var owl = $(".owl-carousel");
      owl.owlCarousel({
        items: 1,
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        responsiveClass: true,

        responsive: {
          0: {
            items: 1,
            nav: false,
          },
          600: {
            items: 1,
            nav: false,
          },
          1000: {
            items: 5,
            nav: false,
            // loop:true
          },
        },
      });
      $(".play").on("click", function () {
        owl.trigger("play.owl.autoplay", [1000]);
      });
      $(".stop").on("click", function () {
        owl.trigger("stop.owl.autoplay");
      });
    </script>
    <!-- imagination  ************************* Section start -->

    <section class="mt-5 mb-3">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-3">
            <div class="heading_left_area mt-5">
              <h2>Go beyond your <span>imagination</span></h2>
              <p>Discover your ideal experience <br />with us</p>
            </div>
          </div>
          <div class="col-6 col-lg-3 mt-3">
            <div class="top_deal_country_img">
              <span class="top_deal_country mt-3 mx-2 text-white"
                ><a href="#" class="text-white" target="_blank"
                  >Discount 30% On All Your Trips</a
                ></span
              >
              <a href="#"
                ><img
                  class="w-100 rounded"
                  src="assets/img/img1.png"
                  alt="usa_"
              /></a>
            </div>
          </div>

          <div class="col-6 col-lg-3 mt-3">
            <div class="top_deal_country_img">
              <span class="top_deal_country mt-3 mx-2 text-white"
                ><a href="#" class="text-white" target="_blank">
                  Travel around the world</a
                ></span
              >
              <a href="#" target="_blank"
                ><img
                  class="w-100 rounded"
                  src="assets/img/img2.png"
                  alt="europe_"
              /></a>
            </div>
          </div>

          <div class="col-6 col-lg-3 mt-3">
            <div class="top_deal_country_img">
              <span class="top_deal_country mt-3 mx-2 text-white"
                ><a href="#" class="text-white" target="_blank"
                  >Luxury resorts top deals</a
                ></span
              >
              <a href="#" target="_blank"
                ><img
                  class="w-100 rounded"
                  src="assets/img/img3.png"
                  alt="new_zealand_"
              /></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- imagination  ************************* Section end -->

    <!-- Explore  ************************* Section start -->


   
    <!-- Explore  ************************* Section end -->
  <!-- promotional tours  ************************* Section start -->

  <section class="mt-3 mb-3">
      <div class="container heading_left_area">
        <h2 class="text-center mt-5 mb-5">
          <span>Our best promotional tours</span>
        </h2>
        <div class="owl-carousel">
          <div class="card card-section mt-4">
            <div class="card-main top_deal_country_img">
              <img class="w-100" src="assets/tab-img/hotel1.png" alt="hotel1" />
              <p class="card-para text-white px-2">
                <img
                  width="18"
                  height="18"
                  src="https://img.icons8.com/material/18/ffffff/marker--v1.png"
                  alt="marker--v1"
                />New beach, Thailand
              </p>
              <div class="discount_tab">
                <span>40%</span>
              </div>
            </div>

            <h6 class="px-2 mt-2">Kantua hotel, Thailand</h6>
            <p class="px-2 pt-2">
              <span class="review_rating">4.8/5 Excellent</span>
              <span class="review_count">(1214 reviewes)</span>
            </p>
          </div>

          <div class="card card-section mt-4">
            <div class="card-main top_deal_country_img">
              <img class="w-100" src="assets/tab-img/hotel2.png" alt="hotel1" />
              <p class="card-para text-white px-2">
                <img
                  width="18"
                  height="18"
                  src="https://img.icons8.com/material/18/ffffff/marker--v1.png"
                  alt="marker--v1"
                />New beach, Thailand
              </p>
            </div>

            <h6 class="px-2 mt-2">Kantua hotel, Thailand</h6>
            <p class="px-2 pt-2">
              <span class="review_rating">4.8/5 Excellent</span>
              <span class="review_count">(1214 reviewes)</span>
            </p>
          </div>

          <div class="card card-section mt-4">
            <div class="card-main top_deal_country_img">
              <img class="w-100" src="assets/tab-img/hotel3.png" alt="hotel1" />
              <p class="card-para text-white px-2">
                <img
                  width="18"
                  height="18"
                  src="https://img.icons8.com/material/18/ffffff/marker--v1.png"
                  alt="marker--v1"
                />New beach, Thailand
              </p>
              <div class="discount_tab">
                <span>40%</span>
              </div>
            </div>

            <h6 class="px-2 mt-2">Kantua hotel, Thailand</h6>
            <p class="px-2 pt-2">
              <span class="review_rating">4.8/5 Excellent</span>
              <span class="review_count">(1214 reviewes)</span>
            </p>
          </div>

          <div class="card card-section mt-4">
            <div class="card-main top_deal_country_img">
              <img class="w-100" src="assets/tab-img/hotel4.png" alt="hotel1" />
              <p class="card-para text-white px-2">
                <img
                  width="18"
                  height="18"
                  src="https://img.icons8.com/material/18/ffffff/marker--v1.png"
                  alt="marker--v1"
                />New beach, Thailand
              </p>
              <div class="discount_tab">
                <span>30%</span>
              </div>
            </div>

            <h6 class="px-2 mt-2">Kantua hotel, Thailand</h6>
            <p class="px-2 pt-2">
              <span class="review_rating">4.8/5 Excellent</span>
              <span class="review_count">(1214 reviewes)</span>
            </p>
          </div>
        </div>
      </div>
    </section>

    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
      integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>

    <script>
      var owl = $(".owl-carousel");
      owl.owlCarousel({
        items: 1,
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        responsiveClass: true,

        responsive: {
          0: {
            items: 1,
            nav: false,
          },
          600: {
            items: 1,
            nav: false,
          },
          1000: {
            items: 4,
            nav: false,
            // loop:true
          },
        },
      });
      $(".play").on("click", function () {
        owl.trigger("play.owl.autoplay", [1000]);
      });
      $(".stop").on("click", function () {
        owl.trigger("stop.owl.autoplay");
      });
    </script>
    <!-- promotional tours  ************************* Section end -->
    
    <!-- Special Offers  ************************* Section start -->
    <section class="mt-3 mb-3">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-6 mt-3">
            <div class="top_deal_country_img">
              <div class="top_deal_country_offers">
                <span class="mt-3 mx-2 text-white"
                  ><a href="#" class="text-white" target="_blank"
                    >Special Offers</a
                  >
                </span>
              </div>
              <a href="#"
                ><img
                  class="w-100 rounded"
                  src="assets/offer1.png"
                  alt="offer1"
              /></a>
            </div>
          </div>

          <div class="col-6 col-lg-3 mt-3">
            <div class="top_deal_country_img">
              <div class="top_deal_country_offers">
                <span class="mt-3 mx-2 text-white"
                  ><a href="#" class="text-white" target="_blank"
                    >News letter</a
                  >
                </span>
              </div>
              <a href="#"
                ><img
                  class="w-100 rounded"
                  src="assets/offer2.png"
                  alt="offer1"
              /></a>
            </div>
          </div>
          <div class="col-6 col-lg-3 mt-3">
            <div class="top_deal_country_img">
              <div class="top_deal_country_offers">
                <span class="mt-3 mx-2 text-white"
                  ><a href="#" class="text-white" target="_blank"
                    >Travel tips</a
                  >
                </span>
              </div>
              <a href="#"
                ><img
                  class="w-100 rounded"
                  src="assets/offer3.png"
                  alt="offer1"
              /></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Special Offers  ************************* Section end -->

  

    <!-- newsletter section ************************* Section start -->

    <section class="mt-5 mb-3 newsletter-section pt-5 pb-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="row">
              <div class="col-lg-3 text-center">
                <img
                width="122"
                height="122"
                src="https://img.icons8.com/external-obvious-line-kerismaker/122/144383/external-business-office-stationery-line-obvious-line-kerismaker-42.png"
                alt="external-business-office-stationery-line-obvious-line-kerismaker-42"
              />
              
              </div>
              <div class="col-lg-9 text-center">
                <div class="mt-4">
                  <h5>Get the latest news and offers</h5>
                  <h2>Subscribe to our newsletter</h2>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="row mt-4">
              <div class="col-6 col-lg-6">
                <input
                  class="form-control mt-1 mx-4"
                  type="email"
                  placeholder="Enter your mail address"
                />
              </div>
              <div class="col-6 col-lg-6">
                <button type="submit" class="btn-submit rounded mt-2">
                  Subscribe
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- newsletter section ************************* Section end -->


    <?php include("footer.php");?>
  </body>
</html>
