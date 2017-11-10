<?php
require_once('../inc/db.php');
require_once('../inc/functions.php');
  if ($_POST) {
    $cnt = $db->select('SELECT COUNT(*) as cnt FROM tbladmin WHERE username = ? AND password = ?', array('username' => $_POST['username'],'password' => $_POST['password']), array('%s','%s'));  
    foreach($cnt as $c):
      if ($c->cnt == 0) {
        echo "<div class='row'><div class='col-lg-4'><div class='bs-component'><div class='alert alert-dismissible alert-danger'>Incorrect Credentials Detected...</div></div></div></div>";
      } else {
        $_SESSION['login'] = 'okey';
        header('location:?l=t');
        exit();      
      }
    endforeach;      
  }
?>        
        <div class="row">
          <div class="col-lg-12">
            <div class="well bs-component">
              <form action="" method="post" class="form-horizontal">
                <fieldset>
                  <legend>Sign In</legend>
                  <div class="form-group">
                    <label for="g_lastname" class="col-lg-2 control-label">Username</label>
                    <div class="col-lg-10">
                      <input type="text" name="username" class="form-control" placeholder="Username" required>
                    </div>
                  </div>                  
                  <div class="form-group">
                    <label for="g_pfaagenecode" class="col-lg-2 control-label">Password</label>
                    <div class="col-lg-10">
                      <input type="password" name="password" class="form-control" placeholder="" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                      <button type="reset" class="btn btn-default">Clear</button>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                </fieldset>
              </form>            
            </div>
          </div>
        </div>