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
class Kaltura_Client_Type_AssetStatistics extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaAssetStatistics';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->assetId))
			$this->assetId = (int)$xml->assetId;
		if(!is_null($jsonObject) && isset($jsonObject->assetId))
			$this->assetId = (int)$jsonObject->assetId;
		if(!is_null($xml) && count($xml->likes))
			$this->likes = (int)$xml->likes;
		if(!is_null($jsonObject) && isset($jsonObject->likes))
			$this->likes = (int)$jsonObject->likes;
		if(!is_null($xml) && count($xml->views))
			$this->views = (int)$xml->views;
		if(!is_null($jsonObject) && isset($jsonObject->views))
			$this->views = (int)$jsonObject->views;
		if(!is_null($xml) && count($xml->ratingCount))
			$this->ratingCount = (int)$xml->ratingCount;
		if(!is_null($jsonObject) && isset($jsonObject->ratingCount))
			$this->ratingCount = (int)$jsonObject->ratingCount;
		if(!is_null($xml) && count($xml->rating))
			$this->rating = (float)$xml->rating;
		if(!is_null($jsonObject) && isset($jsonObject->rating))
			$this->rating = (float)$jsonObject->rating;
		if(!is_null($xml) && count($xml->buzzScore) && !empty($xml->buzzScore))
			$this->buzzScore = Kaltura_Client_ParseUtils::unmarshalObject($xml->buzzScore, "KalturaBuzzScore");
		if(!is_null($jsonObject) && isset($jsonObject->buzzScore) && !empty($jsonObject->buzzScore))
			$this->buzzScore = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->buzzScore, "KalturaBuzzScore");
	}
	/**
	 * Unique identifier for the asset
	 *
	 * @var int
	 */
	public $assetId = null;

	/**
	 * Total number of likes for this asset
	 *
	 * @var int
	 */
	public $likes = null;

	/**
	 * Total number of views for this asset
	 *
	 * @var int
	 */
	public $views = null;

	/**
	 * Number of people that rated the asset
	 *
	 * @var int
	 */
	public $ratingCount = null;

	/**
	 * Average rating for the asset
	 *
	 * @var float
	 */
	public $rating = null;

	/**
	 * Buzz score
	 *
	 * @var Kaltura_Client_Type_BuzzScore
	 */
	public $buzzScore;


}

