<?php

namespace Application\Block\CustomButton;

use Concrete\Core\Block\BlockController;
use Loader;
use Page;

defined('C5_EXECUTE') or die(_("Access Denied."));

class Controller extends BlockController
{
	protected $btTable = "btCustomButton";
	protected $btInterfaceWidth = "350";
	protected $btInterfaceHeight = "250";
	protected $btDefaultSet = 'basic';

	public function getBlockTypeName()
	{
		return t("Custom Button");
	}

	public function getBlockTypeDescription()
	{
		return t('Custom button for sidebar area');
	}

	public function view() {
		$page = Page::getByID($this->goID);
		$pagelink = Loader::helper('navigation')->getLinkToCollection($page);
		$title = $page->getCollectionName();
		$this->set('pagelink',$pagelink);
		$this->set('title',$title);
	}

	public function save($data)
	{
		parent::save($data);
	}
}
