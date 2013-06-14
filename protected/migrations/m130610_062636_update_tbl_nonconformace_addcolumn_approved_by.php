<?php

class m130610_062636_update_tbl_nonconformace_addcolumn_approved_by extends CDbMigration
{
//	public function up()
//	{
//	}
//
//	public function down()
//	{
//		echo "m130610_062636_update_tbl_nonconformace_addcolumn_approved_by does not support migration down.\n";
//		return false;
//	}

	
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
		
		$this->addColumn('tbl_nonconformance', 'approved_by', 'INT(11) DEFAULT 0');
	}

	public function safeDown()
	{
		$this->dropColumn('tbl_nonconformance','approved_by');
	}
	
}