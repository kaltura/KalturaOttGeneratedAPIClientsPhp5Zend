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
class Kaltura_Client_Type_SegmentationTypeFilter extends Kaltura_Client_Type_BaseSegmentationTypeFilter
{
	public function getKalturaObjectType()
	{
		return 'KalturaSegmentationTypeFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->idIn))
			$this->idIn = (string)$xml->idIn;
		if(!is_null($jsonObject) && isset($jsonObject->idIn))
			$this->idIn = (string)$jsonObject->idIn;
		if(!is_null($xml) && count($xml->kSql))
			$this->kSql = (string)$xml->kSql;
		if(!is_null($jsonObject) && isset($jsonObject->kSql))
			$this->kSql = (string)$jsonObject->kSql;
		if(!is_null($xml) && count($xml->nameContain))
			$this->nameContain = (string)$xml->nameContain;
		if(!is_null($jsonObject) && isset($jsonObject->nameContain))
			$this->nameContain = (string)$jsonObject->nameContain;
		if(!is_null($xml) && count($xml->assetUserRuleIdIn))
			$this->assetUserRuleIdIn = (string)$xml->assetUserRuleIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->assetUserRuleIdIn))
			$this->assetUserRuleIdIn = (string)$jsonObject->assetUserRuleIdIn;
	}
	/**
	 * Comma separated segmentation types identifiers
	 *
	 * @var string
	 */
	public $idIn = null;

	/**
	 * KSQL expression
	 *
	 * @var string
	 */
	public $kSql = null;

	/**
	 * Name of segment contains specific string value
	 *
	 * @var string
	 */
	public $nameContain = null;

	/**
	 * comma-separated list of KalturaSegmentationType.assetUserRuleId values
	 *
	 * @var string
	 */
	public $assetUserRuleIdIn = null;


}

