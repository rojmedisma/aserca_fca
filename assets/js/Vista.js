$(document).ready(function(){
	$('#tbl_cuest_vista').DataTable({
		"paging": true,
		"lengthChange": true,
		"searching": true,
		"ordering": true,
		"info": true,
		"autoWidth": false,
	});
	//Para que funcione el campo select dentro del modal
	$('#cat_usuario_id').select2({
		dropdownParent: $('#modal_asig_c')
	});
	$('.btn_borrar_c').click(function(){
		v_cuestionario_id = $(this).data('cuest_id');
		if(v_cuestionario_id!="" && confirm("¿Desea borrar el cuestionario con Id = "+v_cuestionario_id+"?")){
			
			v_cat_cuestionario_id = $("#frm_cero input[name='cat_cuestionario_id']").val();
			$("#frm_cero input[name='cuestionario_id']").val(v_cuestionario_id);
			f_ir_a_controlador('frm_cero', 'cuestionario', 'borrar', '');
		}
	});
});