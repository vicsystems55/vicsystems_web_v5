@extends('layouts.app')

@section('content')
         <!-- Section Banner -->
        <div class="section-banner">
            <div class="banner-layout-wrapper">
                <div class="banner-layout">
                    <div class="d-flex flex-column text-center align-items-center gspace-2">
                        <h2 class="title-heading animate-box animated animate__animated" data-animate="animate__fadeInRight">Contact Us</h2>
                        <nav class="breadcrumb">
                            <a href="index.html" class="gspace-2">Home</a>
                            <span class="separator-link">/</span>
                            <p class="current-page">Contact Us</p>
                        </nav>
                    </div>
                    <div class="spacer"></div>
                </div>
            </div>
        </div>

<!-- Section Contact -->
<div class="section">
  <div class="hero-container">
    <div class="row row-cols-xl-2 row-cols-1 g-5">

      <!-- Contact Info -->
      <div class="col col-xl-5">
        <div class="contact-title-wrapper">
          <div class="card contact-title">
            <div class="sub-heading">
              <i class="fa-regular fa-circle-dot"></i>
              <span>Contact Us</span>
            </div>
            <h2 class="title-heading">We’re Here to Help</h2>
            <p>Reach out to <strong>Vicsystems Technologies Ltd.</strong> for tailored IT and digital solutions designed to move your business forward.</p>

            <!-- Phone -->
            <div class="d-flex flex-column flex-md-row align-items-center text-md-start text-center gspace-2">
              <div>
                <div class="icon-wrapper">
                  <div class="icon-box">
                    <i class="fa-solid fa-phone-volume accent-color"></i>
                  </div>
                </div>
              </div>
              <div class="d-grid">
                <span>Phone Number</span>
                <h5>+234 803 783 5670</h5>
              </div>
            </div>

            <!-- Email -->
            <div class="d-flex flex-column flex-md-row align-items-center text-md-start text-center gspace-2">
              <div>
                <div class="icon-wrapper">
                  <div class="icon-box">
                    <i class="fa-solid fa-envelope accent-color"></i>
                  </div>
                </div>
              </div>
              <div class="d-grid">
                <span>Email Address</span>
                <h5>support@vicsystems.us</h5>
              </div>
            </div>

            <!-- Address -->
            <div class="d-flex flex-column flex-md-row align-items-center text-md-start text-center gspace-2">
              <div>
                <div class="icon-wrapper">
                  <div class="icon-box">
                    <i class="fa-solid fa-location-dot accent-color"></i>
                  </div>
                </div>
              </div>
              <div class="d-grid">
                <span>Office Address</span>
                <h5>05 Babatope Ajakaiye Cres, AMAC, Abuja 900108, Federal Capital Territory</h5>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Contact Form -->
      <div class="col col-xl-7">
        <div id="success-message" class="alert success hidden">
          <span class="check-icon"><i class="fa-solid fa-2xl fa-check"></i></span>
          <p>Thank you! Your message has been sent.</p>
        </div>

        <div id="error-message" class="alert error hidden">
          <span class="cross-icon"><i class="fa-solid fa-2xl fa-xmark"></i></span>
          <p>Oops! Something went wrong. Please try again.</p>
        </div>

        <div class="form-layout-wrapper">
          <div class="card form-layout">
            <h3 class="title-heading">Let’s Discuss Your Next Project</h3>
            <form action="php/form_process.php" method="post" id="contactForm" class="form">
              <div class="row row-cols-md-2 row-cols-1 g-3">
                <div class="col">
                  <input type="text" name="first-name" id="first-name" placeholder="First Name" required>
                </div>
                <div class="col">
                  <input type="text" name="last-name" id="last-name" placeholder="Last Name" required>
                </div>
              </div>
              <div class="row row-cols-md-2 row-cols-1 g-3">
                <div class="col">
                  <input type="email" name="email" id="email" placeholder="Email Address" required>
                </div>
                <div class="col">
                  <input type="text" name="subject" id="subject" placeholder="Subject">
                </div>
              </div>
              <textarea name="message" id="message" rows="5" placeholder="Your Message"></textarea>
              <div class="form-button-container">
                <button type="submit" class="btn btn-accent">
                  <span class="btn-title"><span>Send Message</span></span>
                  <span class="icon-circle"><i class="fa-solid fa-arrow-right"></i></span>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>


        <!-- Section Maps -->
        <div class="section pt-0">
            <div class="hero-container">
               <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=05%20Babatope%20Ajakaiye%20Cres,%20AMAC,%20Abuja%20900108,%20Federal%20Capital%20Territory+(vicsystems%20technologies%20ltd.)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.mapsdirections.info/fr/calculer-la-population-sur-une-carte">mesurer la population sur une carte</a></iframe></div>
            </div>
        </div>

@endsection
