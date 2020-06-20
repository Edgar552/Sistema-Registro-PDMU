<?php

/**
 * This is the model class for table "cat_estado_civil".
 *
 * The followings are the available columns in table 'cat_estado_civil':
 * @property integer $id_estado_civil
 * @property string $estado_civil
 */
class CatEstadoCivil extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CatEstadoCivil the static model class
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
		return 'cat_estado_civil';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('estado_civil', 'required'),
			array('estado_civil', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_estado_civil, estado_civil', 'safe', 'on'=>'search'),
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
			'id_estado_civil' => 'Id Estado Civil',
			'estado_civil' => 'Estado Civil',
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

		$criteria->compare('id_estado_civil',$this->id_estado_civil);
		$criteria->compare('estado_civil',$this->estado_civil,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}