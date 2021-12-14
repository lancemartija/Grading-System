<div class="fixed left-0 right-0 z-50 items-center justify-center hidden overflow-x-hidden overflow-y-auto bg-gray-900/50 top-4 md:inset-0 h-modal sm:h-full" id="edit-user-modal" aria-modal="true" role="dialog">
  <div class="relative w-full h-full max-w-2xl px-4 md:h-auto">
    <div class="relative bg-white rounded-lg shadow">
      <div class="flex items-start justify-between p-5 border-b rounded-t">
        <h3 class="text-xl font-semibold">
          Edit user
        </h3>
        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-close-button>
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
      <form action="../../includes/users.inc.php" method="post">
        <div class="hidden">
          <label for="id">ID</label>
          <input id="id" type="number" name="id">
        </div>
        <div class="p-6 space-y-6">
          <div class="grid grid-cols-6 gap-6">
            <div class="col-span-6 sm:col-span-3">
              <label for="firstname" class="block mb-2 text-sm font-medium text-gray-900">First Name</label>
              <input id="firstname" type="text" name="firstname" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-2 focus:ring-cyan-600/50 focus:border-cyan-600 focus:outline-none block w-full p-2.5" required>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="lastname" class="block mb-2 text-sm font-medium text-gray-900">Last Name</label>
              <input id="lastname" type="text" name="lastname" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-2 focus:ring-cyan-600/50 focus:border-cyan-600 focus:outline-none block w-full p-2.5" required>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
              <input id="email" type="email" name="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-2 focus:ring-cyan-600/50 focus:border-cyan-600 focus:outline-none block w-full p-2.5" required>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="username" class="block mb-2 text-sm font-medium text-gray-900">Username</label>
              <input id="username" type="text" name="username" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-2 focus:ring-cyan-600/50 focus:border-cyan-600 focus:outline-none block w-full p-2.5" " required>
            </div>
            <div class="col-span-6  sm:col-span-3">
              <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
              <input type="password" name="password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-2 focus:ring-cyan-600/50 focus:border-cyan-600 focus:outline-none block w-full p-2.5" placeholder="••••••••" required>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="accounttype" class="block mb-2 text-sm font-medium text-gray-900">Account Type</label>
              <select id="accounttype" name="accounttype" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-2 focus:ring-cyan-600/50 focus:border-cyan-600 focus:outline-none block w-full p-2.5">
                <option value="administrator">Administrator</option>
                <option value="registrar">Registrar</option>
                <option value="course in-charge">Course In-charge</option>
                <option value="encoder">Encoder</option>
                <option value="student">Student</option>
              </select>
            </div>
          </div>
        </div>
        <div class="items-center p-6 border-t border-gray-200 rounded-b">
          <button type="submit" name="edit" class="text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Update user</button>
        </div>
      </form>
    </div>
  </div>
</div>