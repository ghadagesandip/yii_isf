<?php

/**
 * This is the model class for table "tbl_nonconformance".
 *
 * The followings are the available columns in table 'tbl_nonconformance':
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property integer $create_user_id
 * @property integer $update_user_id
 * @property string $create_time
 * @property string $update_time
 */
class Nonconformance extends ISFActiveRecord
{

    public $created_by;
    public $updated_by;


	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Nonconformance the static model class
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
		return 'tbl_nonconformance';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, description,issued_to', 'required'),
			array('title', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, title, description, issued_to, created_by, updated_by, create_time, update_time', 'safe', 'on'=>'search'),
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
			'IssuedTo'  	    => array(self::BELONGS_TO,'User','issued_to'),
            'NCCreator' 		=> array(self::BELONGS_TO,'User','create_user_id'),
            'NCUpdator' 		=> array(self::BELONGS_TO,'User','update_user_id'),
            'Corrective_Actions'=> array(self::HAS_MANY,'CorrectiveAction','nonconformance_id')
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
			'issued_to' => 'Issued To ',
			'description' => 'Description',
			'created_by' =>  'Created By',
			'updated_by' =>  'Updated By',
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
        $criteria->with = array('NCCreator','NCUpdator');
		$criteria->compare('id',$this->id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('issued_to',$this->title,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('NCCreator.username',$this->created_by,true);
        $criteria->compare('NCUpdator.username',$this->updated_by,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('update_time',$this->update_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
            'pagination'=>array(
                'pageSize'=>4,
            ),
		));
	}
}