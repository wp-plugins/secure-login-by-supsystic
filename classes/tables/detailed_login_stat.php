<?php
class tableDetailed_login_statSln extends tableSln {
    public function __construct() {
        $this->_table = '@__detailed_login_stat';
        $this->_id = 'id';
        $this->_alias = 'sln_detailed_login_stat';
        $this->_addField('id', 'text', 'int')
				->_addField('uid', 'text', 'int')
				->_addField('ip', 'text', 'varchar')
				->_addField('date_created', 'text', 'varchar');
    }
}
