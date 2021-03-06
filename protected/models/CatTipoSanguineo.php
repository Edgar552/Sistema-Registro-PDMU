<?php

/**
 * This is the model class for table "cat_tipo_sanguineo".
 *
 * The followings are the available columns in table 'cat_tipo_sanguineo':
 * @property integer $id_tipo_sanguineo
 * @property string $tipo_sanguineo
 *
 * The followings are the available model relations:
 * @property RegElemento[] $regElementos
 */
class CatTipoSanguineo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CatTipoSanguineo the static model class
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
		return 'cat_tipo_sanguineo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tipo_sanguineo', 'required'),
			array('tipo_sanguineo', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_tipo_sanguineo, tipo_sanguineo', 'safe', 'on'=>'search'),
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
			'regElementos' => array(self::HAS_MANY, 'RegElemento', 'id_tipo_sanguineo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_tipo_sanguineo' => 'Id Tipo Sanguineo',
			'tipo_sanguineo' => 'Tipo Sanguineo',
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

		$criteria->compare('id_tipo_sanguineo',$this->id_tipo_sanguineo);
		$criteria->compare('tipo_sanguineo',$this->tipo_sanguineo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}