<?php

/**
 * This is the model class for table "cat_grado_estudio".
 *
 * The followings are the available columns in table 'cat_grado_estudio':
 * @property integer $id_grado_estudio
 * @property string $grado_estudio
 *
 * The followings are the available model relations:
 * @property RegElemento[] $regElementos
 */
class CatGradoEstudio extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CatGradoEstudio the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cat_grado_estudio';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('grado_estudio', 'required'),
			array('grado_estudio', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_grado_estudio, grado_estudio', 'safe', 'on'=>'search'),
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
			'regElementos' => array(self::HAS_MANY, 'RegElemento', 'id_grado_estudio'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_grado_estudio' => 'Id Grado Estudio',
			'grado_estudio' => 'Grado Estudio',
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

		$criteria->compare('id_grado_estudio',$this->id_grado_estudio);
		$criteria->compare('grado_estudio',$this->grado_estudio,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}