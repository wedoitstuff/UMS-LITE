<?php
use Ifsnop\Mysqldump as IMysqldump;
class Backup
{
    public static function db()
    {
        $date = date("Y-m-d_h:i:s");
        try {
            $dump = new IMysqldump\Mysqldump('mysql:host='.$_ENV['DB_HOST'].';dbname='.$_ENV['DB_NAME'], $_ENV['DB_USER'], $_ENV['DB_PASS']);
            $dump->start('system_b/database/db_'.$date.'.sql');
            chmod("system_b/database/db_$date.sql", 0777);
        } catch (\Exception $e) {
            echo 'mysqldump-php error: ' . $e->getMessage();
        }

    }

    public static function code()
    {
        $date = date("Y-m-d_h:i:s");
        $source = "../";
        $destination = './system_b/code/code_' . $date . '.zip';
        if (!extension_loaded('zip') || !file_exists($source)) {
            return false;
        }
        $zip = new ZipArchive();
        if (!$zip->open($destination, ZIPARCHIVE::CREATE)) {
            return false;
        }

        $source = str_replace('\\', '/', realpath($source));

        if (is_dir($source) === true)
        {
            $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($source), RecursiveIteratorIterator::SELF_FIRST);

            foreach ($files as $file)
            {
                $file = str_replace('\\', '/', $file);

                // Ignore "." and ".." folders
                if( in_array(substr($file, strrpos($file, '/')+1), array('.', '..')) )
                    continue;

                $file = realpath($file);

                if (is_dir($file) === true)
                {
                    $zip->addEmptyDir(str_replace($source . '/', '', $file . '/'));
                }
                else if (is_file($file) === true)
                {
                    $zip->addFromString(str_replace($source . '/', '', $file), file_get_contents($file));
                }
            }
        }
        else if (is_file($source) === true)
        {
            $zip->addFromString(basename($source), file_get_contents($source));
        }

        return $zip->close();

    }

    public static function list($source)
    {
        $path = 'system_b/' . $source;
        $files = scandir($path);
        $files = array_diff(scandir($path), array('.', '..'));
        $tbl = array();

        foreach($files as $file) {
            $cd = date("F d Y H:i:s.", filemtime('system_b/' . $source . '/' . $file));
            $fs = filesize('system_b/' . $source . '/' . $file);
            switch ($fs){
                case $fs > 1024 && $fs <= 1024000:
                    $fs = number_format(($fs / 1000), 2) . "kb";
                    break;
                case $fs > 1024000 && $fs <= 1024000000:
                    $fs = number_format(($fs / 1000000), 2 ). "mb";
                    break;
                case $fs > 1024000000 && $fs <= 1024000000000:
                    $fs = number_format(($fs / 1000000000), 2) . "gb";
                    break;
                case $fs > 1024000000000 && $fs <= 1024000000000000:
                    $fs = number_format(($fs / 1000000000000), 2) . "tb";
                    break;
                default:
                    $fs = number_format($fs, 2) . "bytes";
                    break;


            }
            $dl = 'system_b/' . $source . '/' . $file;
            $tbl[] = "<tr><td>$file</td><td>$cd</td><td>$fs</td><td><a href = \"$dl\"><i class = 'fas fa-download text-primary'</a></td></tr>";
        }
        return $tbl;
    }

    public static function config()
    {
        try{
            $file = "../.env";
            $dlFile = 'REMOVE.env';
            header('Content-type:text/plain');
            header('Content-Disposition: attachment; filename='.$dlFile);
            readfile($file);
            return true;
        }catch(Exception $e){
            Session::add('feedback_negative', 'Message: ' . $e->getMessage());
            return false;
        }

    }
}