<?php
class tableUsage_statSln extends tableSln {
    public function __construct() {
        $this->_table = '@__usage_stat';
        $this->_id = 'id';     
        $this->_alias = 'toe_usage_stat';
        $this->_addField('id', 'hidden', 'int', 0, __('id', SLN_LANG_CODE))
			->_addField('code', 'hidden', 'text', 0, __('code', SLN_LANG_CODE))
			->_addField('visits', 'hidden', 'int', 0, __('visits', SLN_LANG_CODE))
			->_addField('spent_time', 'hidden', 'int', 0, __('spent_time', SLN_LANG_CODE))
			->_addField('modify_timestamp', 'hidden', 'int', 0, __('modify_timestamp', SLN_LANG_CODE));
    }
}