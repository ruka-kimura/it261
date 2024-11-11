<?php

$people['Bret_Baier'] = 'baie_One of the "normal" ones.';
$people['Wolf_Blitzer'] = 'blit_Been around for many years.';
$people['Erin_Burnett'] = 'burn_Has her own show on CNN.';
$people['Jericka_Duncan'] = 'dunc_White House Correspondent.';
$people['Van_Jones'] = 'jone_Always at the big table.';
$people['Rachel_Maddow'] = 'madd_Is interesting.';
$people['Norah O\'Donell'] = 'odon_Sorry that she has left the building.';

//$name = key             $image = value
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pictures Exercise</title>
</head>
<body>

<table>
<?php foreach($people as $name => $image)      :?>
<tr>
<td><img src="gallery-images/<?php echo substr($image, 0, 4);?>.jpg" alt="<?php  echo str_replace('_', ' ', $name)  ;?>"></td>
<td><?php echo str_replace('_', ' ', $name);?></td>
<td><?php echo substr($image, 5)   ;?></td>

<!-- Second image-->
<td><img src="gallery-images/<?php echo substr($image, 0, 4);?>_second.jpg" alt="Second Image of <?php  echo str_replace('_', ' ', $name)  ;?>"></td>
</tr>

<?php endforeach ;?>
</table>
    
</body>
</html>