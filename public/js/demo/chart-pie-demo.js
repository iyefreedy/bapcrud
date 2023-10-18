// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ["Mitsubishi Corporation", "Nikken Corporation", "PT.Kawan Lama", "PT. Cakrawala Inti Nusantara"],
    datasets: [{
      data: [45, 35, 19, 10],
      backgroundColor: ['#1F900D', '#24A810', '#6BEF57','#9DF58F'],
      hoverBackgroundColor: ['#F76E6C', '#8CF76C', '#6CBAF7'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 15,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 0,
  },
});
