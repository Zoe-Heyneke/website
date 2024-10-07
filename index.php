<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pastimes - Clothing Store</title>
    <!-- Link to external CSS file -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOM16mK1l23n+W1v9Q/RFZ/WVd4F5eDjqzXU9Yw" crossorigin="anonymous">

</head>
<body>
    <header>
        <!-- Checkbox to toggle the menu -->
        <input type="checkbox" id="menu-toggle" style="display:none;">
        
        <!-- Label for burger icon (connected to checkbox) -->
        <label for="menu-toggle" class="burger">
            <div></div>
            <div></div>
            <div></div>
        </label>

        <!-- Logo -->
        <div class="logo">
            Pastimes
        </div>

        <!-- Navigation menu -->
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="About.php">About</a></li>
                <li><a href="Contact.php">Contact</a></li>
            </ul>
        </nav>

        <!-- Header icons -->
        <div class="header-icons">
            <i class="fas fa-search"></i>
            <i class="fas fa-heart"></i>
            <i class="fas fa-shopping-cart"></i>
            <i class="fas fa-user"></i>
        </div>
    </header>

    <!-- Main Content Section -->
    <main>
        <div class="main-banner">
            <h1>We believe in Giving Clothing a Second Chance.</h1>
        </div>
        <div class="categories">
    <div class="category">
        <h2>Fan Favorites</h2>
        <img src="path_to_fan_favorites_image.jpg" alt="Fan Favorites">
    </div>
    <div class="category">
        <h2>Recently Added</h2>
        <img src="path_to_recently_added_image.jpg" alt="Recently Added">
    </div>
    <div class="category">
        <h2>On Sale</h2>
        <img src="path_to_on_sale_image.jpg" alt="On Sale">
    </div>
    <div class="category">
        <h2>Kids</h2>
        <img src="path_to_kids_image.jpg" alt="Kids Clothing">
    </div>
    <div class="category">
        <h2>Women</h2>
        <img src="path_to_women_image.jpg" alt="Women's Clothing">
    </div>
    <div class="category">
        <h2>Men</h2>
        <img src="path_to_men_image.jpg" alt="Men's Clothing">
    </div>
</div>

        <div class="instant-message">
            <button>Instant Message</button>
        </div>
    </main>
    <footer>
    <div class="footer-container">
        <!-- Primary Navigation Links -->
        <div class="footer-navigation">
            <h3>Navigation</h3>
            <ul>
                <li><a href="index.php">Home Page</a></li>
                <li><a href="contact.php">Contact Page</a></li>
            </ul>
        </div>

        <!-- Social Media Integration -->
        <div class="footer-social-media">
            <h3>Follow Us</h3>
            <ul>
                <li><a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i> Facebook</a></li>
                <li><a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i> Twitter</a></li>
                <li><a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i> Instagram</a></li>
                <li><a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i> LinkedIn</a></li>
            </ul>
        </div>

        <!-- Newsletter Subscription -->
        <div class="footer-newsletter">
            <h3>Subscribe to Our Newsletter</h3>
            <p>Stay updated with the latest news and exclusive offers!</p>
            <form action="#" method="post">
                <input type="email" placeholder="Your Email Address" required>
                <button type="submit">Subscribe Now</button>
            </form>
        </div>

        <!-- Secondary Information -->
        <div class="footer-secondary-info">
            <h3>Additional Links</h3>
            <ul>
                <li><a href="privacy-policy.php">Privacy Policy</a></li>
                <li><a href="terms-of-service.php">Terms of Service</a></li>
                <li><a href="faq.php">FAQ</a></li>
            </ul>
        </div>
    </div>

    <!-- Footer Branding -->
    <div class="footer-branding">
        <p>&copy; 2024 Pastimes. All Rights Reserved.</p>
    </div>
</footer>

    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const nav = document.querySelector('nav');

        menuToggle.addEventListener('change', () => {
            nav.style.display = menuToggle.checked ? 'flex' : 'none';
        });
    </script>
    
    
</body>
</html>
