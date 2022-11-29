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
class Kaltura_Client_Type_OTTUserFilter extends Kaltura_Client_Type_Filter
{
	public function getKalturaObjectType()
	{
		return 'KalturaOTTUserFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->usernameEqual))
		{
			if(isset($xml->usernameEqual->item) && count($xml->usernameEqual->item))
				$this->multiLingual_usernameEqual = Kaltura_Client_ParseUtils::unmarshalArray($xml->usernameEqual, '');
			else
				$this->usernameEqual = (string)$xml->usernameEqual;
		}
		if(count($xml->externalIdEqual))
		{
			if(isset($xml->externalIdEqual->item) && count($xml->externalIdEqual->item))
				$this->multiLingual_externalIdEqual = Kaltura_Client_ParseUtils::unmarshalArray($xml->externalIdEqual, '');
			else
				$this->externalIdEqual = (string)$xml->externalIdEqual;
		}
		if(count($xml->idIn))
		{
			if(isset($xml->idIn->item) && count($xml->idIn->item))
				$this->multiLingual_idIn = Kaltura_Client_ParseUtils::unmarshalArray($xml->idIn, '');
			else
				$this->idIn = (string)$xml->idIn;
		}
		if(count($xml->roleIdsIn))
		{
			if(isset($xml->roleIdsIn->item) && count($xml->roleIdsIn->item))
				$this->multiLingual_roleIdsIn = Kaltura_Client_ParseUtils::unmarshalArray($xml->roleIdsIn, '');
			else
				$this->roleIdsIn = (string)$xml->roleIdsIn;
		}
		if(count($xml->emailEqual))
		{
			if(isset($xml->emailEqual->item) && count($xml->emailEqual->item))
				$this->multiLingual_emailEqual = Kaltura_Client_ParseUtils::unmarshalArray($xml->emailEqual, '');
			else
				$this->emailEqual = (string)$xml->emailEqual;
		}
	}
	/**
	 * Username
	 *
	 * @var string
	 */
	public $usernameEqual = null;

	/**
	 * User external identifier
	 *
	 * @var string
	 */
	public $externalIdEqual = null;

	/**
	 * List of user identifiers separated by &#39;,&#39;
	 *
	 * @var string
	 */
	public $idIn = null;

	/**
	 * Comma separated list of role Ids.
	 *
	 * @var string
	 */
	public $roleIdsIn = null;

	/**
	 * User email
	 *
	 * @var string
	 */
	public $emailEqual = null;


}

