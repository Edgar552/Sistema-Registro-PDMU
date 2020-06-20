<?php

/**
 * This is the model class for table "cat_cargo".
 *
 * The followings are the available columns in table 'cat_cargo':
 * @property integer $id_cargo
 * @property string $cargo
 */
class CatCargo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CatCargo the static model class
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
		return 'cat_cargo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cargo', 'required'),
			array('cargo', 'length', 'max'=>70),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_cargo, cargo', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_cargo' => 'Id Cargo',
			'cargo' => 'Cargo',
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

		$criteria->compare('id_cargo',$this->id_cargo);
		$criteria->compare('cargo',$this->cargo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}