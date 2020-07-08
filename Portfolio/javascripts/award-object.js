function profile(name, awards) {
    this.name = name;
    this.awards = awards;
}

let Elon = new profile("Elon Musk", 10);

let elAwards = document.getElementById("awards");
//let elAwards = document.getElementsByClassName("ops1");
elAwards.textContent = "Awards: " + Elon.awards;

