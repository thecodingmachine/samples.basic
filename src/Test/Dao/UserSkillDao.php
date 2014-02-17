<?php
/*
 * This file has been automatically generated by TDBM.
 * You can edit this file as it will not be overwritten.
 */
namespace Test\Dao;

use Mouf\Database\TDBM\Filters\EqualFilter;

/**
 * The UserSkillDao class will maintain the persistance of Test\Dao\Bean\UserSkillBean class into the user_skill table.
 *
 * @Component
 * @dbTable user_skill
 */
class UserSkillDao extends UserSkillDaoBase
{

	/**
	 * Returns a list of UserSkill beans filtered by the specified user id 
	 * @param int $id
	 * @return Test\Dao\Bean\UserSkillBean[]
	 */
	public function getByUserId($id){
		return $this->getListByFilter(new EqualFilter('user_skill', 'user_id', $id));
	}
	
}