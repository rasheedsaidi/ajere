<?php

use yii\db\Schema;
use yii\db\Migration;

class m150820_195907_create_rbac_tables extends Migration
{
    public function up()
    {
		$this->execute(
			file_get_contents(Yii::getAlias('@yii/rbac/migrations/schema-mysql.sql'))
		);
    }

    public function down()
    {
        echo "m150820_195907_create_rbac_tables cannot be reverted.\n";

        return false;
    }
    
    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }
    
    public function safeDown()
    {
    }
    */
}
