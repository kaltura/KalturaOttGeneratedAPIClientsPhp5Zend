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
class Kaltura_Client_Type_AssetStruct extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaAssetStruct';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->id))
			$this->id = (string)$xml->id;
		if(!is_null($jsonObject) && isset($jsonObject->id))
			$this->id = (string)$jsonObject->id;
		if(!is_null($xml) && count($xml->name))
			$this->name = (string)$xml->name;
		if(!is_null($jsonObject) && isset($jsonObject->name))
			$this->name = (string)$jsonObject->name;
		if(!is_null($xml) && count($xml->multilingualName))
		{
			if(empty($xml->multilingualName))
				$this->multilingualName = array();
			else
				$this->multilingualName = Kaltura_Client_ParseUtils::unmarshalArray($xml->multilingualName, "KalturaTranslationToken");
		}
		if(!is_null($jsonObject) && isset($jsonObject->multilingualName))
		{
			if(empty($jsonObject->multilingualName))
				$this->multilingualName = array();
			else
				$this->multilingualName = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->multilingualName, "KalturaTranslationToken");
		}
		if(!is_null($xml) && count($xml->systemName))
			$this->systemName = (string)$xml->systemName;
		if(!is_null($jsonObject) && isset($jsonObject->systemName))
			$this->systemName = (string)$jsonObject->systemName;
		if(!is_null($xml) && count($xml->isProtected))
		{
			if(!empty($xml->isProtected) && ((int) $xml->isProtected === 1 || strtolower((string)$xml->isProtected) === 'true'))
				$this->isProtected = true;
			else
				$this->isProtected = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->isProtected))
		{
			if(!empty($jsonObject->isProtected) && ((int) $jsonObject->isProtected === 1 || strtolower((string)$jsonObject->isProtected) === 'true'))
				$this->isProtected = true;
			else
				$this->isProtected = false;
		}
		if(!is_null($xml) && count($xml->metaIds))
			$this->metaIds = (string)$xml->metaIds;
		if(!is_null($jsonObject) && isset($jsonObject->metaIds))
			$this->metaIds = (string)$jsonObject->metaIds;
		if(!is_null($xml) && count($xml->createDate))
			$this->createDate = (string)$xml->createDate;
		if(!is_null($jsonObject) && isset($jsonObject->createDate))
			$this->createDate = (string)$jsonObject->createDate;
		if(!is_null($xml) && count($xml->updateDate))
			$this->updateDate = (string)$xml->updateDate;
		if(!is_null($jsonObject) && isset($jsonObject->updateDate))
			$this->updateDate = (string)$jsonObject->updateDate;
		if(!is_null($xml) && count($xml->features))
			$this->features = (string)$xml->features;
		if(!is_null($jsonObject) && isset($jsonObject->features))
			$this->features = (string)$jsonObject->features;
		if(!is_null($xml) && count($xml->pluralName))
			$this->pluralName = (string)$xml->pluralName;
		if(!is_null($jsonObject) && isset($jsonObject->pluralName))
			$this->pluralName = (string)$jsonObject->pluralName;
		if(!is_null($xml) && count($xml->parentId))
			$this->parentId = (string)$xml->parentId;
		if(!is_null($jsonObject) && isset($jsonObject->parentId))
			$this->parentId = (string)$jsonObject->parentId;
		if(!is_null($xml) && count($xml->connectingMetaId))
			$this->connectingMetaId = (string)$xml->connectingMetaId;
		if(!is_null($jsonObject) && isset($jsonObject->connectingMetaId))
			$this->connectingMetaId = (string)$jsonObject->connectingMetaId;
		if(!is_null($xml) && count($xml->connectedParentMetaId))
			$this->connectedParentMetaId = (string)$xml->connectedParentMetaId;
		if(!is_null($jsonObject) && isset($jsonObject->connectedParentMetaId))
			$this->connectedParentMetaId = (string)$jsonObject->connectedParentMetaId;
		if(!is_null($xml) && count($xml->dynamicData))
		{
			if(empty($xml->dynamicData))
				$this->dynamicData = array();
			else
				$this->dynamicData = Kaltura_Client_ParseUtils::unmarshalMap($xml->dynamicData, "KalturaStringValue");
		}
		if(!is_null($jsonObject) && isset($jsonObject->dynamicData))
		{
			if(empty($jsonObject->dynamicData))
				$this->dynamicData = array();
			else
				$this->dynamicData = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->dynamicData, "KalturaStringValue");
		}
	}
	/**
	 * Asset Struct id
	 *
	 * @var bigint
	 * @readonly
	 */
	public $id = null;

	/**
	 * Asset struct name for the partner
	 *
	 * @var string
	 * @readonly
	 */
	public $name = null;

	/**
	 * Asset struct name for the partner
	 *
	 * @var Kaltura_Client_Type_TranslationToken[]
	 */
	public $multilingualName;

	/**
	 * Asset Struct system name for the partner
	 *
	 * @var string
	 */
	public $systemName = null;

	/**
	 * Is the Asset Struct protected by the system
	 *
	 * @var bool
	 */
	public $isProtected = null;

	/**
	 * A list of comma separated meta ids associated with this asset struct, returned according to the order.
	 *
	 * @var string
	 */
	public $metaIds = null;

	/**
	 * Specifies when was the Asset Struct was created. Date and time represented as epoch.
	 *
	 * @var bigint
	 * @readonly
	 */
	public $createDate = null;

	/**
	 * Specifies when was the Asset Struct last updated. Date and time represented as epoch.
	 *
	 * @var bigint
	 * @readonly
	 */
	public $updateDate = null;

	/**
	 * List of supported features
	 *
	 * @var string
	 */
	public $features = null;

	/**
	 * Plural Name
	 *
	 * @var string
	 */
	public $pluralName = null;

	/**
	 * AssetStruct parent Id
	 *
	 * @var bigint
	 */
	public $parentId = null;

	/**
	 * connectingMetaId
	 *
	 * @var bigint
	 */
	public $connectingMetaId = null;

	/**
	 * connectedParentMetaId
	 *
	 * @var bigint
	 */
	public $connectedParentMetaId = null;

	/**
	 * Dynamic data
	 *
	 * @var map
	 */
	public $dynamicData;


}

