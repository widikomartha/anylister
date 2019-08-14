<div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary shadow border-0">
            
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
                <?= $this->Html->link('Sign In',
                    ['controller' => 'Content', 'action' => 'index', '_full' => true]); ?>
              </div>
              <?= $this->Form->create($userLoginForm, ['method' => 'post']) ?>
                <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div><?php echo $this->Form->email('', ['class' => 'form-control','name'=>'email','placeholder' => 'Email']); ?>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <?php echo $this->Form->password('', ['class' => 'form-control','name'=>'password','placeholder' => 'Password']); ?>
                  </div>
                </div>
                <div class="text-center">
                  <?= $this->Form->button('Sign in', ['class' => 'btn btn-primary my-4','type' => 'submit']); ?>
                  <p><?= $this->Flash->render() ?></p>
                </div>
                <?= $this->Form->end() ?>              
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-6">
              <a href="#" class="text-light"><small>Forgot password?</small></a>
            </div>
            <div class="col-6 text-right">
              <?= $this->Html->link('<small>Create new account</small>',
                    ['controller' => 'Login', 'action' => 'register', '_full' => true], ['class' => 'text-light', 'escape' => false]); ?>
            </div>
          </div>
        </div>
      </div>
    </div>