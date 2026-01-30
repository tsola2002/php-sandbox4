<?php 

class Notification{
    public function send(){
        return "Sending Notification";
    }
}
class EmailNotification extends Notification {
    public function send(){
        return "Sending Email";
    }
}

class SmsNotification extends Notification {
    public function send(){
        return "Sending SMS";
    }
}


function notify(Notification $notification){
    echo $notification->send();
}

notify(new EmailNotification());
notify(new SmsNotification());


?>