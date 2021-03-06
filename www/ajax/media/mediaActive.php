<?php 

include_once lib_path . 'lib.php';

class mediaActive extends Controller {
	
    public function __construct()
    {
        parent::__construct();
		$this->chAccess('basic');
    }

    public function getData()
    {
        if (!isset($_GET['id'])) {
        	print "No device ID(s) supplied\n";
        	exit;
        }

        $ids = explode(',', $_GET['id']);

        print "<?xml version=\"1.0\" encoding=\"utf-8\"?>\n";
        print "<activedevices>\n";
        foreach ($ids as $id) {
        	$id = intval($id);
        	if ($this->user->camPermission($id))
        		$this->check_active($id);
        }
        print "</activedevices>\n";


        die();
    }

    // Checks for in-progress event
    function check_active($id)
    {
        $db = database::getInstance();
    	$list = $db->fetchAll("SELECT id FROM EventsCam WHERE device_id=$id ".
    				"AND length=-1");
    	if (empty($list))
    		return;

    	print "  <device id=\"$id\" />\n";
    }
}

