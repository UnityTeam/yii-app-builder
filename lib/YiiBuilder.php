<?php


class YiiBuilder {
    public $baseFile = 'yii-1.1.13.tar.gz';
    public $url = 'https://github.com/downloads/UnityTeam/yii/yii-1.1.13.tar.gz';
    public $frameworkPrefix = 'vendor/yii';


    public function getYii(){
        $this->url .= $this->baseFile;

        chdir(realpath(dirname(__DIR__)));
        $cmd = sprintf('mkdir -p vendor && cd vendor && wget %s && tar -zxf %s && rm yii-1.1.13.tar.gz', $this->url, $this->baseFile);
        
        
        return system($cmd, $arr);
    }

    public function createApp($cfg){
        $fpath = sprintf('%s/framework/yiic', realpath(dirname(__DIR__) ) . "/" . $this->frameworkPrefix);
        if(!file_exists($fpath)){
            $this->getYii();
        }
        $cmd = sprintf('%s webapp %s',$fpath , $cfg['appName']);
        exec($cmd);
        return ;
    }

}