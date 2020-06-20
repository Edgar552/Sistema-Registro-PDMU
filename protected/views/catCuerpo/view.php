<?php
/* @var $this CatCuerpoController */
/* @var $model CatCuerpo */

$this->breadcrumbs=array(
	'Cat Cuerpos'=>array('index'),
	$model->id_cuerpo,
);

$this->menu=array(
	array('label'=>'List CatCuerpo', 'url'=>array('index')),
	array('label'=>'Create CatCuerpo', 'url'=>array('create')),
	array('label'=>'Update CatCuerpo', 'url'=>array('update', 'id'=>$model->id_cuerpo)),
	array('label'=>'Delete CatCuerpo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_cuerpo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CatCuerpo', 'url'=>array('admin')),
);
?>

<h1>View CatCuerpo #<?php echo $model->id_cuerpo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_cuerpo',
		'cuerpo',
	),
)); ?>
