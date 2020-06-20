<?php
/* @var $this RegElementoController */
/* @var $model RegElemento */

$this->breadcrumbs=array(
	'Reg Elementos'=>array('index'),
	$model->id_elemento,
);

$this->menu=array(
	array('label'=>'List RegElemento', 'url'=>array('index')),
	array('label'=>'Create RegElemento', 'url'=>array('create')),
	array('label'=>'Update RegElemento', 'url'=>array('update', 'id'=>$model->id_elemento)),
	array('label'=>'Delete RegElemento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_elemento),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RegElemento', 'url'=>array('admin')),
);
?>

<h1>View RegElemento #<?php echo $model->id_elemento; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_elemento',
		'fotografia',
		'fecha_registro',
		'nombre',
		'ape_pat',
		'ape_mat',
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
	),
)); ?>
