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
class Kaltura_Client_Type_TagFilter extends Kaltura_Client_Type_Filter
{
	public function getKalturaObjectType()
	{
		return 'KalturaTagFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->tagEqual))
		{
			if(isset($xml->tagEqual->item) && count($xml->tagEqual->item))
				$this->multiLingual_tagEqual = Kaltura_Client_ParseUtils::unmarshalArray($xml->tagEqual, '');
			else
				$this->tagEqual = (string)$xml->tagEqual;
		}
		if(count($xml->tagStartsWith))
		{
			if(isset($xml->tagStartsWith->item) && count($xml->tagStartsWith->item))
				$this->multiLingual_tagStartsWith = Kaltura_Client_ParseUtils::unmarshalArray($xml->tagStartsWith, '');
			else
				$this->tagStartsWith = (string)$xml->tagStartsWith;
		}
		if(count($xml->typeEqual))
			$this->typeEqual = (int)$xml->typeEqual;
		if(count($xml->languageEqual))
		{
			if(isset($xml->languageEqual->item) && count($xml->languageEqual->item))
				$this->multiLingual_languageEqual = Kaltura_Client_ParseUtils::unmarshalArray($xml->languageEqual, '');
			else
				$this->languageEqual = (string)$xml->languageEqual;
		}
		if(count($xml->idIn))
		{
			if(isset($xml->idIn->item) && count($xml->idIn->item))
				$this->multiLingual_idIn = Kaltura_Client_ParseUtils::unmarshalArray($xml->idIn, '');
			else
				$this->idIn = (string)$xml->idIn;
		}
	}
	/**
	 * Tag to filter by
	 *
	 * @var string
	 */
	public $tagEqual = null;

	/**
	 * Tag to filter by
	 *
	 * @var string
	 */
	public $tagStartsWith = null;

	/**
	 * Type identifier
	 *
	 * @var int
	 */
	public $typeEqual = null;

	/**
	 * Language to filter by
	 *
	 * @var string
	 */
	public $languageEqual = null;

	/**
	 * Comma separated identifiers
	 *
	 * @var string
	 */
	public $idIn = null;


}

