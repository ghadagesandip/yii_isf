<?php

class m130608_131949_update_user_is_deleted extends CDbMigration
{
	public function up()
	{
	}

	public function down()
	{
		echo "m130608_131949_update_user_is_deleted does not support migration down.\n";
		return false;
	}

	
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
		// Add the column `is_deleted` to the `tbl_user` with specified type
  		// properties
  		$this->addColumn('tbl_user', 'is_deleted', 'tinyint(1) DEFAULT 0');
	}

	public function safeDown()
	{
		// Undo add the column `is_deleted` to the `tbl_user` with specified type
  		// properties
		$this->dropColumn('tbl_user', 'is_deleted');
  
	}
	
}