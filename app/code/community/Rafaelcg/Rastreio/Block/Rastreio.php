<?php
class Rafaelcg_Rastreio_Block_Rastreio extends Mage_Core_Block_Template{
	/**
	 * @return mixed
	 */
	public function showBlockTitle(){
		return Mage::helper('rafaelcg_rastreio')->showBlockTitle();
	}

	/**
	 * @return mixed
	 */
	public function showBlockText(){
		return Mage::helper('rafaelcg_rastreio')->showBlockText();
	}

	/**
	 * @return string
	 */
	public function showBlockBackground(){
		$color = Mage::helper('rafaelcg_rastreio')->showBlockBackground();
		$html = "background:".$color;
		return $html;
	}
}