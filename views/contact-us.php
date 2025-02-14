<!DOCTYPE html>
<html lang="en">
<?php
$metaUrl = "https://www.tabsoftmarketing.com/contact-us/";
$metaTitle = "Contact Us for A Free Proposal | Tabsoft Marketing";
$metaDescription = "Get in touch with Tabsoft Marketing for a free proposal and see how our expert team can help your business and deliver exceptional results.";
include_once("includes/head.php");
?>

<body>
  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TW29QTLD"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

  <?php include_once("includes/header.php") ?>
  <section id="contact-hero-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h1>
          Ready to Outsource Your Project to <span>Tabsoft Marketing?</span></span>
          </h1>
          <p>
          Reach out to us for a free, no-obligation proposal. We’re excited to show you how our proven methods can help you achieve your goals and exceed expectations.
        </p>
        </div>
        <div class="col-lg-6"></div>
      </div>
    </div>
  </section>
  <section id="contact-form-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="form-container">
            <form class="animate__animated animate__pulse" id="contact" action="/leads/" method="POST">
              <fieldset>
                <label for="last-name">
                  FULL NAME <span >*</span>
                </label>
                <input
                  placeholder="Full Name"
                  type="text"
                  name="name"
                  required />
              </fieldset>

              <div class="row">
                <div class="col-lg-6">
                  <fieldset>
                    <label for="last-name">
                      PHONE NUMBER <span >*</span>
                    </label>
                    <input
                      placeholder="Phone Number"
                      type="tel"
                      name="phone"
                      required />
                  </fieldset>
                </div>
                <div class="col-lg-6">
                  <fieldset>
                    <label for="last-name">
                      EMAIL <span >*</span>
                    </label>
                    <input
                      placeholder="Email*"
                      type="email"
                      name="email"
                      required />
                  </fieldset>
                </div>
              </div>

              <fieldset>
                <label for="last-name">
                  MESSAGE <span >*</span>
                </label>
                <textarea
                  placeholder="Message"
                  name="message"
                  rows="4"
                  required></textarea>
              </fieldset>

              <fieldset>
                <div class="contact-form-button">
                  <button name="submit" type="submit" class="button2" id="contact-submit">
                    Submit
                  </button>
                </div>
              </fieldset>

              <input type="hidden" name="route" value="contact-us/" />
              <input type="hidden" name="brand" value="Tabsoft Marketing" />
              <input type="hidden" name="token" value="<?= $token; ?>" />
              <input type="hidden" name="tag" value="sidepanel form in landing-page" />
              <input type="hidden" name="price" value="null" />
              <input type="hidden" name="news" value="1" />
              <input type="text" class="jun" name="gender" style="display: none;" />
            </form>
          </div>
        </div>
        <div class="col-lg-6">
          <h2>
            Our <span>Offices</span>
          </h2>
          <div class="office-detail-paragraph">
            <div class="address-main-paragraph">
              <h5> Greenacres FL 33463</h5>
              <p><a href="https://maps.app.goo.gl/1Q5MMi9gYgh8A1HT9">4952 10th Ave N Greenacres FL 33463</a></p>
            </div>
            <div class="office-number-addresss">
              <hr>
              <p><a href="tel:(561) 473-4214"><i class="fas fa-phone me-3"></i> (561) 473-4214</a></p>
              <p>
              <a href="mailto:query@tabsoftmarketing.com">
                  <i class="fas fa-envelope me-3"></i>
                  query@tabsoftmarketing.com
                </a>
              </p>
            </div>
            <div class="contact-us-links">
            <a href="https://www.facebook.com/Tabsoftagency/" target="_blank">
              <i class="bi bi-facebook"></i>
            </a>
            <a href="https://www.instagram.com/Tabsoftagency/">
              <i class="bi bi-instagram"></i>
            </a>
            <a href="https://www.linkedin.com/company/Tabsoftagency/">
              <i class="bi bi-linkedin"></i>
            </a>
            <!-- <a href="">
              <i class="bi bi-twitter-x"></i>
            </a> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php $headingText = "Book a Call and Get a Free <br> Consultation Today! "; include_once("includes/footer.php") ?>
</body>


</html>