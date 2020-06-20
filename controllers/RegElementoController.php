<?php

class RegElementoController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			//array('path.alias.to.booster.filters.BoosterFilter - delete')

		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new RegElemento;
 		$path_picture = realpath( Yii::app( )->getBasePath( )."/../images/" )."/";//ruta final de la imagen
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['RegElemento']))
		{
			$model->attributes=$_POST['RegElemento'];


			//-----------------START FOTO------------
			  $rnd = rand(0,99999);  // generate random number between 0-9999
			   $uploadedFile=CUploadedFile::getInstance($model,'picture');
				$fileName = "{$rnd}-{$uploadedFile}";  
				// random number + file name or puedes usar: $fileName=$uploadedFile->getName();
			if(!empty($uploadedFile))  // VERIFICA SI NUESTRA IMAGEN SE CARGO O NO
            {
                $uploadedFile->saveAs($path_picture.$fileName);
                $model->fotografia= $fileName;
            }

            //------------END FOTO----------------------

			if($model->save())
				$this->redirect(array('admin'));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
   		 $path_picture = realpath( Yii::app( )->getBasePath( )."/../images/" )."/";//ruta final de la imagen

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['RegElemento']))
		{
			$model->attributes=$_POST['RegElemento'];

        ////////////////////////////////////////////////////////////////////
        $rnd = rand(0,99999);  // generate random number between 0-9999
        $uploadedFile=CUploadedFile::getInstance($model,'picture');
 
        if ($model->fotografia==''||$model->fotografia==null) {//si el campo de la imagen está vacio o es null
             
            $fileName = "{$rnd}-{$uploadedFile}";  // random number + file name or puedes usar: $fileName=$uploadedFile->getName();
        }
        else{//ya tenemos una imagen registrada
            $fileName=$model->fotografia;
        }
         
        if(!empty($uploadedFile))  // check if uploaded file is set or not
        {
             
            $uploadedFile->saveAs($path_picture.$fileName);// image will uplode to rootDirectory/banner/
            $model->fotografia=$fileName;
 
        }
        ////////////////////////////////////////////////////////////////////
			if($model->save())
				$this->redirect(array('admin'));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('RegElemento');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new RegElemento('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['RegElemento']))
			$model->attributes=$_GET['RegElemento'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=RegElemento::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='reg-elemento-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
