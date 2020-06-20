<?php

/**
 * This is the model class for table "cat_municipio".
 *
 * The followings are the available columns in table 'cat_municipio':
 * @property integer $id_municipio
 * @property string $municipio
 *
 * The followings are the available model relations:
 * @property RegElemento[] $regElementos
 */
class CatMunicipio extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CatMunicipio the static model class
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
		return 'cat_municipio';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('municipio', 'required'),
			array('municipio', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_municipio, municipio', 'safe', 'on'=>'search'),
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
			'regElementos' => array(self::HAS_MANY, 'RegElemento', 'id_municipio'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_municipio' => 'Id Municipio',
			'municipio' => 'Municipio',
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

		$criteria->compare('id_municipio',$this->id_municipio);
		$criteria->compare('municipio',$this->municipio,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}