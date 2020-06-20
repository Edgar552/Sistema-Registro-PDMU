

<h1>Estado de Fuerza de Cuartel de Zona S.L.P.</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'reg-elemento-grid',
	'itemsCssClass'=>"table table-hover table-bordered",
	'pager'=>array("htmlOptions"=>array("class"=>"pagination")), //despues de 10 elementos pagina
	'emptyText'=>'No existen resultados de esta busqueda', //cuando no existe algun registro muestra ese mensaje
	'summaryText'=>'{start}-{end} de {count} Elementos',// muestra el numero que tiene de datos parte superior derecha
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id_elemento',
		//'fotografia',
		array(
		'name'=>'nombre',
		'header'=>'Nombre',
		
		),

		array(
		'name'=>'ape_pat',
		'header'=>'Apellido Paterno',
		
		),
		array(
		'name'=>'ape_mat',
		'header'=>'Apellido Materno',
		
		),
		array(
		'name'=>'id_grado',
		'header'=>'Grado',
		'value'=>'RegElemento::getNameGrado($data->id_grado)',
		),
		/*
		'id_cargo',
		'id_cuerpo',
		'id_zona',*/
		array(
		'name'=>'id_subzona',
		'header'=>'Lugar',
		'value'=>'RegElemento::getNameLugar($data->id_subzona)',
		),
		array(
		'name'=>'matricula',
		'header'=>'N° Membresia',
		),
	
		/*
		'domicilio',
		'curp',
		'fecha_nacimiento',
		'fecha_ingreso',
		'telefono',
		*/
		array(
		'name'=>'id_status',
		'header'=>'Status',
		'value'=>'RegElemento::getNameStatus($data->id_status)',
		),
		
		array(
			'class'=>'CButtonColumn',
			'header'=>'Acciones',
			'template'=>'{update}{delete}', //modifica mi tema y solo recibe las acciones que le indico
			'deleteConfirmation'=>('Desea Borrar El Registro?'),
			'buttons'=>array(
					'update'=>array('rel'=>'tooltip',
					'options'=>array(
					'data-toggle'=>'tooltip',
					'title'=>Yii::t('app','Actualizar')
									),
				'label'=>'<i class="fa fa-refresh fa-2x"></i>',
				'imageUrl'=>false,
				'updateButtonUrl'=>'Yii::app()->controller->createUrl("update")',
							),

					'delete'=>array(
					'options'=>array('rel'=>'tooltip',
					'data-toggle'=>'tooltip',
					'title'=>Yii::t('app','Eliminar')
					),
					'label'=>'<i class="fa fa-times fa-2x"></i>',
					'imageUrl'=>false,
					'deleteConfirmation'=>'Esta seguro que desea borrar el registro?',
					'deleteButtonUrl'=>'Yii::app()controller->createUrl("delete")',
					),
				),
			),
		),
)); ?>


<!--
		'id_elemento',
		'fotografia',
		'fecha_registro',
		'nombre',
		'ape_pat',
		'ape_mat',
		/*
		'matricula',
		'id_renovacion',
		'id_genero',
		'fecha_nacimiento',
		'id_lugar_nacimiento',
		'domicilio',
		'codigo_postal',
		'telefono',
		'curp',
		'id_municipio',
		'id_ocupacion',
		'id_estado_civil',
		'id_grado_estudio',
		'desc_grado_estudio',
		'num_ss',
		'id_tipo_sanguineo',
		'referencias_medicas',
		'id_zona',
		'id_subzona',
		'id_grado',
		'id_cuerpo',
		'id_cargo',
		'fecha_ingreso',
		'fecha_jura_bandera',
		'fecha_jura_guion',
		'id_status',
		'reclutamiento',
		'numero_lista',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
