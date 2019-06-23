$(document).ready(function(){
	$(document).on('click','.category_class',function(){
		var id = $(this).attr("id");
		var name = $(this).children("a").html();
		$("#cate_name").text(name);
		$.ajax({
			url: "category-getData.php",
			dataType: "json",
			data:{
				id : id
			},
			success: function(data){
				console.log(data);
				if(data == "false"){
					$(".subcategory_principal_content").empty();
				}else{
					$(".subcategory_principal_content").empty();
					for(var i = 0;i<data.length ; i++){
						var data_Ar = data[i].split('_');
						var id_cat = data_Ar[0];
						var created_at = data_Ar[1];
						var is_active = data_Ar[2];
						var name_cate = data_Ar[3];
						$(".subcategory_principal_content").append('<div class="card shadow mb-4 subcategory_class"><div class="card-header py-3"><h6 class="m-0 font-weight-bold text-primary">'+name_cate+'</h6><div style="position: absolute;right: 0;top: 0;margin-top: 10px;margin-right: 6px;"><a  href ="#" class="btn btn-info btn-circle btn-sm editable" id='+id_cat+'><i class="fas fa-info-circle"></i></a><a href ="#" style="margin-left: 5px;" class="btn btn-danger btn-circle btn-sm delete" id='+id_cat+'><i class="fas fa-trash"></i></a></div></div><div style="margin-left: 5px;"><a href="">Voir Sous_Categories(12)</a><br>Created At : <span>'+created_at+'</span></div></div>');
					}
				}
			}
		});
		$(".adding").empty();
		$(".adding").append('<a class="ajouter_category_link" style="color: #0083FB;"  id='+id+'>Ajouter Sous Category</a><br><a  class="modifier_category_link" style="color: #0083FB;" id='+id+'>Modifier Cette Category</a><br><a class="supprimer_category_link" style="color: #0083FB;" id='+id+'>Suprimmer Cette Category</a>');
	});
	$(document).on('click','#add_cat',function(){
		$(".add_cat_model").show();
		sessionStorage.setItem("add_coming", "ajouterA");
	});
	$(document).on('click','#annuler_add_popup',function(){
		$('#in_category').val('');
		$(".add_cat_model").hide();
	});
	$(document).on('click','#annuler_up_add_popup',function(){
		$('#up_category').val('');
		$(".update_cat_model").hide();
	});
	$(document).on('click','#ajouter_add_popup',function(){
		var etat = sessionStorage.getItem("add_coming");
		if(etat == "ajouterA"){
			var nom = $('#in_category').val();
			$.ajax({
				url: "category-addData.php",
				data:{
					name : nom,
					comingFrom : '1'
				},
				success: function(data){
					$('#in_category').val('');
					$(".add_cat_model").hide();
					$('.category_principal_content').append('<div class="category_class" id='+data+'><a class="unselectable">'+nom+'</a></div> <br>');
				}
			});	
		}else if(etat == "ajoutera"){
			var nom = $('#in_category').val();
			var id = sessionStorage.getItem("id_cate");
			$.ajax({
				url: "category-addData.php",
				data:{
					name : nom,
					id : id,
					comingFrom : '0'
				},
				success: function(data){
					var Dt = data.split('.');
					var id = Dt[0];
					var nom = Dt[1];
					var c_at = Dt[2];
					$(".subcategory_principal_content").append('<div class="card shadow mb-4 subcategory_class"><div class="card-header py-3"><h6 class="m-0 font-weight-bold text-primary">'+nom+'</h6><div style="position: absolute;right: 0;top: 0;margin-top: 10px;margin-right: 6px;"><a  href ="#" class="btn btn-info btn-circle btn-sm editable" id='+id+'><i class="fas fa-info-circle"></i></a><a href ="#" style="margin-left: 5px;" class="btn btn-danger btn-circle btn-sm delete" id='+id+'><i class="fas fa-trash"></i></a></div></div><div style="margin-left: 5px;"><a href="">Voir Sous_Categories(12)</a><br>Created At : <span>'+c_at+'</span></div></div>');
					$('#in_category').val('');
					$(".add_cat_model").hide();
				}
			});
		}
	});
	$(document).on('click','.editable',function(){
		var id = $(this).attr("id");
		sessionStorage.setItem("id", id);
		var name = $(this).parent().parent().children("h6").text();
		$(".update_cat_model").show();
		$('#up_category').val(name);
	});
	$(document).on('click','.delete',function(){
		var id = $(this).attr("id");
		if (confirm('Are you sure you want to delete this Category')) {
			$.ajax({
				url: "category-deleteData.php",
				data:{
					id : id
				},
				success: function(data){
				}
			});
			$(this).parent().parent().parent().remove();
		}
	});
	$(document).on('click','#modifier_add_popup',function(){
		var new_name = $('#up_category').val();
		var id = sessionStorage.getItem("id");
		// sessionStorage.removeItem("id");
		$.ajax({
			url: "category-updateData.php",
			data:{
				name : new_name,
				id : id
			},
			success: function(data){
				$("#"+id+":first").parent().parent().children("h6").text(new_name);
				$(".update_cat_model").hide();
				$('#up_category').val("");
				// location.reload();
			}
		});	
	});
	$(document).on('click','#annuler_up_add_popup',function(){
		$(".update_cat_model").hide();
		$('#up_category').val("");
	});
	$(document).on('click','.supprimer_category_link',function(){
		var id = $(this).attr("id");
		if (confirm('Are you sure you want to delete this Category')) {
			$.ajax({
				url: "category-deleteData.php",
				data:{
					id : id
				},
				success: function(data){
				}
			});
			location.reload();
		}
	});
	$(document).on('click','.ajouter_category_link',function(){
		$(".add_cat_model").show();
		var id = $(this).attr("id");
		sessionStorage.setItem("add_coming","ajoutera");
		sessionStorage.setItem("id_cate",id);
	});
	$(document).on('click','.modifier_category_link',function(){
	});
	$(document).on('click','',function(){
		
	});


});