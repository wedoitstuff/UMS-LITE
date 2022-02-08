<?php

class BackupController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function db($header = 'force')
    {
        Backup::db();
        if($header == 'force'){
            Redirect::to('admin/configuration/backups');
        }
    }
    public function code($header = 'force')
    {
        Backup::code();
        if($header == 'force'){
            Redirect::to('admin/configuration/backups');
        }
    }

    public static function config()
    {
        $run = Backup::config();
        if($run){
            Redirect::to('admin/configuration/backups');
        }else{
            Redirect::to('admin/configuration/backups');
        }

    }
}