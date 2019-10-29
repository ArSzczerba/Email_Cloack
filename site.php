<?php

/**
 * @package SP Page Builder
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2019 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
 */
//no direct accees
defined('_JEXEC') or die('Restricted access');

class SppagebuilderAddonEmail_Cloak extends SppagebuilderAddons
{

	public function render()
	{
		$settings = $this->addon->settings;
		$class = (isset($settings->class) && $settings->class) ? $settings->class : '';

		$email = (isset($settings->email) && $settings->email) ? $settings->email : '';
		$icon = (isset($settings->icon) && $settings->icon) ? $settings->icon : '';
		$icon_position = (isset($settings->icon_position) && $settings->icon_position) ? $settings->icon_position : 'left';

		// validate email
		$email = filter_var($email, FILTER_SANITIZE_EMAIL);
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			return;
		}

		$output = "";

		$output  = '<div class="sppb-addon sppb-addon-accordion ' . $class . '">';
		if ($icon_position == 'left') {
			$output .= ($icon) ? '<i class="fa ' . $icon . '" aria-hidden="true"></i> ' . JHtml::_('email.cloak', $email, 0) : JHtml::_('email.cloak', $email, 0);
		} else {
			$output .= ($icon) ? JHtml::_('email.cloak', $email, 0) . ' <i class="fa ' . $icon . '" aria-hidden="true"></i>' : JHtml::_('email.cloak', $email, 0);
		}
		$output .= '</div>';

		return $output;
	}


	public function css()
	{
		$settings = $this->addon->settings;
		$addon_id = '#sppb-addon-' . $this->addon->id;
		$css = "";

		return $css;
	}
}
