<?php

/**
 * This is the model class for table "studentsubjectplan".
 *
 * The followings are the available columns in table 'studentsubjectplan':
 * @property integer $subjectplanID
 * @property string $academicyear
 * @property string $adminno
 * @property string $subject
 * @property string $dateadded
 * @property string $datemodified
 */
class Studentsubjectplan extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Studentsubjectplan the static model class
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
		return 'studentsubjectplan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('academicyear, adminno, subject', 'length', 'max'=>44),
			array('dateadded, datemodified', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('subjectplanID, academicyear, adminno, subject, dateadded, datemodified', 'safe', 'on'=>'search'),
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
			'subjectplanID' => 'Subjectplan',
			'academicyear' => 'Academicyear',
			'adminno' => 'Adminno',
			'subject' => 'Subject',
			'dateadded' => 'Dateadded',
			'datemodified' => 'Datemodified',
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

		$criteria->compare('subjectplanID',$this->subjectplanID);
		$criteria->compare('academicyear',$this->academicyear,true);
		$criteria->compare('adminno',$this->adminno,true);
		$criteria->compare('subject',$this->subject,true);
		$criteria->compare('dateadded',$this->dateadded,true);
		$criteria->compare('datemodified',$this->datemodified,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}