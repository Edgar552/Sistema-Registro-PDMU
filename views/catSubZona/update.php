<?php
/* @var $this CatSubZonaController */
/* @var $model CatSubZona */

$this->breadcrumbs=array(
	'Cat Sub Zonas'=>array('index'),
	$model->id_reg_subzona=>array('view','id'=>$model->id_reg_subzona),
	'Update',
);

$this->menu=array(
	array('label'=>'List CatSubZona', 'url'=>array('index')),
	array('label'=>'Create CatSubZona', 'url'=>array('create')),
	array('label'=>'View CatSubZona', 'url'=>array('view', 'id'=>$model->id_reg_subzona)),
	array('label'=>'Manage CatSubZona', 'url'=>array('admin')),
);
?>

<h1>Update CatSubZona <?php echo $model->id_reg_subzona; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>