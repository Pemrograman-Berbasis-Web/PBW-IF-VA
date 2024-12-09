var person = {
    'name': 'boss',
    'age': 40,
    'sex': 'male'
}

var message;

for (var attr in person) {

    message = 'atribut ' + attr + ' berisi data ' + person[attr];
    console.log(message);
}