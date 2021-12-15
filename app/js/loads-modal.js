const addLoadsBtn = document.querySelector('[data-add-button]')
const deleteLoadsBtn = document.querySelectorAll('[data-delete-button]')
const closeBtn = document.querySelectorAll('[data-close-button]')

const addLoadsModal = document.querySelector('#add-load-modal')
const deleteLoadsModal = document.querySelector('#delete-load-modal')

addLoadsBtn.addEventListener('click', () => {
  addLoadsModal.classList.remove('hidden')
  addLoadsModal.classList.add('flex')
})

deleteLoadsBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    let id = btn.getAttribute('data-id')

    inputFieldId[1].value = id

    deleteLoadsModal.classList.remove('hidden')
    deleteLoadsModal.classList.add('flex')
  })
})

closeBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    addLoadsModal.classList.add('hidden')
    addLoadsModal.classList.remove('flex')
    viewLoadsModal.classList.add('hidden')
    viewLoadsModal.classList.remove('flex')
    editLoadsModal.classList.add('hidden')
    editLoadsModal.classList.remove('flex')
    deleteLoadsModal.classList.add('hidden')
    deleteLoadsModal.classList.remove('flex')
  })
})
