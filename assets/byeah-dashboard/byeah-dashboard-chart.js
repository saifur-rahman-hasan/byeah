// Donat Chart
function chart_doughnut(selector)
{

	var data = {
	    labels: [ "Male", "Female"],
	    datasets: [{
            data: [300, 150],
            backgroundColor: [ "#273746", "#808B96" ]
	    }]
	};

	var options = {
		title: { display: true, text: 'Chart Title here' },
		cutoutPercentage: 70,
		scaleFontSize: 24,
        legend: { labels: { fontSize: 0 } }
    };

	var chart_ctx 	=	$(`${selector} > canvas`);
	var chart 		=	new Chart(chart_ctx, { type: 'doughnut', data: data, options: options }); 

}

// Horizontal Bar Chart
function chart_horizontal_bar(selector)
{

	var data = {
	    labels: ["5% less then 5", "10%, 10-5", "15%, 10-20", "25%, 20-50", "20%, 50-100", "10%, more than 100"],
	    datasets: [{
            backgroundColor: ["#273746", "#808B96", "#273746", "#808B96", "#273746", "#808B96" ],
            data: [10, 20, 30, 25, 20, 55],
            
	    }]
	};

	var options = {
		title: { display: true, text: 'Chart Title here' },
		legend: { display: false },
		scales: { xAxes: [{ ticks: { beginAtZero:true }, display: false }], yAxes: [{ display: false }] }
    }

	var chart_ctx 	=	$(`${selector} > canvas`);
	var chart 		=	new Chart(chart_ctx, { type: 'horizontalBar', data: data, options: options });
}

// Bar Chart
function chart_bar(selector)
{

	var data = {
	    labels: ["40 Selected Individual Assisment", "20 waiting list", "15 Dropout"],
	    datasets: [{
            backgroundColor: ["#273746", "#808B96", "#273746"],
            data: [70, 60, 70],
	    }]
	};

	var options = {

		title: { display: true, text: 'Chart Title here' },

		legend: { display: false },
		scales: {
	        xAxes: [{
	            ticks: { beginAtZero:true },
	        	display: false,
	        }],
	        yAxes: [{
	        	ticks: { beginAtZero:true },
	            display: false,
	        }]
	    }
    }

	var chart_ctx 	=	$(`${selector} > canvas`);
	var chart 		=	new Chart(chart_ctx, { type: 'bar', data: data, options: options });
}

chart_doughnut('#outreach_generate_report_overall_demographic_chart_gender');
chart_doughnut('#outreach_generate_report_overall_demographic_chart_nid');
chart_horizontal_bar('#outreach_generate_report_overall_business_chart_employees');
chart_doughnut('#outreach_generate_report_overall_business_chart_bankloan');
chart_doughnut('#outreach_generate_report_overall_business_chart_tranning');
chart_bar('#outreach_generate_report_overall_market_visit_chart');
chart_bar('#outreach_generate_report_overall_time_chart');