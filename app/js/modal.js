const addUserBtn = document.querySelector('[data-add-button]')
const editUserBtn = document.querySelectorAll('[data-edit-button]')
const closeBtn = document.querySelectorAll('[data-close-button]')

const addUserModal = document.querySelector('#add-user-modal')
const editUserModal = document.querySelector('#edit-user-modal')

const inputFieldId = document.querySelector('#id')
const inputFieldFname = document.querySelector('#firstname')
const inputFieldLname = document.querySelector('#lastname')
const inputFieldEmail = document.querySelector('#email')
const inputFieldUsername = document.querySelector('#username')

addUserBtn.addEventListener('click', () => {
  addUserModal.classList.remove('hidden')
  addUserModal.classList.add('flex')
})

editUserBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    let id = btn.getAttribute('data-id')
    let fname = btn.getAttribute('data-fname')
    let lname = btn.getAttribute('data-lname')
    let email = btn.getAttribute('data-email')
    let username = btn.getAttribute('data-username')

    inputFieldId.value = id
    inputFieldFname.value = fname
    inputFieldLname.value = lname
    inputFieldEmail.value = email
    inputFieldUsername.value = username

    editUserModal.classList.remove('hidden')
    editUserModal.classList.add('flex')
  })
})

closeBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    addUserModal.classList.add('hidden')
    addUserModal.classList.remove('flex')
    editUserModal.classList.add('hidden')
    editUserModal.classList.remove('flex')
  })
})
