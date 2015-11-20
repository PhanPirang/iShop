$.ajaxSetup({
    headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
});

// Category
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

// Slide
$('.btn_slide_delete').click(function() {
    var id = $(this).siblings('input').val();
	swal({
    title: "Are you sure?",
    text: "Are you sure ?",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "Yes, delete it!",
    closeOnConfirm: false
},  function() {
	    $.ajax({
	        url: 'slide/destroy',
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

$('.btn_slide_update').click(function () {
	var caption = $(this).parents('tr').find('td').eq(1).text().trim();
	var description = $(this).parents('tr').find('td').eq(2).text().trim();
	var order = $(this).parents('tr').find('td').eq(4).text().trim();
	var status = $(this).parents('tr').find('td').eq(5).text().trim();
	status = (status=='Show')?'1':'0';
	var id = $(this).siblings('input').val();
	$('#id').val(id);
	$('#caption1').val(caption);
	$('#description1').val(description);
	$('#order1').val(order);
	$('#status1').val(status);
});