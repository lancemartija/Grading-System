<div class="flex flex-col min-w-full overflow-hidden overflow-x-auto align-middle shadow">
  <table class="min-w-full divide-y divide-gray-200 table-fixed">
    <thead class="bg-gray-100">
      <tr>
        <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase">
          ID
        </th>
        <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase">
          Room Code
        </th>
        <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase">
          Room Name
        </th>
        <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase">
          Description
        </th>
        <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase">
          Actions
        </th>
      </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200">
      <?php foreach ($result as $data) : ?>
        <tr class="hover:bg-gray-100 group">
          <td class="p-4 text-base font-normal text-gray-900 whitespace-nowrap">
            <div class="flex items-center">
              <?= $data['room_id']; ?>
            </div>
          </td>
          <td class="p-4 text-base font-normal text-gray-900 whitespace-nowrap">
            <div class="flex items-center">
              <?= $data['room_code']; ?>
            </div>
          </td>
          <td class="flex items-center p-4 mr-12 space-x-6 whitespace-nowrap lg:mr-0">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-gray-500 group-hover:text-gray-900" fill="none" viewBox="0 0 24 24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2" />
            </svg>
            <div class="flex items-center capitalize">
              <?= $data['room_name']; ?>
            </div>
          </td>
          <td class="p-4 text-base font-normal text-gray-600 whitespace-nowrap">
            <div class="flex items-center capitalize">
              <?= $data['room_desc']; ?>
            </div>
          </td>
          <td class="p-4 space-x-2 whitespace-nowrap">
            <button type="button" data-view-button data-code="<?= $data['room_code']; ?>" data-name="<?= $data['room_name']; ?>" data-desc="<?= $data['room_desc']; ?>" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-gray-600 rounded-lg hover:bg-gray-700 focus:ring-4 focus:ring-gray-200">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
              </svg>
              View
            </button>
            <button type="button" data-edit-button data-id="<?= $data['room_id']; ?>" data-code="<?= $data['room_code']; ?>" data-name="<?= $data['room_name']; ?>" data-desc="<?= $data['room_desc']; ?>" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200">
              <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path>
                <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path>
              </svg>
              Edit
            </button>
            <button type="button" data-id="<?= $data['room_id']; ?>" data-delete-button class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300">
              <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
              </svg>
              Delete
            </button>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>