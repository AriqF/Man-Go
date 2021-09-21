/* globals Chart:false, feather:false */

(function () {
    'use strict'
  
    feather.replace({ 'aria-hidden': 'true' })
    // Graphs
    var ctx = document.getElementById('XPChart')
    // eslint-disable-next-line no-unused-vars
    var XPChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: ['M','Tu','W','Th','F','Sa','Su'],
        datasets: [{
          label: 'XP Harian Saya',
          data: [30, 20, 80, 100, 60, 30, 0],
          lineTension: 0,
          backgroundColor: 'transparent',
          borderColor: '#007bff',
          borderWidth: 4,
          pointBackgroundColor: '#007bff'
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: false
            }
          }]
        },
        legend: {
          display: false
        }
      }
    })


  })()
  