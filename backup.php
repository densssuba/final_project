<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css"/>
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.0.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <title>Management System with Reservation | Hotel 101</title>
  </head>
  <body>
    <header class="header">
      <nav>
        <div class="nav__bar">
          <div class="logo">
            <a href="#"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQvh9l_2zHsIWvkVf7EnKCDLvaUXuEEEkzfrw&s" alt="logo" /></a>
          </div>
          <div class="nav__menu__btn" id="menu-btn">
            <i class="ri-menu-line"></i>
          </div>
        </div>
        <ul class="nav__links" id="nav-links">
          <li><a href="#home">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#service">Services</a></li>
          <li><a href="#explore">Promo and Discounts</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav>
      <div class="section__container header__container" id="home">
        <p>Simple - Unique - Friendly</p>
        <h1>Welcome to our hotel<br />In Our <span>Hotel</span>.</h1>
      </div>
    </header>

    <section class="section__container booking__container">
      <form action="book2.php" method="POST" class="booking__form">
        <div class="input__group">
          <div>
            <label for="name">NAME</label>
            <input type="text" name="name" placeholder="Name" required />
          </div>
          <div>
            <label for="check-in">CHECK-IN</label>
            <input type="date" name="check-in" placeholder="Check In" required />
          </div>
        </div>
        <div class="input__group">
          <div>
            <label for="check-out">CHECK-OUT</label>
            <input type="date" name="check-out" placeholder="Check Out" required />
          </div>
        </div>
        <div class="input__group">
          <div>
            <label for="room-no">Room no.</label>
            <input type="number" name="room-no" placeholder="Room no." required />
          </div>
        <div class="input__group">
          <div>
            <label for="guest">GUEST</label>
            <input type="number" name="guest" placeholder="Guest" required />
          </div>
        </div>
        <div class="input__group input__btn">
          <button type="submit" class="btn">Submit</button>
        </div>
      </form>
    </section>

    <!-- The rest of your HTML content remains the same -->

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="main.js"></script>
  </body>
</html>
