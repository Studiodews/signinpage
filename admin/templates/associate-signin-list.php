<?php
    include('../../inc/db.php');
    include('../../inc/functions.php');
?>  
    <table id="userinfo" class="table table-striped table-hover" width="100%">
      <thead>
        <tr>
          <th>#</th>
          <th>PFA Agent Code</th>
          <th>Name</th>
          <th>Sign in Date</th>
          <th>Email</th>
          <th>Action</th>
        </tr>
      </thead>
      <tfoot>
          <tr>
              <th>#</th>
              <th>PFA Agent Code</th>
              <th>Name</th>
              <th>Sign in Date</th>
              <th>Email</th>
              <th>Action</th>
          </tr>
        </tfoot>
      <tbody>
      <?php
        $rows_selector = $db->select('SELECT * FROM tblassociatesignin ORDER BY assoc_signin_id DESC', '','');
        $cnt = 0;
        foreach($rows_selector as $row_s):
        $agent_code = $row_s->pfa_agent_code;
        $rows = $db->select("SELECT * FROM tblinfo WHERE pfa_agent_code = ?", array("pfa_agent_code" => "$agent_code"), array("%s"));
        $cnt++;
      ?>
      <?php foreach($rows as $row): ?>  
        <tr>   
          <td><?php echo $cnt; ?></td>
          <td><?php echo $agent_code; ?></td>
          <td><?php echo $row->firstname; ?></td>
          <td><?php echo date("d/m/Y",strtotime($row_s->sign_in_date)); ?></td>
          <td><?php echo $row->email; ?></td>
          <td>
              <a target="_blank" rel="noreferrer" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Print Name Badge" data-original-title="Print Name Badge" href="<?php echo base_url(); ?>templates/print.php?p=<?php echo $row->info_id; ?>"><span class="glyphicon glyphicon-print"></span></a></td>
        </tr>
        <?php endforeach;  ?>
      <?php 
        endforeach; 
      ?>
      </tbody>
    </table> 