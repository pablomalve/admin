$('.TablaDataTable').DataTable({
  "language": {
		"sProcessing":     "Procesando...",
		"sLengthMenu":     "Mostrar _MENU_ registros",
		"sZeroRecords":    "No se encontraron resultados",
		"sEmptyTable":     "Ningún dato disponible en esta tabla",
		"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
		"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0",
		"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
		"sInfoPostFix":    "",
		"sSearch":         "Buscar:",
		"sUrl":            "",
		"sInfoThousands":  ",",
		"sLoadingRecords": "Cargando...",
		"oPaginate": {
		"sFirst":    "Primero",
		"sLast":     "Último",
		"sNext":     "Siguiente",
		"sPrevious": "Anterior"
	},
		"oAria": {
			"sSortAscending":  ": Ordenar la columna de manera ascendente",
			"sSortDescending": ": Ordenar la columna de manera descendente"
		}
	},
  "responsive": true, 
  "lengthChange": false, 
  "autoWidth": false,
  "buttons": [
    {
      extend:     'excelHtml5',
      text:       '<i class="fas fa-file-excel"></i>',
      titleAttr:  'Exportar a Excel',
      className:  'btn btn-success'
    },
    {
      extend:     'pdfHtml5',
      text:       '<i class="fas fa-file-pdf"></i>',
      titleAttr:  'Exportar a PDF',
      className:  'btn btn-danger'
    }, 
    {
      extend:     'print',
      text:       '<i class="fas fa-print"></i>',
      titleAttr:  'Imprimir',
      className:  'btn btn-info'
    },
  ]
}).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

$(function() {
  const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
  });
  $('.toastrDefaultSuccess').click(function() {
    toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
  });

  $('.toastrDefaultInfo').click(function() {
    toastr.info('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
  });

  $('.toastrDefaultError').click(function() {
    toastr.error('La operación se cancelo a pedido del usuario')
  });

  $('.toastrErrorIngreso').click(function() {
    toastr.error('No se pudo acceder a la aplicación correctamente')
  });

  $('.toastrDefaultWarning').click(function() {
    toastr.warning('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
  });
});