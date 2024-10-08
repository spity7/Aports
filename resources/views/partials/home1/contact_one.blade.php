<!--Contact One Start-->
<section class="contact-one">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-5">
                <div class="contact-one__left">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">contact now</span>
                        <h2 class="section-title__title">Get in touch with us</h2>
                    </div>
                    <div class="contact-one__person">
                        <div class="contact-one__person-img">
                            <img src="{{ asset('assets/images/resources/contact-one-person-img-1.jpg') }}"
                                alt="">
                        </div>
                        <div class="contact-one__person-content">
                            <h3 class="contact-one__person-name">Kevin Smith</h3>
                            <p class="contact-one__person-sub-title">Certified agent</p>
                        </div>
                    </div>
                    <p class="contact-one__text-1">Lorem ipsum dolor sit amet, consecte adipiscing elit. In hac
                        habitasse platea dictumst. Duis porta, quam ut finibus ultrices.</p>
                    <ul class="list-unstyled contact-one__list">
                        <li>
                            <div class="icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="content">
                                <p>Have any question?</p>
                                <h4> <span>Free</span> <a href="tel:230009850">+23 (000)-9850</a></h4>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="content">
                                <p>Write email</p>
                                <h4><a href="mailto:needhelp@company.com">needhelp@company.com</a></h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-8 col-lg-7">
                <div class="contact-one__right">
                    <div class="row">
                        <div class="contact-one__form-box">
                            <form action="{{ asset('assets/inc/sendemail.php') }}"
                                class="contact-one__form contact-one-validated" novalidate="novalidate">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="contact-one__input-box">
                                            <input type="text" placeholder="Your name" name="name">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="contact-one__input-box">
                                            <input type="email" placeholder="Email address" name="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="contact-one__input-box text-message-box">
                                            <textarea name="message" placeholder="Write message"></textarea>
                                        </div>
                                        <div class="contact-one__btn-box">
                                            <a href="about.html" class="thm-btn contact-one__btn">Send a
                                                Message</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Contact One End-->
