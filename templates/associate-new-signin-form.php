<?php
require_once('inc/db.php');
  if ($_POST) {
    $db->insert('tblinfo',array('pfa_agent_code'=>$_POST['g_pfaagenecode'],'user_type_id'=>'2','firstname'=>$_POST['g_firstname'],'lastname'=>$_POST['g_lastname'],'nickname'=>$_POST['g_nickname'],'contact_no'=>$_POST['g_contactno'],'email'=>$_POST['g_email'],'who_invited'=>'','who_upline_qfd'=>$_POST['g_whouplineqfd'],'who_direct_upline'=>$_POST['g_whodirectupline']),array('%s','%d','%s','%s','%s','%s','%s','%s','%s','%s'));
    header('Location:?q=new_finish&r='.$_POST['g_firstname'].'');
    exit();      
  }
?>
        <div class="row">
          <div class="col-lg-12">
            <div class="well bs-component">
              <form action="" method="post" class="form-horizontal">
                <fieldset>
                  <legend>All fields are required</legend>
                  <div class="form-group">
                    <label for="g_pfaagenecode" class="col-lg-2 control-label">PFA Agent Code</label>
                    <div class="col-lg-10">
                      <input type="text" name="g_pfaagenecode" class="form-control" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="g_firstname" class="col-lg-2 control-label">First Name</label>
                    <div class="col-lg-10">
                      <input type="text" name="g_firstname" class="form-control" placeholder="Firstname" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="g_lastname" class="col-lg-2 control-label">Last Name</label>
                    <div class="col-lg-10">
                      <input type="text" name="g_lastname" class="form-control" placeholder="Lastname" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="g_nickname" class="col-lg-2 control-label">Nickname</label>
                    <div class="col-lg-10">
                      <input type="text" name="g_nickname" class="form-control" placeholder="Nickname" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="g_contactno" class="col-lg-2 control-label">Contact No</label>
                    <div class="col-lg-10">
                      <input type="text" name="g_contactno" class="form-control" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="g_email" class="col-lg-2 control-label">Email</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" name="g_email" placeholder="Email" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="g_whouplineqfd" class="col-lg-2 control-label">Who is your Upline QFD?</label>
                    <div class="col-lg-10">
                      <input type="text" name="g_whouplineqfd" class="form-control" required>
                    </div>
                  </div> 
                  <div class="form-group">
                    <label for="g_whodirectupline" class="col-lg-2 control-label">Who is your Direct Upline?</label>
                    <div class="col-lg-10">
                      <input type="text" name="g_whodirectupline" class="form-control" required>
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