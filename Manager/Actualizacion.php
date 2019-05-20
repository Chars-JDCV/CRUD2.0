<div class="modal" id="modalX" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Actualizar Datos de Clientes</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="frmModalEmpleados">
                    <div class="form-group">
                        <input type="hidden" name="Modalid_puesto" id="Modalid_puesto" class="form-control"
                            disabled="disabled" required>
                    </div>
                    <div class="form-group">
                        <label for="Modalpuesto">Puesto</label>
                        <input type="text" name="Modalpuesto" id="Modalpuesto" class="form-control"
                            placeholder="Ingrese Puesto" required>
                    </div>
                    <div class="form-group">
                        <label for="Modalid_empresa">Empresa</label>
                        <select name="Modalid_empresa" id="Modalid_empresa" class="form-control">
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Modalid_salario">Salario</label>
                        <select name="Modalid_salario" id="Modalid_salario" class="form-control">
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button id="btnActualizar" class="btn btn-primary">Actualizar</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>