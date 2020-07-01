const express = require('express');
const app = express();

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

app.get('/profile/:name', function (req, res) {
    res.render('profile', { person: req.params.name });
})
// Color Flip Page
app.get('/RandomColor',function(req,res){
    res.render('colorflip');
})
app.listen(3000);