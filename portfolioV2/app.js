const express = require('express');
const app = express();

app.set('view engine', 'ejs');

app.use('/css', express.static('css'));

app.get('/', function (req, res) {
    res.render('index');
})

app.get('/contact', function (req, res) {
    res.render('contact');
})

app.get('/profile/:name', function (req, res) {
    res.render('profile', { person: req.params.name });
})

app.listen(3000);