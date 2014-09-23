<?php
//class event    
include_once('custom-post-type.php');
// 1º Llamamos al constructor y creamos nuestro Post type.
$post_type_cine = new Custom_Post_Type('cine');
//2º Añadimos taxonomia al objeto
$post_type_cine->add_taxonomy( 'genero-cine' );
/*
***** ADD META BOX  ************
1º parametro Nombre identificador del metabox
2º Array
	1º- Nombre del metabox
	2º- Tipo de dato
		{
	    -subtitulo
		-fecha
		-hora
		-tipo_publico
		-input_largo
		-input_corto
		-text
		-web 
		-link_comprar
		-precio
		-aviso }


*/
// Configuramos los meta box personalizados para el evento
$post_type_cine->add_meta_box( 
	'Evento cine',
	array(
		'Subtitulo' => 'subtitulo',
		'Sesiones' => 'sesion',
		//'Fecha' => 'fecha',		
		//'Hora' => 'hora',		
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
// Añade el metabox extra para introducir cualquier texto grande. 
$post_type_cine->add_meta_box_extra('Sinopsis');
//cb y title deben aparecer sí o sí. 
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
