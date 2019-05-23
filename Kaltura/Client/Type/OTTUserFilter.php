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
// Copyright (C) 2006-2019  Kaltura Inc.
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
			$this->usernameEqual = (string)$xml->usernameEqual;
		if(count($xml->externalIdEqual))
			$this->externalIdEqual = (string)$xml->externalIdEqual;
		if(count($xml->idIn))
			$this->idIn = (string)$xml->idIn;
		if(count($xml->roleIdsIn))
			$this->roleIdsIn = (string)$xml->roleIdsIn;
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


}

