<!-- <div class="container-fluid">
    <div class="row">
    <?php foreach ($services as $row): ?>
<h3><?php echo $row['categoryName']; ?></h3> <!-- this is the category name -->
<p><?php echo $row['description']; ?></p> <!-- this is the category description -->
<p><?php echo $row['image']; ?></p> <!-- this is the category image -->
<ul>
<li><?php echo $row['serviceName']; ?></li> <!-- this is the service description -->
<li><?php echo $row['price'].'$'; ?></li> <!-- this is the service price -->
</ul>
<?php endforeach ?>

    </div>
</div> -->

<div class="container">
  <div class="row">
    <div class="col-md-4">
      <nav id="navbar-example3" class="navbar navbar-light bg-light flex-column align-items-start">
        <a class="navbar-brand" href="#">Navbar</a>
        <nav class="nav nav-pills flex-column">
          <?php foreach ($services as $row): ?>
          <a class="nav-link" href="#item-<?php echo $row['categoryServiceId']; ?>"><?php echo $row['categoryName']; ?></a> <!-- this is the category name -->
          <nav class="nav nav-pills flex-column ms-3">
            <a class="nav-link" href="#item-<?php echo $row['categoryServiceId']; ?>-1"><?php echo $row['serviceName']; ?></a> <!-- this is the service description -->
            <a class="nav-link" href="#item-<?php echo $row['categoryServiceId']; ?>-2"><?php echo $row['price'].'$'; ?></a> <!-- this is the service price -->
          </nav>
          <?php endforeach ?>
        </nav>
      </nav>
    </div>
    <div class="col-md-8">
      <div data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-offset="0" class="scrollspy-example-2" tabindex="0">
        <?php foreach ($services as $row): ?>
        <h4 id="item-<?php echo $row['categoryServiceId']; ?>"><?php echo $row['categoryName']; ?></h4> <!-- this is the category name -->
        <p><?php echo $row['description']; ?></p> <!-- this is the category description -->
        <p><?php echo $row['image']; ?></p> <!-- this is the category image -->
        <p id="item-<?php echo $row['id']; ?>-1"><?php echo $row['serviceName']; ?></p> <!-- this is the service description -->
        <p id="item-<?php echo $row['id']; ?>-2"><?php echo $row['price'].'$'; ?></p> <!-- this is the service price -->
        <?php endforeach ?>
      </div>
    </div>
  </div>
</div>
