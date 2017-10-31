<?php
require_once('inc/db.php');
  if ($_POST) {
    $db->select('SELECT COUNT(*) FROM tblinfo WHERE lastname = ? AND pfa_agent_code = ?', array('lastname' => $_POST['r_lastname'],'pfa_agent_code' => $_POST['r_pfaagenecode']), array('%s','%s'));  
    header('Location:?q=registered_finish');
    exit();      
  }
?>        
        <div class="row">
          <div class="col-lg-12">
            <div class="well bs-component">
              <form action="" method="post" class="form-horizontal">
                <fieldset>
                  <legend>Legend</legend>
                  <div class="form-group">
                    <label for="g_lastname" class="col-lg-2 control-label">Last Name</label>
                    <div class="col-lg-10">
                      <input type="text" name="r_lastname" class="form-control" placeholder="Lastname" required>
                    </div>
                  </div>                  
                  <div class="form-group">
                    <label for="g_pfaagenecode" class="col-lg-2 control-label">PFA Agent Code</label>
                    <div class="col-lg-10">
                      <input type="text" name="r_pfaagenecode" class="form-control" placeholder="" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                      <button type="reset" class="btn btn-default">Cancel</button>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                </fieldset>
              </form>            
            </div>
          </div>
        </div>