<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Header section starts -->
    <section class="header">
        <a href="home.php" class="logo">Wedding Planner</a>

        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About Us</a>
            <a href="services.php">Services</a>
            <a href="book.php">Book</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    <!-- Header section ends -->

    <!-- Home section starts -->
    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" style="background:url('gb.jpg') no-repeat;">
                    <div class="content">
                        <span>Your Dream Wedding Awaits</span>
                        <h3>Plan Your Perfect Day with Us</h3>
                        <a href="book.php" class="btn">Start Planning</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url('gb1.jpg') no-repeat;">
                    <div class="content">
                        <span>Let Us Make Your Day Unforgettable</span>
                        <h3>Customized Packages for Your Special Day</h3>
                        <a href="services.php" class="btn">Explore Services</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url('gb2.jpg') no-repeat;">
                    <div class="content">
                        <span>Every Love Story is Beautiful</span>
                        <h3>Let Us Help You Tell Yours</h3>
                        <a href="about.php" class="btn">Learn More About Us</a>
                    </div>
                </div>
            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    <!-- Home section ends -->

    <!-- Services section starts -->
    <section class="services">
        <h1 class="heading-title">Our Services</h1>
        <div class="box-container">
            <div class="box">
                <img src="i1.jpg" alt="Venue Selection">
                <h3>Venue Selection</h3>
            </div>

            <div class="box">
                <img src="i2.jpg" alt="Decoration">
                <h3>Decoration</h3>
            </div>

            <div class="box">
                <img src="i3.webp" alt="Catering">
                <h3>Catering</h3>
            </div>

            <div class="box">
                <img src="i4.jpg" alt="Entertainment">
                <h3>Entertainment</h3>
            </div>

            <div class="box">
                <img src="i5.jpg" alt="Photography">
                <h3>Photography</h3>
            </div>

            <div class="box">
                <img src="i6.jpeg" alt="Transportation">
                <h3>Transportation</h3>
            </div>
        </div>
    </section>
    <!-- Services section ends -->

    <!-- About section starts -->
    <section class="home-about">
        <div class="image">
            <img src="vadhya.jpg" alt="About Us">
        </div>
        <div class="content">
            <h3>About Us</h3>
            <p>Discover the story behind our passion for creating unforgettable weddings.</p>
            <a href="about.php" class="btn">Read More</a>
        </div>
    </section>
    <!-- About section ends -->

    <!-- Packages section starts -->
    <section class="home-packages">
        <h1 class="heading-title">Our Packages</h1>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="Designer (1).png" alt="Sanskriti Splendor">
                </div>
                <div class="content">
                    <h3>Sanskriti Splendor</h3>
                    <p>Embrace Tradition, Elevate Elegance</p>
                    <a href="book.php" class="btn">Book Now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="FD.webp" alt="Fine Dining">
                </div>
                <div class="content">
                    <h3>Fine Dining</h3>
                    <p>A timeless package Where Serenity Meets Splendor</p>
                    <a href="book.php" class="btn">Book Now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="Designer (2).png" alt="Wedding Ceremony">
                </div>
                <div class="content">
                    <h3>Wedding Ceremony</h3>
                    <p>Embark on a Journey of Tranquility with Vedic Serenity</p>
                    <a href="book.php" class="btn">Book Now</a>
                </div>
            </div>
        </div>
        <div class="load-more">
            <a href="package.php" class="btn">View More Packages</a>
        </div>
    </section>
    <!-- Packages section ends -->

    <!-- Offer section starts -->
    <section class="home-offer">
        <div class="content">
            <h3>Special Offer</h3>
            <p>Plan your dream wedding with us and receive exclusive discounts!</p>
            <a href="book.php" class="btn">Book Now</a>
        </div>
    </section>
    <!-- Offer section ends -->

    <!-- Footer section starts -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>Quick Links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i> Home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i> About Us</a>
                <a href="services.php"><i class="fas fa-angle-right"></i> Services</a>
                <a href="book.php"><i class="fas fa-angle-right"></i> Book</a>
            </div>

            <div class="box">
                <h3>Extra Links</h3>
                <a href="#"><i class="fas fa-angle-right"></i> Ask Questions</a>
                <a href="#"><i class="fas fa-angle-right"></i> Privacy Policy</a>
                <a href="#"><i class="fas fa-angle-right"></i> Terms of Use</a>
            </div>

            <div class="box">
                <h3>Contact Info</h3>
                <a href="#"><i class="fas fa-phone"></i> 9638527412</a>
                <a href="#"><i class="fas fa-envelope"></i> anu@gmail.com</a>
                <a href="#"><i class="fas fa-map"></i> Dakshina Kannada District</a>
            </div>

            <div class="box">
                <h3>Follow Us</h3>
                <a href="#"><i class="fab fa-facebook-f"></i> Facebook</a>
                <a href="#"><i class="fab fa-twitter"></i> Twitter</a>
                <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
                <a href="#"><i class="fab fa-pinterest"></i> Pinterest</a>
            </div>
        </div>
        <div class="credit">
            <span>All Rights Reserved</span>
        </div>
    </section>
    <!-- Footer section ends -->

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- Custom JS -->
    <script src="script.js"></script>
</body>

</html>
