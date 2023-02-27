function getServerTime() {
    return $.ajax({ async: false }).getResponseHeader("Date");
}
// function realtimeClock() {
//     var rtClock = new Date();

//     var hours = rtClock.getHours();
//     var minutes = rtClock.getMinutes();
//     var seconds = rtClock.getSeconds();

//     hours = ("0" + hours).slice(-2);
//     minutes = ("0" + minutes).slice(-2);
//     seconds = ("0" + seconds).slice(-2);

//     document.getElementById("clock").innerHTML =
//         hours + ":" + minutes + ":" + seconds;
// }

// setTimeout(realtimeClock, 500);

function Watch() {
    var hours = document.querySelector("#hours");
    var minutes = document.querySelector("#minutes");
    var seconds = document.querySelector("#seconds");

    var getHours = new Date().getHours();
    var getMinutes = new Date().getMinutes();
    var getSeconds = new Date().getSeconds();

    hours.innerHTML = getHours;
    minutes.innerHTML = getMinutes;
    seconds.innerHTML = getSeconds;
}

const isWatch = setInterval(Watch, 1);
