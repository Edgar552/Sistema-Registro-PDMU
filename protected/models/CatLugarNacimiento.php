<?php

/**
 * This is the model class for table "cat_lugar_nacimiento".
 *
 * The followings are the available columns in table 'cat_lugar_nacimiento':
 * @property integer $id_lugar_nacimiento
 * @property string $lugar_nacimiento
 *
 * The followings are the available model relations:
 * @property RegElemento[] $regElementos
 */
class CatLugarNacimiento extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CatLugarNacimiento the static model class
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
		return 'cat_lugar_nacimiento';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('lugar_nacimiento', 'required'),
			array('lugar_nacimiento', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_lugar_nacimiento, lugar_nacimiento', 'safe', 'on'=>'search'),
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
			'regElementos' => array(self::HAS_MANY, 'RegElemento', 'id_lugar_nacimiento'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_lugar_nacimiento' => 'Id Lugar Nacimiento',
			'lugar_nacimiento' => 'Lugar Nacimiento',
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

		$criteria->compare('id_lugar_nacimiento',$this->id_lugar_nacimiento);
		$criteria->compare('lugar_nacimiento',$this->lugar_nacimiento,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}