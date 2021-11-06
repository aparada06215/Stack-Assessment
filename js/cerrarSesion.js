const cerrarSesion = () => {
  Swal.fire({
    title: "Estas seguro de cerrar sesion?",
    // text: "You won't be able to revert this!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Si",
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire("sesion cerrada con exito!", "success");
      location.reload();
    }
  });
};
