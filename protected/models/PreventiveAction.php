<?php

/**
 * This is the model class for table "tbl_preventive_action".
 *
 * The followings are the available columns in table 'tbl_preventive_action':
 * @property integer $id
 * @property string $title
 * @property integer $description
 * @property integer $create_user_id
 * @property integer $update_user_id
 * @property integer $create_time
 * @property integer $update_time
 */
class PreventiveAction extends ISFActiveRecord
{
    public $c_created_by;
    public $c_updated_by;

	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PreventiveAction the static model class
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
		return 'tbl_preventive_action';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, description', 'required'),
			array('title', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, title, description, c_created_by, c_updated_by, create_time, update_time', 'safe', 'on'=>'search'),
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
            'PARCreator' => array(self::BELONGS_TO,'User','create_user_id'),
            'PARUpdator' => array(self::BELONGS_TO,'User','update_user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'title' => 'Title',
			'description' => 'Description',
            'c_created_by'=>'Created By',
            'c_updated_by'=>'Updated By',
			'create_user_id' => 'Create User',
			'update_user_id' => 'Update User',
			'create_time' => 'Create Time',
			'update_time' => 'Update Time',
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
        $criteria->with =array('PARCreator','PARUpdator');
		$criteria->compare('id',$this->id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('PARCreator.username',$this->c_created_by,true);
		$criteria->compare('PARUpdator.username',$this->c_updated_by,true);
		$criteria->compare('create_time',$this->create_time);
		$criteria->compare('update_time',$this->update_time);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}