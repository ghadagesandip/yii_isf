<?php

/**
 * This is the model class for table "tbl_corrective_action".
 *
 * The followings are the available columns in table 'tbl_corrective_action':
 * @property integer $id
 * @property integer $nonconformance_id
 * @property string $description
 * @property integer $create_user_id
 * @property integer $update_user_id
 * @property string $create_time
 * @property string $update_time
 */
class CorrectiveAction extends ISFActiveRecord
{
    public $nonconformance_title;
    public $created_by;
    public $updated_by;

	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CorrectiveAction the static model class
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
		return 'tbl_corrective_action';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nonconformance_id, description, create_user_id', 'required'),
			array('nonconformance_id', 'numerical', 'integerOnly'=>true),
            array('nonconformance_title, created_by, updated_by', 'safe', 'on'=>'search'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nonconformance_id, description, create_user_id, update_user_id, create_time, update_time', 'safe', 'on'=>'search'),
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
            'CACreator'      => array(self::BELONGS_TO,'User','create_user_id','select'=>'username'),
		 	'CAUpdator'      => array(self::BELONGS_TO,'User','update_user_id'),
            'Nonconformance' => array(self::BELONGS_TO,'Nonconformance','nonconformance_id')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nonconformance_id' => 'Nonconformance',
            'nonconformance_title'=>'Nonconformance Title',
            'description' => 'Corrective Action Description',
            'created_by'=>'Created By',
            'updated_by'=>'Updated By',
			'create_user_id' => 'Created By',
			'update_user_id' => 'Updated By',
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
        $criteria->with = array('Nonconformance','CACreator','CAUpdator');
		$criteria->compare('id',$this->id);
		$criteria->compare('Nonconformance.title',$this->nonconformance_title,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('CACreator.username',$this->created_by,true);
		$criteria->compare('CAUpdator.username',$this->updated_by,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('update_time',$this->update_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
            'pagination'=>array(
                'pageSize'=>4
            )
		));
	}
}