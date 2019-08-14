<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Any Lister
  </title>
    <!-- Fonts -->
    <?= $this->Html->css('https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'); ?>  
    <!-- Icons -->
    <?= $this->Html->css('/master-assets/js/plugins/nucleo/css/nucleo'); ?>  
    <?= $this->Html->css('/master-assets/js/plugins/@fortawesome/fontawesome-free/css/all.min'); ?>  
    <!-- CSS Files -->
    <?= $this->Html->css('/master-assets/css/argon-dashboard'); ?>  

</head>
<body class="bg-default">
  <div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark">
      <div class="container px-4">
        <a class="navbar-brand" href="../index.html">
          <?= $this->Html->image('/master-assets/img/brand/white.png'); ?>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-collapse-main">
          <!-- Collapse header -->
          <div class="navbar-collapse-header d-md-none">
            <div class="row">
              <div class="col-6 collapse-brand">
                <a href="../index.html">
                    <?= $this->Html->image('/master-assets/img/brand/blue.png'); ?>
                </a>
              </div>
              <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>
          <!-- Navbar items -->
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <?= $this->Html->link('
                <i class="ni ni-planet"></i>
                <span class="nav-link-inner--text">Dashboard</span>',
                    ['controller' => 'Content', 'action' => 'home', '_full' => true], 
                    ['class' => 'nav-link nav-link-icon', 'escape' => false]); ?>
            </li>
            <li class="nav-item">
              <?= $this->Html->link('
                <i class="ni ni-circle-08"></i>
                <span class="nav-link-inner--text">Register</span>',
                    ['controller' => 'Login', 'action' => 'register', '_full' => true], 
                    ['class' => 'nav-link nav-link-icon', 'escape' => false]); ?>
            </li>
            <li class="nav-item">
                <?= $this->Html->link('
                    <i class="ni ni-key-25"></i>
                    <span class="nav-link-inner--text">Login</span>',
                        ['controller' => 'Login', 'action' => 'signin', '_full' => true], 
                        ['class' => 'nav-link nav-link-icon', 'escape' => false]); ?>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8">
      <div class="container">
        <div class="header-body text-center mb-4">
          <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6">
              <h1 class="text-white">Welcome!</h1>
              <p class="text-lead text-light">Use these awesome forms to login or create new account in your project for free.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <!-- Page content -->
    <?= $this->fetch('content') ?>
    
    <footer class="py-5">
      <div class="container">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-6">
            <div class="copyright text-center text-xl-left text-muted">
              © 2019 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
            </div>
          </div>
          <div class="col-xl-6">
            <ul class="nav nav-footer justify-content-center justify-content-xl-end">
              <li class="nav-item">
                <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <!--   Core   -->
  <?= $this->Html->script('/master-assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min'); ?>  
  <?= $this->Html->script('/master-assets/js/plugins/jquery/dist/jquery.min'); ?>  

  <!--   Optional JS   -->
  <!--   Argon JS   -->
  <?= $this->Html->script('/master-assets/js/argon-dashboard.min.js?v=1.1.0'); ?>  
  <?= $this->Html->script('https://cdn.trackjs.com/agent/v3/latest/t.js'); ?>  
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
      });
  </script>
</body>

</html>