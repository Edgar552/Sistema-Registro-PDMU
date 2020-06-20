<?php
/* @var $this CatGradoController */
/* @var $model CatGrado */

$this->breadcrumbs=array(
	'Cat Grados'=>array('index'),
	$model->id_grado,
);

$this->menu=array(
	array('label'=>'List CatGrado', 'url'=>array('index')),
	array('label'=>'Create CatGrado', 'url'=>array('create')),
	array('label'=>'Update CatGrado', 'url'=>array('update', 'id'=>$model->id_grado)),
	array('label'=>'Delete CatGrado', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_grado),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CatGrado', 'url'=>array('admin')),
);
?>

<h1>View CatGrado #<?php echo $model->id_grado; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_grado',
		'grado',
	),
)); ?>
