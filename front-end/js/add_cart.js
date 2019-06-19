function add_to_cart(id){

    $.ajax({
    type    : 'post',
    url     : 'add_to_cart.php',
    data    : {'id' : id, 'type': "add_product"},
    success : function(response){
      alert("le produit est ajouté a votre panier");
            },
    error   : function(errResponse){
      alert(errResponse);
            }                     
  });


}
function delete_from_cart(id){

    $.ajax({
    type    : 'post',
    url     : 'add_to_cart.php',
    data    : {'id' : id, 'type': "delete"},
    success : function(response){
      alert("le produit est supp");
            },
    error   : function(errResponse){
      alert(errResponse);
            }                     
  });


}
function add_quentity(id, type){
    var result = document.getElementById('sst'+id);
    var sst2 = result.value;
    if (type == "add") {
        if( !isNaN( sst2 ))
            result.value++;
    }else if (type == "sub") {
        if( !isNaN( sst2 ) & sst2 > 0 ) 
        result.value--;
    }
    var quentity = parseInt(result.value);
    $.ajax({
    type    : 'post',
    url     : 'add_to_cart.php',
    data    : {'id' : id, 'type': "set_quentity", 'quentity': quentity},
    success : function(response){
            location.reload();
            },
    error   : function(errResponse){
      alert(errResponse);
            }                     
  });
}