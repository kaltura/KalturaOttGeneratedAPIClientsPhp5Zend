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
// Copyright (C) 2006-2023  Kaltura Inc.
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
class Kaltura_Client_Type_UserRoleFilter extends Kaltura_Client_Type_Filter
{
	public function getKalturaObjectType()
	{
		return 'KalturaUserRoleFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->idIn))
			$this->idIn = (string)$xml->idIn;
		if(count($xml->currentUserRoleIdsContains))
		{
			if(!empty($xml->currentUserRoleIdsContains) && ((int) $xml->currentUserRoleIdsContains === 1 || strtolower((string)$xml->currentUserRoleIdsContains) === 'true'))
				$this->currentUserRoleIdsContains = true;
			else
				$this->currentUserRoleIdsContains = false;
		}
		if(count($xml->typeEqual))
			$this->typeEqual = (string)$xml->typeEqual;
		if(count($xml->profileEqual))
			$this->profileEqual = (string)$xml->profileEqual;
	}
	/**
	 * Comma separated roles identifiers
	 *
	 * @var string
	 */
	public $idIn = null;

	/**
	 * Indicates whether the results should be filtered by userId using the current
	 *
	 * @var bool
	 */
	public $currentUserRoleIdsContains = null;

	/**
	 * User role type
	 *
	 * @var Kaltura_Client_Enum_UserRoleType
	 */
	public $typeEqual = null;

	/**
	 * User role profile
	 *
	 * @var Kaltura_Client_Enum_UserRoleProfile
	 */
	public $profileEqual = null;


}

