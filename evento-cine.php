<?php
//class event    
include_once('custom-post-type.php');
// 1º Calling the constructor to create the CPT
$post_type_cine = new Custom_Post_Type('cine');
//2º Adding Taxonomy
$post_type_cine->add_taxonomy( 'genero-cine' );
/*
***** ADD META BOX  ************
1º parametro Nombre identificador del metabox
2º Array
*/
// custom Meta boxes for the event 
$post_type_cine->add_meta_box( 
	'Evento cine',
	array(
		'Subtitulo' => 'subtitulo',
		'Sesiones' => 'sesion',
		'Recomendación Edad' => 'tipo_publico',
		'Precio día del espectador' => 'textarea',
		'Precio Taquilla' => 'precio',
		'Comprar Link entradas' => 'link_comprar', 
		'Lugar' => 'lugar',		
		'Link Localización' => 'link_lugar',
		'Link Pelicula' => 'web',
		'Puntos de venta' => 'text',
		'Duración' => 'duracion',
		'genero' => 'genero',
		'Director' => 'text',
		'Reparto' => 'input_largo',
		'Video' => 'video',
		'Evento destacado' => 'destacado',
		'Aviso' => 'aviso',
		'extra' => 'campo_personal'

		)
	);
// Extra meta box using wysiwyg editor 
$post_type_cine->add_meta_box_extra('Sinopsis');
// Defines how to display the columns in the Administrator panel of Wordpress
$columnas_personalizadas = array(
					"cb" => "<input type=\"checkbox\" />",
					"title" => "Película",
					"input_extra" => "Sinopsis",
					"imagen" => "imagen",
					"fecha_hora" => "Fecha y hora",
					"lugar" => "Lugar",
					"genero"=> "Género",
					);
$post_type_cine->custom_columns($columnas_personalizadas);
$post_type_cine->manage_evento_post_custom();
?>
