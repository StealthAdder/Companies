let today = new Date();
let hourNow = today.getHours();
//let timeNow = today.getTime();
let timeNow = today.getHours()+":"+ today.getMinutes()+":"+today.getSeconds();
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

// document.write('<h3 id="greet">' + greetings + '</h3>');
// document.write('<h4 id="times">' + timeNow + " milliseconds have passed since January 1, 1970" + '</h1>');
function updateMessage(){
    let el =document.getElementById('greetings');
    let el2 = document.getElementById('Time');

    el.textContent = greetings;
    el2.textContent = timeNow ;

}

updateMessage();

