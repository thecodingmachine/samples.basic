<?php
/*
 * This file has been automatically generated by TDBM.
 * DO NOT edit this file, as it might be overwritten.
 * If you need to perform changes, edit the ProjectTypeDao class instead!
 */
namespace Test\Dao;

use Mouf\Database\DAOInterface;
use Mouf\Database\TDBM\TDBMService; 
use Mouf\Database\TDBM\Filters\OrderByColumn;

/**
 * The ProjectTypeDaoBase class will maintain the persistance of Test\Dao\Bean\ProjectTypeBean class into the project_type table.
 * 
 */
class ProjectTypeDaoBase implements DAOInterface
{

	/**
	 * @var TDBMService
	 */
	protected $tdbmService;
	
	/**
	 * The default Sort column
	 * @var string
	 */
	private $defaultSort = null;
	
	/**
	 * The default Sort direction
	 * @var string
	 */
	private $defaultDirection = 'asc';
	
	/**
	 * Sets the TDBM service used by this DAO.
	 *
	 * @Property
	 * @Compulsory
	 * @param TDBMService $tdbmService
	 */
	public function setTdbmService(TDBMService $tdbmService) {
		$this->tdbmService = $tdbmService;
	}

	/**
	 * Return a new instance of Test\Dao\Bean\ProjectTypeBean object, that will be persisted in database.
	 *
	 * @return Test\Dao\Bean\ProjectTypeBean
	 */
	public function create() {
		return $this->tdbmService->getNewObject('project_type', true, 'Test\Dao\Bean\ProjectTypeBean');
	}
	
	/**
	 * Persist the Test\Dao\Bean\ProjectTypeBean instance
	 *
	 */
	public function save($obj) {
		$obj->save();
	}

	/**
	 * Get all ProjectType records. 
	 *
	 * @return array<Test\Dao\Bean\ProjectTypeBean>
	 */
	public function getList() {
		if ($this->defaultSort){
			$orderBy = new OrderByColumn('project_type', $this->defaultSort, $this->defaultDirection);
		}else{
			$orderBy = null;
		}
		return $this->tdbmService->getObjects('project_type',  null, $orderBy, null, null, 'Test\Dao\Bean\ProjectTypeBean');
	}
	
	/**
	 * Get Test\Dao\Bean\ProjectTypeBean specified by its ID (its primary key)
	 * If the primary key does not exist, an exception is thrown.
	 *
	 * @param string $id
	 * @param boolean $lazyLoading If set to true, the object will not be loaded right away. Instead, it will be loaded when you first try to access a method of the object.
	 * @return Test\Dao\Bean\ProjectTypeBean
	 * @throws TDBMException
	 */
	public function getById($id, $lazyLoading = false) {
		return $this->tdbmService->getObject('project_type', $id, 'Test\Dao\Bean\ProjectTypeBean', $lazyLoading);
	}
	
	/**
	 * Deletes the Test\Dao\Bean\ProjectTypeBean passed in parameter.
	 *
	 * @param Test\Dao\Bean\ProjectTypeBean $obj
	 */
	public function delete($obj) {
		$this->tdbmService->deleteObject($obj);
	}
	
	/**
	 * Get a list of Test\Dao\Bean\ProjectTypeBean specified by its filters.
	 *
	 * @param mixed $filterBag The filter bag (see TDBMService::getObjects for complete description)
	 * @param mixed $orderbyBag The order bag (see TDBMService::getObjects for complete description)
	 * @param integer $from The offset
	 * @param integer $limit The maximum number of rows returned
	 * @return array<Test\Dao\Bean\ProjectTypeBean>
	 */
	protected function getListByFilter($filterBag=null, $orderbyBag=null, $from=null, $limit=null) {
		if ($this->defaultSort && $orderbyBag == null){
			$orderbyBag = new OrderByColumn('project_type', $this->defaultSort, $this->defaultDirection);
		}
		return $this->tdbmService->getObjects('project_type', $filterBag, $orderbyBag, $from, $limit, 'Test\Dao\Bean\ProjectTypeBean');
	}

	/**
	 * Get a single Test\Dao\Bean\ProjectTypeBean specified by its filters.
	 *
	 * @param mixed $filterBag The filter bag (see TDBMService::getObjects for complete description)
	 * @return Test\Dao\Bean\ProjectTypeBean
	 */
	protected function getByFilter($filterBag=null) {
		return $this->tdbmService->getObject('project_type', $filterBag, 'Test\Dao\Bean\ProjectTypeBean');
	}
	
	/**
	 * Sets the default column for default sorting
	 *
	 */
	public function setDefaultSort($defaultSort){
		$this->defaultSort = $defaultSort;
	}
	
}
?>