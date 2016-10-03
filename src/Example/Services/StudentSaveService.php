<?php
namespace Example\Services;


use Example\Base\DAO\IStudentDAO;
use Example\Base\Services\IStudentSaveService;
use Example\Objects\Student;


/**
 * @autoload
 */
class StudentSaveService implements IStudentSaveService
{
	/** @var IStudentDAO */
	private $dao;
	
	
	/**
	 * Because the autoload annotation on the class AND this method - this setter  
	 * will be called by skeleton.
	 * Note that the method name must start with "set" and have only one parameter. 
	 * @autoload
	 * @param IStudentDAO $dao
	 */
	private function setStudentDAO(IStudentDAO $dao)
	{
		$this->dao = $dao;
	}
	

	/**
	 * @param Student $student
	 */
	public function save(Student $student)
	{
		$this->dao->saveStudent($student);
	}
}