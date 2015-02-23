<?php
class Rafaelcg_Rastreio_Helper_Data extends Mage_Core_Helper_Abstract {

	const XML_PATH_ACTIVE =  'rafaelcg_rastreio/rastreio_group/active';
	const XML_PATH_BLOCK_TITLE = 'rafaelcg_rastreio/rastreio_group/block_title';
	const XML_PATH_BLOCK_TEXT = 'rafaelcg_rastreio/rastreio_group/block_text';
	const XML_PATH_BLOCK_BACKGROUND = 'rafaelcg_rastreio/rastreio_group/block_background';

	/**
	 * @param null $moduleName
	 *
	 * @return bool
	 */
	public  function isModuleEnabled($moduleName = null){
		if((int) Mage::getStoreConfig(self::XML_PATH_ACTIVE, Mage::app()->getStore()) != 1){
			return false;
		}
		return parent::isModuleEnabled($moduleName);
	}

	/**
	 * @param null $store
	 *
	 * @return mixed
	 */
	public function showBlockTitle($store = null){
		return Mage::getStoreConfig(self::XML_PATH_BLOCK_TITLE, $store);
	}

	/**
	 * @param null $store
	 *
	 * @return mixed
	 */
	public function showBlockText($store = null){
		return Mage::getStoreConfig(self::XML_PATH_BLOCK_TEXT, $store);
	}

	/**
	 * @param null $store
	 *
	 * @return mixed
	 */
	public function showBlockBackground($store = null){
		return Mage::getStoreConfig(self::XML_PATH_BLOCK_BACKGROUND, $store);
	}

}