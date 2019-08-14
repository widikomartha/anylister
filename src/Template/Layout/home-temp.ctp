<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Design System for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Any Lister</title>
  <!-- Favicon -->
  <link href="./dashboard/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <?= $this->Html->css('https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'); ?>    
  <!-- Icons -->
  <?= $this->Html->css('/dashboard/vendor/nucleo/css/nucleo'); ?>    
  <?= $this->Html->css('/dashboard/vendor/font-awesome/css/font-awesome.min'); ?>    
  <!-- Argon CSS -->
  <?= $this->Html->css('/dashboard/css/argon.css?v=1.1.0'); ?>    
</head>
<body>
  <header class="header-global">
    <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light headroom">
      <div class="container">
        <a class="navbar-brand mr-lg-5" href="./index.html"><img src="./dashboard/img/brand/white.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbar_global">
          <div class="navbar-collapse-header">
            <div class="row">
              <div class="col-6 collapse-brand">
                <a href="./index.html">
                  <img src="./dashboard/img/brand/blue.png">
                </a>
              </div>
              <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>
          <ul class="navbar-nav align-items-lg-center ml-lg-auto">
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="https://www.facebook.com/creativetim" target="_blank" data-toggle="tooltip" title="Like us on Facebook">
                <i class="fa fa-facebook-square"></i>
                <span class="nav-link-inner--text d-lg-none">Facebook</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="https://www.instagram.com/creativetimofficial" target="_blank" data-toggle="tooltip" title="Follow us on Instagram">
                <i class="fa fa-instagram"></i>
                <span class="nav-link-inner--text d-lg-none">Instagram</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="https://twitter.com/creativetim" target="_blank" data-toggle="tooltip" title="Follow us on Twitter">
                <i class="fa fa-twitter-square"></i>
                <span class="nav-link-inner--text d-lg-none">Twitter</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="https://github.com/creativetimofficial/argon-design-system" target="_blank" data-toggle="tooltip" title="Star us on Github">
                <i class="fa fa-github"></i>
                <span class="nav-link-inner--text d-lg-none">Github</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <main>
    <!--

