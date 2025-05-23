<?php

function getNavigation(){
    return '<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container">
      <a class="navbar-brand" href="#">BrandLogo</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="features.php">Features</a></li>
          <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
          <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>';
}

function getHero(){
    return '<section class="py-5 text-center bg-primary text-white">
    <div class="container">
      <h1 class="display-4">Welcome to Our Product</h1>
      <p class="lead">Discover the ultimate solution for your needs. Fast, reliable, and user-friendly.</p>
      <a href="#features" class="btn btn-lg btn-light mt-3">Learn More</a>
    </div>
  </section>
';
}

function getFeatures(){
    return '<section id="features" class="py-5">
    <div class="container">
      <h2 class="text-center mb-4">Features</h2>
      <div class="row">
        <div class="col-md-4 text-center">
          <h3>Feature 1</h3>
          <p>Detail about feature 1.</p>
        </div>
        <div class="col-md-4 text-center">
          <h3>Feature 2</h3>
          <p>Detail about feature 2.</p>
        </div>
        <div class="col-md-4 text-center">
          <h3>Feature 3</h3>
          <p>Detail about feature 3.</p>
        </div>
      </div>
    </div>
  </section>';
}

function getAbout(){
    return '<section id="about" class="py-5 bg-light">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
          <h2>About Us</h2>
          <p>We are committed to delivering top-notch solutions that empower our customers to achieve their goals efficiently.</p>
        </div>
        <div class="col-md-6">
          <img src="https://via.placeholder.com/500x300" class="img-fluid rounded" alt="About image">
        </div>
      </div>
    </div>
  </section>';
}
function getCallToAction(){
    return '<section class="py-5 text-center">
    <div class="container">
      <h3>Ready to Get Started?</h3>
      <p>Join thousands of satisfied users today.</p>
      <a href="#contact" class="btn btn-primary btn-lg">Sign Up Now</a>
    </div>
  </section>';
}
function getContact(){
    return '<section id="contact" class="py-5 bg-secondary text-white">
    <div class="container">
      <h2 class="text-center mb-4">Contact Us</h2>
      <form class="row g-3">
        <div class="col-md-6">
          <input type="text" class="form-control" placeholder="Your Name" required>
        </div>
        <div class="col-md-6">
          <input type="email" class="form-control" placeholder="Your Email" required>
        </div>
        <div class="col-12">
          <textarea class="form-control" rows="4" placeholder="Your Message" required></textarea>
        </div>
        <div class="col-12 text-center">
          <button type="submit" class="btn btn-light">Send Message</button>
        </div>
      </form>
    </div>
  </section>';
}
function getFooter(){
    return '<footer class="py-4 bg-dark text-white">
    <div class="container text-center">
      <p class="mb-0">&copy; 2025 Your Company. All rights reserved.</p>
    </div>
  </footer>';
}