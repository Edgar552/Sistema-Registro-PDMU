<?php

/**
 * This is the model class for table "reg_elemento".
 *
 * The followings are the available columns in table 'reg_elemento':
 * @property integer $id_elemento
 * @property string $fotografia
 * @property string $fecha_registro
 * @property string $nombre
 * @property string $ape_pat
 * @property string $ape_mat
 * @property string $matricula
 * @property integer $id_renovacion
 * @property integer $id_genero
 * @property string $fecha_nacimiento
 * @property integer $id_lugar_nacimiento
 * @property string $domicilio
 * @property integer $codigo_postal
 * @property integer $telefono
 * @property string $curp
 * @property integer $id_municipio
 * @property integer $id_ocupacion
 * @property integer $id_estado_civil
 * @property integer $id_grado_estudio
 * @property string $desc_grado_estudio
 * @property string $num_ss
 * @property integer $id_tipo_sanguineo
 * @property string $referencias_medicas
 * @property integer $id_zona
 * @property integer $id_subzona
 * @property integer $id_grado
 * @property integer $id_cuerpo
 * @property integer $id_cargo
 * @property string $fecha_ingreso
 * @property string $fecha_jura_bandera
 * @property string $fecha_jura_guion
 * @property integer $id_status
 * @property integer $reclutamiento
 * @property integer $numero_lista
 *
 * The followings are the available model relations:
 * @property CatCargo $idCargo
 * @property CatCuerpo $idCuerpo
 * @property CatEstadoCivil $idEstadoCivil
 * @property CatGenero $idGenero
 * @property CatGrado $idGrado
 * @property CatGradoEstudio $idGradoEstudio
 * @property CatLugarNacimiento $idLugarNacimiento
 * @property CatMunicipio $idMunicipio
 * @property CatOcupacion $idOcupacion
 * @property CatRenovacion $idRenovacion
 * @property CatStatus $idStatus
 * @property CatSubzona $idSubzona
 * @property CatTipoSanguineo $idTipoSanguineo
 * @property CatZonas $idZona
 */
class RegElemento extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return RegElemento the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

//LIST GRADO //SIRVE PARA DESGLOZAR LA LISTA DE LOS GRADOS EN _FORM _ACTUALIZAR_ CREAR
	public static function getListGrado()

	{ 
	return CHtml ::listData(CatGrado::model()->findAll(),'id_grado',
			'grado');
	}

	public static function getNameGrado($id_grado)
	{ 
		$grado=CatGrado::model()->find('id_grado='.$id_grado);
		return $grado['grado'];
	}


//LIST CARGO //SIRVE PARA DESGLOZAR LA LISTA DE LOS CARGSOS A EN _FORM _ACTUALIZAR_ CREAR
	public static function getListCargo()

	{ 
	return CHtml ::listData(CatCargo::model()->findAll(),'id_cargo',
			'cargo');
	}

//LIST CUERPO //SIRVE PARA DESGLOZAR LA LISTA DE LOS CUERPOS A EN _FORM _ACTUALIZAR_ CREAR
	public static function getListCuerpo()

	{ 
	return CHtml ::listData(CatCuerpo::model()->findAll(),'id_cuerpo',
			'cuerpo');
	}
//LIST Zona //SIRVE PARA DESGLOZAR LA LISTA DE LAS ZONAS A EN _FORM _ACTUALIZAR_ CREAR
	public static function getListZona()

	{ 
	return CHtml ::listData(CatZonas::model()->findAll(),'id_zona',
			'zona');
	}

//LIST SUB ZONA //SIRVE PARA DESGLOZAR LA LISTA DE LAS SUB ZONAS A EN _FORM _ACTUALIZAR_ CREAR

	public static function getListSubzona()

	{ 
	return CHtml ::listData(CatSubZona::model()->findAll(),'id_reg_subzona',
			'subzona');
	}

	public static function getNameLugar($id_reg_subzona)
	{ 
		$subzona=CatSubZona::model()->find('id_reg_subzona='.$id_reg_subzona);
		return $subzona['subzona'];
	}

//LIST STATUS //SIRVE PARA DESGLOZAR LA LISTA DE LOS STATUS A EN _FORM _ACTUALIZAR_ CREAR

	public static function getListStatus()

	{ 
	return CHtml ::listData(CatStatus::model()->findAll(),'id_status',
			'status');
	}

	public static function getNameStatus($id_status)
	{ 
		$status=CatStatus::model()->find('id_status='.$id_status);
		return $status['status'];
	}

//LIST TIPO SANGUINEO //SIRVE PARA DESGLOZAR LA LISTA DE LOS TIPO SANGUINEO A EN _FORM _ACTUALIZAR_ CREAR

	public static function getListTipoSanguineo()

	{ 
	return CHtml ::listData(CatTipoSanguineo::model()->findAll(),'id_tipo_sanguineo',
			'tipo_sanguineo');
	}


