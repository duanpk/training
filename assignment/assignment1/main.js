'use strict';

const maxHex = parseInt('ffffff', 16);
const body = document.body;
const color = document.querySelector('.color');

const changeColor = (e) => {
    const hexColor = '#' + Math.floor(Math.random() * maxHex).toString(16);
    body.style.backgroundColor = hexColor;
    color.innerHTML = hexColor;
};
