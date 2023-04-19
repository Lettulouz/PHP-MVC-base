<?php
class Home extends Controller
{
    public function index(){
        $message = "Example message";
        $this->view('home/index', ['message' => $message]);
    }
}
?>