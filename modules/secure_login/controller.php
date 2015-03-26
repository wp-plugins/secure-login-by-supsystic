<?php
class secure_loginControllerSln extends controllerSln {
	public function saveOptions() {
		$res = new responseSln();
		$optsModel = frameSln::_()->getModule('options')->getModel();
		$prevOptsModel = clone($optsModel);
		$submitData = reqSln::get('post');
		if($optsModel->saveGroup($submitData)) {
			if($this->getModel()->afterOptionsChange($prevOptsModel, $optsModel, $submitData)) {
				$res->addMessage(__('Done', SLN_LANG_CODE));
			} else
				$res->pushError ($this->getModel()->getErrors());
		} else
			$res->pushError ($optsModel->getErrors());
		$res->ajaxExec();
	}
	public function saveAdminLoginIpsList() {
		$res = new responseSln();
		$optsModel = frameSln::_()->getModule('options')->getModel();
		$ipsList = trim(reqSln::getVar('admin_ip_login_list', 'post'));
		if(!empty($ipsList)) {
			if($optsModel->save('admin_ip_login_list', $ipsList)) {
				$res->addMessage(__('Done', SLN_LANG_CODE));
			} else
				$res->pushError ($optsModel->getErrors());
		} else
			$res->pushError (__('Empty IP list', SLN_LANG_CODE));
		$res->ajaxExec();
	}
	public function getPermissions() {
		return array(
			SLN_USERLEVELS => array(
				SLN_ADMIN => array('saveOptions', 'saveAdminLoginIpsList')
			),
		);
	}
}

