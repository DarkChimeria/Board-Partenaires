	function Delete(id){
		
		swal({
			title: 'Souhaitez-vous supprimer ce partenaire ?',
			text: "Il sera supprimé définitivement!",
			type: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Oui, je souhaite le supprimer!',
			showLoaderOnConfirm: true,

			preConfirm: function() {
				return new Promise(function(resolve) {

					$.ajax({
						url: 'includes/controle/delete.php',
						type: 'POST',
						data: 'delete='+id,
						dataType: 'json'
					})
					.done(function(response){
						swal('Deleted!', response.message, response.status);
						$('#delete_'+id).remove(); 
					})
					.fail(function(){
						swal('Oops...', 'Erreur ajax !', 'error');
					});
				});
			},
			allowOutsideClick: false			  
		});	
		
	}