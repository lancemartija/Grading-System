<?php
$courses = [
  'Grade 12',
  'Grade 11',
  'Grade 10',
  'Grade 9',
  'Grade 8',
  'Grade 7'
];

function existsInArray($arr, $data)
{
  foreach ($arr as $value) {
    if (in_array($data, $value)) {
      return true;
    } else {
      continue;
    }
  }

  return false;
}
?>

<nav>
  <form method="get">
    <ul class="flex flex-wrap mb-4 border-b border-gray-200">
      <li class="mr-2">
        <button type="submit" name="" value="" class="inline-block px-4 py-4 text-sm font-medium text-center rounded-t-lg focus:outline-none <?= (!isset($_GET['course']) || empty($_GET['course'])) ? 'bg-gray-200 text-gray-600' : 'hover:text-gray-600 hover:bg-gray-200 text-gray-400'; ?>">All Courses</button>
      </li>
      <?php if (!empty($result)) { ?>
        <?php foreach ($courses as $course) : ?>
          <?php if (existsInArray($result, $course)) { ?>
            <li class="mr-2">
              <button type="submit" name="course" value="<?= $course; ?>" class="inline-block px-4 py-4 text-sm font-medium text-center rounded-t-lg focus:outline-none <?= (isset($_GET['course']) && $_GET['course'] == $course) ? 'bg-gray-200 text-gray-600' : 'hover:text-gray-600 hover:bg-gray-200 text-gray-400'; ?>"><?= $course; ?></button>
            </li>
          <?php } ?>
        <?php endforeach; ?>
      <?php } ?>
    </ul>
  </form>
</nav>