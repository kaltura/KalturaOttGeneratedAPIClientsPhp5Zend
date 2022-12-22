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
class Kaltura_Client_Type_UserRole extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaUserRole';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (string)$xml->id;
		if(count($xml->name))
			$this->name = (string)$xml->name;
		if(count($xml->permissionNames))
			$this->permissionNames = (string)$xml->permissionNames;
		if(count($xml->excludedPermissionNames))
			$this->excludedPermissionNames = (string)$xml->excludedPermissionNames;
		if(count($xml->type))
			$this->type = (string)$xml->type;
		if(count($xml->profile))
			$this->profile = (string)$xml->profile;
	}
	/**
	 * User role identifier
	 *
	 * @var bigint
	 * @readonly
	 */
	public $id = null;

	/**
	 * User role name
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * permissions associated with the user role
	 *
	 * @var string
	 */
	public $permissionNames = null;

	/**
	 * permissions associated with the user role in is_exclueded = true
	 *
	 * @var string
	 */
	public $excludedPermissionNames = null;

	/**
	 * Role type
	 *
	 * @var Kaltura_Client_Enum_UserRoleType
	 * @readonly
	 */
	public $type = null;

	/**
	 * Role profile
	 *
	 * @var Kaltura_Client_Enum_UserRoleProfile
	 */
	public $profile = null;


}

