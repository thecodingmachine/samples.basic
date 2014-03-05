<?php
namespace Test\Dao\Bean;

use Mouf\Database\TDBM\TDBMObject;

/*
 * This file has been automatically generated by TDBM.
 * DO NOT edit this file, as it might be overwritten.
 * If you need to perform changes, edit the PatcheBean class instead!
 */

/**
 * The PatcheBaseBean class maps the 'patches' table in database.
 * @dbTable patches
 */
class PatcheBaseBean extends TDBMObject 
{
	/**
	 * The getter for the "id" column.
	 *
	 * @dbType int
	 * @dbColumn id
	 * @return string
	 */
	public function getId(){
		return $this->__get('id');
	}
	
	/**
	 * The setter for the "id" column.
	 *
	 * @dbColumn id
	 * @param string $id
	 */
	public function setId($id) {
		$this->__set('id', $id);
	}
	
	/**
	 * The getter for the "unique_name" column.
	 *
	 * @dbType string
	 * @dbColumn unique_name
	 * @return string
	 */
	public function getUniqueName(){
		return $this->__get('unique_name');
	}
	
	/**
	 * The setter for the "unique_name" column.
	 *
	 * @dbColumn unique_name
	 * @param string $unique_name
	 */
	public function setUniqueName($unique_name) {
		$this->__set('unique_name', $unique_name);
	}
	
	/**
	 * The getter for the "status" column.
	 *
	 * @dbType string
	 * @dbColumn status
	 * @return string
	 */
	public function getStatus(){
		return $this->__get('status');
	}
	
	/**
	 * The setter for the "status" column.
	 *
	 * @dbColumn status
	 * @param string $status
	 */
	public function setStatus($status) {
		$this->__set('status', $status);
	}
	
	/**
	 * The getter for the "exec_date" column.
	 * It is returned as a PHP timestamp.
	 *
	 * @dbType timestamp
	 * @dbColumn exec_date
	 * @return timestamp
	 */
	public function getExecDate() {
		$date = $this->__get('exec_date');
		if($date === null)
			return null;
		else
			return strtotime($date);
	}
	
	/**
	 * The setter for the "exec_date" column.
	 * It must be provided as a PHP timestamp.
	 *
	 * @dbColumn exec_date
	 * @param timestamp $exec_date
	 */
	public function setExecDate($exec_date) {
		if($exec_date === null) {
			$this->__set('exec_date', null);
		} else {
			$this->__set('exec_date', date("Y-m-d H:i:s", $exec_date));
						
		}
	}
	
	/**
	 * The getter for the "error_message" column.
	 *
	 * @dbType string
	 * @dbColumn error_message
	 * @return string
	 */
	public function getErrorMessage(){
		return $this->__get('error_message');
	}
	
	/**
	 * The setter for the "error_message" column.
	 *
	 * @dbColumn error_message
	 * @param string $error_message
	 */
	public function setErrorMessage($error_message) {
		$this->__set('error_message', $error_message);
	}
	
}
?>