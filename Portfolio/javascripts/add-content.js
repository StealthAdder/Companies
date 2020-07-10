// document.write('<h3 id="greet">' + greetings + '</h3>');
// document.write('<h4 id="times">' + timeNow + " milliseconds have passed since January 1, 1970" + '</h1>');
function updateMessage() {
    let today = new Date();
    let hourNow = today.getHours();
    let ampm = hourNow >= 12 ? 'PM' : 'AM';
    let hour = hourNow % 12;
    //let timeNow = today.getTime();
    let timeNow = hour + ":" + today.getMinutes() + ":" + today.getSeconds() + " " + ampm;
    let greetings;

    if (hourNow > 18) {
        greetings = 'Hey, Good evening!';
    } else if (hourNow > 12) {
        greetings = 'Hey, Good afternoon!';
    } else if (hourNow > 0) {
        greetings = 'Hey, Good morning!';
    } else {
        greetings = 'Welcome the chossen one';
    }

    let el = document.getElementById('greetings');
    let el2 = document.getElementById('Time');

    if (el !== null) {
        el.textContent = greetings;
    }
    el2.textContent = timeNow;

}

setInterval(updateMessage, 1000);
