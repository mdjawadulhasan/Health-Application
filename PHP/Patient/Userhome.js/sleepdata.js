var counter2 = document.querySelector('#fnumber').value;
if (counter2 > 5) {
    document.querySelector('.counterbox').style.color = "#16a085";
    // document.querySelector("img").src = "../../Images/Slee2.svg";
    // document.querySelector("img").style.height = "300px";
    // document.querySelector("img").style.width = "300px";
} else {
    document.querySelector('.counterbox').style.color = "tomato";
    // document.querySelector("img").src = "../../Images/Sleep.svg";
}



addBtn = document.getElementsByClassName('btnadd')[0];
subtractBtn = document.getElementsByClassName('btnsubtract')[0];
setbtn = document.getElementsByClassName('btnset')[0];
number = document.getElementById('number');

var counter = document.querySelector('#fnumber').value;

document.querySelector('#fnumber').value = counter;

function check() {
    if (counter > 5) {
        document.querySelector('.counterbox').style.color = "#16a085";
        // document.querySelector("img").src = "../../Images/Slee2.svg";
        // document.querySelector("img").style.height = "500px";
        // document.querySelector("img").style.width = "500px";
    } else {
        document.querySelector('.counterbox').style.color = "tomato";
        // document.querySelector("img").src = "../../Images/Sleep.svg";
    }
}




addBtn.addEventListener("click", function() {

    if (counter < 24) {
        counter++;
    }
    check();
    number.innerHTML = counter;
    document.querySelector('#fnumber').value = counter;


});
subtractBtn.addEventListener("click", function() {

    if (counter != 0) {
        counter--;
    }
    check();
    number.innerHTML = counter;
    document.querySelector('#fnumber').value = counter;

});