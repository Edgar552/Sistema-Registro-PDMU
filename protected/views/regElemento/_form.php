<div class="form">


<?php 
       $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id'=>'horizontalForm',
        'type'=>'horizontal',
        'htmlOptions'=>array('class'=>'well'),
	
)); ?>
   
<div style="float:left;padding:10px;width: 100%">
	<h4>REGISTRO DE PERSONAL XXIV ZONA SAN LUIS POTOSI</h4>
</div>


<div style="float:left;padding:10px;width:100%">
 <div class="row">
   <?php if(!$model->isNewRecord)
    { //mostramos la imagen?>
   

  <?php echo CHtml::image('../PDMU/images/'.$model->fotografia,"fotografia",array("width"=>200,'title'=>$model->fotografia)); ?>

    <?php } ?>

    <?php 
        echo $form->labelEx($model, ' Cargar Fotografia ');
        echo $form->fileField($model, 'picture');
        echo $form->error($model, 'picture');
    ?>

 </div>
</div>

<div style="float:left;padding:10px">
    <div class="row">
    	<label >Matrícula Nacional</label>
	<?php echo $form->textField($model,'matricula',array('size'=>45,'maxlength'=>45,'placeholder'=>'N° Matricula')); ?>
	</div>
</div>


<div style="float:left;padding:10px">
 <div class="row">
		<?php echo $form->labelEx($model,'Tipo de Solicitud'); ?>
		<?php echo $form->dropDownList($model,'id_renovacion',RegElemento::getListRenovacion(),
		array('style'=>'width::10%'));?>
		<?php echo $form->error($model,'id_renovacion'); ?>
	</div>
</div>


<div style="float:left;padding:10px">
 <div class="row">
 
		
		<label >Fecha de Registro</label>
		<?php
		$this->widget("zii.widgets.jui.CJuiDatePicker",array(
		"attribute"=>"fecha_registro",
		"model"=>$model,
		"language"=>"es",
		"options"=>array(
			'autoSize'=>'true',
		  	'changeMonth' => 'true', 
		    'changeYear' => 'true', 
			 'dateFormat' => 'dd/MM/yy',
			'yearRange'=>'2010:2020',
			'defaultDate'=>$model->fecha_registro,
			),
 			'htmlOptions'=>array('readonly' => true,'style'=>'cursor:pointer')
			));?>

	</div>
</div>

<div style="float:left;padding:10px;width:20%">
	<div class="row">
		<label>Año</label>
		<?php echo $form->dropDownList($model,'year_registro',array('2019'=>'2019',
																	  '2018'=>'2018',
																	  '2017'=>'2017'),array('style'=>'width:70px')); ?>
		
		<?php echo $form->error($model,'year_registro'); ?>

	</div>
</div>

<div style="float:left;padding:10px;width:100%">
	<h4>DATOS PERSONALES</h4>
</div>

<div style="float:left;padding:10px">
    <div class="row">
    	<label >Nombre</label>
		<?php echo $form->textField($model,'nombre',array('size'=>45,'maxlength'=>45,'placeholder'=>'Nombre(s)')); ?>
	</div>
</div>

<div style="float:left;padding:10px">
    <div class="row">
    	<label >Apellido Paterno</label>
		<?php echo $form->textField($model,'ape_pat',array('size'=>45,'maxlength'=>45,'placeholder'=>'Apellido Paterno')); ?>
	</div>
</div>

<div style="float:left;padding:10px">
    <div class="row">
    	<label >Apellido Materno</label>
		<?php echo $form->textField($model,'ape_mat',array('size'=>45,'maxlength'=>45,'placeholder'=>'Apellido Materno')); ?>
	</div>
</div>

<div style="float:left;padding:10px;width: 20%">
    <div class="row">
	
		<label >Género</label>
		<?php echo $form->dropDownList($model,'id_genero',RegElemento::getListGenero(),
		array('style'=>'width:100%')); ?>
	</div>
</div>




<div style="float:left;padding:10px">
    <div class="row">

		<label>Fecha de Nacimiento</label>
		<?php
		$this->widget("zii.widgets.jui.CJuiDatePicker",array(
		"attribute"=>"fecha_nacimiento",
		"model"=>$model,
		"language"=>"es",
		"options"=>array(
			'autoSize'=>'true',
		  	'changeMonth' => 'true', 
		    'changeYear' => 'true', 
			 'dateFormat' => 'dd/MM/yy',
			'yearRange'=>'1940:2012',
			//'defaultDate'=>$model->fecha_nacimiento,
			),
 			'htmlOptions'=>array('readonly' => true,'style'=>'cursor:pointer')
			));?>
	</div>
