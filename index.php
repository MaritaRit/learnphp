<?php

interface Logger{
    public function log(string $message);
}

class ConsoleLogger implements Logger {
    public function log(string $message){
        echo $message . "\n";
    }
}

class FileLogger implements Logger{
    private $file;
    public function setFile(string $name){
        $this->file = $name;
    }
    public function log(string $message){
        $file = fopen($this->file, 'a');
        fwrite($file, $message . "\n");
        fclose($file);
    }
}

class TaskRunner {
    protected $logger;
    public function __construct(Logger $logger){
        $this->logger = $logger;
    }
    public function task(){
        for($i=0; $i<10; $i++){
            $this->logger->log('' . $i);
        }
    }
}

class NothingLogger implements Logger {
    public function log(string $message){

    }
}


$logger = new FileLogger();
$logger->setFile('log2.txt');
$runner = new TaskRunner($logger);
$runner->task();