//LIST GRADO ESTUDIO //SIRVE PARA DESGLOZAR LA LISTA DE LOS GRADOS ESTUDIOS  EN _FORM _ACTUALIZAR_ CREAR

	public static function getListGradoEstudio()

	{ 
	return CHtml ::listData(CatGradoEstudio::model()->findAll(),'id_grado_estudio',
			'grado_estudio');
	}
//LIST ESTADO CIVIL //SIRVE PARA DESGLOZAR LA LISTA DE LOSESTADO CIVIL  EN _FORM _ACTUALIZAR_ CREAR

	public static function getListEstadoCivil()

	{ 
	return CHtml ::listData(CatEstadoCivil::model()->findAll(),'id_estado_civil',
			'estado_civil');
	}

//LIST OCUPACION //SIRVE PARA DESGLOZAR LA LISTA DE LOS OCUPACION  EN _FORM _ACTUALIZAR_ CREAR
	public static function getListOcupacion()

	{ 
	return CHtml ::listData(CatOcupacion::model()->findAll(),'id_ocupacion',
			'ocupacion');
	}

//LIST MUNICIPIO //SIRVE PARA DESGLOZAR LA LISTA DE LOS MUNICIPIO  EN _FORM _ACTUALIZAR_ CREAR
	public static function getListMunicipio()

	{ 
	return CHtml ::listData(CatMunicipio::model()->findAll(),'id_municipio',
			'municipio');
	}

//LIST LUGAR NACIMIENTO //SIRVE PARA DESGLOZAR LA LISTA DE LOS LUGAR NACIMIENTO   EN _FORM _ACTUALIZAR_ CREAR
	public static function getListLugarNacimiento()

	{ 
	return CHtml ::listData(CatLugarNacimiento::model()->findAll(),'id_lugar_nacimiento',
			'lugar_nacimiento');
	}


//LIST GENERO //SIRVE PARA DESGLOZAR LA LISTA DE LOS GENERO EN _FORM _ACTUALIZAR_ CREAR
	public static function getListGenero()

	{ 
	return CHtml ::listData(CatGenero::model()->findAll(),'id_genero',
			'genero');
	}