</div>

<div style="float:left;padding:10px">
    <div class="row">
		<label >Lugar de Nacimiento</label>
		<?php echo $form->dropDownList($model,'id_lugar_nacimiento',RegElemento::getListLugarNacimiento(),
		array('style'=>'with::150%'));?>
	</div>
</div>

<div style="float:left;padding:10px;width: 46%">
    <div class="row">
		<label>CURP</label>
		<?php echo $form->textField($model,'curp',array('size'=>45,'maxlength'=>45,'style'=>'text-transform:uppercase;')); ?>
	</div>
</div>

<div style="float:left;padding:10px">
    <div class="row">
		<label>Ocupación Actual</label>
		<?php echo $form->dropDownList($model,'id_ocupacion',RegElemento::getListOcupacion(),array('style'=>'with::150%'));?>
	</div>
</div>

<div style="float:left;padding:10px;width: 72%">
    <div class="row">
	  <label>Estado Civil</label>
	  <?php echo $form->dropDownList($model,'id_estado_civil',RegElemento::getListEstadoCivil(),array('style'=>'with::150%'));?>
	</div>
</div>

<div style="float:left;padding:10px;width:100%">
	<h4>DATOS ACADÉMICOS</h4>
</div>

<div style="float:left;padding:10px">
    <div class="row">
	  <label>Grado de Estudios</label>
	  <?php echo $form->dropDownList($model,'id_grado_estudio',RegElemento::getListGradoEstudio(),array('style'=>'with::150%'));?>
	</div>
</div>

<div style="float:left;padding:10px;width: 72%">
    <div class="row">
	  <label>Nivel Actual</label>
	  <?php echo $form->textField($model,'desc_grado_estudio',array('size'=>45,'maxlength'=>45));?>
	</div>
</div>

<div style="float:left;padding:10px;width:100%">
	<h4>DATOS MÉDICOS</h4>
</div>

<div style="float:left;padding:10px">
    <div class="row">
	  <label>N° de Seguro Social</label>
	  <?php echo $form->textField($model,'num_ss',array('size'=>45,'maxlength'=>45)); ?>
	</div>
</div>

<div style="float:left;padding:10px">
    <div class="row">
	  <?php echo $form->labelEx($model,'Tipo Sanguineo'); ?>
	  <?php echo $form->dropDownList($model,'id_tipo_sanguineo',RegElemento::getListTipoSanguineo(),array('style'=>'width::150%'));?>
	</div>
</div>

<div style="float:left;padding:10px;width: 46%">
    <div class="row">
	  <label>Referencias Médicas</label>
	  <?php echo $form->textField($model,'referencias_medicas',array('size'=>45,'maxlength'=>45)); ?>
	</div>
</div>

<div style="float:left;padding:10px;width:100%">
	<h4>DOMICILIO DEL ELEMENTO</h4>
</div>

<div style="float:left;padding:10px;width: 49%">
    <div class="row">
		<label>Domicilio</label>
		<?php echo $form->textField($model,'domicilio',array('maxlength'=>95,'placeholder'=>'Calle, Numero, Colonia *En ese orden*','style'=>'width:97%')); ?>
	</div>
</div>

<div style="float:left;padding:10px;width: 24%">
    <div class="row">
		<label>Municipio</label>
		<?php echo $form->dropDownList($model,'id_municipio',RegElemento::getListMunicipio(),array('style'=>'width::150%'));?>
	</div>
</div>

<div style="float:left;padding:10px;width: 18%">
    <div class="row">
		<label>Código Postal</label>
		<?php echo $form->textField($model,'codigo_postal',array('maxlength'=>95,'style'=>'width:97%')); ?>
	</div>
</div>

<div style="float:left;padding:10px;width: 100%">
    <div class="row">
		<label>Télefono / Celular</label>
		<?php echo $form->textField($model,'telefono',array('maxlength'=>12,'style'=>'width::93%')); ?>
	</div>
</div>

<div style="float:left;padding:10px;width:100%">
	<h4>DATOS DEl P.D.M.U.</h4>
</div>

