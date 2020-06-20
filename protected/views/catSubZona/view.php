<?php
/* @var $this CatSubZonaController */
/* @var $model CatSubZona */

$this->breadcrumbs=array(
	'Cat Sub Zonas'=>array('index'),
	$model->id_reg_subzona,
);

$this->menu=array(
	array('label'=>'List CatSubZona', 'url'=>array('index')),
	array('label'=>'Create CatSubZona', 'url'=>array('create')),
	array('label'=>'Update CatSubZona', 'url'=>array('update', 'id'=>$model->id_reg_subzona)),
	array('label'=>'Delete CatSubZona', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_reg_subzona),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CatSubZona', 'url'=>array('admin')),
);
?>

<h1>View CatSubZona #<?php echo $model->id_reg_subzona; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_reg_subzona',
		'subzona',
	),
)); ?>
