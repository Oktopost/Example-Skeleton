<?php
namespace Example\Base\Services;


use Example\Objects\Student;


/** 
 * @skeleton
 * This annotation is only for documentation. It helps to identify interfaces that can
 * be obtained through skeleton.
 */
interface IStudentFindService
{
	/**
	 * @param string $id
	 * @return Student
	 */
	public function getStudent($id);
}