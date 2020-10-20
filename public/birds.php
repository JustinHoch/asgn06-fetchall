<?php require_once('../private/initialize.php'); ?>

<?php $page_title = 'Inventory'; ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="main">

  <div id="page">
    <div class="intro">
      <img class="inset" src="<?php echo url_for('/images/tufted-titmouse.jpg') ?>" />
      <h2>Small Sampling of WNC Birds</h2>
    </div>

    <table id="inventory">
      <tr>
        <th>Common Name</th>
        <th>Habitat</th>
        <th>Food</th>
        <th>Conservation Level</th>
        <th>Backyard Tips</th>
        <th>&nbsp;</th>
      </tr>

<?php

// $parser = new ParseCSV(PRIVATE_PATH . '/wnc-birds.csv');
// $bird_array = $parser->parse();
$birds = Bird::find_all();

?>
      <?php foreach($birds as $bird) { ?>
        
      <tr>
        <td><?php echo h($bird->common_name); ?></td>
        <td><?php echo h($bird->habitat); ?></td>
        <td><?php echo h($bird->food); ?></td>
        <td><?php echo h($bird->conservation()); ?></td>
        <td><?php echo h($bird->backyard_tips); ?></td>
        <td><a href="detail.php?id=<?php echo $bird->id; ?>">View</a></td>
      </tr>
      <?php } ?>

    </table>

<?php



//$birds = Bird::find_all();

// foreach($results as $row) {
//   $firstname = htmlentities($row['1']);
//   $lastname = htmlentities($row['2']);
//   $postcode = htmlentities($row['3']);

//   echo $firstname . ' ' . $lastname . ' ' . $postcode . '<br>';
// }

?>


  </div>

</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>
