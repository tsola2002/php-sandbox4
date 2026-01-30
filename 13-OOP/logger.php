<?php 
    interface Logger{
        public function log(string $messsage);
    }

    class FileLogger implements Logger{
        public function log(string $message){
            echo "Logged to file: $message";
        }
    }

    

?>