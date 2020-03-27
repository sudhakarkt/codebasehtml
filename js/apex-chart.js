/*Bar Chart*/
var options1 = {
  chart: {
    type: "bar",
    height: 700
  },
  series: [
    {
      name: "sales",
      data: [30, 40, 45, 50, 49, 60, 70, 91, 125, 200, 258, 159]
    }
  ],
  xaxis: {
    categories: [
      1991,
      1992,
      1993,
      1994,
      1995,
      1996,
      1997,
      1998,
      1999,
      2000,
      2001,
      2002
    ]
  }
};

var chart1 = new ApexCharts(document.querySelector("#chart1"), options1);
chart1.render();

function generateData(count, yrange) {
  var i = 0;
  var series = [];
  while (i < count) {
    var x = "w" + (i + 1).toString();
    var y =
      Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min;

    series.push({
      x: x,
      y: y
    });
    i++;
  }
  return series;
}

var options2 = {
  series: [
    {
      name: "Metric1",
      data: generateData(10, {
        min: 0,
        max: 90
      })
    },
    {
      name: "Metric2",
      data: generateData(10, {
        min: 0,
        max: 90
      })
    },
    {
      name: "Metric3",
      data: generateData(10, {
        min: 0,
        max: 90
      })
    },
    {
      name: "Metric4",
      data: generateData(10, {
        min: 0,
        max: 90
      })
    },
    {
      name: "Metric5",
      data: generateData(10, {
        min: 0,
        max: 90
      })
    }
  ],
  chart: {
    height: 300,
    type: "heatmap"
  },
  dataLabels: {
    enabled: false
  },
  colors: ["#008FFB"],
  title: {
    text: "HeatMap Chart (Single color)"
  }
};

/*HeatMap Chart*/
var chart2 = new ApexCharts(document.querySelector("#chart2"), options2);
chart2.render();

var options3 = {
  series: [
    {
      name: "Marine Sprite",
      data: [44, 55, 41, 37, 22, 43, 21]
    },
    {
      name: "Striking Calf",
      data: [53, 32, 33, 52, 13, 43, 32]
    },
    {
      name: "Reborn Kid",
      data: [25, 12, 19, 32, 25, 24, 10]
    }
  ],
  chart: {
    type: "bar",
    height: 300,
    stacked: true,
    stackType: "100%"
  },
  plotOptions: {
    bar: {
      horizontal: true
    }
  },
  stroke: {
    width: 1,
    colors: ["#fff"]
  },
  title: {
    text: "100% Stacked Bar"
  },
  xaxis: {
    categories: [2008, 2009, 2010, 2011, 2012]
  },
  tooltip: {
    y: {
      formatter: function(val) {
        return val + "K";
      }
    }
  },
  fill: {
    opacity: 1
  },
  legend: {
    position: "top",
    horizontalAlign: "left",
    offsetX: 40
  }
};

var chart3 = new ApexCharts(document.querySelector("#chart3"), options3);
chart3.render();

var options4 = {
  series: [
    {
      name: "Net Profit",
      data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
    },
    {
      name: "Revenue",
      data: [76, 85, 101, 98, 87, 105, 91, 114, 94]
    },
    {
      name: "Free Cash Flow",
      data: [35, 41, 36, 26, 45, 48, 52, 53, 41]
    }
  ],
  chart: {
    type: "bar",
    height: 310
  },
  plotOptions: {
    bar: {
      horizontal: false,
      columnWidth: "55%",
      endingShape: "rounded"
    }
  },
  dataLabels: {
    enabled: false
  },
  stroke: {
    show: true,
    width: 2,
    colors: ["transparent"]
  },
  xaxis: {
    categories: ["Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct"]
  },
  yaxis: {
    title: {
      text: "$ (thousands)"
    }
  },
  fill: {
    opacity: 1
  },
  tooltip: {
    y: {
      formatter: function(val) {
        return "$ " + val + " thousands";
      }
    }
  }
};

var chart4 = new ApexCharts(document.querySelector("#chart4"), options4);
chart4.render();

/*XYZ STOCK ANALYSIS*/

