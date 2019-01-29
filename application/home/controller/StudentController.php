<?php
/**
 * 学生模块控制器类
 * 模块管理：CURD增、删、改、查
 * 模型根据数据表创建的，控制器根据模块创建的
 * 控制器完成了一个模块的功能
 */
class StudentController
{
    // 获取所有数据
    public function listAllAction(){
        // 实例化模型，获取数据
        $stu = new StudentModel();
        $data = $stu->getAll();
        require './application/home/view/student_list.php';
    }

    // 获取单条数据
    public function infoAction($id=1){
        $id = isset($_GET['id']) ? $_GET['id'] : $id;
        // 实例化模型，获取数据
        $stu = new StudentModel();
        $data = $stu->get($id);
        require './application/home/view/student_info.php';
    }
}
