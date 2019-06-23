<?php
require_once('connection.php');

if(isset($_GET["t"]) && $_GET["t"] == 'delete') {
  $sql = "DELETE from product where id_product = {$_GET["id"]};";
  var_dump($sql);
  $result = mysqli_query($conn, $sql);
  if(!$result)
  	echo "Error :".$sql;
}
if(isset($_GET["t"]) && $_GET["t"] == 'afficher') {
	echo "<div class='table-responsive'>
				<br>
				<a class='btn btn-info btn-sm' href='ajouter_produit.php'> Ajouter un produit</a>";
	include 'connection.php';
	require_once('myFonctions.php');
	echo "<table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>
		<thead>
			<tr>
				<th class='brand'>brand: name</th>
				<th class='caracteristique'>caracteristique</th>
				<th class='description'>description</th>
				<th class='image'>image</th>
				<th class='is_active'>is_active</th>
				<th class='meta_description'>meta_description</th>
				<th class='meta_keywords'>meta_keywords</th>
				<th class='price'>old_price / price</th>
				<th class='quantity'>quantity</th>
				<th class='slug'>Slug</th>
				<th class='category'>Category-sous_category</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>";
			$requtte = "SELECT * from product;";
			$result = mysqli_query($conn, $requtte);
			while ($row = $result->fetch_assoc()):
			echo "<tr>
				<td class='brand'>".$row['brand_product'].': '.$row['name_product']."</td>
				<td class='caracteristique'>".$row['caracteristique_product']."</td>
				<td class='description'>".$row['description_product']."</td>
				<td class='image'>".$row['image_product']."</td>
				<td class='is_active'>".$row['is_active']."</td>
				<td class='meta_description'>".$row['meta_description_product']."</td>
				<td class='meta_keywords'>".$row['meta_keywords_product']."</td>
				<td class='price'>".$row['old_price_product'].' / '.$row['price_product']."</td>
				<td class='quantity'>".$row['quantity_product']."</td>
				<td class='slug'>".$row['slug_product']."</td>
				<td class='category'>".$row['id_category'].'-'.$row['id_sous_category']."</td>
				<td>
					<div  id='".$row['id_product']."' onclick='delet(this.id)' style='cursor: pointer;'>
						<i class='fa fa-trash' style='font-size:24px'></i></i>
					</div>
					<a name='edit' id='".$row['id_product']."' style='cursor: pointer;' href='ajouter_produit.php?edit={$row['id_product']}'>
						<i class='fa fa-edit' style='font-size:24px'></i></i>
					</a>
				</td>
			</tr>";
		endwhile;
	echo "</tbody>
</table>
</div>";
}




?>
