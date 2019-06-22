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
						$(".subcategory_principal_content").append('<div class="card shadow mb-4 subcategory_class"><div class="card-header py-3"><h6 class="m-0 font-weight-bold text-primary">'+name_cate+'</h6><div style="position: absolute;right: 0;top: 0;margin-top: 10px;margin-right: 6px;"><a  href ="#" class="btn btn-info btn-circle btn-sm" id='+id_cat+'><i class="fas fa-info-circle"></i></a><a href ="#" style="margin-left: 5px;" class="btn btn-danger btn-circle btn-sm" id='+id_cat+'><i class="fas fa-trash"></i></a></div></div><div style="margin-left: 5px;"><a href="">Voir Sous_Categories(12)</a><br>Created At : <span>'+created_at+'</span></div></div>');
					}
				}
			}
		});
		$(".adding").empty();
		$(".adding").append('<a href="" id='+id+'>Ajouter Sous Category</a><br><a href="" id='+id+'>Modifier Cette Category</a><br><a href="" id='+id+'>Suprimmer Cette Category</a>');
	});
	$(document).on('click','#add_cat',function(){
		$(".add_cat_model").show();
	});
	$(document).on('click','#annuler_add_popup',function(){
		$('#in_category').val('');
		$(".add_cat_model").hide();
	});
	$(document).on('click','#ajouter_add_popup',function(){
		var nom = $('#in_category').val();
		$.ajax({
			url: "category-addData.php",
			data:{
				name : nom
			},
			success: function(data){
				$('#in_category').val('');
				$(".add_cat_model").hide();
			}
		});
		$('.category_principal_content').append();
	});
	$(document).on('click','',function(){
		
	});
	$(document).on('click','',function(){
		
	});

});