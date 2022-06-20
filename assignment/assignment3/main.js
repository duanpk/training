'use strict';

const ulList = document.querySelector('ul');

/*
    li
        div
            input
            span
        button
            i
*/
const checkboxElement = document.createElement('input');
checkboxElement.className = 'form-check-input me-2';
checkboxElement.type = 'checkbox';
const spanElement = document.createElement('span');
const divElement = document.createElement('div');
divElement.className = 'd-flex align-items-center';
divElement.appendChild(checkboxElement);
divElement.appendChild(spanElement);

const iEditElement = document.createElement('i');
iEditElement.className = 'fas fa-times text-primary';
const buttonEditElement = document.createElement('button');
buttonEditElement.className = 'btn m-0 p-0 btn-remove';
buttonEditElement.appendChild(iEditElement);

const liElement = document.createElement('li');
liElement.className =
    'list-group-item d-flex justify-content-between align-items-center border-start-0 border-top-0 border-end-0 border-bottom rounded-0 mb-2';
liElement.appendChild(divElement);
liElement.appendChild(buttonEditElement);

const addTodo = (e) => {
    event.preventDefault();

    // get element from input field by id
    spanElement.textContent = e.elements['todo'].value;
    // ulList.appendChild(liElement);
    ulList.appendChild(liElement.cloneNode(true));

    // clear input field
    e.elements['todo'].value = '';

    // add event listener to remove button
    const buttonElements = document.querySelectorAll('.btn-remove');
    for (const button of buttonElements) {
        button.onclick = (e) => {
            e.target.parentElement.parentElement.remove();
        };
    }
    // add event listener to checkbox
    const checkboxElements = document.querySelectorAll('.form-check-input');
    for (const checkbox of checkboxElements) {
        checkbox.onclick = (e) => {
            if (e.target.checked) {
                e.target.nextSibling.classList.add(
                    'text-decoration-line-through'
                );
            } else {
                e.target.nextSibling.classList.remove(
                    'text-decoration-line-through'
                );
            }
        };
    }
};