//LIST RENOVACION //SIRVE PARA DESGLOZAR LA LISTA DE LOS RENOVACION EN _FORM _ACTUALIZAR_ CREAR
	public static function getListRenovacion()

	{ 
	return CHtml ::listData(CatRenovacion::model()->findAll(),'id_renovacion',
			'renovacion');
	}


		/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'reg_elemento';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fecha_registro, nombre, matricula, id_renovacion, id_genero, fecha_nacimiento, id_lugar_nacimiento, domicilio, telefono, curp, id_municipio, id_ocupacion, id_estado_civil, id_grado_estudio, desc_grado_estudio, id_zona, id_subzona, id_grado, id_cuerpo, id_cargo, id_status', 'required'),
			array('id_renovacion, id_genero, id_lugar_nacimiento, codigo_postal, telefono, id_municipio, id_ocupacion, id_estado_civil, id_grado_estudio, id_tipo_sanguineo, id_zona, id_subzona, id_grado, id_cuerpo, id_cargo, id_status, reclutamiento, numero_lista,year_registro', 'numerical', 'integerOnly'=>true),
			
			array('fotografia', 'length', 'max'=>280),
			
			array('fecha_registro, nombre, ape_pat, ape_mat, matricula, fecha_nacimiento, domicilio, curp, desc_grado_estudio, num_ss, referencias_medicas, fecha_ingreso, fecha_jura_bandera, fecha_jura_guion', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_elemento, fotografia, fecha_registro, nombre, ape_pat, ape_mat, matricula, id_renovacion, id_genero, fecha_nacimiento, id_lugar_nacimiento, domicilio, codigo_postal, telefono, curp, id_municipio, id_ocupacion, id_estado_civil, id_grado_estudio, desc_grado_estudio, num_ss, id_tipo_sanguineo, referencias_medicas, id_zona, id_subzona, id_grado, id_cuerpo, id_cargo, fecha_ingreso, fecha_jura_bandera, fecha_jura_guion, id_status, reclutamiento, numero_lista', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'idCargo' => array(self::BELONGS_TO, 'CatCargo', 'id_cargo'),
			'idCuerpo' => array(self::BELONGS_TO, 'CatCuerpo', 'id_cuerpo'),
			'idEstadoCivil' => array(self::BELONGS_TO, 'CatEstadoCivil', 'id_estado_civil'),
			'idGenero' => array(self::BELONGS_TO, 'CatGenero', 'id_genero'),
			'idGrado' => array(self::BELONGS_TO, 'CatGrado', 'id_grado'),
			'idGradoEstudio' => array(self::BELONGS_TO, 'CatGradoEstudio', 'id_grado_estudio'),
			'idLugarNacimiento' => array(self::BELONGS_TO, 'CatLugarNacimiento', 'id_lugar_nacimiento'),
			'idMunicipio' => array(self::BELONGS_TO, 'CatMunicipio', 'id_municipio'),
			'idOcupacion' => array(self::BELONGS_TO, 'CatOcupacion', 'id_ocupacion'),
			'idRenovacion' => array(self::BELONGS_TO, 'CatRenovacion', 'id_renovacion'),
			'idStatus' => array(self::BELONGS_TO, 'CatStatus', 'id_status'),
			'idSubzona' => array(self::BELONGS_TO, 'CatSubzona', 'id_subzona'),
			'idTipoSanguineo' => array(self::BELONGS_TO, 'CatTipoSanguineo', 'id_tipo_sanguineo'),
			'idZona' => array(self::BELONGS_TO, 'CatZonas', 'id_zona'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_elemento' => 'Id Elemento',
			'fotografia' => 'Fotografia',
			'fecha_registro' => 'Fecha Registro',
			'nombre' => 'Nombre',
			'ape_pat' => 'Ape Pat',
			'ape_mat' => 'Ape Mat',
			'matricula' => 'Matricula',
			'id_renovacion' => 'Id Renovacion',
			'id_genero' => 'Id Genero',
			'fecha_nacimiento' => 'Fecha Nacimiento',
			'id_lugar_nacimiento' => 'Id Lugar Nacimiento',
			'domicilio' => 'Domicilio',
			'codigo_postal' => 'Codigo Postal',
			'telefono' => 'Telefono',
			'curp' => 'Curp',
			'id_municipio' => 'Id Municipio',
			'id_ocupacion' => 'Id Ocupacion',
			'id_estado_civil' => 'Id Estado Civil',
			'id_grado_estudio' => 'Id Grado Estudio',
			'desc_grado_estudio' => 'Desc Grado Estudio',
			'num_ss' => 'Num Ss',
			'id_tipo_sanguineo' => 'Id Tipo Sanguineo',
			'referencias_medicas' => 'Referencias Medicas',
			'id_zona' => 'Id Zona',
			'id_subzona' => 'Id Subzona',
			'id_grado' => 'Id Grado',
			'id_cuerpo' => 'Id Cuerpo',
			'id_cargo' => 'Id Cargo',
			'fecha_ingreso' => 'Fecha Ingreso',
			'fecha_jura_bandera' => 'Fecha Jura Bandera',
			'fecha_jura_guion' => 'Fecha Jura Guion',
			'id_status' => 'Id Status',
			'reclutamiento' => 'Reclutamiento',
			'numero_lista' => 'Numero Lista',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_elemento',$this->id_elemento);
		$criteria->compare('fotografia',$this->fotografia,true);
		$criteria->compare('fecha_registro',$this->fecha_registro,true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('ape_pat',$this->ape_pat,true);
		$criteria->compare('ape_mat',$this->ape_mat,true);
		$criteria->compare('matricula',$this->matricula,true);
		$criteria->compare('id_renovacion',$this->id_renovacion);
		$criteria->compare('id_genero',$this->id_genero);
		$criteria->compare('fecha_nacimiento',$this->fecha_nacimiento,true);
		$criteria->compare('id_lugar_nacimiento',$this->id_lugar_nacimiento);
		$criteria->compare('domicilio',$this->domicilio,true);
		$criteria->compare('codigo_postal',$this->codigo_postal);
		$criteria->compare('telefono',$this->telefono);
		$criteria->compare('curp',$this->curp,true);
		$criteria->compare('id_municipio',$this->id_municipio);
		$criteria->compare('id_ocupacion',$this->id_ocupacion);
		$criteria->compare('id_estado_civil',$this->id_estado_civil);
		$criteria->compare('id_grado_estudio',$this->id_grado_estudio);
		$criteria->compare('desc_grado_estudio',$this->desc_grado_estudio,true);
		$criteria->compare('num_ss',$this->num_ss,true);
		$criteria->compare('id_tipo_sanguineo',$this->id_tipo_sanguineo);
		$criteria->compare('referencias_medicas',$this->referencias_medicas,true);
		$criteria->compare('id_zona',$this->id_zona);
		$criteria->compare('id_subzona',$this->id_subzona);
		$criteria->compare('id_grado',$this->id_grado);
		$criteria->compare('id_cuerpo',$this->id_cuerpo);
		$criteria->compare('id_cargo',$this->id_cargo);
		$criteria->compare('fecha_ingreso',$this->fecha_ingreso,true);
		$criteria->compare('fecha_jura_bandera',$this->fecha_jura_bandera,true);
		$criteria->compare('fecha_jura_guion',$this->fecha_jura_guion,true);
		$criteria->compare('id_status',$this->id_status);
		$criteria->compare('reclutamiento',$this->reclutamiento);
		$criteria->compare('numero_lista',$this->numero_lista);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}