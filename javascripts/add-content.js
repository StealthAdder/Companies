let today = new Date();
let hourNow = today.getHours();
let timeNow = today.getTime();
let greetings;

if (hourNow > 18) {
    greetings = 'Good evening!';
} else if (hourNow > 12) {
    greetings = 'Good afternoon!';
} else if (hourNow > 0) {
    greetings = 'Good morning!';
} else {
    greetings = 'Welcome the chossen one';
}

document.write('<h1>' + greetings + '</h1>');
document.write('<h1>' + timeNow + " milliseconds have passed since January 1, 1970" + '</h1>');