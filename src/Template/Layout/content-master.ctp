<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    <?= $pageTitle ?> - <?= $pageTagline ?>
  </title>
  <!-- Fonts -->
  <?= $this->Html->css('https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'); ?>  
  <!-- Icons -->
  <?= $this->Html->css('/master-assets/js/plugins/nucleo/css/nucleo'); ?>  
  <?= $this->Html->css('/master-assets/js/plugins/@fortawesome/fontawesome-free/css/all.min'); ?>  
  <!-- CSS Files -->
  <?= $this->Html->css('/master-assets/css/argon-dashboard.css?v=1.1.0'); ?>    
</head>

<body>
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="./index.html">
        <?= $this->Html->image('/master-assets/img/brand/blue.png', ['class' => 'navbar-brand-img']); ?>
      </a>
      <!-- User -->
      <ul class="nav align-items-center d-md-none">
        <li class="nav-item dropdown">
          <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ni ni-bell-55"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <img alt="Image placeholder" src="./master-assets/img/theme/team-1-800x800.jpg">
              </span>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow m-0">Welcome!</h6>
            </div>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-single-02"></i>
              <span>My profile</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#!" class="dropdown-item">
              <i class="ni ni-user-run"></i>
              <span>Logout</span>
            </a>
          </div>
        </li>
      </ul>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="./index.html">
              <?= $this->Html->image('/master-assets/img/brand/blue.png'); ?>
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- Form -->
        <form class="mt-4 mb-3 d-md-none">
          <div class="input-group input-group-rounded input-group-merge">
            <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <span class="fa fa-search"></span>
              </div>
            </div>
          </div>
        </form>
        <!-- Navigation -->
        <?= $this->element('sidebar'); ?>
        <!-- Divider -->
        <hr class="my-3">
        <!-- Heading -->
        <?= $this->Form->create($categoryAddForm, [
          'method'       => 'post', 
          'url'          => [
            'controller' => 'Content', 
            'action'     => 'addCategory'
          ]]) ?>
          <div class="form-group">
            <div class="input-group input-group-alternative2 mb-4">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-plus"></i></span>
              </div>
              <?php echo $this->Form->text('', ['class' => 'form-control form-control-alternative','name' => 'name','placeholder' => 'add Category']); ?>
            </div>
          </div>
          <p><?= $this->Flash->render() ?></p>
        <?= $this->Form->end() ?>
    </div>
  </nav>
  
  <div class="main-content" >
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Form -->
        <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
          <div class="form-group mb-0">
            <div class="input-group input-group-alternative">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
              </div>
              <input class="form-control" placeholder="Search" type="text">
            </div>
          </div>
        </form>
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="ni ni-bell-55"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <?= $this->Html->image('/master-assets/img/theme/team-4-800x800.jpg'); ?>
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold"><?= $userData->user('username') ?></span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
              </div>
              <a href="./examples/profile.html" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>My profile</span>
              </a>
              <div class="dropdown-divider"></div>
                <?= $this->Html->link('<i class="ni ni-user-run"></i> <span>Logout</span>',
                    ['controller' => 'Login', 'action' => 'logout', '_full' => true], ['class' => 'dropdown-item', 'escape' => false]); ?>
              <p><?= $this->Flash->render() ?></p>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!-- End Navbar -->
    <!-- Header -->
    <div class="header bg-gradient-primary pb-5 pt-5 pt-md-5">
      
    </div>
    <!-- Page content -->
    <?= $this->fetch('content') ?>
    
    <?= $this->Form->create($taskAddForm, [
          'method' => 'post', 
          'url'    => [
            'controller' => 'Content', 
            'action' => 'addTask'
          ]]) ?>
    <div class="container-fluid" >
      <button type="button" class="btn btn-block btn-primary mb-3" data-toggle="modal" data-target="#modal-default">
          <i class="fas fa-plus"></i> New List
      </button>
      <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
        <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
          <div class="modal-content">
              
            <div class="modal-header">
                <h3 class="modal-title" id="modal-title-default">New List Form</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            
            <div class="modal-body">
                <table>
                    <tr>
                        <td width="100px">List</td>
                        <td>: </td>
                        <td>
                          <?php echo $this->Form->hidden('category_id', ['value' => $this->request->getParam('id')]) ?>
                            <div class="input-group">
                              <?php echo $this->Form->text('description', 
                              ['class' => 'form-control',
                              'placeholder' => 'Input list order']); ?>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="50px">Date</td>
                        <td>: </td>
                        <td>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                    </div>
                                     <?= $this->Form->text('selected_date', [
                                        'class'       => 'form-control datepicker',
                                        'data-date-format' => 'yyyy-mm-dd',
                                        'placeholder' => 'Select date']); 
                                    ?>
                                </div>
                            </div>    
                            
                        </td>
                    </tr>
                    <?php
                      if ($this->getRequest()->getParam('action') != 'viewCategories'):
                    ?>
                    <tr>
                        <td width="50px">Category</td>
                        <td>: </td>
                        <td>
                          <?=
                            $this->Form->select('category_id',
                              $selectCategories,
                              ['class'=>'form-control', 'empty' => 'Select category']
                          );
                          ?>
                    </tr>
                    <?php
                      endif;
                    ?>
                </table>
            </div>
            
            <div class="modal-footer">
                <?php echo $this->Form->button('Save',['class' => 'btn btn-primary','type' => 'submit']);?>
                <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Close</button> 
            </div>
              
          </div>
        </div>
      </div>
    </div>
    <p><?= $this->Flash->render() ?></p>
        <?= $this->Form->end() ?>
    <!-- Footer -->
    <footer class="footer">
      <div class="row align-items-center justify-content-xl-between">
        <div class="col-xl-5">
          <div class="copyright text-center text-xl-left text-muted">
            &copy; 2019 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Any Lister</a>
          </div>
        </div>
      </div>
    </footer>
    
  </div>
  <!--   Core   -->
  <?= $this->Html->script('/master-assets/js/plugins/jquery/dist/jquery.min'); ?>  
  <?= $this->Html->script('/master-assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min'); ?>  
  <!--   Optional JS   -->
  <?= $this->Html->script('/master-assets/js/plugins/chart.js/dist/Chart.min'); ?>  
  <?= $this->Html->script('/master-assets/js/plugins/chart.js/dist/Chart.extension'); ?>  
  <?= $this->Html->script('/dashboard/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min'); ?>
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