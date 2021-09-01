<?php

/**
 * Base controller for the application.
 * Add general things in this controller.
 */
class IndexController extends Controller 
{
	public function indexAction()
    {


    }
    public function courseviewAction()
    {


    }
    public function createaccountAction()
    {


    }
    
	public function getCoursesDataByNameAction()
    {
		//取得課程名稱搜尋$_POST值
		$coursename = (Empty($_POST['coursename']))?"":$_POST['coursename'];
		
		//使用課程資料庫物件
		$courses = new Courses();
		$coursesData = $courses->getCoursesDataByName($coursename);

		$this->view->renderJson($coursesData);
    }
}