'use strict';

class Person {
    constructor(name, age) {
        this.name = name;
        this.age = age;
    }
    describe() {
        return `${this.name}, ${this.age} years old`;
    }
}

const person = new Person('John', 30);
const person2 = new Person('Jane', 25);
person.describe();
person2.describe();
