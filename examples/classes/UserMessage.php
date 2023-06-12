<?php
class UserMessage {
	public $message = 'Hello All, I am ';
	public function introduce($name)
	{
		return this->message . $name;
	}
}

$mymessage = New UserMessage();
echo $mymessage->introduce('Scott') . "\n";
?>
