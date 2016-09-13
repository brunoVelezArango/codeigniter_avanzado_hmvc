/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$('#mitabla').DataTable({
    "language": {
        "lengthMenu": "Mostrar _MENU_ Filas",
        "search": "Buscar",
        "info": "Mostrando _PAGE_ de _PAGES_ paginas",
        "paginate": {
            "previous": "Anterior",
            "next": "Siguiente"
        }
    },
    "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "Todos"]],
    "iDisplayLength": 5
});