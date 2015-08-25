<?php

use yii\db\Schema;
use yii\db\Migration;

class m150820_202704_create_auth_roles extends Migration
{
    public function safeUp()
    {
		$rbac = \Yii::$app->authManager;

		$guest = $rbac->createRole('guest');
		$guest->description = 'Anonymous';
		$rbac->add($guest);
		
		$user = $rbac->createRole('user');
		$user->description = 'Registered user';
		$rbac->add($user);
		
		$moderator = $rbac->createRole('moderator');
		$moderator->description = 'Has some high level previleges';
		$rbac->add($moderator);
		
		$administrator = $rbac->createRole('administrator');
		$administrator->description = 'Has all previleges';
		$rbac->add($administrator);
		
		$rbac->addChild($administrator, $moderator);
		$rbac->addChild($moderator, $user);
		$rbac->addChild($user, $guest);
    }

    public function safeDown()
    {
        $manager = \Yii::$app->authManager;
		$manager->removeAll();
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
