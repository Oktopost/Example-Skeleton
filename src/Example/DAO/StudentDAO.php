<?php
namespace Example\DAO;


use Example\Base\DAO\IStudentDAO;
use Example\Objects\Student;


class StudentDAO implements IStudentDAO
{
	/**
	 * @param string $id
	 * @return Student
	 */
	public function getStudent($id)
	{
		$className = __CLASS__;
		echo "Loading student with ID $id in $className\n";
		$student = new Student();
		
		$student->setId($id);
		$student->setName('StudentName');
		
		return $student;
	}

	/**
	 * @param Student $student
	 */
	public function saveStudent(Student $student)
	{
		$className = __CLASS__;
		echo "Saving Student {$student->getId()}, {$student->getName()} in $className\n";
	}
}