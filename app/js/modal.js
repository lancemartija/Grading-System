const addUserBtn = document.querySelector('[data-add-button]')
const closeBtn = document.querySelector('[data-close-button]')
const addUserModal = document.querySelector('#add-user-modal')

addUserBtn.addEventListener('click', () => {
  addUserModal.classList.remove('hidden')
  addUserModal.classList.add('flex')
})

closeBtn.addEventListener('click', () => {
  addUserModal.classList.add('hidden')
  addUserModal.classList.remove('flex')
})
