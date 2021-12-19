const addFacultyBtn = document.querySelector('[data-add-button]')
const viewFacultyBtn = document.querySelectorAll('[data-view-button]')
const editFacultyBtn = document.querySelectorAll('[data-edit-button]')
const deleteFacultyBtn = document.querySelectorAll('[data-delete-button]')
const closeBtn = document.querySelectorAll('[data-close-button]')

const addFacultyModal = document.querySelector('#add-faculty-modal')
const viewFacultyModal = document.querySelector('#view-faculty-modal')
const editFacultyModal = document.querySelector('#edit-faculty-modal')
const deleteFacultyModal = document.querySelector('#delete-faculty-modal')

const inputFieldId = document.querySelectorAll('#id')
const inputFieldCode = document.querySelectorAll('#code')
const inputFieldName = document.querySelectorAll('#name')
const inputFieldAddress = document.querySelectorAll('#address')
const inputFieldGender = document.querySelectorAll('#gender')
const inputFieldStatus = document.querySelectorAll('#status')
const inputFieldEmail = document.querySelectorAll('#email')
const inputFieldEmpStatus = document.querySelectorAll('#empstatus')

addFacultyBtn.addEventListener('click', () => {
  addFacultyModal.classList.remove('hidden')
  addFacultyModal.classList.add('flex')
})

viewFacultyBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    let code = btn.getAttribute('data-code')
    let name = btn.getAttribute('data-name')
    let address = btn.getAttribute('data-address')
    let gender = btn.getAttribute('data-gender')
    let status = btn.getAttribute('data-status')
    let email = btn.getAttribute('data-email')
    let empstatus = btn.getAttribute('data-empstatus')

    inputFieldCode[0].value = code
    inputFieldName[0].value = name
    inputFieldAddress[0].value = address
    inputFieldGender[0].value = gender
    inputFieldStatus[0].value = status
    inputFieldEmail[0].value = email
    inputFieldEmpStatus[0].value = empstatus

    viewFacultyModal.classList.remove('hidden')
    viewFacultyModal.classList.add('flex')
  })
})

editFacultyBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    let id = btn.getAttribute('data-id')
    let code = btn.getAttribute('data-code')
    let name = btn.getAttribute('data-name')
    let address = btn.getAttribute('data-address')
    let gender = btn.getAttribute('data-gender')
    let status = btn.getAttribute('data-status')
    let email = btn.getAttribute('data-email')
    let empstatus = btn.getAttribute('data-empstatus')

    inputFieldId[0].value = id
    inputFieldCode[1].value = code
    inputFieldName[1].value = name
    inputFieldAddress[1].value = address
    inputFieldGender[1].value = gender
    inputFieldStatus[1].value = status
    inputFieldEmail[1].value = email
    inputFieldEmpStatus[1].value = empstatus

    editFacultyModal.classList.remove('hidden')
    editFacultyModal.classList.add('flex')
  })
})

deleteFacultyBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    let id = btn.getAttribute('data-id')

    inputFieldId[1].value = id

    deleteFacultyModal.classList.remove('hidden')
    deleteFacultyModal.classList.add('flex')
  })
})

closeBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    addFacultyModal.classList.add('hidden')
    addFacultyModal.classList.remove('flex')
    viewFacultyModal.classList.add('hidden')
    viewFacultyModal.classList.remove('flex')
    editFacultyModal.classList.add('hidden')
    editFacultyModal.classList.remove('flex')
    deleteFacultyModal.classList.add('hidden')
    deleteFacultyModal.classList.remove('flex')
  })
})
