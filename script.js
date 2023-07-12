const Btn_abrir_modal = document.querySelector("#Registro");
const Btn_insertar = document.querySelector("#Btn_Registro");
const Btn_cerrar = document.querySelector("#Btn_cerrar");
const modal = document.querySelector("#modal");

Btn_abrir_modal.addEventListener("click", () => {
  modal.showModal();
});

Btn_cerrar.addEventListener("click", () => {
  modal.close();
});
function confirmarEliminar() {
  return confirm("¿Estás seguro de que deseas eliminar este registro?");
}

