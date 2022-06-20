'use strict';
const toggle = {
    exam1: false,
    exam2: false,
    exam3: false,
    exam4: false,
    exam5: false,
    exam6: false,
    exam7: false,
    exam8: false,
    exam9: false,
};

const exam1 = (e) => {
    const ele = document.getElementById('demo');
    toggle.exam1 = !toggle.exam1;
    ele.innerHTML = toggle.exam1 ? 'Hello' : 'Exam1';
};
const exam2 = (e) => {
    const ele = document.getElementsByTagName('p')[0];
    toggle.exam2 = !toggle.exam2;
    ele.innerHTML = toggle.exam2 ? 'Hello' : 'Exam2';
};
const exam3 = (e) => {
    const ele = document.getElementsByClassName('test')[0];
    toggle.exam3 = !toggle.exam3;
    ele.innerHTML = toggle.exam3 ? 'Test' : 'Exam3';
};
const exam4 = (e) => {
    const ele = document.getElementById('image');
    toggle.exam4 = !toggle.exam4;
    ele.src = toggle.exam4
        ? 'https://www.w3schools.com/js/pic_mountain.jpg'
        : 'https://www.w3schools.com/js/smiley.gif';
};
const exam5 = (e) => {
    const ele = document.getElementById('myText');
    // get random number between 0 and 10
    ele.value = Math.floor(Math.random() * 11);
};
const exam6 = (e) => {
    const pCollection = document.getElementsByTagName('p');
    toggle.exam6 = !toggle.exam6;
    for (const p of pCollection) {
        p.style.color = toggle.exam6 ? '#f00' : 'initial';
    }
};
const exam7 = (e) => {
    const pCollection = document.getElementsByTagName('p');
    toggle.exam7 = !toggle.exam7;
    for (const p of pCollection) {
        p.style.fontSize = toggle.exam7 ? '40px' : 'initial';
    }
};
const exam8 = (e) => {
    const pCollection = document.getElementsByTagName('p');
    toggle.exam8 = !toggle.exam8;
    for (const p of pCollection) {
        p.style.display = toggle.exam8 ? 'none' : 'block';
    }
};
const exam9 = (e) => {
    const ele = document.querySelectorAll('button#demo')[0];
    e.innerHTML = 'Clicked';
    ele.addEventListener(
        'click',
        (e) => (e.target.innerHTML = Math.floor(Math.random() * 1))
    );
};
