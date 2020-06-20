<?php
/* @var $this CatZonasController */
/* @var $model CatZonas */

$this->breadcrumbs=array(
	'Cat Zonases'=>array('index'),
	$model->id_zona,
);

$this->menu=array(
	array('label'=>'List CatZonas', 'url'=>array('index')),
	array('label'=>'Create CatZonas', 'url'=>array('create')),
	array('label'=>'Update CatZonas', 'url'=>array('update', 'id'=>$model->id_zona)),
	array('label'=>'Delete CatZonas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_zona),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CatZonas', 'url'=>array('admin')),
);
?>

<h1>View CatZonas #<?php echo $model->id_zona; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_zona',
		'zona',
	),
)); ?>
