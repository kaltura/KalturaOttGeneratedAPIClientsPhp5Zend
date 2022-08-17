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
class Kaltura_Client_Type_SessionCharacteristic extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaSessionCharacteristic';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (string)$xml->id;
		if(count($xml->regionId))
			$this->regionId = (int)$xml->regionId;
		if(count($xml->userSegmentsIds))
			$this->userSegmentsIds = (string)$xml->userSegmentsIds;
		if(count($xml->userRolesIds))
			$this->userRolesIds = (string)$xml->userRolesIds;
		if(count($xml->userSessionProfilesIds))
			$this->userSessionProfilesIds = (string)$xml->userSessionProfilesIds;
	}
	/**
	 * Session characteristic identifier
	 *
	 * @var string
	 * @readonly
	 */
	public $id = null;

	/**
	 * Region identifier
	 *
	 * @var int
	 * @readonly
	 */
	public $regionId = null;

	/**
	 * Comma-separated list of user segments identifiers
	 *
	 * @var string
	 * @readonly
	 */
	public $userSegmentsIds = null;

	/**
	 * Comma-separated list of user roles identifiers
	 *
	 * @var string
	 * @readonly
	 */
	public $userRolesIds = null;

	/**
	 * Comma-separated list of user session profiles identifiers
	 *
	 * @var string
	 * @readonly
	 */
	public $userSessionProfilesIds = null;


}

