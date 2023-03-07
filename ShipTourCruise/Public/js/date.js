

var today = new Date();


var dateInput = document.getElementById('date-inpute')
var dateto = document.getElementById('dateto')



dateInput.min = today.toISOString().slice(0, 16);
dateto.min = today.toISOString().slice(0, 16);


                     