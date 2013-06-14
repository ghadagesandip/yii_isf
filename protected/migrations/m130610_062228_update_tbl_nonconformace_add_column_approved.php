<?php

class m130610_062228_update_tbl_nonconformace_add_column_approved extends CDbMigration
{
	public function up()
	{
		// Add the column `accountStatus` to the `tbl_user` with specified type
	    // properties
	    $this->addColumn('tbl_nonconformance', 'approved', 'INT(1) DEFAULT 1');
	}

	public function down()
	{
		 // Undo add the column `accountStatus` to the `tbl_user` with specified type
		 // properties
		 $this->dropColumn('tbl_nonconformance', 'approved');
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}