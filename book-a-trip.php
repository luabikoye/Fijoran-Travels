<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BOOK TRIP</title>
    <link rel="stylesheet" href="BOOTSTRAP/css/bootstrap.min.css" />
    <link rel="stylesheet" href="CSS/book-a-trip.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    />
  </head>
  <body>
   <?php include('header.php'); ?>

    <main>
      <h3>Book A Trip</h3>
    </main>

    <section class="section-one d-flex flex-wrap">
      <div class="sec-one-left col-12 col-lg-6 col-md-6">
        <h2 class="fw-bold text-center">Book A Trip Now</h2>
        <p class="pt-4 text-center">
          Borem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
          vulputate libero et velit interdum, ac aliquet odio mattis. Class
          aptent taciti sociosqu ad litora torquent per conubia nostra, per
          inceptos himenaeos. Curabitur tempus urna at turpis condimentum
          lobortis. Ut commodo efficitur neque.
        </p>

        <form action="#">
          <div class="cont">
            <label for="#">First Name</label><br />
            <input type="text" name="f-name" />
          </div>
          <div class="cont">
            <label for="#">Last Name</label><br />
            <input type="text" name="l-name" />
          </div>
          <div class="cont">
            <label for="#">Where</label><br />
            <input type="text" name="where" />
          </div>
          <div class="cont">
            <label for="#">To</label><br />
            <input type="text" name="to" />
          </div>
          <div class="cont">
            <label for="#">Email</label><br />
            <input type="email" name="email" />
          </div>
          <div class="cont">
            <label for="#">Phone Number</label><br />
            <input type="number" name="phone-number" />
          </div>
          <div class="cont">
            <label for="#">Price</label><br />
            <input type="text" name="price" />
          </div>
          <div class="cont">
            <label for="#">Date</label><br />
            <input type="date" name="date" class="ps-2" />
          </div>
          <input type="submit" value="Book Now" id="submit" />
        </form>
      </div>

      <div class="sec-one-right col-12 col-lg-6 col-md-6">
        <img
          src="IMAGES/people taking off on plane edited.jpg"
          alt=""
          width="100%"
        />
      </div>
    </section>

    <footer class="text-center">
      <img
        src="IMAGES/logo-removebg-preview.png"
        alt="logo"
        style="height: 50px"
        class="mt-3"
      />
      <nav class="footer-nav mt-3">
        <span><a href="#">HOME</a></span>
        <span><a href="#">ABOUT</a></span>
        <span><a href="#">SERVICES</a></span>
        <span><a href="#">BLOG</a></span>
        <span><a href="#">CONTACT</a></span>
      </nav>
      <hr />
      <span class="text-light"
        >@ Fijoran Travel Nig Ltd 2025. All Right Reserved.</span
      >
    </footer>

    <script src="BOOTSTRAP/js/bootstrap.min.js"></script>
  </body>
</html>
