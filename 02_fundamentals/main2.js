'use strict';

// 1
const person = {
    firstName: "John",
    lastName: "Doe",
}
// console.log("🚀 ~ file: main2.js ~ line 7 ~ firstName", person.firstName)

const myFunction = () => { alert(person.firstName) };

// 2
person.country = 'Norway';

// 3
// change from
// <button {event}="alert('Hello')">Click me.</button>
// to
//<button onclick="alert('Hello World')">Click me</button>

// 4
// change from
// <button {event}="{function}">Click me.</button>
// to
// <button onclick="myFunction()">Click me</button>

// 5+6+7+8+9
let txt = 'hello world';
console.log("🚀 ~ file: main2.js ~ line 29 ~ txt", txt.length);

txt = txt.toUpperCase();
console.log("🚀 ~ file: main2.js ~ line 32 ~ txt", txt)

txt = 'I can eat bananas all day';
const start = txt.indexOf('bananas');
console.log("🚀 ~ file: main2.js ~ line 36 ~ txt",
    txt.slice(start, start + 'bananas'.length));

const num = Math.random();
console.log("🚀 ~ file: main2.js ~ line 40 ~ num", num)

const max = Math.max(10, 20);
console.log("🚀 ~ file: main2.js ~ line 43 ~ max", max)
