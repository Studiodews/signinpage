<?php
    include('../../inc/db.php');
    include('../../inc/functions.php');
    $rows = $db->select('SELECT * FROM tblinfo INNER JOIN tblusertype ON tblinfo.user_type_id = tblusertype.type_id ORDER BY info_id DESC', '','');
?>  
    <a class="btn btn-default" target="_blank" rel="noreferrer" href="<?php echo base_url(); ?>templates/print.php?p=all"><span class="glyphicon glyphicon-print"></span>&nbsp;Print All Name Badge</a><br/><br/>
    <table id="userinfo" class="table table-responsive table-striped table-hover">
      <thead>
        <tr>
          <th>#</th>
          <th>Name</th>
          <th>User Type</th>
          <th>Email</th>
          <th>Action</th>
        </tr>
      </thead>
      <tfoot>
          <tr>
              <th>#</th>
              <th>Name</th>
              <th>User Type</th>
              <th>Email</th>
              <th>Action</th>
          </tr>
        </tfoot>
      <tbody>
      <?php
        $cnt = 0;
        foreach($rows as $row):
          $cnt++;
      ?>
        <tr>
          <td><?php echo $cnt; ?></td>
          <td><?php echo $row->firstname; ?></td>
          <td><?php echo $row->user_type_name; ?></td>
          <td><?php echo $row->email; ?></td>
          <td><a target="_blank" rel="noreferrer" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Print Name Badge" data-original-title="Print Name Badge" href="<?php echo base_url(); ?>templates/print.php?p=<?php echo $row->info_id; ?>"><span class="glyphicon glyphicon-print"></span></a>&nbsp;
              <a onclick="getUserDetails('<?php echo $row->info_id; ?>')" class="btn btn-default edit-record" data-toggle="tooltip" data-placement="top" title="Edit" data-original-title="Print Name Badge"><span class="glyphicon glyphicon-edit"></span></a>&nbsp;
              <a onclick="deleteUser('<?php echo $row->info_id; ?>')" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Remove" data-original-title="Print Name Badge"><span class="glyphicon glyphicon-trash"></span></a></td>
        </tr>
      <?php 
        endforeach; 
      ?>
      </tbody>
    </table> 