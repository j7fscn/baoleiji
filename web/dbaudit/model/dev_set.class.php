<?php
if(!defined('CAN_RUN')) {
	exit('Access Denied');
}

class dev_set extends base_set {
	protected $table_name = 'dev';
	protected $id_name = 'did';

}
?>
