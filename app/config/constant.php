<?php
/**
 * 这里存放一些程序中定义的常量，使用Config::get('constant.name')方式获取到;
 * Created by PhpStorm.
 * User: Lution
 * Date: 15/4/19
 * Time: 下午7:02
 */

return array(

    // 首页新闻公告列表显示新闻数量
    'INDEX_MODULE_NEWS_NUM' =>  7,

    // 首页最新竞赛显示数量
    'INDEX_MODULE_CONTEST_NUM'  =>  7,

    // 首页获奖名单现实竞赛数量
    'INDEX_MODULE_WINNERLIST_NUM'  =>  3,

    // admin SALT
    'SUPERUSER_SALT'    =>  "@ContestManagementSystemAdmin",

    // 角色权限，若对数据库进行修改请更新此处
    'roles' =>  array(
        // 站点管理员
        'siteAdmin'             =>  6,
        // 预留角色
        'currentlyUndefined'    =>  5,
        // 竞赛管理员
        'contestAdmin'          =>  4,
        // 评委
        'judge'                 =>  3,
        // 指导教室
        'teacher'               =>  2,
        // 学生
        'student'               =>  1,
    ),

    // 站点管理员账号列表
    'superUsers'    =>  array(
        'admin',
    ),

    // 学号规则
    'stuIdRules'    => array(
        'maxLength' =>  13,
        'minLength' =>  10, //暂未发现更短的
    ),

    // 新闻附件存储路径
    'newsAttachPath' => storage_path() . '/upload/attachment/',
    // 学生上传作品存储路径
    'studentWorkPath' => storage_path() . '/upload/stu_work/',
    // 附件上传最大尺寸 此处应小于等于php.ini中upload_max_filesize的设置
    'uploadMaxSize' => 1024*1024*20,
);