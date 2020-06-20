<?php
/* @var $this CatCargoController */
/* @var $model CatCargo */

$this->breadcrumbs=array(
	'Cat Cargos'=>array('index'),
	$model->id_cargo,
);

$this->menu=array(
	array('label'=>'List CatCargo', 'url'=>array('index')),
	array('label'=>'Create CatCargo', 'url'=>array('create')),
	array('label'=>'Update CatCargo', 'url'=>array('update', 'id'=>$model->id_cargo)),
	array('label'=>'Delete CatCargo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_cargo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CatCargo', 'url'=>array('admin')),
);
?>

<h1>View CatCargo #<?php echo $model->id_cargo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_cargo',
		'cargo',
	),
)); ?>
