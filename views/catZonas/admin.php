
<h1>Zonas del P.D.M.U.</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'cat-zona-grid',
	'itemsCssClass'=>"table table-hover table-bordered",
	'pager'=>array("htmlOptions"=>array("class"=>"pagination")), //despues de 10 elementos pagina
	'emptyText'=>'No existen resultados de esta busqueda', //cuando no existe algun registro muestra ese mensaje
	'summaryText'=>'{start}-{end} de {count} Zonas',// muestra el numero que tiene de datos parte superior derecha
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id_zona',
		'zona',
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
