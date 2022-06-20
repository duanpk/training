'use strict';

const divide = (numerator, denominator) => {
    if (denominator === 0) {
        throw new Error('Attempted to divide by zero');
    }
    return numerator / denominator;
};

const square = (x) => {
    if (typeof x !== 'number' || isNaN(x)) {
        throw new Error('x is not a number');
    }
    return x * x;
};

console.log(divide(1, 1));
console.log(square(1));
console.log(divide(1, 0));
console.log(square(''));
