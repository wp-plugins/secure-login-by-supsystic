<?php
class secure_loginViewSln extends viewSln {
	public function getTabContent() {
		frameSln::_()->addScript('admin.'. $this->getCode(), $this->getModule()->getModPath(). 'js/admin.'. $this->getCode(). '.js');
		frameSln::_()->getModule('templates')->loadJqueryUi();

		$options = frameSln::_()->getModule('options')->getCatOpts( $this->getCode() );
		$blacklistTab = frameSln::_()->getModule('options')->getTab('blacklist');
		$blacklistUrl = $blacklistTab['url']. '&search[type]=login';
		$simpleUsersIssues = array();
		$simpleAdminsList = $this->getModel()->getSimpleAdminsList();
		if(!empty($simpleAdminsList)) {
			$simpleUsersIssues = $this->getModel()->getSimpleUserIssues();
		}
		$captchaTypes = $this->getModel()->getCaptchaTypes();
		$this->assign('options', $options);
		$this->assign('breadcrumbs', frameSln::_()->getModule('admin_nav')->getView()->getBreadcrumbs());
		$this->assign('blacklistUrl', $blacklistUrl);
		$this->assign('currentIp', utilsSln::getIP());
		$this->assign('simpleAdmins', $simpleAdminsList);
		$this->assign('simpleUsersIssues', $simpleUsersIssues);
		$this->assign('captchaTypes', $captchaTypes);
		return parent::getContent('secureLoginAdmin');
	}
	public function getCapchaOnLogin() {
		$this->assign('publicKey', $this->getModel()->getCapchaPublicKey());
		return parent::getContent('secureLoginCapcha');
	}
	public function getReCaptchaOnLogin() {
		$this->assign('publicKey', $this->getModel()->getCapchaPublicKey());
		return parent::getContent('secureLoginReCaptcha');
	}
}
