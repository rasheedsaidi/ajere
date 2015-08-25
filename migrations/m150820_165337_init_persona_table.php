<?php

use yii\db\Schema;
use yii\db\Migration;

class m150820_165337_init_persona_table extends Migration
{
    public function safeUp()
    {
		$this->createTable(
			'persona', 
			[
				'id' => 'pk',
				'phone' => 'string(20)',
				'date_of_birth' => 'integer',
				'city' => 'string(50)',
				'state' => 'string(50)',
				'identification' => 'string(50)',
				'id_number' => 'string(50)'
			]
		);
    }

    public function safeDown()
    {
        //echo "m150820_165337_init_persona_table cannot be reverted.\n";
		$this->dropTable('persona');
        //return false;
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
