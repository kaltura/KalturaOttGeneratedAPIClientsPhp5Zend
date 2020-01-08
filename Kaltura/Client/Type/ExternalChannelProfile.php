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
// Copyright (C) 2006-2020  Kaltura Inc.
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
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (int)$xml->id;
		if(count($xml->name))
			$this->name = (string)$xml->name;
		if(count($xml->isActive))
		{
			if(!empty($xml->isActive) && ((int) $xml->isActive === 1 || strtolower((string)$xml->isActive) === 'true'))
				$this->isActive = true;
			else
				$this->isActive = false;
		}
		if(count($xml->externalIdentifier))
			$this->externalIdentifier = (string)$xml->externalIdentifier;
		if(count($xml->filterExpression))
			$this->filterExpression = (string)$xml->filterExpression;
		if(count($xml->recommendationEngineId))
			$this->recommendationEngineId = (int)$xml->recommendationEngineId;
		if(count($xml->enrichments))
		{
			if(empty($xml->enrichments))
				$this->enrichments = array();
			else
				$this->enrichments = Kaltura_Client_ParseUtils::unmarshalArray($xml->enrichments, "KalturaChannelEnrichmentHolder");
		}
		if(count($xml->assetUserRuleId))
			$this->assetUserRuleId = (string)$xml->assetUserRuleId;
		if(count($xml->metaData))
		{
			if(empty($xml->metaData))
				$this->metaData = array();
			else
				$this->metaData = Kaltura_Client_ParseUtils::unmarshalMap($xml->metaData, "KalturaStringValue");
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
	 * @var array of KalturaChannelEnrichmentHolder
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

