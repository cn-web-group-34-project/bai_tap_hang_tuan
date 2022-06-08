<?php
class ItemsController extends Controller{

    function view($id = null,$name = null) {
        $this->set('title',$name.' - My Todo List App');
        $this->set('todo',$this->_model->select($id));
    }

    function viewall() {
        $this->set('title','All Items - My Todo List App');
        $this->set('todo',$this->_model->selectAll());
    }

    function add(){
        $todo = $_POST['todo'];
        $query = "INSERT INTO items (item_name) VALUES ('$todo')";
        $this->_model->query($query);
    }

    function delete($id = null) {
		$this->_model->query("delete from items where id = $id");	
	}
}