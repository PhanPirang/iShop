$.ajaxSetup({
    headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
});

$('.btn_cat_delete').click(function() {
    var id = $(this).siblings('input').val();
	swal({
    title: "Are you sure?",
    text: "You will not be able to recover this imaginary file!",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "Yes, delete it!",
    closeOnConfirm: false
},  function() {
	    $.ajax({
	        url: '/category/destroy',
	        type: "post",
	        data: {
	            'id':id
	        },
	        success: function (data){
	            location.reload();
	        }
	    });
    });
});

$('.btn_cat_update').click(function () {
	var name = $(this).parents('tr').find('td').eq(1).text();
	var description = $(this).parents('tr').find('td').eq(2).text();
	var id = $(this).siblings('input').val();
	$('#id').val(id);
	$('#name1').val(name.trim());
	$('#description1').val(description.trim());
});