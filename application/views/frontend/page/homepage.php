<?php foreach ($web_info as $row) :
        $web_name =$row->web_name;
        $web_description=$row->web_description;
        $contact_num=$row->contact_num;
        $email=$row->email;
        $address=$row->address;
        endforeach;
    ?>

<div id="modal" class="popupContainer" style="display:none;">
    <div class="popupHeader">
        <span class="header_title">Login</span>
        <span class="modal_close"><i class="fa fa-times"></i></span>
    </div>

    <section class="popupBody">
        <!-- Social Login -->
        <div class="social_login">
            <div class="">
                <a href="#" class="social_box fb">
                    <span class="icon"><i class="fab fa-facebook"></i></span>
                    <span class="icon_title">Connect with Facebook</span>

                </a>

                <a href="#" class="social_box google">
                    <span class="icon"><i class="fab fa-google-plus"></i></span>
                    <span class="icon_title">Connect with Google</span>
                </a>
            </div>

            <div class="centeredText">
                <span>Or use your Email address</span>
            </div>

            <div class="action_btns">
                <div class="one_half"><a href="#" id="login_form" class="btn">Login</a></div>
                <div class="one_half last"><a href="#" id="register_form" class="btn">Sign up</a></div>
            </div>
        </div>

        <!-- Username & Password Login form -->
        <div class="user_login">
            <form>
                <label>Email / Username</label>
                <input type="text" />
                <br />

                <label>Password</label>
                <input type="password" />
                <br />

                <div class="checkbox">
                    <input id="remember" type="checkbox" />
                    <label for="remember">Remember me on this computer</label>
                </div>

                <div class="action_btns">
                    <div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
                    <div class="one_half last"><a href="#" class="btn btn_red">Login</a></div>
                </div>
            </form>

            <a href="#" class="forgot_password">Forgot password?</a>
        </div>

        <!-- Register Form -->
        <div class="user_register">
            <form>
                <label>Full Name</label>
                <input type="text" />
                <br />

                <label>Email Address</label>
                <input type="email" />
                <br />

                <label>Password</label>
                <input type="password" />
                <br />

                <div class="checkbox">
                    <input id="send_updates" type="checkbox" />
                    <label for="send_updates">Send me occasional email updates</label>
                </div>

                <div class="action_btns">
                    <div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
                    <div class="one_half last"><a href="#" class="btn btn_red">Register</a></div>
                </div>
            </form>
        </div>
    </section>
</div>

<div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-12">
                    <h2><?php echo isset($web_name) ? $web_name : ''; ?></h2>
                    <h1>"Align, Strengthen, Thrive"</h1>
                    <br>
                  </div>
                  <div class="col-lg-12">
                    <div class="white-button first-button scroll-to-section">
                      <a href="#contact">Free Quote <i class="fab fa-apple"></i></a>
                    </div>
                    <div class="white-button scroll-to-section">
                      <a href="#contact">Free Quote <i class="fab fa-google-play"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="<?=base_url();?>/assets/frontend/images/slider-dec.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="services" class="services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
            <h4>Amazing <em>Services &amp; Features</em> for you</h4>
            <img src="<?=base_url();?>/assets/frontend/images/heading-line-dec.png" alt="">
            <p>At Posture Care, we are committed to providing you with exceptional services and features to help you achieve better posture, enhance your health, and live a more comfortable life.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="service-item first-service">
            <div class="icon"></div>
            <h4>App Maintenance</h4>
            <p>Ensuring uninterrupted functionality and enhanced user experience through regular app maintenance.</p>
<!--             <div class="text-button">
              <a href="#">Read More <i class="fa fa-arrow-right"></i></a>
            </div> -->
          </div>
        </div>
        <div class="col-lg-3">
          <div class="service-item second-service">
            <div class="icon"></div>
            <h4>Rocket Speed of App</h4>
            <p>Experience the power of speed with the Posture Care app and unlock a whole new level of user satisfaction.</p>
<!--             <div class="text-button">
              <a href="#">Read More <i class="fa fa-arrow-right"></i></a>
            </div> -->
          </div>
        </div>
        <div class="col-lg-3">
          <div class="service-item third-service">
            <div class="icon"></div>
            <h4>Multi Workflow Idea</h4>
            <p>This feature empowers users to take control of their journey towards better posture and enables them to make the most of the app's resources and capabilities.</p>
