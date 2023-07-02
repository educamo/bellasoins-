<div class="container-fluid">
    <div class="row">
        <?Php
        $i = 0;
        foreach ($services as $row) :

            if ($i == 0) {
        ?>
                <h1 class="text-center text-capitalize mt-3"><?php echo $row['categoryName']; ?></h1> <!-- this is the category name -->
                <div class="col-md-6">
                    <p class="ps-5"><?php echo $row['description']; ?></p> <!-- this is the category description -->
                </div>
                <div class="col-md-6 category-img">
                    <img class="overflow-visible img-thumbnail img-fluid" src="<?= base_url('assets/img/services/' . $row['image'] .'') ?>" alt="imagen de la categoría de servicios">
                </div>


        <?Php
                $i = 1;
            };
        endforeach
        ?>

    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="list-group overflow-auto" style="max-height: 300px;">
                        <?php foreach ($services as $row) : ?>
                            <div class="list-group-item">
                                <h5><?php echo $row['serviceName']; ?></h5> <!-- this is the service description -->
                                <p><?php echo $row['price'] . '$'; ?></p> <!-- this is the service price -->
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>