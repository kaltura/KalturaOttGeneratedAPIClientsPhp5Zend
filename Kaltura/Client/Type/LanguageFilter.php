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
class Kaltura_Client_Type_LanguageFilter extends Kaltura_Client_Type_Filter
{
	public function getKalturaObjectType()
	{
		return 'KalturaLanguageFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->codeIn))
		{
			if(isset($xml->codeIn->item) && count($xml->codeIn->item))
				$this->multiLingual_codeIn = Kaltura_Client_ParseUtils::unmarshalArray($xml->codeIn, '');
			else
				$this->codeIn = (string)$xml->codeIn;
		}
		if(count($xml->excludePartner))
		{
			if(!empty($xml->excludePartner) && ((int) $xml->excludePartner === 1 || strtolower((string)$xml->excludePartner) === 'true'))
				$this->excludePartner = true;
			else
				$this->excludePartner = false;
		}
	}
	/**
	 * Language codes
	 *
	 * @var string
	 */
	public $codeIn = null;

	/**
	 * Exclude partner
	 *
	 * @var bool
	 */
	public $excludePartner = null;


}

