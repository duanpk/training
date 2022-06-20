'use strict';

const cars = ['Saab', 'Volvo', 'BMW'];
console.log('🚀 ~ file: main.js ~ line 4 ~ cars', cars[1]);

cars[0] = 'Ford';

cars.map((car, index) => {
    console.log('🚀 ~ file: main.js ~ line 9 ~ cars.map ~ index', index);
});

const fruits = ['Banana', 'Orange', 'Apple'];
fruits.splice(-1);

fruits.push('Kiwi');

fruits.splice(1, 1, 'Apple');
console.log("🚀 ~ file: main.js ~ line 18 ~ fruits", fruits)

fruits.sort();
console.log("🚀 ~ file: main.js ~ line 21 ~ fruits", fruits)