=========================================================
* Argon Design System - v1.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-design-system
* Copyright 2019 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
    <div class="position-relative">
      <!-- Hero for FREE version -->
      <section class="section section-lg section-hero section-shaped">
        <!-- Background circles -->
        <div class="shape shape-style-1 shape-primary">
          <span class="span-150"></span>
          <span class="span-50"></span>
          <span class="span-50"></span>
          <span class="span-75"></span>
          <span class="span-100"></span>
          <span class="span-75"></span>
          <span class="span-50"></span>
          <span class="span-100"></span>
          <span class="span-50"></span>
          <span class="span-100"></span>
        </div>
        <div class="container shape-container d-flex align-items-center">
            <div class="col px-0">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-6">
                        <h1 class="display-1 text-white">Your busy life deserves this.</h1>
                        <h3 class="text-white">Any.do is an award-winning app used by millions of people 
                            to stay organized and get more done.</h3>
                        <div class="btn-wrapper mt-5">
                        <?= $this->Html->link('
                            <span class="btn-inner--icon"><i class="ni ni-key-25"></i></span>
                            <span class="btn-inner--text">Login</span>',
                                ['controller' => 'Login', 'action' => 'signin', '_full' => true], 
                                ['class' => 'btn btn-lg btn-white btn-icon mb-3 mb-sm-0', 'escape' => false]); ?>
                        <?= $this->Html->link('
                            <span class="btn-inner--icon"><i class="ni ni-circle-08"></i></span>
                            <span class="btn-inner--text">Register</span>',
                            ['controller' => 'Login', 'action' => 'register', '_full' => true], 
                            ['class' => 'btn btn-lg btn-github btn-icon mb-3 mb-sm-0', 'escape' => false]); ?>
                        </div>
                    </div>
                    <div class="col-lg text-center justify-content-center">
                        <img src="./dashboard/img/cell.png" style="width: 300px; height: 500px; " class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
        
        <!-- SVG separator -->
        <div class="separator separator-bottom separator-skew zindex-100">
          <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
          </svg>
        </div>
      </section>
    </div>
    <section class="section section-lg section-nucleo-icons pb-25">
        <div class="py-5 bg-secondary pb-250">
        </div>
    </section>
    <section class="section section-lg section-shaped">
      <div class="shape shape-style-1 shape-default">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div class="container py-md">
        <div class="row row-grid justify-content-between align-items-center">
          <div class="col-lg-6">
            <h3 class="display-3 text-white">A beautiful Design System<span class="text-white">completed with examples</span></h3>
            <p class="lead text-white">The Design System comes with four pre-built pages to help you get started faster. You can change the text and images and you're good to go. More importantly, looking at them will give you a picture of what you can built with this powerful Bootstrap 4 Design System.</p>
            <div class="btn-wrapper">
                <?= $this->Html->link('
                    <i class="ni ni-key-25"></i> Login Page',
                        ['controller' => 'Login', 'action' => 'signin', '_full' => true], 
                        ['class' => 'btn btn-success', 'escape' => false]); ?>
                <?= $this->Html->link('
                <i class="ni ni-circle-08"></i> Register Page',
                    ['controller' => 'Login', 'action' => 'register', '_full' => true], 
                    ['class' => 'btn btn-white', 'escape' => false]); ?>
            </div>
          </div>
          <div class="col-lg-5 mb-lg-auto">
            <div class="transform-perspective-right">
              <div class="card bg-secondary shadow border-0">
                <div class="card-header bg-white pb-3">
                  <div class="text-muted text-center"><small>Sign In</small></div>
                </div>
                <div class="card-body px-lg-5 py-lg-5">
                  <form role="form">
                    <div class="form-group mb-3">
                      <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                        </div>
                        <input class="form-control" placeholder="Email" type="email">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                        </div>
                        <input class="form-control" placeholder="Password" type="password">
                      </div>
                    </div>
                    <div class="custom-control custom-control-alternative custom-checkbox">
                      <input class="custom-control-input" id=" customCheckLogin2" type="checkbox">
                      <label class="custom-control-label" for=" customCheckLogin2"><span>Remember me</span></label>
                    </div>
                    <div class="text-center">
                      <button type="button" class="btn btn-primary my-4">Sign in</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
  </main>
  <footer class="footer">
    <div class="container">
      <hr>
      <div class="row align-items-center justify-content-md-between">
        <div class="col-md-6">
          <div class="copyright">
            &copy; 2019 <a href="https://www.creative-tim.com" target="_blank">Any Lister</a>.
          </div>
        </div>
        <div class="col-md-6">
          <ul class="nav nav-footer justify-content-end">
            <li class="nav-item">
              <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Any Lister</a>
            </li>
            <li class="nav-item">
              <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
            </li>
            <li class="nav-item">
              <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
            </li>
            <li class="nav-item">
              <a href="https://github.com/creativetimofficial/argon-design-system/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- Core -->
  <?= $this->Html->script('/dashboard/vendor/jquery/jquery.min'); ?>  
  <?= $this->Html->script('/dashboard/vendor/popper/popper.min'); ?>  
  <?= $this->Html->script('/dashboard/vendor/bootstrap/bootstrap.min'); ?>  
  <?= $this->Html->script('/dashboard/vendor/headroom/headroom.min'); ?>  
  <!-- Optional JS -->
  <?= $this->Html->script('/dashboard/vendor/onscreen/onscreen.min'); ?>  
  <?= $this->Html->script('/dashboard/vendor/nouislider/js/nouislider.min'); ?>  
  <?= $this->Html->script('/dashboard/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min'); ?>  
  <!-- Argon JS -->
  <?= $this->Html->script('/dashboard/js/argon.js?v=1.1.0'); ?> 

</body>

</html>