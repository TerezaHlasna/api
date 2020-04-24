<?php
include("tridy.php");

$infikovani_lidi = new Virus();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- UIkit Styly -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.2.0/css/uikit.min.css"/>
    <!-- UIkit Javascript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.2.0/js/uikit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.2.0/js/uikit-icons.min.js"></script>
    <title>Document</title>
</head>
<body>
<table class="uk-table uk-table-divider">
<thead>
<tr>
<th>Celkový počet</th>
<th>Podle pohlaví</th>
<th>Průměrný věk</th>

</tr>

</thead>
<tbody>
<tr>
<td><?php echo $infikovani_lidi->vsichni() ?></td>
<td><?php echo $infikovani_lidi->pohlavi_infikovaneho() ?></td>
<td><?php echo $infikovani_lidi->prumerny_vek() ?></td>

</tr>
</tbody>

</table>
    
   
  
</body>
</html>

