<!DOCTYPE html>
<html lang="en">

<head>
</head>

<body>
<p>NICE</P>
<br>
        <a href="sampel.php"><label>[+] Tambah Product</label></a>
    <br>
<table border="1">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Price</th>
    <th>Description</th>
</tr>
<?php foreach ($products as $key => $value) { ?>
<tr>
    <td><?php echo $value->product_id; ?><td>  
    <td><?php echo $value->name; ?><td>
    <td><?php echo $value->price; ?><td>
    <td><?php echo $value->description; ?><td>
</tr>
<?php } ?>
</table>
</body>

</html>