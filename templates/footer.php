<div class="footer-bottom">
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
<script type="text/javascript" src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="https://bootswatch.com/3/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.14/moment-timezone-with-data.min.js"></script>
<script>
      $(document).ready(function(){
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