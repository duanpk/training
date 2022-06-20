'use strict';

let counter = 0;
const color = {
    positive: '#0f0',
    negative: '#f00',
};

const count = document.getElementsByClassName('count')[0];
const btnInc = document.getElementsByClassName('btn-inc')[0];
const btnDec = document.getElementsByClassName('btn-dec')[0];
const btnReset = document.getElementsByClassName('btn-reset')[0];

const changeValue = () => {
    count.innerHTML = counter;
    count.style.color = counter % 2 === 0 ? color.positive : color.negative;
};
const increment = () => {
    counter++;
    changeValue();
};
const decrement = () => {
    counter--;
    changeValue();
};
const reset = () => {
    counter = 0;
    changeValue();
};
