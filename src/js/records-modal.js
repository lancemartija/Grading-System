const addRecordsBtn = document.querySelector('[data-add-button]')
const editRecordsBtn = document.querySelectorAll('[data-edit-button]')
const deleteRecordsBtn = document.querySelectorAll('[data-delete-button]')
const closeBtn = document.querySelectorAll('[data-close-button]')

const addRecordsModal = document.querySelector('#add-record-modal')
const editRecordsModal = document.querySelector('#edit-record-modal')
const deleteRecordsModal = document.querySelector('#delete-record-modal')

const inputFieldId = document.querySelectorAll('#id')
const inputFieldSem = document.querySelector('#sem')
const inputFieldStatus = document.querySelector('#status')
const inputFieldLevel = document.querySelector('#level')
const inputFieldYear = document.querySelector('#year')

addRecordsBtn.addEventListener('click', () => {
  addRecordsModal.classList.remove('hidden')
  addRecordsModal.classList.add('flex')
})

editRecordsBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    let id = btn.getAttribute('data-id')
    let sem = btn.getAttribute('data-sem')
    let status = btn.getAttribute('data-status')
    let level = btn.getAttribute('data-level')
    let year = btn.getAttribute('data-year')

    inputFieldId[0].value = id
    inputFieldSem.value = sem
    inputFieldStatus.value = status
    inputFieldLevel.value = level
    inputFieldYear.value = year

    editRecordsModal.classList.remove('hidden')
    editRecordsModal.classList.add('flex')
  })
})

deleteRecordsBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    let id = btn.getAttribute('data-id')

    inputFieldId[1].value = id

    deleteRecordsModal.classList.remove('hidden')
    deleteRecordsModal.classList.add('flex')
  })
})

closeBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    addRecordsModal.classList.add('hidden')
    addRecordsModal.classList.remove('flex')
    editRecordsModal.classList.add('hidden')
    editRecordsModal.classList.remove('flex')
    deleteRecordsModal.classList.add('hidden')
    deleteRecordsModal.classList.remove('flex')
  })
})
