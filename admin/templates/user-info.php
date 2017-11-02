<?php
    $rows = $db->select('SELECT * FROM tblinfo INNER JOIN tblusertype ON tblinfo.user_type_id = tblusertype.id', '','');
?>  
    <table id="userinfo" class="table table-striped table-hover" width="100%">
      <thead>
        <tr>
          <th>#</th>
          <th>Name</th>
          <th>User Type</th>
          <th>Email</th>
        </tr>
      </thead>
      <tfoot>
          <tr>
              <th>#</th>
              <th>Name</th>
              <th>User Type</th>
              <th>Email</th>
          </tr>
        </tfoot>
      <tbody>
      <?php
        foreach($rows as $row):
      ?>
        <tr>
          <td>#</td>
          <td><?php echo $row->firstname; ?></td>
          <td><?php echo $row->user_type_name; ?></td>
          <td><?php echo $row->email; ?></td>
        </tr>
      <?php endforeach; ?>
      </tbody>
    </table> 