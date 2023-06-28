
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="mt-2">Formulario de citas estética</h1>
            </div>
        </div>
    </div>

    <div class="container container-form">
        <div class="row">
            <div class="col-md-12 col-lg-6">
                <form action="<?= site_url('appointment/crear') ?>" method="post">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="nombre" class="form-label">Nombre del cliente</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="telefono" class="form-label">Teléfono del cliente</label>
                                    <input type="tel" class="form-control" id="telefono" name="telefono" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="fecha" class="form-label">Fecha de la cita</label>
                                    <input type="date" class="form-control" id="fecha" name="fecha" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="hora" class="form-label">Hora de la cita</label>
                                <input type="time" class="form-control" id="hora" name="hora" required>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="acompanantes" class="form-label">Cantidad de acompañantes</label>
                                    <input type="number" class="form-control" id="acompanantes" name="acompanantes" min="0" max="5">
                                </div>
                            </div>
                        </div>
                        <div class="row  mt-3">
                            <div class="col-md-12"><button type="submit" class="btn btn-primary">Enviar</button></div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="img img-thumbnail"><img src="<?php echo base_url('assets/img/estetica2.jpg') ?>" alt="Mujer sonriente" class="img-fluid"></div>
            </div>
        </div>
    </div>
