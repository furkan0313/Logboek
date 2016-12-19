var randomScalingFactor = function(){ return Math.round(Math.random()*1000)};

var lineChartData = {
    labels : ["January","February","March","April","May","June","July"],
    datasets : [
        {
            label: "My First dataset",
            fillColor : "rgba(86,188,205,0.5)",
            strokeColor : "rgba(220,220,220,1)",
            pointColor : "rgba(220,220,220,1)",
            pointStrokeColor : "#fff",
            pointHighlightFill : "#fff",
            pointHighlightStroke : "rgba(220,220,220,1)",
            data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
        },
    ]

}

var barChartData = {
    labels : ["January","February","March","April","May","June","July"],
    datasets : [
        {
            fillColor : "rgba(197,205,45,0.5)",
            strokeColor : "rgba(197,205,45,0.8)",
            highlightFill: "rgba(197,205,45,0.75)",
            highlightStroke: "rgba(197,205,45,1.0)",
            data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
        },
        {
            fillColor : "rgba(122, 95, 166, 0.5)",
            strokeColor : "rgba(122, 95, 166, 0.8)",
            highlightFill : "rgba(122, 95, 166, 0.75)",
            highlightStroke : "rgba(122, 95, 166, 1.0)",
            data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
        }
    ]

}

var pieData = [
    {
        value: 300,
        color:"#56BCCD",
        highlight: "#56BCCD",
        label: "Blue"
    },
    {
        value: 50,
        color: "#ffb53e",
        highlight: "#fac878",
        label: "Orange"
    },
    {
        value: 100,
        color: "#1ebfae",
        highlight: "#3cdfce",
        label: "Teal"
    },
    {
        value: 120,
        color: "#f9243f",
        highlight: "#f6495f",
        label: "Red"
    }

];

var doughnutData = [
    {
        value: 300,
        color:"#30a5ff",
        highlight: "#62b9fb",
        label: "Blue"
    },
    {
        value: 50,
        color: "#ffb53e",
        highlight: "#fac878",
        label: "Orange"
    },
    {
        value: 100,
        color: "#1ebfae",
        highlight: "#3cdfce",
        label: "Teal"
    },
    {
        value: 120,
        color: "#f9243f",
        highlight: "#f6495f",
        label: "Red"
    }

];

window.onload = function(){
    var chart1 = document.getElementById("line-chart").getContext("2d");
    window.myLine = new Chart(chart1).Line(lineChartData, {
        responsive: true
    });
    var chart2 = document.getElementById("bar-chart").getContext("2d");
    window.myBar = new Chart(chart2).Bar(barChartData, {
        responsive : true
    });
    var chart3 = document.getElementById("doughnut-chart").getContext("2d");
    window.myDoughnut = new Chart(chart3).Doughnut(doughnutData, {responsive : true
    });
    var chart4 = document.getElementById("pie-chart").getContext("2d");
    window.myPie = new Chart(chart4).Pie(pieData, {responsive : true
    });

};