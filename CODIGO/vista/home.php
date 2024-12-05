<body>
    <header>
        <h3 class="text-center text-light">CRUD COM DATATABLES</h3>
        <h4 class="text-center text-light">CRUD</h4>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <button id="btnNuevo" type="button" class="btn btn-success mb-2" data-toggle="modal">NOVO</button>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table id="tablaPersonas" class="table table-strped table-bordered table-condensed" style="width: 100%">
                        <thead class="text-center">
                            <tr>
                                <th>ID</th>
                                <th>NOME</th>
                                <th>PAIS</th>
                                <th>IDADE</th>
                                <th style="width: 15%">AÇÃO</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade form-control-sm" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="formPersonas">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nombre" class="col-form-label">NOME:</label>
                            <input type="text" class="form-control" id="nombre">
                        </div>
                        <div class="form-group">
                            <label for="pais" class="col-form-label">PAIS:</label>
                            <input type="test" class="form-control" id="pais">
                        </div>
                        <div class="form-group">
                            <label for="edad" class="col-form-label">IDADE:</label>
                            <input type="number" class="form-control" id="edad">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">CANCELAR</button>
                        <button type="submit" id="btnGuardar" class="btn btn-dark">SALVAR</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="datatables/datatables.min.js"></script>
    <script src="controlador/main.js"></script>
</body>
</html>