var options5 = {
  series: [
    {
      name: "Income",
      type: "column",
      data: [1.4, 2, 2.5, 1.5, 2.5, 2.8, 3.8, 4.6]
    },
    {
      name: "Cashflow",
      type: "column",
      data: [1.1, 3, 3.1, 4, 4.1, 4.9, 6.5, 8.5]
    },
    {
      name: "Revenue",
      type: "line",
      data: [20, 29, 37, 36, 44, 45, 50, 58]
    }
  ],
  chart: {
    height: 310,
    type: "line",
    stacked: false
  },
  dataLabels: {
    enabled: false
  },
  stroke: {
    width: [1, 1, 4]
  },
  title: {
    text: "XYZ - Stock Analysis (2009 - 2016)",
    align: "left",
    offsetX: 110
  },
  xaxis: {
    categories: [2009, 2010, 2011, 2012, 2013, 2014, 2015, 2016]
  },
  yaxis: [
    {
      axisTicks: {
        show: true
      },
      axisBorder: {
        show: true,
        color: "#008FFB"
      },
      labels: {
        style: {
          color: "#008FFB"
        }
      },
      title: {
        text: "Income (thousand crores)",
        style: {
          color: "#008FFB"
        }
      },
      tooltip: {
        enabled: true
      }
    },
    {
      seriesName: "Income",
      opposite: true,
      axisTicks: {
        show: true
      },
      axisBorder: {
        show: true,
        color: "#00E396"
      },
      labels: {
        style: {
          color: "#00E396"
        }
      },
      title: {
        text: "Operating Cashflow (thousand crores)",
        style: {
          color: "#00E396"
        }
      }
    },
    {
      seriesName: "Revenue",
      opposite: true,
      axisTicks: {
        show: true
      },
      axisBorder: {
        show: true,
        color: "#FEB019"
      },
      labels: {
        style: {
          color: "#FEB019"
        }
      },
      title: {
        text: "Revenue (thousand crores)",
        style: {
          color: "#FEB019"
        }
      }
    }
  ],
  tooltip: {
    fixed: {
      enabled: true,
      position: "topLeft", // topRight, topLeft, bottomRight, bottomLeft
      offsetY: 30,
      offsetX: 60
    }
  },
  legend: {
    horizontalAlign: "left",
    offsetX: 40
  }
};

var chart5 = new ApexCharts(document.querySelector("#chart5"), options5);
chart5.render();

var options6 = {
  series: [44, 55, 13, 43, 22],
  chart: {
    width: 380,
    type: "pie"
  },
  labels: ["Team A", "Team B", "Team C", "Team D", "Team E"],
  responsive: [
    {
      breakpoint: 480,
      options: {
        chart: {
          width: 200
        },
        legend: {
          position: "bottom"
        }
      }
    }
  ]
};

var chart6 = new ApexCharts(document.querySelector("#chart6"), options6);
chart6.render();

var options7 = {
  series: [
    {
      name: "High - 2013",
      data: [28, 29, 33, 36, 32, 32, 33]
    },
    {
      name: "Low - 2013",
      data: [12, 11, 14, 18, 17, 13, 13]
    }
  ],
  chart: {
    height: 350,
    type: "line",
    dropShadow: {
      enabled: true,
      color: "#000",
      top: 18,
      left: 7,
      blur: 10,
      opacity: 0.2
    },
    toolbar: {
      show: false
    }
  },
  colors: ["#77B6EA", "#545454"],
  dataLabels: {
    enabled: true
  },
  stroke: {
    curve: "smooth"
  },
  title: {
    text: "Average High & Low Temperature",
    align: "left"
  },
  grid: {
    borderColor: "#e7e7e7",
    row: {
      colors: ["#f3f3f3", "transparent"], // takes an array which will be repeated on columns
      opacity: 0.5
    }
  },
  markers: {
    size: 1
  },
  xaxis: {
    categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
    title: {
      text: "Month"
    }
  },
  yaxis: {
    title: {
      text: "Temperature"
    },
    min: 5,
    max: 40
  },
  legend: {
    position: "top",
    horizontalAlign: "right",
    floating: true,
    offsetY: -25,
    offsetX: -5
  }
};

var chart7 = new ApexCharts(document.querySelector("#chart7"), options7);
chart7.render();

var options8 = {
  series: [44, 55, 13, 33],
  chart: {
    width: 390,
    type: "donut"
  },
  dataLabels: {
    enabled: false
  },
  responsive: [
    {
      breakpoint: 480,
      options: {
        chart: {
          width: 200
        },
        legend: {
          show: false
        }
      }
    }
  ],
  legend: {
    position: "top",
    offsetY: 0,
    height: 50
  }
};

var chart8 = new ApexCharts(document.querySelector("#chart8"), options8);
chart8.render();

function appendData() {
  var arr = chart.w.globals.series.slice();
  arr.push(Math.floor(Math.random() * (100 - 1 + 1)) + 1);
  return arr;
}

var options9 = {
	series: [44, 55, 13, 33],
	chart: {
	  width: 390,
	  type: "pie"
	},
	dataLabels: {
	  enabled: false
	},
	labels: ['Team A', 'Team B', 'Team C', 'Team D', 'Team E'],
	responsive: [
	  {
		breakpoint: 480,
		options: {
		  chart: {
			width: 200
		  },
		  legend: {
			show: false
		  }
		}
	  }
	],
	legend: {
	  position: "top",
	  offsetY: 0,
	  height: 50
	}
  };
  
  var chart9 = new ApexCharts(document.querySelector("#chart9"), options9);
  chart9.render();


  $('.main-container').click(function(e) {
	console.log('Clicked');
	MousePointer(e);
  });

function MousePointer(e)  {
	var x = e.clientX;
	var y = e.clientY;
	console.log("X :" + x + "Y :" + y);
}