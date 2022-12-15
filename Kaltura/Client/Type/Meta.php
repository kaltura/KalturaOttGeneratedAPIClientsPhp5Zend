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
class Kaltura_Client_Type_Meta extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaMeta';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
		{
			if(isset($xml->id->item) && count($xml->id->item))
				$this->multiLingual_id = Kaltura_Client_ParseUtils::unmarshalArray($xml->id, '');
			else
				$this->id = (string)$xml->id;
		}
		if(count($xml->name))
		{
			if(isset($xml->name->item) && count($xml->name->item))
				$this->multiLingual_name = Kaltura_Client_ParseUtils::unmarshalArray($xml->name, '');
			else
				$this->name = (string)$xml->name;
		}
		if(count($xml->multilingualName))
		{
			if(empty($xml->multilingualName))
				$this->multilingualName = array();
			else
				$this->multilingualName = Kaltura_Client_ParseUtils::unmarshalArray($xml->multilingualName, "KalturaTranslationToken");
		}
		if(count($xml->systemName))
		{
			if(isset($xml->systemName->item) && count($xml->systemName->item))
				$this->multiLingual_systemName = Kaltura_Client_ParseUtils::unmarshalArray($xml->systemName, '');
			else
				$this->systemName = (string)$xml->systemName;
		}
		if(count($xml->dataType))
		{
			if(isset($xml->dataType->item) && count($xml->dataType->item))
				$this->multiLingual_dataType = Kaltura_Client_ParseUtils::unmarshalArray($xml->dataType, '');
			else
				$this->dataType = (string)$xml->dataType;
		}
		if(count($xml->multipleValue))
		{
			if(!empty($xml->multipleValue) && ((int) $xml->multipleValue === 1 || strtolower((string)$xml->multipleValue) === 'true'))
				$this->multipleValue = true;
			else
				$this->multipleValue = false;
		}
		if(count($xml->isProtected))
		{
			if(!empty($xml->isProtected) && ((int) $xml->isProtected === 1 || strtolower((string)$xml->isProtected) === 'true'))
				$this->isProtected = true;
			else
				$this->isProtected = false;
		}
		if(count($xml->helpText))
		{
			if(isset($xml->helpText->item) && count($xml->helpText->item))
				$this->multiLingual_helpText = Kaltura_Client_ParseUtils::unmarshalArray($xml->helpText, '');
			else
				$this->helpText = (string)$xml->helpText;
		}
		if(count($xml->features))
		{
			if(isset($xml->features->item) && count($xml->features->item))
				$this->multiLingual_features = Kaltura_Client_ParseUtils::unmarshalArray($xml->features, '');
			else
				$this->features = (string)$xml->features;
		}
		if(count($xml->parentId))
		{
			if(isset($xml->parentId->item) && count($xml->parentId->item))
				$this->multiLingual_parentId = Kaltura_Client_ParseUtils::unmarshalArray($xml->parentId, '');
			else
				$this->parentId = (string)$xml->parentId;
		}
		if(count($xml->createDate))
			$this->createDate = (string)$xml->createDate;
		if(count($xml->updateDate))
			$this->updateDate = (string)$xml->updateDate;
		if(count($xml->dynamicData))
		{
			if(empty($xml->dynamicData))
				$this->dynamicData = array();
			else
				$this->dynamicData = Kaltura_Client_ParseUtils::unmarshalMap($xml->dynamicData, "KalturaStringValue");
		}
	}
	/**
	 * Meta id
	 *
	 * @var string
	 * @readonly
	 */
	public $id = null;

	/**
	 * Meta name for the partner
	 *
	 * @var string
	 * @readonly
	 */
	public $name = null;

	/**
	 * Meta name for the partner
	 *
	 * @var array of KalturaTranslationToken
	 */
	public $multilingualName;

	/**
	 * Meta system name for the partner
	 *
	 * @var string
	 * @insertonly
	 */
	public $systemName = null;

	/**
	 * Meta data type
	 *
	 * @var Kaltura_Client_Enum_MetaDataType
	 * @insertonly
	 */
	public $dataType = null;

	/**
	 * Does the meta contain multiple values
	 *
	 * @var bool
	 */
	public $multipleValue = null;

	/**
	 * Is the meta protected by the system
	 *
	 * @var bool
	 * @insertonly
	 */
	public $isProtected = null;

	/**
	 * The help text of the meta to be displayed on the UI.
	 *
	 * @var string
	 */
	public $helpText = null;

	/**
	 * List of supported features
	 *
	 * @var string
	 */
	public $features = null;

	/**
	 * Parent meta id
	 *
	 * @var string
	 */
	public $parentId = null;

	/**
	 * Specifies when was the meta created. Date and time represented as epoch.
	 *
	 * @var bigint
	 * @readonly
	 */
	public $createDate = null;

	/**
	 * Specifies when was the meta last updated. Date and time represented as epoch.
	 *
	 * @var bigint
	 * @readonly
	 */
	public $updateDate = null;

	/**
	 * Dynamic data
	 *
	 * @var map
	 */
	public $dynamicData;


}

