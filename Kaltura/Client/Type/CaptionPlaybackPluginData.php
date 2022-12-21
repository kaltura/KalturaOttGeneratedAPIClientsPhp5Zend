<?php
// ===================================================================================================
//                           _  __     _ _
//                          | |/ /__ _| | |_ _  _ _ _ __ _
//                          | ' </ _` | |  _| || | '_/ _` |
//                          |_|\_\__,_|_|\__|\_,_|_| \__,_|
//
// This file is part of the Kaltura Collaborative Media Suite which allows users
// to do with audio, video, and animation what Wiki platforms allow them to do with
// text.
//
// Copyright (C) 2006-2022  Kaltura Inc.
//
// This program is free software: you can redistribute it and/or modify
// it under the terms of the GNU Affero General Public License as
// published by the Free Software Foundation, either version 3 of the
// License, or (at your option) any later version.
//
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU Affero General Public License for more details.
//
// You should have received a copy of the GNU Affero General Public License
// along with this program.  If not, see <http://www.gnu.org/licenses/>.
//
// @ignore
// ===================================================================================================

/**
 * @package Kaltura
 * @subpackage Client
 */
class Kaltura_Client_Type_CaptionPlaybackPluginData extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaCaptionPlaybackPluginData';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->url))
		{
			if(isset($xml->url->item) && count($xml->url->item))
				$this->multiLingual_url = Kaltura_Client_ParseUtils::unmarshalArray($xml->url, '');
			else
				$this->url = (string)$xml->url;
		}
		if(count($xml->language))
		{
			if(isset($xml->language->item) && count($xml->language->item))
				$this->multiLingual_language = Kaltura_Client_ParseUtils::unmarshalArray($xml->language, '');
			else
				$this->language = (string)$xml->language;
		}
		if(count($xml->label))
		{
			if(isset($xml->label->item) && count($xml->label->item))
				$this->multiLingual_label = Kaltura_Client_ParseUtils::unmarshalArray($xml->label, '');
			else
				$this->label = (string)$xml->label;
		}
		if(count($xml->format))
		{
			if(isset($xml->format->item) && count($xml->format->item))
				$this->multiLingual_format = Kaltura_Client_ParseUtils::unmarshalArray($xml->format, '');
			else
				$this->format = (string)$xml->format;
		}
	}
	/**
	 * url
	 *
	 * @var string
	 */
	public $url = null;

	/**
	 * Language
	 *
	 * @var string
	 */
	public $language = null;

	/**
	 * Label
	 *
	 * @var string
	 */
	public $label = null;

	/**
	 * Format
	 *
	 * @var string
	 */
	public $format = null;


}

