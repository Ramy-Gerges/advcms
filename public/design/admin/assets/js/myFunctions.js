$('body').on('click', '.modal-show', function(event){
	event.preventDefault();

	var x = $(this),
		url = x.attr('href');
		$('#modal-btn-save').removeClass('hide')
    .text(x.hasClass('edit') ? 'Update' : 'Create');

	$.ajax({
		url: url,
		dataType:"html",
		success:function(response)
		{
			$('#modal-body').html(response);
		}
	});

	$('#modal').modal('show');
});

$('#modal-btn-save').click(function(event){
	event.preventDefault();

	var form = $('#modal-body form'),
        url = form.attr('action'),
		method = $('input[name=_method]').val() == undefined ? 'POST' : 'POST',
        formData = new FormData(form[0]);
        
	$.ajax({
		url: url,
		method:method,
        dataType:'json',
		data:formData,
        cache:false,
        processData: false,
        contentType: false,
		success:function(response)
		{
			form.trigger('reset');
			$('#modal').modal('hide');
			$('#datatable').DataTable().ajax.reload();

			swal({
                type : 'success',
                title : 'Success!',
                text : 'Data has been saved!'
            });
		},

		error:function(xhr)
		{
			var res = xhr.responseJSON;
			if($.isEmptyObject(res) == false)
			{
				$.each(res.errors, function(key,value){

					$('#' + key)
					.addClass('is-invalid')
                    .closest('.form-group')
                    .append('<span class="invalid-feedback"><strong>' + value + '</strong></span>')
				});
			}
		}

	});


});


$('body').on('click', '.btn-delete', function (event) {
    event.preventDefault();

    var x = $(this),
        url = x.attr('href'),
        title = x.attr('title'),
        csrf_token = $('meta[name="csrf-token"]').attr('content');

    swal({
        title: 'Are you sure want to delete ' + title + ' ?',
        text: 'You won\'t be able to revert this!',
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.value) {
            $.ajax({
                url: url,
                type: "POST",
                data: {
                    '_method': 'DELETE',
                    '_token': csrf_token
                },
                success: function (response) {
                    $('#datatable').DataTable().ajax.reload();
                    swal({
                        type: 'success',
                        title: 'Success!',
                        text: 'Data Has Been Deleted Successfully'
                    });
                },
                error: function (xhr) {
                    swal({
                        type: 'error',
                        title: 'Oops...',
                        text: 'Oops Some Thing Went Wrong!'
                    });
                }
            });
        }
    });
});
