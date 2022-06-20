class Triangle {
    constructor(a, b, c) {
        this.a = a;
        this.b = b;
        this.c = c;
    }
    getPerimeter() {
        return this.a + this.b + this.c;
    }
}

export default Triangle;

const triangle = new Triangle(3, 4, 5);
console.log(triangle.getPerimeter());
