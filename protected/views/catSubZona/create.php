<?php
/* @var $this CatSubZonaController */
/* @var $model CatSubZona */

$this->breadcrumbs=array(
	'Cat Sub Zonas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CatSubZona', 'url'=>array('index')),
	array('label'=>'Manage CatSubZona', 'url'=>array('admin')),
);
?>

<h1>Create CatSubZona</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>