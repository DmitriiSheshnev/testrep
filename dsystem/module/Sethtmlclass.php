<?php
class ShowHtml{
	public $head;
	public $body;
	public $footer;
	
	public function _construct($title, $body, $footer){
		$this->head = '<html><head><title>'.$title.'</title></head>';
		$this->body = '<body><h1>'..$body'</h1>';
		$this->footer = '<footer>'.$footer.'</footer></body></html>';
	}
	
	public function showHellow(){
		echo $this->$a;
	}
}

?>