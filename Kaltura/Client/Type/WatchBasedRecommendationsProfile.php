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
class Kaltura_Client_Type_WatchBasedRecommendationsProfile extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaWatchBasedRecommendationsProfile';
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
		if(!is_null($xml) && count($xml->topicIds))
			$this->topicIds = (string)$xml->topicIds;
		if(!is_null($jsonObject) && isset($jsonObject->topicIds))
			$this->topicIds = (string)$jsonObject->topicIds;
		if(!is_null($xml) && count($xml->analysisMediaTypeIds))
			$this->analysisMediaTypeIds = (string)$xml->analysisMediaTypeIds;
		if(!is_null($jsonObject) && isset($jsonObject->analysisMediaTypeIds))
			$this->analysisMediaTypeIds = (string)$jsonObject->analysisMediaTypeIds;
		if(!is_null($xml) && count($xml->userInterestPlayThresholdInPercentages))
			$this->userInterestPlayThresholdInPercentages = (int)$xml->userInterestPlayThresholdInPercentages;
		if(!is_null($jsonObject) && isset($jsonObject->userInterestPlayThresholdInPercentages))
			$this->userInterestPlayThresholdInPercentages = (int)$jsonObject->userInterestPlayThresholdInPercentages;
		if(!is_null($xml) && count($xml->numberOfInterests))
			$this->numberOfInterests = (int)$xml->numberOfInterests;
		if(!is_null($jsonObject) && isset($jsonObject->numberOfInterests))
			$this->numberOfInterests = (int)$jsonObject->numberOfInterests;
		if(!is_null($xml) && count($xml->fallbackChannelId))
			$this->fallbackChannelId = (string)$xml->fallbackChannelId;
		if(!is_null($jsonObject) && isset($jsonObject->fallbackChannelId))
			$this->fallbackChannelId = (string)$jsonObject->fallbackChannelId;
		if(!is_null($xml) && count($xml->minPlaybacks))
			$this->minPlaybacks = (int)$xml->minPlaybacks;
		if(!is_null($jsonObject) && isset($jsonObject->minPlaybacks))
			$this->minPlaybacks = (int)$jsonObject->minPlaybacks;
		if(!is_null($xml) && count($xml->maxPlaybacks))
			$this->maxPlaybacks = (int)$xml->maxPlaybacks;
		if(!is_null($jsonObject) && isset($jsonObject->maxPlaybacks))
			$this->maxPlaybacks = (int)$jsonObject->maxPlaybacks;
		if(!is_null($xml) && count($xml->allowedRecommendationsKsql))
			$this->allowedRecommendationsKsql = (string)$xml->allowedRecommendationsKsql;
		if(!is_null($jsonObject) && isset($jsonObject->allowedRecommendationsKsql))
			$this->allowedRecommendationsKsql = (string)$jsonObject->allowedRecommendationsKsql;
		if(!is_null($xml) && count($xml->playbackInterestsCalculationPeriodDays))
			$this->playbackInterestsCalculationPeriodDays = (int)$xml->playbackInterestsCalculationPeriodDays;
		if(!is_null($jsonObject) && isset($jsonObject->playbackInterestsCalculationPeriodDays))
			$this->playbackInterestsCalculationPeriodDays = (int)$jsonObject->playbackInterestsCalculationPeriodDays;
	}
	/**
	 * Unique identifier for the profile
	 *
	 * @var bigint
	 * @readonly
	 */
	public $id = null;

	/**
	 * Friendly name for the profile
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * List of comma seperated topic ids considered for recommendations calculation.
	 *
	 * @var string
	 */
	public $topicIds = null;

	/**
	 * List of comma seperated type ids considered for recommendations calculation.
	 *
	 * @var string
	 */
	public $analysisMediaTypeIds = null;

	/**
	 * The minimum coverage in percentages that media is considered viewed.
	 *
	 * @var int
	 */
	public $userInterestPlayThresholdInPercentages = null;

	/**
	 * The number of interests that will be selected per user.
	 *
	 * @var int
	 */
	public $numberOfInterests = null;

	/**
	 * Reference to partner default recommendations (first 30 assets that are included in the referred KalturaChannel).
	 *
	 * @var bigint
	 */
	public $fallbackChannelId = null;

	/**
	 * Minimum number of media assets that user shall watch to trigger user interests calculation.
	 *
	 * @var int
	 */
	public $minPlaybacks = null;

	/**
	 * Maximum number of assets that watched by a user and will be considered for recommendations calculation (the last maxPlaybacks shall be used in the analysis).
	 *
	 * @var int
	 */
	public $maxPlaybacks = null;

	/**
	 * A kSql is used to filter the “user interests“ recommendations. Only asset properties, metas, or tags are allowed ti be included in this ksql.
	 *
	 * @var string
	 */
	public $allowedRecommendationsKsql = null;

	/**
	 * The number of days the user interests are considered to be up-to-date.
	 *
	 * @var int
	 */
	public $playbackInterestsCalculationPeriodDays = null;


}

