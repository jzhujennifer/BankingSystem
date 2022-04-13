<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="shortcut icon" type="image/png" href="img/icon.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link
      href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/style.css"  />
    <title>Online Banking</title>

    <script defer src="js/script.js"></script>
  </head>

  <body>
    <header class="header">
      <nav class="nav">
        <div>
            <img class="pt-2"
                src="img/bank_icon.png"
                alt="Bankist logo"
            />
            <h2>Transfer Easy</h2>
        </div>
        
        <ul class="nav__links">
          <li class="nav__item">
            <a class="nav__link" href="../signup">Sign Up</a>
          </li>
          <li class="nav__item">
            <a class="nav__link" href="#section--2">Operations</a>
          </li>
          <li class="nav__item">
            <a class="nav__link" href="#section--3">Testimonials</a>
          </li>
          <li class="nav__item">
            <a class="nav__link nav__link--btn" href="#section--1"
              >Log in</a
            >
          </li>
        </ul>
      </nav>
      <div> <h2 style="color: red">{{session('signup')}}</h2></div>
      <div class="header__title">
        <h1>
          <span class="highlight">Welcome</span><br />
          Online Banking System
        </h1>
        <h4>Transfer Funds Today.</h4>

        <img
          src="img/hero1.jpg"
          class="header__img"
          alt="Minimalist bank items"
        />
      </div>
    </header>

    <!-- Log In / Sign Up -->
    <section class="section" id="section--1">
      <div class="section__title">
        <h3 class="section__header">
          Start Transfering Money.
        </h3>
      </div>

        <div class="features">
            <img
            src="img/digital-lazy.jpg"
            data-src="img/digital.jpg"
            alt="Computer"
            class="features__img lazy-img"
        />
        <div class="features__feature">
          <h5 class="features__header card-title text-center w-100">Log in to your account</H5>
          <form action="/login" method="post" id="login">
          {{ csrf_field() }}
              <div class="form-group">
                  <label for="cardNumber" class='control-label'>Card Number</label>
                  <input type="text" class="form-control" name="cardNumber" value="{{$card}}" required>
              </div>
              <div class="form-group">
                  <label for="password" class='control-label'>Password</label>
                  <input type="password" class="form-control" name="password" value="{{$password}}"  required>
              </div>
              <p style="color:red">{{$error}}</p>
              <div class="form-group d-flex justify-content-center m-5">
                  <button class="btn btn-sm btn-primary btn-flat" {{$disabled}}>Submit</button>
              </div>
          </form>  
      </div>
    </section>

    <!-- Operations -->
    <section class="section" id="section--2">
      <div class="section__title">
        <h2 class="section__description">Operations and Features</h2>
        <h3 class="section__header">
          Send money anywhere in the universe. 
        </h3>
      </div>

    
        <div class="operations__tab-container">
          <button
            class="btn operations__tab operations__tab--1 operations__tab--active"
            data-tab="1">
            <span>01</span>Instant Transfers
          </button>
          <button class="btn operations__tab operations__tab--2" data-tab="2">
            <span>02</span>Cancel Transfers
          </button>
          <button class="btn operations__tab operations__tab--3" data-tab="3">
            <span>03</span>Retrieve Your Past Transactions. 
          </button>
        </div>
      </div>
    </section>
    
    <!-- Testimonials -->
    
    <section class="section" id="section--3">
      <div class="section__title section__title--testimonials">
        <h2 class="section__description">Testimonials</h2>
        <h3 class="section__header">
          Dont trust us. Trust what our clients have to say!
        </h3>
      </div>

      <div class="slider">
        <div class="slide">
          <div class="testimonial">
            <h5 class="testimonial__header">Best financial decision ever!</h5>
            <blockquote class="testimonial__text">
              At my request, Transfer Easy sent my money to another galaxy, in case we destroy our own planet! Never have I felt so safe in my life!
            </blockquote>
            <address class="testimonial__author">
              <img src="img/user-1.jpg" alt="" class="testimonial__photo" />
              <h6 class="testimonial__name">Paranoid Mike</h6>
              <p class="testimonial__location">Montreal, Empire of the East</p>
            </address>
          </div>
        </div>

      
        <button class="slider__btn slider__btn--left">&larr;</button>
        <button class="slider__btn slider__btn--right">&rarr;</button>
        <div class="dots"></div>
      </div>
    </section>

    <footer class="footer">
      <ul class="footer__nav">
        <li class="footer__item">
          <a class="footer__link" href="#">About</a>
        </li>
        <li class="footer__item">
          <a class="footer__link" href="#">Terms of Use</a>
        </li>
        <li class="footer__item">
          <a class="footer__link" href="#">Contact Us</a>
        </li>
      </ul>
      
      <p class="footer__copyright">
        &copy; Copyright by Blue Team. 
      </p>
    </footer>


    <!-- <script src="script.js"></script> -->
  </body>
</html>
