const express = require('express');
const bodyParser = require('body-parser')
const app = express();

var urlencodedParser = bodyParser.urlencoded({ extended: false })   // body parser middleware

app.set('view engine', 'ejs');

app.use('/css', express.static('css'));
app.use('/javascripts', express.static('javascripts'))
// Home Page
app.get('/', function (req, res) {
    res.render('index');
})
// Contact Page
app.get('/contact', function (req, res) {
    res.render('contact');
})

app.post('/contact', urlencodedParser, function (req, res) {
    console.log(req.body);  // urlencodedParser gives access to the body property
    res.render('contact-success', { data: req.body });
})

app.get('/profile/:name', function (req, res) {
    res.render('profile', { person: req.params.name });
})
// Color Flip Page
app.get('/RandomColor', function (req, res) {
    res.render('colorflip');
})
app.listen(3000);