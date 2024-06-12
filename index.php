<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="book2.php">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.0.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="styles.css"/>
    <title>management system with reservation | hotel 101</title>
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

    <section class="section__container about__container" id="about">
      <div class="about__image">
        <img src="https://t4.ftcdn.net/jpg/00/09/21/15/360_F_9211505_d4hxfNtPeTfgt7AeGmoO7u79P2hwxkoQ.jpg" alt="about" />
      </div>
      <div class="about__content">
        <p class="section__subheader">ABOUT US</p>
        <h2 class="section__header">The Best Holidays Start Here!</h2>
        <p class="section__description">
          Experience the captivating view of Mount Makiling, embraced the cool breeze of the mountain, and stay warm & dipped in our natural warm water. 
                 Grand hotel is a popular get away in Sanpablo, Laguna, situated in the heart of Grand Hotels located at foot of the legendary Mount Makiling.
                It is a wholesome family oriented resort that offers wonderful facilities and amenities at a very affordable rates. Perfect for family get together, group gatherings and company excursion & outings.  
                So when you want to go places and unwind, have fun and enjoy, come to Grand hotel-Laguna, visit us at 
                The Grand Hotel.
        </p>
        <div class="about__btn">
        
        </div>
      </div>
    </section>

    <section class="section__container room__container">
      <p class="section__subheader">OUR LIVING ROOM</p>
      <h2 class="section__header">The Most Memorable Rest Time Starts Here.</h2>
      <div class="room__grid">
        <div class="room__card">
          <div class="room__card__image">
            <img src="https://static.toiimg.com/photo/29500895.cms" alt="room" />
            <div class="room__card__icons">
             
            </div>
          </div>
          <div class="room__card__details">
            <h4>Room 1</h4>
            <p>
              Bask in luxury with breathtaking ocean views from your private
              suite.
            </p>
            <h5>Starting from <span>$299/night</span></h5>
            <a href="index.php">Book Now</a>
          </div>
        </div>
        <div class="room__card">
          <div class="room__card__image">
            <img src="https://static.theprint.in/wp-content/uploads/2022/10/Hotel.jpg" alt="room" />
            <div class="room__card__icons">
              
            </div>
          </div>
          <div class="room__card__details">
            <h4>Room 2</h4>
            <p>
              Experience urban elegance and modern comfort in the heart of the
              city.
            </p>
            <h5>Starting from <span>$199/night</span></h5>
            <a href="index.php">Book Now</a>
          </div>
        </div>
        <div class="room__card">
          <div class="room__card__image">
            <img src="https://media.istockphoto.com/id/1390233984/photo/modern-luxury-bedroom.jpg?s=612x612&w=0&k=20&c=po91poqYoQTbHUpO1LD1HcxCFZVpRG-loAMWZT7YRe4=" alt="room" />
            <div class="room__card__icons">
             
            </div>
          </div>
          <div class="room__card__details">
            <h4>Room 3</h4>
            <p>
              Spacious and inviting, perfect for creating cherished memories
              with loved ones.
            </p>
            <h5>Starting from <span>$249/night</span></h5>
            <a href="index.php">Book Now</a>
          </div>
        </div>
        <div class="room__card">
          <div class="room__card__image">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRiAiPweFDLS2b2fupZqbj50R1aCLumDR52Xw&s" alt="room" />
            <div class="room__card__icons">
              
            </div>
          </div>
          <div class="room__card__details">
            <h4>Room 4</h4>
            <p>
              Spacious and inviting, perfect for creating cherished memories
              with loved ones.
            </p>
            <h5>Starting from <span>$249/night</span></h5>
            <a href="index.php">Book Now</a>
          </div>
        </div>
        <div class="room__card">
          <div class="room__card__image">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQsXeeKjgvBDJLP1V2Qck34UUkKWNZIL4jGxZ3vMwhPF9J1P5T-tiR08whswSBksRVO0EY&usqp=CAU" alt="room" />
            <div class="room__card__icons">
              
            </div>
          </div>
          <div class="room__card__details">
            <h4>Room 5</h4>
            <p>
              Spacious and inviting, perfect for creating cherished memories
              with loved ones.
            </p>
            <h5>Starting from <span>$249/night</span></h5>
            <a href="index.php">Book Now</a>
          </div>
        </div>
        <div class="room__card">
          <div class="room__card__image">
            <img src="https://www.moorhallhotel.co.uk/assets/galleries/hot-tub-room-20/60580722c6/Hot-Tub-Room-20-1__FitWzIwMDAsMjAwMF0.jpg" alt="room" />
            <div class="room__card__icons">
             
            </div>
          </div>
          <div class="room__card__details">
            <h4>Room 6</h4>
            <p>
              Spacious and inviting, perfect for creating cherished memories
              with loved ones.
            </p>
            <h5>Starting from <span>$349/night</span></h5>
            <a href="index.php">Book Now</a>
          </div>
        </div>
        <div class="room__card">
          <div class="room__card__image">
            <img src="https://images.esquiremag.ph/esquiremagph/images/2020/03/03/Hotel-Room-MAIN-IMAGE.jpg" alt="room" />
            <div class="room__card__icons">
              
            </div>
          </div>
          <div class="room__card__details">
            <h4>Room 7</h4>
            <p>
              Spacious and inviting, perfect for creating cherished memories
              with loved ones.
            </p>
            <h5>Starting from <span>$449/night</span></h5>
            <a href="index.php">Book Now</a>
          </div>
        </div>
        <div class="room__card">
          <div class="room__card__image">
            <img src="https://www.xotels.com/wp-content/uploads/2022/07/Penthouse-Room-Type-XOTELS.webp" alt="room" />
            <div class="room__card__icons">
             
            </div>
          </div>
          <div class="room__card__details">
            <h4>Room 8</h4>
            <p>
              Spacious and inviting, perfect for creating cherished memories
              with loved ones.
            </p>
            <h5>Starting from <span>$149/night</span></h5>
            <a href="index.php">Book Now</a>
          </div>
        </div>
        <div class="room__card">
          <div class="room__card__image">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRD5TlRJrGjUVT_BqlfSJgCVdBUlLjN-cvrKQ&s" alt="room" />
            <div class="room__card__icons">
              
            </div>
          </div>
          <div class="room__card__details">
            <h4>Room 9</h4>
            <p>
              Spacious and inviting, perfect for creating cherished memories
              with loved ones.
            </p>
            <h5>Starting from <span>$149/night</span></h5>
            <a href="index.php">Book Now</a>
          </div>
        </div>
    </section>

    <section class="service" id="service">
      <div class="section__container service__container">
        <div class="service__content">
          <p class="section__subheader">SERVICES</p>
          <h2 class="section__header">Strive Only For The Best.</h2>
          <ul class="service__list">
            <li>
              <span><i class="ri-shield-star-line"></i></span>
              High Class Security
            </li>
            <li>
              <span><i class="ri-24-hours-line"></i></span>
              24 Hours Room Service
            </li>
            <li>
              <span><i class="ri-headphone-line"></i></span>
              Conference Room
            </li>
            <li>
              <span><i class="ri-map-2-line"></i></span>
              Tourist Guide Support
            </li>
          </ul>
        </div>
      </div>
    </section>

    <section class="section__container banner__container">
      <div class="banner__content">
        <div class="banner__card">
          <h4>25+</h4>
          <p>Properties Available</p>
        </div>
        <div class="banner__card">
          <h4>350+</h4>
          <p>Bookings Completed</p>
        </div>
        <div class="banner__card">
          <h4>600+</h4>
          <p>Happy Customers</p>
        </div>
      </div>
    </section>

    <section class="explore" id="explore">
      <p class="section__subheader">EXPLORE</p>
      <h2 class="section__header">What's New Today.</h2>
      <div class="explore__bg">
        <div class="explore__content">
          <p class="section__description"></p>
          <h4>Take a photo of the hotel, present it to our front desk, and enjoy as much as 75% Discount</h4>
          
        </div>
      </div>
    </section>

    <footer class="footer" id="contact">
      <div class="section__container footer__container">
        <div class="footer__col">
          <div class="logo">
            <a href="#home"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQvh9l_2zHsIWvkVf7EnKCDLvaUXuEEEkzfrw&s" alt="logo" /></a>
          </div>
          <p class="section__description">
            Discover a world of comfort, luxury, and adventure as you explore
            our curated selection of hotels, making every moment of your getaway
            truly extraordinary.
          </p>
          <a href="index.php">Book Now</a>
        </div>
        <div class="footer__col">
          <h4>QUICK LINKS</h4>
          <ul class="footer__links">
            <li><a href="#">Browse Destinations</a></li>
            <li><a href="#">Special Offers & Packages</a></li>
            <li><a href="#">Room Types & Amenities</a></li>
            <li><a href="#">Customer Reviews & Ratings</a></li>
            <li><a href="#">Travel Tips & Guides</a></li>
          </ul>
        </div>
        <div class="footer__col">
          <h4>OUR SERVICES</h4>
          <ul class="footer__links">
            <li><a href="#">Concierge Assistance</a></li>
            <li><a href="#">Flexible Booking Options</a></li>
            <li><a href="#">Airport Transfers</a></li>
            <li><a href="#">Wellness & Recreation</a></li>
          </ul>
        </div>
        <div class="footer__col">
          <h4>CONTACT US</h4>
          <ul class="footer__links">
            
          </ul>
          <div class="footer__socials">
            <a href="https://www.facebook.com/"><img src="https://e7.pngegg.com/pngimages/991/568/png-clipart-facebook-logo-computer-icons-facebook-logo-facebook-thumbnail.png" alt="facebook" /></a>
            <a href="https://www.instagram.com/"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Instagram_icon.png/900px-Instagram_icon.png?20200512141346" alt="instagram" /></a>
            <a href="https://x.com/home"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTp3NV6mEhe55aLo3cXISBdslFVrN4SUuQr0w&s" alt="twitter" /></a>
          </div>
        </div>
      </div>
      <div class="footer__bar">
        Copyright © 2023 Dens joshua A . All rights reserved.
      </div>
    </footer>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="main.js"></script>
  </body>
</html>