var countDownDate = new Date("Oct 10, 2021 08:00:00").getTime();
var x = setInterval(function() {
    var now = new Date().getTime();
    var distance = countDownDate - now;
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    document.getElementById("countDown").innerHTML = "<b style='font-size:120%;'>2021 ACL Count Down: </b>" + days + " Days " + hours + " Hours "
    + minutes + " Minutes " + seconds + " Seconds";
    if (distance < 0) {
    clearInterval(x);
    document.getElementById("countDown").innerHTML = "ACL IS ON NOW - GO GO GO!";
    }
}, 1000);