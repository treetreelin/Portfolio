<?php

class Courses extends Model
{
	/**
	 * 取得所有課程資訊
	 * @param none
	 * @return json
	 */    
    public function getCoursesData()
    {
        $sql = "select course_no,course_name from courses";
        $data = $this->runQuery($sql,array());
        return $data;
    }

	/**
	 * 依據科目名稱取得科目資訊
	 * @param string $subject_name 
	 * @return json
	 */    
    public function getSubjectDataByName($subject_name)
    {
        $sql = " select s.subject_code, s.subject_name ".
                " from subjects as s ".
                " where s.subject_name like ? ";
        $params = array($subject_name);
        $data = $this->runQuery($sql,$params);
        return $data;
    }
	
	/**
	 * 依據課程名稱取得課程資訊
	 * @param string $subject_name 
	 * @return json
	 */    
    public function getCoursesDataByName($course_name)
    {
        $sql = " SELECT DISTINCT c.semester,s.subject_name,t.teacher_name,cl.class,c.course_type,c.campus,c.course_time,c.course_code,s.subject_code,c.quota,c.credit,c.remark ".
                " FROM courses AS c ".
				" INNER JOIN teachers AS t on c.teacher_id=t.id ".
				" INNER JOIN classes AS cl on c.class_id=cl.id ".
				" INNER JOIN subjects AS s on c.subject_id=s.id ".
                " WHERE s.subject_name LIKE ? ";
        $params = array($course_name);
        $data = $this->runQuery($sql,$params);
		
        return $data;
    }
    
}
