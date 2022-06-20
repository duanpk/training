'use strict';

const users = [
    {
        name: 'Larry',
        phone: '213-555-1234',
        address: '123 N 1st Ave',
    },
    {
        name: 'Jane',
        phone: '213-555-4321',
        address: '123 N 1st Ave',
    },
    {
        name: 'Sam',
        phone: '213-555-5678',
        address: '123 N 1st Ave',
    },
    {
        name: 'Anne',
        phone: '213-555-9876',
        address: '123 N 1st Ave',
    },
    {
        name: 'David',
        phone: '213-555-0912',
        address: '123 N 1st Ave',
    },
];
const Users = users.reduce(
    (acc, user) =>
        acc.set(user.name, { phone: user.phone, address: user.address }),
    new Map()
);

console.log(Users.get('David'));

Users.set('Wayne', { phone: '213-112-0912', address: '123 N 1st Ave' });
