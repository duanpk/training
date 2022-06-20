'uses strict';

/**
 * Create a switch statement that will alert "Hello" if fruits is "banana", and "Welcome" if fruits is "apple".
 */
{
    let fruits = 'banana';
    switch (fruits) {
        case 'banana':
            console.log('Hello');
            break;

        case 'apple':
            console.log('World');
            break;

        default:
            break;
    }
}

/**
 * Create a loop that runs from 0 to 9 and log it.
 */
{
    for (let index = 0; index < 10; index++) {
        console.log('🚀 ~ file: main.js ~ line 18 ~ index', index);
    }
}

/**
 * Create a loop that runs through each item in the fruits array and log it.
 */
{
    const fruits = ['Apple', 'Banana', 'Orange'];
    for (const iterator of fruits) {
        console.log('🚀 ~ file: main.js ~ line 23 ~ iterator', iterator);
    }
}

/**
 * Create a loop that runs as long as i is less than 10.
 */
{
    let i = 0;
    while (i < 10) {
        i = Math.trunc(Math.random() * 11);
        console.log('🚀 ~ file: main.js ~ line 26 ~ i', i);
    }
}

/**
 * Create a loop that runs as long as i is less than 10, but increase i with 2 each time.
 */
{
    let i = 0;
    while (i < 10) {
        console.log('🚀 ~ file: main.js ~ line 32 ~ i', i);
        i += 2;
    }
}

/**
 * Make the loop stop when i is 5.
 */
{
    let i;
    while (i !== 5) {
        i = Math.trunc(Math.random() * 11);
        console.log('🚀 ~ file: main.js ~ line 39 ~ i', i);
    }
}

/**
 * Make the loop jump to the next iteration when i is 5.
 */
{
    for (let index = 0; index < 10; index++) {
        if (index === 5) continue;
        console.log('🚀 ~ file: main.js ~ line 44 ~ index', index);
    }
}
