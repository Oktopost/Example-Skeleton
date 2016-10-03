<?php
// Note that there is no need to include this file in the project. Skeleton will load it
// when a key matching this file names path ("Example\Base\*") was requested for the first
// time.

/** @var \Skeleton\Base\IBoneConstructor $this */

use Example\Base\DAO\IStudentDAO;
use Example\Base\Services\IStudentFindService;
use Example\Base\Services\IStudentSaveService;

use Example\DAO\StudentDAO;
use Example\Services\StudentFindService;
use Example\Services\StudentSaveService;


$this->set(IStudentDAO::class, 			StudentDAO::class);
$this->set(IStudentSaveService::class,	StudentSaveService::class);
$this->set(IStudentFindService::class,	StudentFindService::class);