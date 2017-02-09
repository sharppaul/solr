const stats0 = document.getElementById("stats0");

var labelArray = [];
var powerArray = [];
//generate random data
function generateData(){
	labelArray = [];
	powerArray = [];
	for(var i = 30; i > 0; i--){
		labelArray.push(String(Math.floor(i/6))+":"+String(i%6)+"0 ago");
		powerArray.push(100-grafdata[i]);
	}
	console.log(labelArray);
	console.log(powerArray);
}

//chart js settings, just fill labelArray and powerArray and call these settings in the new Chart(); shit
function getData(){
	return {
		labels: labelArray,
		datasets: [
			{
				label: "Generated Power",
				lineTension: 0.2,
				backgroundColor: "rgba(192,192,192,0.4)",
				borderColor: "rgba(250,250,250,0.8)",
				borderCapStyle: 'butt',
				borderDash: [],
				borderDashOffset: 0.0,
				borderJoinStyle: 'miter',
				pointBorderColor: "rgba(250,250,250,0.8)",
				pointBackgroundColor: "#fff",
				pointBorderWidth: 1,
				pointHoverRadius: 5,
				pointHoverBackgroundColor: "rgba(75,192,192,1)",
				pointHoverBorderColor: "rgba(220,220,220,1)",
				pointHoverBorderWidth: 2,
				pointRadius: 1,
				pointHitRadius: 10,
				data: powerArray,
				spanGaps: true,
			}
		]
	};
}
function getOptions(){
	return { 
		legend: {labels:{fontColor:"white", fontSize: 18}},
		scales: {
			yAxes: [{
				ticks: {
					fontColor: "white",
					fontSize: 14,
					max: 100,
					beginAtZero: true
				}
			}],
			xAxes: [{
				ticks: {
					fontColor: "white",
					fontSize: 14
				}
			}]
		}
	}
}


generateData();
console.log(getData());
let lineChart0 = new Chart(stats0, {
	type: 'line',
	data: getData(),
	options: getOptions()
});
