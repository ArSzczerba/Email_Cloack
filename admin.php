<?php

/**
 * @package SP Page Builder
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2018 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
 */
//no direct accees
defined('_JEXEC') or die('Restricted access');

SpAddonsConfig::addonConfig(
	array(
		'type' => 'content',
		'addon_name' => 'sp_email_cloak',
		'title' => JText::_('COM_SPPAGEBUILDER_ADDON_EMAIL_CLOAK'),
		'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_EMAIL_CLOAK_DESC'),
		'category' => 'Content',
		'attr' => array(
			'general' => array(
				'admin_label' => array(
					'type' => 'text',
					'title' => JText::_('COM_SPPAGEBUILDER_ADDON_ADMIN_LABEL'),
					'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_ADMIN_LABEL_DESC'),
					'std' => ''
				),
				'email' => array(
					'type' => 'text',
					'title' => JText::_('COM_SPPAGEBUILDER_ADDON_EMAIL_CLOAK_EMAIL'),
					'desc' => JText::_(''),
					'std' => ''
				),
				'icon' => array(
					'type' => 'icon',
					'title' => JText::_('COM_SPPAGEBUILDER_ADDON_EMAIL_CLOAK_ICON'),
					'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_EMAIL_CLOAK_ICON_DESC'),
				),
				'icon_margin' => array(
						'type' =>'margin',
						'title' =>JText::_('COM_SPPAGEBUILDER_TAB_ICON_MARGIN'),
						'responsive'=>true,
						'std'=>'0px 0px 0px 0px',
				),
				'icon_position' => array(
						'type' => 'select',
						'title' => JText::_('COM_SPPAGEBUILDER_ADDON_EMAIL_CLOAK_ICON_POSITION'),
						'values' => array(
								'left' => JText::_('COM_SPPAGEBUILDER_GLOBAL_LEFT'),
								'right' => JText::_('COM_SPPAGEBUILDER_GLOBAL_RIGHT'),
						),
						'std' => 'left',
				),
				'class' => array(
					'type' => 'text',
					'title' => JText::_('COM_SPPAGEBUILDER_ADDON_CLASS'),
					'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_CLASS_DESC'),
					'std' => ''
				),
			),
		),
	)
);
