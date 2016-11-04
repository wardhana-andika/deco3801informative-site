$(document).ready(function(){
	getData();
});

function refresh(){
	getData();
}

function getData() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	  var obj = JSON.parse(xhttp.responseText);
	  
	  //social media clicks
	  generateChart('doughnut', 'pie_social', 'Social Media Clicks', 'Social Media Clicks', [parseInt(obj.clicks[0].fb), parseInt(obj.clicks[0].twitter), parseInt(obj.clicks[0].insta)], ["Facebook","Twitter","Instagram"], ["#FF6384","#36A2EB","#FFCE56"],["purple","purple","purple"]);
	  
	  //site visits
	  generateChart('bar', 'bar_visits', 'Site Visits', 'Site Visits', [parseInt(obj.visits[0].reg), parseInt(obj.visits[0].unique)], ["All Hits","Unique Hits"], ["#FF6384","#36A2EB"],["purple","purple"]);
	  
	  //hits by OS
	  generateChart('pie', 'pie_platform', 'Visitor Operating System', '', [parseInt(obj.hits_by_platform[0].Windows), parseInt(obj.hits_by_platform[0].OSX), parseInt(obj.hits_by_platform[0].Android), parseInt(obj.hits_by_platform[0].iOS), parseInt(obj.hits_by_platform[0].Other)], ["Windows","OSX","Android","iOS","Other"], ["#FF6384","#36A2EB","#FFCE56","green","blue"],["purple","purple","purple","purple","purple"]);
	  
	  //hits by browser
	  generateChart('doughnut', 'pie_browser', 'Visitor Browser', '', [parseInt(obj.hits_by_browser[0]['Internet Explorer']), parseInt(obj.hits_by_browser[0]['Mozilla Firefox']), parseInt(obj.hits_by_browser[0]['Google Chrome']), parseInt(obj.hits_by_browser[0].Safari), parseInt(obj.hits_by_browser[0].Opera), parseInt(obj.hits_by_browser[0].Other)], ["Internet Explorer","Mozilla Firefox","Google Chrome","Safari", "Opera", "Other"], ["#FF6384","#36A2EB","#FFCE56","green","blue", "pink"],["purple","purple","purple","purple","purple","purple"]);
	  
	  //emails and comments
	  generateChart('bar', 'bar_comments_emails', 'Emails and Comments', 'Emails and Comments', [parseInt(obj.interest[0].email), parseInt(obj.interest[0].comment)], ["Emails","Comments"], ["#FF6384","#36A2EB"],["purple","purple"]);
	  
	  //mobile device visits
	  generateChart('doughnut', 'pie_mobile', 'Mobile Device Visits', '', [parseInt(obj.hits_by_mobile[0].yes), parseInt(obj.hits_by_mobile[0].no)], ["On Mobile","Not on Mobile"], ["#FF6384","#36A2EB"],["purple", "purple"]);
	  
	  //hits by hour
	  generateChart('bar', 'bar_hits_by_hour', 'Site Visits by Hour', 'Site Visits', [parseInt(obj.hits_by_hour[0]['0']), parseInt(obj.hits_by_hour[0]['1']), parseInt(obj.hits_by_hour[0]['2']), parseInt(obj.hits_by_hour[0]['3']), parseInt(obj.hits_by_hour[0]['4']), parseInt(obj.hits_by_hour[0]['5']), parseInt(obj.hits_by_hour[0]['6']), parseInt(obj.hits_by_hour[0]['7']), parseInt(obj.hits_by_hour[0]['8']), parseInt(obj.hits_by_hour[0]['9']), parseInt(obj.hits_by_hour[0]['10']), parseInt(obj.hits_by_hour[0]['11']), parseInt(obj.hits_by_hour[0]['12']), parseInt(obj.hits_by_hour[0]['13']), parseInt(obj.hits_by_hour[0]['14']), parseInt(obj.hits_by_hour[0]['15']), parseInt(obj.hits_by_hour[0]['16']), parseInt(obj.hits_by_hour[0]['17']), parseInt(obj.hits_by_hour[0]['18']), parseInt(obj.hits_by_hour[0]['19']), parseInt(obj.hits_by_hour[0]['20']), parseInt(obj.hits_by_hour[0]['21']), parseInt(obj.hits_by_hour[0]['22']), parseInt(obj.hits_by_hour[0]['23'])], ["12 AM","1 AM","2 AM","3 AM","4 AM","5 AM","6 AM","7 AM","8 AM","9 AM","10 AM","11 AM","12 PM","1 PM","2 PM","3 PM","4 PM","5 PM","6 PM","7 PM","8 PM","9 PM","10 PM","11 PM"], ["#509BFF","#509BFF","#509BFF","#509BFF","#509BFF","#509BFF","#509BFF","#509BFF","#509BFF","#509BFF","#509BFF","#509BFF","#509BFF","#509BFF","#509BFF","#509BFF","#509BFF","#509BFF","#509BFF","#509BFF","#509BFF","#509BFF","#509BFF","#509BFF"],["#4863E8","#4863E8","#4863E8","#4863E8","#4863E8","#4863E8","#4863E8","#4863E8","#4863E8","#4863E8","#4863E8","#4863E8","#4863E8","#4863E8","#4863E8","#4863E8","#4863E8","#4863E8","#4863E8","#4863E8","#4863E8","#4863E8","#4863E8","#4863E8"]);
	  
	  //comments by hour
	  generateChart('bar', 'bar_comments_by_hour', 'Comments by Hour', 'Comments', [parseInt(obj.comments_by_hour[0]['0']), parseInt(obj.comments_by_hour[0]['1']), parseInt(obj.comments_by_hour[0]['2']), parseInt(obj.comments_by_hour[0]['3']), parseInt(obj.comments_by_hour[0]['4']), parseInt(obj.comments_by_hour[0]['5']), parseInt(obj.comments_by_hour[0]['6']), parseInt(obj.comments_by_hour[0]['7']), parseInt(obj.comments_by_hour[0]['8']), parseInt(obj.comments_by_hour[0]['9']), parseInt(obj.comments_by_hour[0]['10']), parseInt(obj.comments_by_hour[0]['11']), parseInt(obj.comments_by_hour[0]['12']), parseInt(obj.comments_by_hour[0]['13']), parseInt(obj.comments_by_hour[0]['14']), parseInt(obj.comments_by_hour[0]['15']), parseInt(obj.comments_by_hour[0]['16']), parseInt(obj.comments_by_hour[0]['17']), parseInt(obj.comments_by_hour[0]['18']), parseInt(obj.comments_by_hour[0]['19']), parseInt(obj.comments_by_hour[0]['20']), parseInt(obj.comments_by_hour[0]['21']), parseInt(obj.comments_by_hour[0]['22']), parseInt(obj.comments_by_hour[0]['23'])], ["12 AM","1 AM","2 AM","3 AM","4 AM","5 AM","6 AM","7 AM","8 AM","9 AM","10 AM","11 AM","12 PM","1 PM","2 PM","3 PM","4 PM","5 PM","6 PM","7 PM","8 PM","9 PM","10 PM","11 PM"], ["#509BFF","#509BFF","#509BFF","#509BFF","#509BFF","#509BFF","#509BFF","#509BFF","#509BFF","#509BFF","#509BFF","#509BFF","#509BFF","#509BFF","#509BFF","#509BFF","#509BFF","#509BFF","#509BFF","#509BFF","#509BFF","#509BFF","#509BFF","#509BFF"],["#4863E8","#4863E8","#4863E8","#4863E8","#4863E8","#4863E8","#4863E8","#4863E8","#4863E8","#4863E8","#4863E8","#4863E8","#4863E8","#4863E8","#4863E8","#4863E8","#4863E8","#4863E8","#4863E8","#4863E8","#4863E8","#4863E8","#4863E8","#4863E8"]);
	  
	  //signups by hour
	  generateChart('bar', 'bar_signups_by_hour', 'Email Signups by Hour', 'Email Signups', [parseInt(obj.signups_by_hour[0]['0']), parseInt(obj.signups_by_hour[0]['1']), parseInt(obj.signups_by_hour[0]['2']), parseInt(obj.signups_by_hour[0]['3']), parseInt(obj.signups_by_hour[0]['4']), parseInt(obj.signups_by_hour[0]['5']), parseInt(obj.signups_by_hour[0]['6']), parseInt(obj.signups_by_hour[0]['7']), parseInt(obj.signups_by_hour[0]['8']), parseInt(obj.signups_by_hour[0]['9']), parseInt(obj.signups_by_hour[0]['10']), parseInt(obj.signups_by_hour[0]['11']), parseInt(obj.signups_by_hour[0]['12']), parseInt(obj.signups_by_hour[0]['13']), parseInt(obj.signups_by_hour[0]['14']), parseInt(obj.signups_by_hour[0]['15']), parseInt(obj.signups_by_hour[0]['16']), parseInt(obj.signups_by_hour[0]['17']), parseInt(obj.signups_by_hour[0]['18']), parseInt(obj.signups_by_hour[0]['19']), parseInt(obj.signups_by_hour[0]['20']), parseInt(obj.signups_by_hour[0]['21']), parseInt(obj.signups_by_hour[0]['22']), parseInt(obj.signups_by_hour[0]['23'])], ["12 AM","1 AM","2 AM","3 AM","4 AM","5 AM","6 AM","7 AM","8 AM","9 AM","10 AM","11 AM","12 PM","1 PM","2 PM","3 PM","4 PM","5 PM","6 PM","7 PM","8 PM","9 PM","10 PM","11 PM"], ["#509BFF","#509BFF","#509BFF","#509BFF","#509BFF","#509BFF","#509BFF","#509BFF","#509BFF","#509BFF","#509BFF","#509BFF","#509BFF","#509BFF","#509BFF","#509BFF","#509BFF","#509BFF","#509BFF","#509BFF","#509BFF","#509BFF","#509BFF","#509BFF"],["#4863E8","#4863E8","#4863E8","#4863E8","#4863E8","#4863E8","#4863E8","#4863E8","#4863E8","#4863E8","#4863E8","#4863E8","#4863E8","#4863E8","#4863E8","#4863E8","#4863E8","#4863E8","#4863E8","#4863E8","#4863E8","#4863E8","#4863E8","#4863E8"]);

	//$("data-rows").append("<td>hello</td><td>1</td>");
	var ip_data = obj.hits_by_ip[0];
	var table = document.getElementById("data-rows");
	var table_data = "";
	
	var result = ip_data;
	$.each(result, function(k, v) {
		//display the key and value pair
		
		table_data += "<tr>";
		table_data += "<td>";
		table_data += k;
		table_data += "</td>";
		table_data += "<td>";
		table_data += v;
		table_data += "</td>";
		table_data += "</tr>";
		
	});
	
	table.innerHTML=table_data;
	
	

	}
  };
  xhttp.open("GET", "scripts/statsJson.php", true);
  xhttp.send();
}

