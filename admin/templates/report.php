<?php 
	include('../../inc/db.php'); 
	$year = date('Y');	
	for ($i=1; $i < 13; $i++) { 
		$rows_guest = $db->select("SELECT user_type_id, COUNT(info_id) as guest_count, date_register FROM tblinfo WHERE user_type_id = 1 AND YEAR(date_register) = $year AND MONTH(date_register) = $i", '','');
			foreach($rows_guest as $rg) {
				$data_guest[] = "[$rg->guest_count]";
			}	

		$rows_assoc = $db->select("SELECT user_type_id, COUNT(info_id) as assoc_count, date_register  FROM tblinfo WHERE user_type_id = 2 AND YEAR(date_register) = $year AND MONTH(date_register) = $i", '','');
		foreach($rows_assoc as $ra) {
			$data_assoc[] = "[$ra->assoc_count]";
		}		
	}
?>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

<script type="text/javascript">
Highcharts.chart('container', {
    chart: {
        type: 'line'
    },
    title: {
        text: 'Sign In Status For <?php echo $year; ?>'
    },
    xAxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
    },
    yAxis: {
        title: {
            text: 'Number'
        }
    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: false
        }
    },
    series: [{
        name: 'Guest',
        data: [<?php echo join($data_guest, ',') ?>]
    }, {
        name: 'Associate',
        data: [<?php echo join($data_assoc, ',') ?>]
    }],
    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                legend: {
                    align: 'center',
                    verticalAlign: 'bottom',
                    layout: 'horizontal'
                },
                yAxis: {
                    labels: {
                        align: 'left',
                        x: 0,
                        y: -5
                    },
                    title: {
                        text: null
                    }
                },
                subtitle: {
                    text: null
                },
                credits: {
                    enabled: false
                }
            }
        }]
    }
});	
</script>