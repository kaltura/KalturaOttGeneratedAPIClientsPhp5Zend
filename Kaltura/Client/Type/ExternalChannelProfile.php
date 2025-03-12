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
class Kaltura_Client_Type_ExternalChannelProfile extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaExternalChannelProfile';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->id))
			$this->id = (int)$xml->id;
		if(!is_null($jsonObject) && isset($jsonObject->id))
			$this->id = (int)$jsonObject->id;
		if(!is_null($xml) && count($xml->name))
			$this->name = (string)$xml->name;
		if(!is_null($jsonObject) && isset($jsonObject->name))
			$this->name = (string)$jsonObject->name;
		if(!is_null($xml) && count($xml->isActive))
		{
			if(!empty($xml->isActive) && ((int) $xml->isActive === 1 || strtolower((string)$xml->isActive) === 'true'))
				$this->isActive = true;
			else
				$this->isActive = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->isActive))
		{
			if(!empty($jsonObject->isActive) && ((int) $jsonObject->isActive === 1 || strtolower((string)$jsonObject->isActive) === 'true'))
				$this->isActive = true;
			else
				$this->isActive = false;
		}
		if(!is_null($xml) && count($xml->externalIdentifier))
			$this->externalIdentifier = (string)$xml->externalIdentifier;
		if(!is_null($jsonObject) && isset($jsonObject->externalIdentifier))
			$this->externalIdentifier = (string)$jsonObject->externalIdentifier;
		if(!is_null($xml) && count($xml->filterExpression))
			$this->filterExpression = (string)$xml->filterExpression;
		if(!is_null($jsonObject) && isset($jsonObject->filterExpression))
			$this->filterExpression = (string)$jsonObject->filterExpression;
		if(!is_null($xml) && count($xml->recommendationEngineId))
			$this->recommendationEngineId = (int)$xml->recommendationEngineId;
		if(!is_null($jsonObject) && isset($jsonObject->recommendationEngineId))
			$this->recommendationEngineId = (int)$jsonObject->recommendationEngineId;
		if(!is_null($xml) && count($xml->enrichments))
		{
			if(empty($xml->enrichments))
				$this->enrichments = array();
			else
				$this->enrichments = Kaltura_Client_ParseUtils::unmarshalArray($xml->enrichments, "KalturaChannelEnrichmentHolder");
		}
		if(!is_null($jsonObject) && isset($jsonObject->enrichments))
		{
			if(empty($jsonObject->enrichments))
				$this->enrichments = array();
			else
				$this->enrichments = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->enrichments, "KalturaChannelEnrichmentHolder");
		}
		if(!is_null($xml) && count($xml->assetUserRuleId))
			$this->assetUserRuleId = (string)$xml->assetUserRuleId;
		if(!is_null($jsonObject) && isset($jsonObject->assetUserRuleId))
			$this->assetUserRuleId = (string)$jsonObject->assetUserRuleId;
		if(!is_null($xml) && count($xml->metaData))
		{
			if(empty($xml->metaData))
				$this->metaData = array();
			else
				$this->metaData = Kaltura_Client_ParseUtils::unmarshalMap($xml->metaData, "KalturaStringValue");
		}
		if(!is_null($jsonObject) && isset($jsonObject->metaData))
		{
			if(empty($jsonObject->metaData))
				$this->metaData = array();
			else
				$this->metaData = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->metaData, "KalturaStringValue");
		}
	}
	/**
	 * External channel id
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * External channel name
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * External channel active status
	 *
	 * @var bool
	 */
	public $isActive = null;

	/**
	 * External channel external identifier
	 *
	 * @var string
	 */
	public $externalIdentifier = null;

	/**
	 * Filter expression
	 *
	 * @var string
	 */
	public $filterExpression = null;

	/**
	 * Recommendation engine id
	 *
	 * @var int
	 */
	public $recommendationEngineId = null;

	/**
	 * Enrichments
	 *
	 * @var Kaltura_Client_Type_ChannelEnrichmentHolder[]
	 */
	public $enrichments;

	/**
	 * Asset user rule identifier
	 *
	 * @var bigint
	 */
	public $assetUserRuleId = null;

	/**
	 * key/value map field for extra data
	 *
	 * @var map
	 */
	public $metaData;


}

