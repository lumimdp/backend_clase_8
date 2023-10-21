<?php

$link = mysqli_connect("localhost", "root", "infovia", "tienda");

if (!$link) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}


echo "<h1>TODOS ORDENADOS POR PRENDA</h1>";

$todo = $link->query("SELECT * FROM ropa ORDER BY prenda ASC");
while($row = mysqli_fetch_array($todo)) {
	
	echo '<div style="border: 2px solid #000; border-radius: 12px; padding-left:10px;">';
	echo "<p>Tipo: ".$row['prenda']." - Marca: ".$row['marca']." - Talle: ".$row['talle']." - Precio: $".$row['precio']."</p>";
	echo "</div><br>";
	
}


echo "<br><br><h1>TODOS ORDENADOS SEGUN ID</h1>";

$todo = $link->query("SELECT * FROM ropa");
while($row = mysqli_fetch_array($todo)) {
	
	echo '<div style="border: 2px solid #000; border-radius: 12px; background: #55db9a; padding-left:10px;">';
	echo "<p>ID: ".$row['id']."' - Tipo: ".$row['prenda']." - Marca: ".$row['marca']." - Talle: ".$row['talle']." - Precio: $".$row['precio']."</p>";
	echo "</div><br>";
	
}

echo "<br><br><h1>BUZOS</h1>";

$buzo = $link->query("SELECT * FROM ropa WHERE prenda LIKE 'buzo' ORDER BY prenda ASC");
while($row = mysqli_fetch_array($buzo)) {
	
	echo '<div style="border: 2px solid #000; border-radius: 12px; background: #5a8c6d; padding-left:10px;">';
	echo "<p>Tipo: ".$row['prenda']." - Marca: ".$row['marca']." - Talle: ".$row['talle']." - Precio: $".$row['precio']."</p>";
	echo "</div><br>";
	
}

echo "<br><br><h1>NIKE</h1>";

$buzo = $link->query("SELECT * FROM ropa WHERE marca LIKE 'nike' ORDER BY prenda ASC");
while($row = mysqli_fetch_array($buzo)) {
	
	echo '<div style="border: 2px solid #000; border-radius: 12px; background: #aa47bc; padding-left:10px;">';
	echo "<p>Tipo: ".$row['prenda']." - Marca: ".$row['marca']." - Talle: ".$row['talle']." - Precio: $".$row['precio']."</p>";
	echo "</div><br>";
	
}

echo "<br><br><h1>PRECIO MAYO A 500</h1>";

$buzo = $link->query("SELECT * FROM ropa WHERE precio > 500 ORDER BY prenda ASC");
while($row = mysqli_fetch_array($buzo)) {
	
	echo '<div style="border: 2px solid #000; border-radius: 12px; background: #57c6a7; padding-left:10px;">';
	echo "<p>Tipo: ".$row['prenda']." - Marca: ".$row['marca']." - Talle: ".$row['talle']." - Precio: $".$row['precio']."</p>";
	echo "</div><br>";
	
}
?>
