<?php
require_once 'vendor/autoload.php';


use \Example\Common;


use \Example\Base\Services\IStudentSaveService;
use \Example\Base\Services\IStudentFindService;


/** @var IStudentFindService $findService */
$findService = Common::skeleton(IStudentFindService::class);

$student = $findService->getStudent(1);
$student->setName('NewName');


/** @var IStudentSaveService $saveService */
$saveService = Common::skeleton(IStudentSaveService::class);
$saveService->save($student);