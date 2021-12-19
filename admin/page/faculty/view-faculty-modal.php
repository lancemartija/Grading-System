<div class="fixed left-0 right-0 z-50 items-center justify-center hidden overflow-x-hidden overflow-y-auto bg-gray-900/50 top-4 md:inset-0 h-modal sm:h-full" id="view-faculty-modal" aria-modal="true" role="dialog">
  <div class="relative w-full h-full max-w-2xl px-4 md:h-auto">
    <div class="relative bg-white rounded-lg shadow">
      <div class="flex items-start justify-between p-5 border-b rounded-t">
        <h3 class="text-xl font-semibold">
          View faculty
        </h3>
        <button type="button" class="btn-close-modal" data-close-button>
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
      <div class="p-6 space-y-6">
        <div class="modal-grid">
          <div class="col-span-6 sm:col-span-3">
            <label for="code" class="label">Instructor Code</label>
            <input id="code" type="text" class="input-field-view" placeholder="0000" disabled readonly>
          </div>
          <div class="col-span-6 sm:col-span-3">
            <label for="name" class="label">Name</label>
            <input id="name" type="text" class="input-field-view" placeholder="First Name, Middle Name, Last Name" disabled readonly>
          </div>
          <div class="col-span-6 sm:col-span-3">
            <label for="email" class="label">Email</label>
            <input id="email" type="email" class="input-field-view" placeholder="example@email.com" disabled readonly>
          </div>
          <div class="col-span-6 sm:col-span-3">
            <label for="address" class="label">Address</label>
            <input id="address" type="text" class="input-field-view" placeholder="Address" disabled readonly>
          </div>
          <div class="col-span-6 sm:col-span-3">
            <label for="gender" class="label">Gender</label>
            <input id="gender" type="text" class="input-field-view" disabled readonly>
          </div>
          <div class="col-span-6 sm:col-span-3">
            <label for="status" class="label">Status</label>
            <input id="status" type="text" class="input-field-view" disabled readonly>
          </div>
          <div class="col-span-6 sm:col-span-3">
            <label for="empstatus" class="label">Employment Status</label>
            <input id="empstatus" type="text" class="input-field-view" disabled readonly>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>