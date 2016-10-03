<?php
namespace Example\Services;


use Example\Base\Services\IStudentFindService;
use Example\Objects\Student;


/**
 * @autoload
 */
class StudentFindService implements IStudentFindService
{
	/**
	 * @autoload
	 * @var \Example\Base\DAO\IStudentDAO
	 * Skeleton will search for the class, defined for the key "Example\Base\DAO\IStudentDAO" and 
	 * assign it to this private data member.
	 * Class and data member must have the @autoload annotation, and additionally the @var annotation
	 * must have the full path to the interface.
	 */
	private $dao; 
	
	
	/**
	 * @param string $id
	 * @return Student
	 */
	public function getStudent($id)
	{
		return $this->dao->getStudent($id);
	}
}