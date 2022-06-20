'use strict';

const ulList = document.querySelector('ul');
const inputElement = document.getElementById('grocery');
let id = 0;
let updateElement = null;

/*
    li
        span
        div
            button
                i
            button
                i
*/
const spanElement = document.createElement('span');

const iEditElement = document.createElement('i');
iEditElement.className = 'fas fa-pen-to-square text-info';
const buttonEditElement = document.createElement('button');
buttonEditElement.className = 'btn outline-none m-0 p-0 btn-edit';
buttonEditElement.appendChild(iEditElement);

const iDelElement = document.createElement('i');
iDelElement.className = 'fas fa-trash text-danger';
const buttonDelElement = document.createElement('button');
buttonDelElement.className = 'btn outline-none m-0 p-0 btn-delete';
buttonDelElement.appendChild(iDelElement);

const divElement = document.createElement('div');
divElement.className = 'btn-group';
divElement.appendChild(buttonEditElement);
divElement.appendChild(buttonDelElement);

const liElement = document.createElement('li');
liElement.className =
    'list-group-item d-flex justify-content-between align-items-center border-start-0 border-top-0 border-end-0 border-bottom rounded-0 mb-2';
liElement.appendChild(spanElement);
liElement.appendChild(divElement);

const onDelete = (id) => {
    document.getElementById(id).remove();
    updateElement.parentElement.classList.remove('on-edit');
    updateElement = null;
};

const onEdit = (id) => {
    // toggleSelect(updateElement);
    if (
        updateElement &&
        updateElement.parentElement.classList.contains('on-edit')
    ) {
        updateElement.parentElement.classList.remove('on-edit');
    }
    updateElement = document.getElementById(id).querySelector('span');
    updateElement.parentElement.classList.add('on-edit');
    inputElement.value = updateElement.textContent;
};

const onSubmit = (e) => {
    event.preventDefault();

    if (updateElement) {
        updateGrocery(e.elements['grocery'].value);
    } else {
        addGrocery(e.elements['grocery'].value);
    }

    // clear input field
    e.elements['grocery'].value = '';
    updateElement.parentElement.classList.remove('on-edit');
    updateElement = null;
};

const updateGrocery = (input) => {
    updateElement.textContent = input;
};

const addGrocery = (input) => {
    // get element from input field by id
    spanElement.textContent = input;

    // clone node
    const liElementClone = liElement.cloneNode(true);
    const newId = id++;
    liElementClone.id = newId;
    ulList.appendChild(liElementClone);

    // add event listener to remove button
    const buttonDel = liElementClone.querySelector('.btn-delete');
    buttonDel.onclick = onDelete.bind(null, newId);

    // add event listener to edit button
    const buttonEdit = liElementClone.querySelector('.btn-edit');
    buttonEdit.onclick = onEdit.bind(null, newId);
};