<div style="float:left;padding:10px">
    <div class="row">	
	  <label>Zona Perteneciente</label>
	  <?php echo $form->dropDownList($model,'id_zona',RegElemento::getListZona(),array('style'=>'width::150%'));?>
	</div>
</div>

<div style="float:left;padding:10px">
    <div class="row">	
	  <label>Sub Zona / Unidad</label>
	  <?php echo $form->dropDownList($model,'id_subzona',RegElemento::getListSubzona(),array('style'=>'width::150%'));?>
	</div>
</div>

<div style="float:left;padding:10px">
    <div class="row">	
	  <label>Grado Actual</label>
	  <?php echo $form->dropDownList($model,'id_grado',RegElemento::getListGrado(),array('style'=>'width::100%'));?>
	</div>
</div>

<div style="float:left;padding:10px;width:20%">
    <div class="row">
	  <label>Cuerpo</label>
	  <?php echo $form->dropDownList($model,'id_cuerpo',RegElemento::getListCuerpo(),array('style'=>'width:100%'));?>
	</div>
</div>

<div style="float:left;padding:10px;width: 100%">
    <div class="row">	
		<label>Cargo</label>
		<?php echo $form->dropDownList($model,'id_cargo',RegElemento::getListCargo(),array('style'=>'width::150%'));?>
	</div>
</div>

<div style="float:left;padding:10px">
    <div class="row">	
		<label>Fecha de Ingreso</label>
		<?php
		$this->widget("zii.widgets.jui.CJuiDatePicker",array(
		"attribute"=>"fecha_ingreso",
		"model"=>$model,
		"language"=>"es",
		"options"=>array(
			'autoSize'=>'true',
		  	'changeMonth' => 'true', 
		    'changeYear' => 'true', 
			 'dateFormat' => 'dd/MM/yy',
			'yearRange'=>'1940:2012',
			//'defaultDate'=>$model->fecha_nacimiento,
			),
 			'htmlOptions'=>array('readonly' => true,'style'=>'cursor:pointer')
			));?>
	</div>
</div>

<div style="float:left;padding:10px">
    <div class="row">
		<label>Jura de Bandera Nacional</label>
		<?php
		$this->widget("zii.widgets.jui.CJuiDatePicker",array(
		"attribute"=>"fecha_jura_bandera",
		"model"=>$model,
		"language"=>"es",
		"options"=>array(
			'autoSize'=>'true',
		  	'changeMonth' => 'true', 
		    'changeYear' => 'true', 
			 'dateFormat' => 'dd/MM/yy',
			'yearRange'=>'1940:2018',
			//'defaultDate'=>$model->fecha_nacimiento,
			),
 			'htmlOptions'=>array('readonly' => true,'style'=>'cursor:pointer')
			));?>
	</div>
</div>

<div style="float:left;padding:10px">
    <div class="row">
		<?php echo $form->labelEx($model,'Jura de Bandera Guion'); ?>
		<?php
		$this->widget("zii.widgets.jui.CJuiDatePicker",array(
		"attribute"=>"fecha_jura_guion",
		"model"=>$model,
		"language"=>"es",
		"options"=>array(
			'autoSize'=>'true',
		  	'changeMonth' => 'true', 
		    'changeYear' => 'true', 
			 'dateFormat' => 'dd/MM/yy',
			'yearRange'=>'1940:2018',
			//'defaultDate'=>$model->fecha_nacimiento,
			),
 			'htmlOptions'=>array('readonly' => true,'style'=>'cursor:pointer')
			));?>
	</div>
</div>

<div style="float:left;padding:10px;width: 20%">
    <div class="row">		
		<label>Reclutamiento</label>
		<?php echo $form->textField($model,'reclutamiento',array('style'=>'width:100%'));?>
	</div>
</div>

<div style="float:left;padding:10px">
    <div class="row">	
		<label>N° de Lista</label>
		<?php echo $form->textField($model,'numero_lista'); ?>
	</div>
</div>

<div style="float:left;padding:10px">
    <div class="row">	
		<label>Estado del Elemento</label>
		<?php echo $form->dropDownList($model,'id_status',RegElemento::getListStatus(),array('style'=>'with::150%')); ?>
	
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Generar Registro' : 'Actualizar Registro',array('class'=>'btn btn-primary')); ?>
	</div>
</div>
	<div class="row buttons" style="margin-left: 10px">

	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

