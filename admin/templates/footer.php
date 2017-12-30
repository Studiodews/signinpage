<div <?php 
		if( $detect->isTablet() ) {
			if (isset($_GET["l"])) {
				if ($_GET["l"] != "t" && $_GET["l"] != "as") {
					echo 'id="footer"';
				} else {
					echo 'id="footer-bottom"';
				}
			}
		} else {
			echo 'id="footer-bottom"';
		}
	?> class="footer-bottom">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<div class="design">
					<p>Current Date and Time : <span id="displayMoment"	></span></p>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.14/moment-timezone-with-data.min.js"></script>
<script type="text/javascript" src="../assets/js/script-admin.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		// DataTable
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

		// Moment JS
        var update = function(){
        			var tz = moment.tz.guess();
					console.info('Timezone: ' + tz);
					moment.tz.setDefault(tz);
					// moment.tz.setDefault('America/Los_Angeles');
					var NowMoment = moment();
					var eDisplayMoment = document.getElementById('displayMoment');
					eDisplayMoment.innerHTML = NowMoment.format('MMM D, YYYY hh:mm a');
                 };
        update();
        setInterval(update, 1000);		
	});
</script>
</body>
</html>