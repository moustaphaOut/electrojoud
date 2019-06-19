$(document).on('click','.update_product',function(){
    var id_product = $(this).attr("idR");
    $.ajax({
      url: "update_product.php",
      data:{
        id_produit : id_product,
      },
      success: function(data){
        var data_Ar = data.split('#');
        var nom = data_Ar[0];
        var brand = data_Ar[1];
        var caract = data_Ar[2];
        var date = data_Ar[3];
        var description = data_Ar[4];
        var old =  data_Ar[5];
        var price = data_Ar[6];
        var quantity = data_Ar[7];
        $("#popup_upmatiere_matiere").val(nom);
        $("#popup_upmatiere_module").val(brand);
        $("#popup_upmatiere_vh").val(caract);
        $("#popup_upmatiere_coeff").val(date);
        $("#popup_upmatiere_semestre").val(description);
        $("#popup_upmatiere_old_price").val(old);
        $("#popup_upmatiere_price").val(price);
        $("#popup_upmatiere_quantity").val(quantity)
        Alert('test');
      }
    });
    $.ajax({
      url: "ressources_get_matiere_update.php",
      dataType:"json",
      data:{
        departement : departement,
        getFiliere : 'true'
      },
      success: function(data){
        for(var i = 0; i <data.length; i++) {
          var data_Al = data[i].split('.');
          var id_f = data_Al[0];
          var nom_f = data_Al[1];
          $("#up_select_filiere").append("<option id="+id_f+">"+nom_f+"</option>");
        }
        $('#up_select_filiere option[id='+id_fili+']').prop('selected', true)
      }
    });
    $(".cadre-updatematiere").show();
  });
  
  $("#cancel-popup-matiere_update").click(function(){
    $(".cadre-updatematiere").hide();
    $("#popup_upmatiere_matiere").val('');
    $("#popup_upmatiere_module").val('');
    $("#popup_upmatiere_vh").val('');
    $("#popup_upmatiere_coeff").val('');
    $("#popup_upmatiere_semestre").val('');
    $("#up_select_niveau").val($("#select_niveau option:first").val());
    $("#up_select_filiere").empty();
  });

  $("#submit-popup-matiere_update").click(function(){
    var nom_matiere = $("#popup_upmatiere_matiere").val();
    var nom_module = $("#popup_upmatiere_module").val();
    var vh = $("#popup_upmatiere_vh").val();
    var coeff = $("#popup_upmatiere_coeff").val();
    var semestre = $("#popup_upmatiere_semestre").val();
    semestre = 'S'+ semestre;
    var filiere = $("#up_select_filiere").val();
    var niveau = $("#up_select_niveau").val();
    var id_matiere = sessionStorage.getItem("id_matiere");
    var id_filiere = sessionStorage.getItem("id_filiere");
    var id_filiere_selected = $("#up_select_filiere :selected").attr("id");
    $.ajax({
      url: "ressources_get_matiere_update.php",
      data:{
        id_matiere : id_matiere,
        id_filiere_new : id_filiere_selected,
        niveau : niveau,
        coeff : coeff ,
        semestre : semestre,
        vh : vh ,
        nom_matiere : nom_matiere,
        nom_module: nom_module,
        update_mat: "true"
      },
      success: function(data){
      }
    });
    var element = $("table").children().find("#"+id_matiere);
    if(id_filiere != id_filiere_selected){
      element.remove();
    }else{
      element.children("td:nth-of-type(1)").html(nom_matiere);
      element.children("td:nth-of-type(2)").html(nom_module);
      element.children("td:nth-of-type(3)").html(vh);
      element.children("td:nth-of-type(4)").html(coeff);
    }
    $("#up_select_filiere").empty();
    $(".cadre-updatematiere").hide();
  });