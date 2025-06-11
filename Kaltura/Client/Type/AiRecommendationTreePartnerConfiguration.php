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
class Kaltura_Client_Type_AiRecommendationTreePartnerConfiguration extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaAiRecommendationTreePartnerConfiguration';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->activeMetadataTypes))
		{
			if(empty($xml->activeMetadataTypes))
				$this->activeMetadataTypes = array();
			else
				$this->activeMetadataTypes = Kaltura_Client_ParseUtils::unmarshalMap($xml->activeMetadataTypes, "KalturaIntegerValue");
		}
		if(!is_null($jsonObject) && isset($jsonObject->activeMetadataTypes))
		{
			if(empty($jsonObject->activeMetadataTypes))
				$this->activeMetadataTypes = array();
			else
				$this->activeMetadataTypes = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->activeMetadataTypes, "KalturaIntegerValue");
		}
		if(!is_null($xml) && count($xml->topLevelQuestions))
			$this->topLevelQuestions = (int)$xml->topLevelQuestions;
		if(!is_null($jsonObject) && isset($jsonObject->topLevelQuestions))
			$this->topLevelQuestions = (int)$jsonObject->topLevelQuestions;
		if(!is_null($xml) && count($xml->answersPerQuestion))
			$this->answersPerQuestion = (int)$xml->answersPerQuestion;
		if(!is_null($jsonObject) && isset($jsonObject->answersPerQuestion))
			$this->answersPerQuestion = (int)$jsonObject->answersPerQuestion;
		if(!is_null($xml) && count($xml->levels))
			$this->levels = (int)$xml->levels;
		if(!is_null($jsonObject) && isset($jsonObject->levels))
			$this->levels = (int)$jsonObject->levels;
		if(!is_null($xml) && count($xml->numOfRecommendedAssets))
			$this->numOfRecommendedAssets = (int)$xml->numOfRecommendedAssets;
		if(!is_null($jsonObject) && isset($jsonObject->numOfRecommendedAssets))
			$this->numOfRecommendedAssets = (int)$jsonObject->numOfRecommendedAssets;
		if(!is_null($xml) && count($xml->treeGenerationFrequency))
			$this->treeGenerationFrequency = (string)$xml->treeGenerationFrequency;
		if(!is_null($jsonObject) && isset($jsonObject->treeGenerationFrequency))
			$this->treeGenerationFrequency = (string)$jsonObject->treeGenerationFrequency;
		if(!is_null($xml) && count($xml->activeTreeId))
			$this->activeTreeId = (string)$xml->activeTreeId;
		if(!is_null($jsonObject) && isset($jsonObject->activeTreeId))
			$this->activeTreeId = (string)$jsonObject->activeTreeId;
	}
	/**
	 * Dictionary of metadata types to base questions on (genre, actor, director, etc.) with their respective counts.
	 *
	 * @var map
	 */
	public $activeMetadataTypes;

	/**
	 * Number of top-level questions to generate (range: 5-21).
	 *
	 * @var int
	 */
	public $topLevelQuestions = null;

	/**
	 * Number of regular answers per question (range: 2-3).
	 *
	 * @var int
	 */
	public $answersPerQuestion = null;

	/**
	 * Maximum depth of the decision tree (range: 1-5).
	 *
	 * @var int
	 */
	public $levels = null;

	/**
	 * Number of assets to include in each recommendation set.
	 *
	 * @var int
	 */
	public $numOfRecommendedAssets = null;

	/**
	 * Cron expression for scheduling tree regeneration.
	 *
	 * @var string
	 */
	public $treeGenerationFrequency = null;

	/**
	 * Identifier for the tree that is currently marked as Active (can be only one at a time)
	 *
	 * @var string
	 */
	public $activeTreeId = null;


}

