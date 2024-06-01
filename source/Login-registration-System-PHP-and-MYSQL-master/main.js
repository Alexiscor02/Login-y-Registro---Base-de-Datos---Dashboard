
const getOptionChart2=()=>{
  return   {
    xAxis: {
      type: 'category',
      data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
    },
    yAxis: {
      type: 'value'
    },
    series: [
      {
        data: [120, 200, 150, 80, 70, 110, 130],
        type: 'bar'
      }
    ]
  };
};


const initCharts=()=>{
    
    const chart2=echarts.init(document.getElementById("chart2"));

  
    chart2.setOption(getOptionChart2());
};

window.addEventListener("load",()=>{
    initCharts();
});