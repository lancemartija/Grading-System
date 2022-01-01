<section class="w-full">
  <div class="flex flex-col min-w-full overflow-hidden overflow-x-auto align-middle shadow">
    <table class="min-w-full divide-y divide-gray-200 table-fixed">
      <thead class="bg-gray-100">
        <tr>
          <th scope="col" class="th">
            Subject
          </th>
          <th scope="col" class="th">
            1st
          </th>
          <th scope="col" class="th">
            2nd
          </th>
          <th scope="col" class="th">
            3rd
          </th>
          <th scope="col" class="th">
            4th
          </th>
          <th scope="col" class="th">
            Final
          </th>
          <th scope="col" class="th">
            Remarks
          </th>
        </tr>
      </thead>
      <tbody class="bg-white divide-y divide-gray-200 ">
        <?php foreach ($result as $data) : ?>
          <tr class="hover:bg-gray-100 group">
            <td class="flex td">
              <div class="flex items-center capitalize">
                <?= $data['subj_name']; ?>
              </div>
              <div class="inline-flex items-center px-3 py-1 ml-2 text-sm text-center text-white shadow-sm font-sm rounded-2xl <?= ($data['subj_sem'] == 'First Semester') ? 'bg-emerald-500' : (($data['subj_sem'] == 'Second Semester') ? 'bg-amber-500' : 'bg-neutral-500'); ?>">
                <?= $data['subj_sem']; ?>
              </div>
            </td>
            <td class="td">
              <div class="flex items-center capitalize">
                <?= $data['grade_first']; ?>
              </div>
            </td>
            <td class="td">
              <div class="flex items-center capitalize">
                <?= $data['grade_second']; ?>
              </div>
            </td>
            <td class="td">
              <div class="flex items-center capitalize">
                <?= $data['grade_third']; ?>
              </div>
            </td>
            <td class="td">
              <div class="flex items-center capitalize">
                <?= $data['grade_fourth']; ?>
              </div>
            </td>
            <td class="td">
              <div class="flex items-center capitalize">
                <?= $data['grade_avg']; ?>
              </div>
            </td>
            <td class="td">
              <div class="flex items-center capitalize">
                <?= $data['grade_remarks']; ?>
              </div>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</section>