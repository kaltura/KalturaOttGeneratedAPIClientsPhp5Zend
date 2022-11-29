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
class Kaltura_Client_Type_Permission extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaPermission';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (string)$xml->id;
		if(count($xml->name))
		{
			if(isset($xml->name->item) && count($xml->name->item))
				$this->multiLingual_name = Kaltura_Client_ParseUtils::unmarshalArray($xml->name, '');
			else
				$this->name = (string)$xml->name;
		}
		if(count($xml->friendlyName))
		{
			if(isset($xml->friendlyName->item) && count($xml->friendlyName->item))
				$this->multiLingual_friendlyName = Kaltura_Client_ParseUtils::unmarshalArray($xml->friendlyName, '');
			else
				$this->friendlyName = (string)$xml->friendlyName;
		}
		if(count($xml->dependsOnPermissionNames))
		{
			if(isset($xml->dependsOnPermissionNames->item) && count($xml->dependsOnPermissionNames->item))
				$this->multiLingual_dependsOnPermissionNames = Kaltura_Client_ParseUtils::unmarshalArray($xml->dependsOnPermissionNames, '');
			else
				$this->dependsOnPermissionNames = (string)$xml->dependsOnPermissionNames;
		}
		if(count($xml->type))
		{
			if(isset($xml->type->item) && count($xml->type->item))
				$this->multiLingual_type = Kaltura_Client_ParseUtils::unmarshalArray($xml->type, '');
			else
				$this->type = (string)$xml->type;
		}
		if(count($xml->permissionItemsIds))
		{
			if(isset($xml->permissionItemsIds->item) && count($xml->permissionItemsIds->item))
				$this->multiLingual_permissionItemsIds = Kaltura_Client_ParseUtils::unmarshalArray($xml->permissionItemsIds, '');
			else
				$this->permissionItemsIds = (string)$xml->permissionItemsIds;
		}
	}
	/**
	 * Permission identifier
	 *
	 * @var bigint
	 * @readonly
	 */
	public $id = null;

	/**
	 * Permission name
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * Permission friendly name
	 *
	 * @var string
	 */
	public $friendlyName = null;

	/**
	 * Comma separated permissions names from type SPECIAL_FEATURE
	 *
	 * @var string
	 * @readonly
	 */
	public $dependsOnPermissionNames = null;

	/**
	 * Permission type
	 *
	 * @var Kaltura_Client_Enum_PermissionType
	 */
	public $type = null;

	/**
	 * Comma separated associated permission items IDs
	 *
	 * @var string
	 */
	public $permissionItemsIds = null;


}

