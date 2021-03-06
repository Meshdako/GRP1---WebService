const express = require('express')
const app = express();
const morgan = require('morgan');

app.set('port', 3000)

app.use(morgan('dev'));
app.use(express.urlencoded({ extended: false }));
app.use(express.json());

app.use(require('./routes/index'));

app.listen(app.get('port'), () => {
    console.log(`Server on port ${app.get('port')}`)
}); 
