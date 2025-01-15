<!DOCTYPE html>
<html lang="en">
<?php include_once("includes/head.php") ?>

<body>
    <?php include_once("includes/header.php") ?>
    <section id="get-proposal-hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h1>Unlock Your Custom <span>
                            Growth Plan Today
                        </span></h1>
                    <h5>

                        Our proposal offers a tailored marketing plan that utilizes proven strategies we've successfully applied for over 100 clients.
                    </h5>
                    <p>
                        Here's what you get:
                    </p>
                    <ul>
                        <li>

                            A roadmap for addressing your marketing challenges, including areas like PPC, landing pages, content, and SEO, with a strategic approach tailored to your brand's specific needs.
                        </li>
                        <li>
                            In-depth case studies of clients with similar challenges, showcasing effective growth strategies we've implemented to drive results.
                        </li>
                        <li>
                            Pricing packages
                        </li>
                    </ul>
                </div>
                <div class="col-lg-7">
                    <div class="form-container">
                        <div class="propasl-form-heading">
                            <h3>Get a Free Proposal</h3>
                        </div>
                        <form class="animate__animated animate__pulse" id="contact" action="/leads/" method="POST">
    <div class="row">
        <div class="col-md-6">
            <input type="text" class="form-control" placeholder="Enter Your Name *" name="name" required="">
        </div>
        <div class="col-md-6">
            <input type="number" class="form-control number phone-country" minlength="10" maxlength="12" placeholder="Phone Number *" name="phone" required="">
        </div>
        <div class="col-md-12">
            <input type="email" class="form-control" placeholder="Enter email here *" name="email" required="">
        </div>
        <div class="col-md-12">
            <input placeholder="Website URL (optional)" type="text" name="website" />
        </div>
    </div>

    <span class="h5">Types of Services* :</span>
    <div class="row m-t-10 services">
        <!-- Column 1 -->
        <div class="col-md-4">
            <div class="form-check">
                <input name="services[]" type="checkbox" class="form-check-input" id="seo" value="SEO">
                <label class="form-check-label" for="seo">SEO</label>
            </div>
            <div class="form-check">
                <input name="services[]" type="checkbox" class="form-check-input" id="social-media-ads" value="Social Media Ads">
                <label class="form-check-label" for="social-media-ads">Social Media Ads</label>
            </div>
            <div class="form-check">
                <input name="services[]" type="checkbox" class="form-check-input" id="reputation-reviews" value="Reputation / Reviews">
                <label class="form-check-label" for="reputation-reviews">Reputation / Reviews</label>
            </div>
            <div class="form-check">
                <input name="services[]" type="checkbox" class="form-check-input" id="web-hosting" value="Web Hosting">
                <label class="form-check-label" for="web-hosting">Web Hosting</label>
            </div>
        </div>
        <!-- Column 2 -->
        <div class="col-md-4">
            <div class="form-check">
                <input name="services[]" type="checkbox" class="form-check-input" id="ppc" value="PPC">
                <label class="form-check-label" for="ppc">PPC</label>
            </div>
            <div class="form-check">
                <input name="services[]" type="checkbox" class="form-check-input" id="web-design" value="Web Design">
                <label class="form-check-label" for="web-design">Web Design</label>
            </div>
            <div class="form-check">
                <input name="services[]" type="checkbox" class="form-check-input" id="content-writing" value="Content Writing">
                <label class="form-check-label" for="content-writing">Content Writing</label>
            </div>
            <div class="form-check">
                <input name="services[]" type="checkbox" class="form-check-input" id="amazon-marketing" value="Amazon Marketing">
                <label class="form-check-label" for="amazon-marketing">Amazon Marketing</label>
            </div>
        </div>
        <!-- Column 3 -->
        <div class="col-md-4">
            <div class="form-check">
                <input name="services[]" type="checkbox" class="form-check-input" id="link-building" value="Link Building">
                <label class="form-check-label" for="link-building">Link Building</label>
            </div>
            <div class="form-check">
                <input name="services[]" type="checkbox" class="form-check-input" id="social-media-organic" value="Social Media Organic">
                <label class="form-check-label" for="social-media-organic">Social Media Organic</label>
            </div>
            <div class="form-check">
                <input name="services[]" type="checkbox" class="form-check-input" id="email-marketing" value="Email Marketing">
                <label class="form-check-label" for="email-marketing">Email Marketing</label>
            </div>
            <div class="form-check">
                <input name="services[]" type="checkbox" class="form-check-input" id="sem" value="SEM">
                <label class="form-check-label" for="sem">SEM</label>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <textarea class="form-control" name="brief" placeholder="Enter message here"></textarea>
        </div>
    </div>

    <fieldset>
        <div class="contact-form-button">
            <button name="submit" type="submit" class="button2" id="contact-submit">Submit</button>
        </div>
    </fieldset>
    <input type="hidden" name="url" value="/get-a-quote/">
    <input type="hidden" name="route" value="get-proposal/">
    <input type="hidden" name="brand" value="Tabsoft Marketing">
    <input type="hidden" name="token" value="<?= $token; ?>">
    <input type="hidden" name="tag" value="sidepanel form in landing-page">
    <input type="hidden" name="price" value="null">
    <input type="hidden" name="news" value="1">
