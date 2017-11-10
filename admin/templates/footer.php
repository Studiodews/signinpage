<div class="footer-bottom">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<div class="design">
					<p>Current Date and Time : <?php echo date('m/d/Y'); ?></p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<div class="copyright">
					 © 2017, Premier Financial Alliance, All rights reserved
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript" src="https://bootswatch.com/3/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.4.2/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.4.2/js/buttons.flash.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.4.2/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.4.2/js/buttons.print.min.js"></script>
<script type="text/javascript" src="../assets/js/script-admin.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#userinfo').DataTable({				
			responsive: true,
			dom: 'Bfrtip',
			buttons: [
				{
	                extend: 'copyHtml5',
	                exportOptions: {
	                    columns: [ 1, 2, 3 ]
	                }
	            },
	            {
	                extend: 'excelHtml5',
	                exportOptions: {
	                    columns: [ 0, 1, 2, 3 ]
	                }
	            },
	            {
	                extend: 'pdfHtml5',
	                exportOptions: {
	                    columns: [ 0, 1, 2, 3 ]
	                }
	            },
	            {
	                extend: 'csvHtml5',
	                exportOptions: {
	                    columns: [ 0, 1, 2, 3 ]
	                }
	            },
	            {
	                extend: 'print',
	                exportOptions: {
	                    columns: [ 1, 2, 3 ]
	                }
	            },			            
			        ]	
		});
	});
</script>
</body>
</html>