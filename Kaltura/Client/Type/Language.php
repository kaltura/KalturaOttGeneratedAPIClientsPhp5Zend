<?php
// ===================================================================================================
//                           _  __     _ _
//                          | |/ /__ _| | |_ _  _ _ _ __ _
//                          | ' </ _` | |  _| || | '_/ _` |
//                          |_|\_\__,_|_|\__|\_,_|_| \__,_|
//
// This file is part of the Kaltura Collaborative Media Suite which allows users
// to do with audio, video, and animation what Wiki platfroms allow them to do with
// text.
//
// Copyright (C) 2006-2021  Kaltura Inc.
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
class Kaltura_Client_Type_Language extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaLanguage';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (int)$xml->id;
		if(count($xml->name))
			$this->name = (string)$xml->name;
		if(count($xml->systemName))
			$this->systemName = (string)$xml->systemName;
		if(count($xml->code))
			$this->code = (string)$xml->code;
		if(count($xml->direction))
			$this->direction = (string)$xml->direction;
		if(count($xml->isDefault))
		{
			if(!empty($xml->isDefault) && ((int) $xml->isDefault === 1 || strtolower((string)$xml->isDefault) === 'true'))
				$this->isDefault = true;
			else
				$this->isDefault = false;
		}
	}
	/**
	 * Identifier
	 *
	 * @var int
	 */
	public $id = null;

	/**
	 * Language name
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * Language system name
	 *
	 * @var string
	 */
	public $systemName = null;

	/**
	 * Language code
	 *
	 * @var string
	 */
	public $code = null;

	/**
	 * Language direction (LTR/RTL)
	 *
	 * @var string
	 */
	public $direction = null;

	/**
	 * Is the default language of the account
	 *
	 * @var bool
	 */
	public $isDefault = null;


}

