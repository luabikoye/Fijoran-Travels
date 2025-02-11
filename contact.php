<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CONTACT</title>
    <link rel="stylesheet" href="BOOTSTRAP/css/bootstrap.min.css" />
    <link rel="stylesheet" href="CSS/contact.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    />
  </head>
  <body>
   <?php include('header.php'); ?>

    <main>
      <h3>Contact</h3>
    </main>

    <section class="section-one">
      <div class="cont">
        <i class="fa-solid fa-envelope"></i>
        <h3>Email</h3>
        <p>
          Info@fijorantravel.org <br />
          www.fijorantravels.com
        </p>
      </div>
      <div class="cont">
        <i class="fa-solid fa-phone"></i>
        <h3>Call Us</h3>
        <p>
          +2348035524575 <br />
          +2349065055742 <br />
          +2348061241739
        </p>
      </div>
      <div class="cont">
        <i class="fa-solid fa-location-pin location"></i>
        <h3>Loacation</h3>
        <p>
          100 Kajola Ultramodern <br />
          Market Cele, Cele Busttop.Oshodi Express Way <br />
          Lagos
        </p>
      </div>
    </section>

    <section
      class="section-two d-flex flex-wrap justify-content-center text-align-center"
    >
      <div class="left col-12 col-lg-6 col-md-6">
        <h2>Get 100% Free Course Contact With Us</h2>
        <p>
          Borem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
          vulputate libero et velit interdum, ac aliquet odio mattis. Class
          aptent taciti sociosqu ad litora torquent per conubia nostra, per
          inceptos himenaeos. Curabitur tempus urna at turpis condimentum
          lobortis. Ut commodo efficitur neque.
        </p>
        <br />
        <p class="fw-bold">Follow Us Here</p>
        <span
          ><a href="#"><img src="IMAGES/Dribbble.png" alt="" /></a
        ></span>
        <span
          ><a href="#"><img src="IMAGES/Behance.png" alt="" /></a
        ></span>
        <span
          ><a href="#"><img src="IMAGES/Group 12.png" alt="" /></a
        ></span>
        <span
          ><a href="#"><img src="IMAGES/Twitter.png" alt="" /></a
        ></span>
      </div>

      <div class="right col-12 col-lg-6 col-md-6">
        <p class="fw-bold">Drop Us a Line</p>
        <form action="#">
          <label for="#">Name:</label><br />
          <input type="text" name="name" /><br /><br />
          <label for="#">Email:</label><br />
          <input type="email" name="email" /><br /><br />
          <label for="#">Contact Number:</label><br />
          <input type="number" name="contact-number" /><br /><br />
          <label for="#">Preferred Travel Date:</label><br />
          <input type="date" name="travel-date" /><br /><br />
          <label for="#">Additional information:</label><br />
          <input type="text" name="information" id="information" /><br /><br />
          <input type="submit" value="Submit" id="submit" />
        </form>
      </div>
    </section>

    <article>
      <img src="IMAGES/map.png" alt="map" width="100%" />
    </article>

    <footer class="text-center">
      <img
        src="IMAGES/logo-removebg-preview.png"
        alt="logo"
        style="height: 50px"
        class="mt-3"
      />
      <nav class="footer-nav mt-3">
        <span><a href="Home.html">HOME</a></span>
        <span><a href="about-us.html">ABOUT</a></span>
        <span><a href="services.html">SERVICES</a></span>
        <span><a href="blog.html">BLOG</a></span>
        <span><a href="contact.html">CONTACT</a></span>
      </nav>
      <hr />
      <span class="text-light"
        >@ Fijoran Travel Nig Ltd 2025. All Right Reserved.</span
      >
    </footer>

    <script src="BOOTSTRAP/js/bootstrap.min.js"></script>
  </body>
</html>
