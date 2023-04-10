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
class Kaltura_Client_Type_CollectionFilter extends Kaltura_Client_Type_Filter
{
	public function getKalturaObjectType()
	{
		return 'KalturaCollectionFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->collectionIdIn))
			$this->collectionIdIn = (string)$xml->collectionIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->collectionIdIn))
			$this->collectionIdIn = (string)$jsonObject->collectionIdIn;
		if(!is_null($xml) && count($xml->mediaFileIdEqual))
			$this->mediaFileIdEqual = (int)$xml->mediaFileIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->mediaFileIdEqual))
			$this->mediaFileIdEqual = (int)$jsonObject->mediaFileIdEqual;
		if(!is_null($xml) && count($xml->couponGroupIdEqual))
			$this->couponGroupIdEqual = (int)$xml->couponGroupIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->couponGroupIdEqual))
			$this->couponGroupIdEqual = (int)$jsonObject->couponGroupIdEqual;
		if(!is_null($xml) && count($xml->alsoInactive))
		{
			if(!empty($xml->alsoInactive) && ((int) $xml->alsoInactive === 1 || strtolower((string)$xml->alsoInactive) === 'true'))
				$this->alsoInactive = true;
			else
				$this->alsoInactive = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->alsoInactive))
		{
			if(!empty($jsonObject->alsoInactive) && ((int) $jsonObject->alsoInactive === 1 || strtolower((string)$jsonObject->alsoInactive) === 'true'))
				$this->alsoInactive = true;
			else
				$this->alsoInactive = false;
		}
		if(!is_null($xml) && count($xml->assetUserRuleIdIn))
			$this->assetUserRuleIdIn = (string)$xml->assetUserRuleIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->assetUserRuleIdIn))
			$this->assetUserRuleIdIn = (string)$jsonObject->assetUserRuleIdIn;
		if(!is_null($xml) && count($xml->nameContains))
			$this->nameContains = (string)$xml->nameContains;
		if(!is_null($jsonObject) && isset($jsonObject->nameContains))
			$this->nameContains = (string)$jsonObject->nameContains;
	}
	/**
	 * Comma separated collection IDs
	 *
	 * @var string
	 */
	public $collectionIdIn = null;

	/**
	 * Media-file ID to get the collections by
	 *
	 * @var int
	 */
	public $mediaFileIdEqual = null;

	/**
	 * couponGroupIdEqual
	 *
	 * @var int
	 */
	public $couponGroupIdEqual = null;

	/**
	 * return also inactive
	 *
	 * @var bool
	 */
	public $alsoInactive = null;

	/**
	 * comma-separated list of KalturaCollection.assetUserRuleId values.  Matching KalturaCollection objects will be returned by the filter.
	 *
	 * @var string
	 */
	public $assetUserRuleIdIn = null;

	/**
	 * A string that is included in the collection name
	 *
	 * @var string
	 */
	public $nameContains = null;


}