<!--             <div class="text-button">
              <a href="#">Read More <i class="fa fa-arrow-right"></i></a>
            </div> -->
          </div>
        </div>
        <div class="col-lg-3">
          <div class="service-item fourth-service">
            <div class="icon"></div>
            <h4>24/7 Help &amp; Support</h4>
            <p>Nuestro equipo de soporte dedicado está disponible en todo momento para atender sus consultas, brindar orientación y ofrecer soluciones a cualquier problema que pueda surgir. </p>
<!--             <div class="text-button">
              <a href="#">Read More <i class="fa fa-arrow-right"></i></a>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="clients" class="the-clients">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading">
            <h4>Check What <em>The Clients Say</em> About Our App</h4>
            <img src="<?=base_url();?>/assets/frontend/images/heading-line-dec.png" alt="">
            <p>Descubre lo que dicen nuestros clientes sobre nuestra aplicación: testimonios y comentarios de usuarios acerca de Posture Care. Esto tiene como objetivo brindar a los usuarios una perspectiva directa sobre la experiencia de otros usuarios con la aplicación.</p>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="naccs">
            <div class="grid">
              <div class="row">
                <div class="col-lg-7 align-self-center">
                  <div class="menu">
                    <div class="first-thumb active">
                      <div class="thumb">
                        <div class="row">
                          <div class="col-lg-4 col-sm-4 col-12">
                            <h4>Daniella M. Palwa</h4>
                            <span class="date">30 November 2021</span>
                          </div>
                          <div class="col-lg-4 col-sm-4 d-none d-sm-block">
                            <span class="category">Financial Apps</span>
                          </div>
                          <div class="col-lg-4 col-sm-4 col-12">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <span class="rating">4.8</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <div class="thumb">
                        <div class="row">
                          <div class="col-lg-4 col-sm-4 col-12">
                            <h4>Lida Mae M. Palwa</h4>
                            <span class="date">29 November 2021</span>
                          </div>
                          <div class="col-lg-4 col-sm-4 d-none d-sm-block">
                            <span class="category">Digital Business</span>
                          </div>
                          <div class="col-lg-4 col-sm-4 col-12">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <span class="rating">4.5</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <div class="thumb">
                        <div class="row">
                          <div class="col-lg-4 col-sm-4 col-12">
                            <h4>Ericka Mae M. Palwa</h4>
                            <span class="date">27 November 2021</span>
                          </div>
                          <div class="col-lg-4 col-sm-4 d-none d-sm-block">
                            <span class="category">Business &amp; Economics</span>
                          </div>
                          <div class="col-lg-4 col-sm-4 col-12">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <span class="rating">4.7</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <div class="thumb">
                        <div class="row">
                          <div class="col-lg-4 col-sm-4 col-12">
                            <h4>Prince Dave M. Palwa</h4>
                            <span class="date">24 November 2021</span>
                          </div>
                          <div class="col-lg-4 col-sm-4 d-none d-sm-block">
                            <span class="category">New App Ecosystem</span>
                          </div>
                          <div class="col-lg-4 col-sm-4 col-12">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <span class="rating">3.9</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="last-thumb">
                      <div class="thumb">
                        <div class="row">
                          <div class="col-lg-4 col-sm-4 col-12">
                            <h4>Nicole M. Palwa</h4>
                            <span class="date">21 November 2021</span>
                          </div>
                          <div class="col-lg-4 col-sm-4 d-none d-sm-block">
                            <span class="category">Web Development</span>
                          </div>
                          <div class="col-lg-4 col-sm-4 col-12">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <span class="rating">4.9</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> 
                <div class="col-lg-5">
                  <ul class="nacc">
                    <li class="active">
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="client-content">
                                <img src="<?=base_url();?>/assets/frontend/images/quote.png" alt="">
                                <p>"I've been using the Posture Care app for a few weeks now, and I'm amazed at the results. The personalized posture assessments and exercises have made a significant difference in my posture. It's like having a personal posture coach in my pocket!"</p>
                              </div>
                              <div class="down-content">
                                <img src="<?=base_url();?>/assets/frontend/images/image_4.jpg" alt="">
                                <div class="right-content">
                                  <h4>Daniella M. Palwa</h4>
                                  <span>CEO of Unknown Company</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="client-content">
                                <img src="<?=base_url();?>/assets/frontend/images/quote.png" alt="">
                                <p>"Posture Care app has been a game-changer for me. The real-time posture monitoring feature keeps me mindful of my posture throughout the day. It's easy to use and provides gentle reminders to correct my alignment. Highly recommended!"</p>
                              </div>
                              <div class="down-content">
                                <img src="<?=base_url();?>/assets/frontend/images/image_3.png" alt="">
                                <div class="right-content">
                                  <h4>Lida Mae M. Palwa</h4>
                                  <span>CTO of Digital Company</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="client-content">
                                <img src="<?=base_url();?>/assets/frontend/images/quote.png" alt="">
                                <p>"I work long hours at a desk, and the ergonomic consultations provided by the Posture Care app have been a lifesaver. The expert advice on setting up my workstation properly has relieved my back and neck pain. Thank you, Posture Care!"</p>
                              </div>
                              <div class="down-content">
                                <img src="<?=base_url();?>/assets/frontend/images/image_2.jpg" alt="">
                                <div class="right-content">
                                  <h4>Ericka Mae M. Palwa</h4>
                                  <span>Founder of Catherina Co.</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="client-content">
                                <img src="<?=base_url();?>/assets/frontend/images/quote.png" alt="">
                                <p>"I struggled with poor posture for years, but the Posture Care app has turned things around for me. The virtual coaching sessions have been incredibly helpful, and the exercises and stretches are easy to follow. I feel more confident and pain-free now!"</p>
                              </div>
                              <div class="down-content">
                                <img src="<?=base_url();?>/assets/frontend/images/image_5.jpg" alt="">
                                <div class="right-content">
                                  <h4>Prince Dave M. Palwa</h4>
                                  <span>Manager, Digital Company</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="client-content">
                                <img src="<?=base_url();?>/assets/frontend/images/quote.png" alt="">
                                <p>"I struggled with poor posture for years, but the Posture Care app has turned things around for me. The virtual coaching sessions have been incredibly helpful, and the exercises and stretches are easy to follow. I feel more confident and pain-free now!"</p>
                              </div>
                              <div class="down-content">
                                <img src="<?=base_url();?>/assets/frontend/images/image.png" alt="">
                                <div class="right-content">
                                  <h4>Nicole M. Palwa</h4>
                                  <span>CTO, Chain Company</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>          
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="pricing" class="pricing-tables">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading">
            <h4><em>Unlock</em> the Ultimate Upgrade</h4>
            <img src="<?=base_url();?>/assets/frontend/images/heading-line-dec.png" alt="">
            <p>Experience the Best of What We Offer!</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="pricing-item-regular">
            <span class="price">$12</span>
            <h4>Standard Plan App</h4>
            <div class="icon">
              <img src="<?=base_url();?>/assets/frontend/images/pricing-table-01.png" alt="">
            </div>
            <ul>
              <li>Personalized Posture Assessments</li>
              <li>Basic Exercise Library</li>
              <li>Posture Tracking</li>
              <li>Reminder Notifications</li>
              <li>Basic Customer Support</li>
            </ul>
            <div class="border-button">
              <a href="#">Purchase This Plan Now</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="pricing-item-pro">
            <span class="price">$25</span>
            <h4>Business Plan App</h4>
            <div class="icon">
              <img src="<?=base_url();?>/assets/frontend/images/pricing-table-01.png" alt="">
            </div>
            <ul>
              <li>Expanded Exercise Library</li>
              <li>Advanced Posture Analytics</li>
              <li>Customizable Reminders</li>
              <li>Priority Customer Support</li>
              <li>Integration Options</li>
            </ul>
            <div class="border-button">
              <a href="#">Purchase This Plan Now</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="pricing-item-regular">
            <span class="price">$66</span>
            <h4>Premium Plan App</h4>
            <div class="icon">
              <img src="<?=base_url();?>/assets/frontend/images/pricing-table-01.png" alt="">
            </div>
            <ul>
              <li>Expert Consultations</li>
              <li>Advanced Posture Tracking</li>
              <li>Premium Content</li>
              <li>24/7 Premium Support:</li>
              <li>Additional Features</li>
            </ul>
            <div class="border-button">
              <a href="#">Purchase This Plan Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> 