$(document).ready(function() {
    $.ajax({
        url: "http://localhost/phawa/PHP/Admin/Userdata.php",
        method: "GET",
        success: function(data) {
            console.log(data);
            var user = [];
            var ptage = [];

            for (var i in data) {
                user.push(data[i].crnt_date);
                ptage.push(data[i].ptage);
            }


            var chartdata = {
                labels: user,
                datasets: [{
                    label: 'Age',
                    backgroundColor: 'rgb(28, 164, 202)',
                    borderColor: '#fff',
                    hoverBackgroundColor: 'rgb(15, 91, 112)',
                    hoverBorderColor: 'rgb(240, 128, 15)',
                    data: ptage
                }]
            };



            var ctx = $("#mycanvas");

            var barGraph = new Chart(ctx, {
                type: 'pie',
                data: chartdata,
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }

            });
        },
        error: function(data) {
            console.log(data);
        }
    });
});