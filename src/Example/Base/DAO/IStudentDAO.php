<?php
namespace Example\Base\DAO;


use Example\Objects\Student;


interface IStudentDAO
{
	/**
	 * @param string $id
	 * @return Student
	 */
	public function getStudent($id);

	/**
	 * @param Student $student
	 */
	public function saveStudent(Student $student);
}