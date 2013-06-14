<?php

/**
 * This is the model class for table "tbl_user".
 *
 * The followings are the available columns in table 'tbl_user':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $emial_address
 * @property integer $admin_level
 * @property string $create_time
 * @property string $update_time
 */
class User extends ISFActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return User the static model class
	 */

    public $password_repeat;

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
            array('emial_address','email'),
            array('emial_address, username', 'unique'),
            array('admin_level, emial_address, username, gender, date_of_birth', 'required'),
            array('password, password_repeat','required','on'=>'create'),
            array('profile_picture','file','allowEmpty'=>true,'types'=>'gif,png,jpeg,jpg,bmp','wrongType'=>'please upload valid image file'),
            array('emial_address, username, password', 'length', 'max'=>150),
            array('password', 'compare','on'=>'create'),
            array('hobby_1, hobby_2,','safe','on'=>array('create','update')),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, username, password, emial_address,gender, admin_level,last_login_time,create_user_id,update_user_id, create_time, update_time', 'safe', 'on'=>'search'),
			
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
			'id' => 'ID',
			'username' => 'Username',
			'password' => 'Password',
            'password_repeat'=>'Confirm Password',
			'emial_address' => 'Emial Address',
            'gender'=>'Gender',
            'date_of_birth'=>'Date Of Birth',
            'last_login_time' => 'Last Login Time',
			'admin_level' => 'Admin Level',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('username',$this->username,true);
        $criteria->compare('last_login_time',$this->last_login_time,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('emial_address',$this->emial_address,true);
        $criteria->compare('gender',$this->gender,true);
        $criteria->compare('date_of_birth',$this->gender,true);
		$criteria->compare('admin_level',$this->admin_level);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('update_time',$this->update_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	protected function afterValidate(){
        parent::afterValidate();
        if(isset($_POST['User']['password'])){
            $this->password = $this->encrypt($this->password);
        }
               
    }
    
    public function encrypt($password){
        return md5($password);
    }
}