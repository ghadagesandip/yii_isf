<?php

abstract class ISFActiveRecord extends CActiveRecord{

    protected function beforeValidate(){

        if($this->getIsNewRecord()){
            $this->create_time = $this->update_time = new CDbExpression('now()');
            $this->create_user_id = $this->update_user_id = Yii::app()->user->id;
        }else{
            $this->update_time = new CDbExpression('now()');
            $this->update_user_id = Yii::app()->user->id;
        }
        return parent::beforeValidate();
    }
}