function generateChart(chartType, targetCanvasId, title, dataSetTitle, dataArray, labelArray, bgColorArray, hoverColorArray){
	
	//document.getElementById(targetCanvasId).style.height = "400px";
	//document.getElementById(targetCanvasId).style.width = "800px";
	var ctx = document.getElementById(targetCanvasId);
	var thisCanvas = ctx.getContext('2d');
	thisCanvas.clearRect(0, 0, thisCanvas.width, thisCanvas.height);
	var input = {
    labels: labelArray,
    datasets: [
        {
			label: dataSetTitle,
            data: dataArray,
            backgroundColor: bgColorArray,
            hoverBackgroundColor: hoverColorArray
        }]
	};
	var myChart = new Chart(ctx, {
		type: chartType,
		data: input,
		options: {
			responsive: true,
			maintainAspectRatio: false,
			title: {
				display: true,
				text: title,
				fontSize: 30,		
			},
			scales:{
					yAxes: [{
						ticks: {
							min: 0
						}
					}]
			},
			legend: {
				fullWidth: true,
				position: 'bottom',
				labels: {
					fontSize: 12,
					boxWidth: 10,
					padding: 5,
					usePointStyle: false
				}
			},
			tooltips: {
				bodyFontSize: 12,
				callbacks: {
				    label: function(tooltipItem, data) {
                    var allData = data.datasets[tooltipItem.datasetIndex].data;
                    var tooltipLabel = data.labels[tooltipItem.index];
                    var tooltipData = allData[tooltipItem.index];
                    var sum = 0;
                    for (var i in allData) {
						//zero counts will not show up on json and will be parsed as null
						if(!isNaN(allData[i])){
							sum += allData[i];
						}
                    }
                    var tooltipPercentage = Math.round(((tooltipData/sum) * 100)*100)/100;
                    return tooltipLabel + ': ' + tooltipData + ' (' + tooltipPercentage + '%)';
				}
			  }
			}
		}
	});

	//IE and safari compatibility 
    var ua = window.navigator.userAgent;
    var msie = ua.indexOf("MSIE ");
	var msie11 = ua.indexOf("Trident/");
	var safari = ua.indexOf("Safari/");
	var chrome = ua.indexOf("Chrome/");
	var edge = ua.indexOf("Edge/");

    if (chrome > 0 || (!(safari >= 0 || edge >= 0 || msie >= 0 || msie11 >= 0)))  {
		//buggy on safari and IE, looks nice otherwise
		document.getElementById(targetCanvasId).style.height = "337px";
		document.getElementById(targetCanvasId).style.width = "675px";
    }
}




