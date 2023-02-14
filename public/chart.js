
var sampleChartClass;
(function ($) {
  $(document).ready(function () {

    // for test purpose

    // console.log(totalSample);
    var labels = Object.keys(totalSample)
    // console.log(labels);
    var data = Object.values(totalSample)
    // console.log(data);

    var ctx = document.getElementById('myChart');
    sampleChartClass.ChartData(ctx, 'bar', labels, data)

    // var abc = document.getElementById('myPieChart');
    // sampleChartClass.ChartData(abc, 'pie')

  });
  sampleChartClass = {
    ChartData: function (ctx, type, labels, data) {

      new Chart(ctx, {
        type: type,
        data: {
          labels: labels,
          datasets: [{
            label: '# of Votes',
            data: data,
            borderWidth: 1
          }]
        },
        options: {
          scales: {
            y: {
              beginAtZero: true
            }
          }
        }
      });
    }

  }
})(jQuery);

