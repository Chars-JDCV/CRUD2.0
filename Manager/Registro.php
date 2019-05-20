<div class="modal" id="modalRegistro" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Nuevo Registro</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="frmEmpleados">
                    <div class="form-group">
                        <label for="puesto">Puesto</label>
                        <input type="text" name="puesto" id="puesto" class="form-control" placeholder="Ingrese Puesto"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="id_empresa">Empresa</label>
                        <select name="id_empresa" id="id_empresa" class="form-control">
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="id_salario">Salario</label>
                        <select name="id_salario" id="id_salario" class="form-control">
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" id="btnGuardar">Guardar</button>
                        <button class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>