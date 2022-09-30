
<?php
$contactos = array (
array("id"=>"1", "nombre"=>"asd", "telf"=> 666111222),
array("id"=>"2", "nombre"=>"dfg", "telf"=>666111222),
array("id"=>"3", "nombre"=>"sdf", "telf"=>666111222)
);
foreach ($contactos as $contacto) echo ("<p>id: ".$contacto["id"]." nombre: ".$contacto["nombre"]." telf: ".$contacto["telf"]."</p>");
?>