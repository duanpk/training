'use strict';

const date = new Date();
console.log('Current date:', date.toLocaleDateString());
console.log('Current time:', date.toLocaleTimeString());

console.log('Current year:', date.getFullYear());
console.log('Current month:', date.getMonth());
date.setFullYear(2020);
console.log('🚀 ~ file: main.js ~ line 10 ~ date', date.toUTCString());
