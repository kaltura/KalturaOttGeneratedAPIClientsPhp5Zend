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
class Kaltura_Client_Type_AssetStructMeta extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaAssetStructMeta';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->assetStructId))
			$this->assetStructId = (string)$xml->assetStructId;
		if(!is_null($jsonObject) && isset($jsonObject->assetStructId))
			$this->assetStructId = (string)$jsonObject->assetStructId;
		if(!is_null($xml) && count($xml->metaId))
			$this->metaId = (string)$xml->metaId;
		if(!is_null($jsonObject) && isset($jsonObject->metaId))
			$this->metaId = (string)$jsonObject->metaId;
		if(!is_null($xml) && count($xml->ingestReferencePath))
			$this->ingestReferencePath = (string)$xml->ingestReferencePath;
		if(!is_null($jsonObject) && isset($jsonObject->ingestReferencePath))
			$this->ingestReferencePath = (string)$jsonObject->ingestReferencePath;
		if(!is_null($xml) && count($xml->protectFromIngest))
		{
			if(!empty($xml->protectFromIngest) && ((int) $xml->protectFromIngest === 1 || strtolower((string)$xml->protectFromIngest) === 'true'))
				$this->protectFromIngest = true;
			else
				$this->protectFromIngest = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->protectFromIngest))
		{
			if(!empty($jsonObject->protectFromIngest) && ((int) $jsonObject->protectFromIngest === 1 || strtolower((string)$jsonObject->protectFromIngest) === 'true'))
				$this->protectFromIngest = true;
			else
				$this->protectFromIngest = false;
		}
		if(!is_null($xml) && count($xml->defaultIngestValue))
			$this->defaultIngestValue = (string)$xml->defaultIngestValue;
		if(!is_null($jsonObject) && isset($jsonObject->defaultIngestValue))
			$this->defaultIngestValue = (string)$jsonObject->defaultIngestValue;
		if(!is_null($xml) && count($xml->createDate))
			$this->createDate = (string)$xml->createDate;
		if(!is_null($jsonObject) && isset($jsonObject->createDate))
			$this->createDate = (string)$jsonObject->createDate;
		if(!is_null($xml) && count($xml->updateDate))
			$this->updateDate = (string)$xml->updateDate;
		if(!is_null($jsonObject) && isset($jsonObject->updateDate))
			$this->updateDate = (string)$jsonObject->updateDate;
		if(!is_null($xml) && count($xml->isInherited))
		{
			if(!empty($xml->isInherited) && ((int) $xml->isInherited === 1 || strtolower((string)$xml->isInherited) === 'true'))
				$this->isInherited = true;
			else
				$this->isInherited = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->isInherited))
		{
			if(!empty($jsonObject->isInherited) && ((int) $jsonObject->isInherited === 1 || strtolower((string)$jsonObject->isInherited) === 'true'))
				$this->isInherited = true;
			else
				$this->isInherited = false;
		}
		if(!is_null($xml) && count($xml->isLocationTag))
		{
			if(!empty($xml->isLocationTag) && ((int) $xml->isLocationTag === 1 || strtolower((string)$xml->isLocationTag) === 'true'))
				$this->isLocationTag = true;
			else
				$this->isLocationTag = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->isLocationTag))
		{
			if(!empty($jsonObject->isLocationTag) && ((int) $jsonObject->isLocationTag === 1 || strtolower((string)$jsonObject->isLocationTag) === 'true'))
				$this->isLocationTag = true;
			else
				$this->isLocationTag = false;
		}
		if(!is_null($xml) && count($xml->suppressedOrder))
			$this->suppressedOrder = (int)$xml->suppressedOrder;
		if(!is_null($jsonObject) && isset($jsonObject->suppressedOrder))
			$this->suppressedOrder = (int)$jsonObject->suppressedOrder;
		if(!is_null($xml) && count($xml->aliasName))
			$this->aliasName = (string)$xml->aliasName;
		if(!is_null($jsonObject) && isset($jsonObject->aliasName))
			$this->aliasName = (string)$jsonObject->aliasName;
	}
	/**
	 * Asset Struct id (template_id)
	 *
	 * @var bigint
	 * @readonly
	 */
	public $assetStructId = null;

	/**
	 * Meta id (topic_id)
	 *
	 * @var bigint
	 * @readonly
	 */
	public $metaId = null;

	/**
	 * IngestReferencePath
	 *
	 * @var string
	 */
	public $ingestReferencePath = null;

	/**
	 * ProtectFromIngest
	 *
	 * @var bool
	 */
	public $protectFromIngest = null;

	/**
	 * DefaultIngestValue
	 *
	 * @var string
	 */
	public $defaultIngestValue = null;

	/**
	 * Specifies when was the Asset Struct Meta was created. Date and time represented as epoch.
	 *
	 * @var bigint
	 * @readonly
	 */
	public $createDate = null;

	/**
	 * Specifies when was the Asset Struct Meta last updated. Date and time represented as epoch.
	 *
	 * @var bigint
	 * @readonly
	 */
	public $updateDate = null;

	/**
	 * Is inherited
	 *
	 * @var bool
	 */
	public $isInherited = null;

	/**
	 * Is Location Tag
	 *
	 * @var bool
	 */
	public $isLocationTag = null;

	/**
	 * suppressed Order, ascending
	 *
	 * @var int
	 */
	public $suppressedOrder = null;

	/**
	 * Case sensitive alias value
	 *
	 * @var string
	 */
	public $aliasName = null;


}

