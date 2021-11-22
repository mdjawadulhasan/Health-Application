addBtn = document.getElementsByClassName('btnadd')[0];
subtractBtn = document.getElementsByClassName('btnsubtract')[0];
number = document.getElementById('number1');

var counter = document.querySelector('#fnumber1').value;

document.querySelector('#fnumber1').value = counter;

addBtn.addEventListener("click", function() {

    if (counter < 300) {
        counter++;
    }
    number.innerHTML = counter;
    document.querySelector('#fnumber1').value = counter;


});
subtractBtn.addEventListener("click", function() {

    if (counter != 0) {
        counter--;
    }
    number.innerHTML = counter;
    document.querySelector('#fnumber1').value = counter;

});

addBtn2 = document.getElementsByClassName('btnadd')[1];
subtractBtn2 = document.getElementsByClassName('btnsubtract')[1];
number2 = document.getElementById('number2');

var counter2 = document.querySelector('#fnumber2').value;

document.querySelector('#fnumber2').value = counter2;

addBtn2.addEventListener("click", function() {

    if (counter2 < 300) {
        counter2++;
    }
    number2.innerHTML = counter2;
    document.querySelector('#fnumber2').value = counter2;


});
subtractBtn2.addEventListener("click", function() {

    if (counter2 != 0) {
        counter2--;
    }
    number2.innerHTML = counter2;
    document.querySelector('#fnumber2').value = counter2;

});



addBtn3 = document.getElementsByClassName('btnadd')[2];
subtractBtn3 = document.getElementsByClassName('btnsubtract')[2];
number3 = document.getElementById('number3');

var counter3 = document.querySelector('#fnumber3').value;

document.querySelector('#fnumber3').value = counter3;

addBtn3.addEventListener("click", function() {

    if (counter3 < 300) {
        counter3++;
    }
    number3.innerHTML = counter3;
    document.querySelector('#fnumber3').value = counter3;


});
subtractBtn3.addEventListener("click", function() {

    if (counter3 != 0) {
        counter3--;
    }
    number3.innerHTML = counter3;
    document.querySelector('#fnumber3').value = counter3;

});



// $(document).ready(function() {
//     $.ajax({
//         url: "http://localhost/phawa/PHP/Patient/watergrapgh.php",
//         method: "GET",
//         success: function(data) {
//             console.log(data);
//             var user = [];
//             var watercounter = [];

//             for (var i in data) {
//                 user.push(data[i].crnt_date);
//                 watercounter.push(data[i].watercounter);
//             }


//             var chartdata = {
//                 labels: user,
//                 datasets: [{
//                     label: 'Water Glass',
//                     backgroundColor: 'rgb(28, 164, 202)',
//                     borderColor: '#fff',
//                     hoverBackgroundColor: 'rgb(15, 91, 112)',
//                     hoverBorderColor: 'rgb(240, 128, 15)',
//                     data: watercounter
//                 }]
//             };



//             var ctx = $("#mycanvas");

//             var barGraph = new Chart(ctx, {
//                 type: 'bar',
//                 data: chartdata,
//                 options: {
//                     scales: {
//                         yAxes: [{
//                             ticks: {
//                                 beginAtZero: true
//                             }
//                         }]
//                     }
//                 }

//             });
//         },
//         error: function(data) {
//             console.log(data);
//         }
//     });
// });