</form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include_once("trusted-by-global.php") ?>
    <section id="gain-clarity">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="clarity-image-wrapper">
                        <img src="../assets/images/clarity-image.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="clarity-content">
                        <h2>Gain Clarity, and Get a Growth Plan in <span>3 Simple Steps:</span></h2>
                        <h5><i class="bi bi-check"></i> Submit the Form</h5>
                        <p class="clarity-paragraph">
                            Take the first step in helping us learn about your business and its unique needs.
                        </p>
                        <h5><i class="bi bi-check"></i> Schedule a Call</h5>
                        <p class="clarity-paragraph">

                            Select a convenient day and time, and following our discussion, we’ll send you a proposal with a tailored marketing plan.
                        </p>
                        <h5><i class="bi bi-check"></i> Review Proposal With a Senior Team Member</h5>
                        <p class="clarity-paragraph">

                            Have a one-on-one conversation with a senior marketing consultant to explore the proposed strategies. If you’re ready, take the next step and become our next extraordinary success story!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="clients-testimonial">
        <div class="container">
            <div class="testimonial-heading text-center">
                <h2>What Clients Say <span>About Us</span></h2>
            </div>
            <div class="row">
                <div class="test-slider">
                    <div class="">
                        <div class="testimonial-div">
                            <p class="test-p">
                                Tabsoft Marketing has delivered exceptional ROI on our paid campaigns. Their deep expertise in B2B SaaS and Cybersecurity is evident in the engaging content and high-performing landing pages they’ve created for us. They consistently excel across all our campaigns!
                            </p>
                            <div class="testimonial-client-section">
                                <div class="testi-image-wrapper">
                                    <img src="../assets/images/testi-image-1.jpg" alt="">
                                </div>
                                <div class="client-name">
                                    <p>
                                        Tim Matthews
                                        <br>
                                        VP of Marketing, Incapsula
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="testimonial-div">
                            <p class="test-p">

                                After experiencing limited success with larger agencies, we have been absolutely impressed by what Tabsoft Marketing has accomplished for us. Over the past 7+ years, they have consistently driven rapid and profitable growth. They are a trusted partner and an integral extension of our team.
                            </p>
                            <div class="testimonial-client-section">
                                <div class="testi-image-wrapper">
                                    <img src="../assets/images/testi-image-2.png" alt="">
                                </div>
                                <div class="client-name">
                                    <p>
                                        Warren B Jobs
                                        <br>
                                        President, Seal Skin Covers
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="testimonial-div">
                            <p class="test-p">

                                Collaborating with Tabsoft Marketing produced results that greatly surpassed our expectations. We achieved a 50% reduction in cost per lead, a 100% increase in the sales-qualified pipeline from paid search, and a 4X improvement in landing page conversions. Tabsoft Marketing consistently exceeded every quarterly goal ahead of schedule and was an absolute pleasure to work with.
                            </p>
                            <div class="testimonial-client-section">
                                <div class="testi-image-wrapper">
                                    <img src="../assets/images/testi-image-3.jpeg" alt="">
                                </div>
                                <div class="client-name">
                                    <p>
                                        Issac Akrouche
                                        <br>
                                        Growth Marketing Manager
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="testimonial-div">
                            <p class="test-p">


                                The Tabsoft Marketing team has been instrumental in helping us achieve our revenue goals through a highly effective paid search program. They utilized our existing tools, such as HubSpot and Salesforce, to provide comprehensive visibility and employed a strategic test-and-adjust methodology that consistently delivered results. I highly recommend Tabsoft Marketing to any company looking to transform a struggling PPC program into a thriving profit center.
                            </p>
                            <div class="testimonial-client-section">
                                <div class="testi-image-wrapper">
                                    <img src="../assets/images/testi-image-4.jpeg" alt="">
                                </div>
                                <div class="client-name">
                                    <p>
                                        Troy Suttle
                                        <br>
                                        VP of Marketing, Align Technologies
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="we-deliver">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="we-deliver-image-wrapper">
                        <img src="../assets/images/performance.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2>We Deliver Performance. <br>
                        <span>You Win Faster.</span>
                    </h2>
                    <p>

                        As a leading marketing agency, we drive your business toward accelerated growth. With over 8 years of proven success, our clients trust us—and for good reason.
                    </p>
                    <p class="clarity-paragraph">
                        <i class="bi bi-check"></i>
                        We are proud to be among the top 3% of Google Premier Partner agencies in the USA, a prestigious distinction reserved for agencies that demonstrate exceptional performance and expertise.
                    </p>
                    <p class="clarity-paragraph">

                        <i class="bi bi-check"></i>
                        We are proud to collaborate with industry leaders such as Meta, Bing, LinkedIn, Amazon, HubSpot, and Unbounce as our trusted partners.
                    </p>
                    <p class="clarity-paragraph">
                        <i class="bi bi-check"></i>

                        Our team works seamlessly with your existing marketing tools, delivering CRM and automation, precise tracking, high-converting landing page designs, full-funnel email marketing, transparent reporting, and much more. This approach ensures smooth integration and efficient execution across all aspects of your digital marketing strategy.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="get-proposal-faq">
        <div class="container">
            <div class="get-proposal-heading text-center">
                <h2>Frequently <span>Asked Questions</span> </h2>
            </div>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            What does the consultation call cover?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>
                                During our call, we will explore key aspects of your business, including your competitors, marketing objectives, and current challenges. This will offer valuable insights, allowing us to craft a customized strategy that aligns with your goals. Moreover, it will enable us to optimize your paid ads and SEO efforts to effectively support your objectives.

                            </p>
                            <p>
                                If you're currently running paid campaigns, you can choose to grant us read-only access to your account. This will allow one of our senior strategists to perform a comprehensive review, uncover untapped opportunities, and provide a tailored audit based on our findings—at no cost to you!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            What is the minimum Ad spend budget you recommend?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>
                                We collaborate with a broad range of businesses across different budgets. Based on our extensive experience, we suggest a minimum ad spend of $5,000 per month. This budget is essential for optimizing ROI and enabling data-driven decision-making. Our team of PPC experts will ensure that your budget is allocated wisely, maximizing every dollar spent while ensuring you don’t miss any growth opportunities.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include_once("includes/footer.php") ?>





</body>


</html>