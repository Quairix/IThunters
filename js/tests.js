var qlist = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11];
var summ = 0;
function sled_vopr(check) {
    if (qlist.length > 0) {
        var next = true;
        qlist.forEach(function (i) {
            if (document.getElementById('question' + i).style.display == "block" && next) {
                next = false;
                document.getElementById('question' + i).style.display = "none";
                var n = i + 1 == 12 ? qlist[0] : i + 1;
                document.getElementById('qnum').textContent = n;

                document.getElementById('question' + (n)).style.display = "block";
                if (check) {
                    qlist.splice(qlist.indexOf(i), 1);
                    document.getElementById('prStatus').value = ((11 - qlist.length)/11)*100 ;
                    document.getElementById('hstatus').textContent = Math.round(((11 - qlist.length) / 11) * 100) + '%';
                    if (i != 11) {
                        var radios = document.getElementsByName('q' + i);
                        for (var i = 0, length = radios.length; i < length; i++) {
                            if (radios[i].checked) {

                                if (radios[i].value == dict[i])
                                    summ += 1;
                                break;
                            }
                        }
                    }
                    else {
                        var text = document.getElementsByName('q11')[0].value;
                        if (text == dict[i])
                            summ += 1;
                    }
                }
            }
        });
        if (qlist.length == 0)
            window.location.replace("../complete.php?summ=" + summ);
    } else
        window.location.replace("../complete.php?summ=" + summ);
}
function startTimer(duration, display, display2) {
    var timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;
        display2.value = (minutes * 60 + seconds) / 3;
        if (--timer < 0) {
            window.location.replace("../complete.php?summ=" + summ);
        }
    }, 1000);
}

window.onload = function () {
    var fiveMinutes = 60 * 5,
        display = document.querySelector('#timeleft'),
        display2 = document.querySelector('#prtime');
    startTimer(fiveMinutes, display, display2);
};