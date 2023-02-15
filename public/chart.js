const patientChart = document.getElementById('patientChart');
const patientBar = document.getElementById('patientBar');

new Chart(patientChart, {
  type: 'line',
  data: {
    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'August'],
    datasets: [{
      label: 'Graph of patient per month',
      data: [12, 19, 3, 5, 2, 3],
      borderWidth: 1
    }]
  },
  options: {

    responsive: true
  }
});



new Chart(patientBar, {
  type: 'bar',
  data: {
    labels: ['Jan', 'Feb', 'Mar', ' Apr', 'May'],
    datasets: [{
      label: 'Total of patient per month',
      data: [19, 12, 6, 8,15],
      backgroundColor: [
        'rgba(255, 99, 132, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(0, 209, 115,1)',
      ]
    }]
  },
  options: {
    responsive: true
  }
});


