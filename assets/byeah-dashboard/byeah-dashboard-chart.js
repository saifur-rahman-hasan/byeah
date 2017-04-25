// Donat Chart
function chart_doughnut(selector)
{

	var data = {
	    labels: [ "Red", "Blue", "Yellow" ],
	    datasets: [{
            data: [300, 150],
            backgroundColor: [ "#273746", "#808B96", ]
	    }]
	};

	var options = {
		cutoutPercentage: 90,
        animation:{ animateScale:true }
    };

	var chart_ctx 	=	$(`${selector} > canvas`);
	var chart 		=	new Chart(chart_ctx, { type: 'doughnut', data: data, options: options }); 

}

chart_doughnut('#outreach_generate_report_overall_demographic_chart');