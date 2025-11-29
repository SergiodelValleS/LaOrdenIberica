function mostrarModal(mensaje) {
    // ✅ Eliminamos cualquier modal previo antes de agregar uno nuevo
    let modalExistente = document.getElementById('miModal');
    if (modalExistente) {
        modalExistente.remove();
    }

    // ✅ Creación del modal con Bootstrap
    let modalHTML = `
        <div class="modal fade" id="miModal" tabindex="-1" aria-labelledby="miModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="miModalLabel">Mensaje</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
              </div>
              <div class="modal-body">
                ${mensaje} <!-- ✅ Mensaje dinámico -->
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
              </div>
            </div>
          </div>
        </div>
    `;

    // ✅ Agregamos el modal al `body`
    let modalElemento = document.createElement('div');
    modalElemento.innerHTML = modalHTML;
    document.body.appendChild(modalElemento);

    // ✅ Mostramos el modal con Bootstrap 5
    let miModal = new bootstrap.Modal(document.getElementById('miModal'));
    miModal.show();
}