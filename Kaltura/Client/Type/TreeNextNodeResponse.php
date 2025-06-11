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
class Kaltura_Client_Type_TreeNextNodeResponse extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaTreeNextNodeResponse';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->question) && !empty($xml->question))
			$this->question = Kaltura_Client_ParseUtils::unmarshalObject($xml->question, "KalturaTreeQuestion");
		if(!is_null($jsonObject) && isset($jsonObject->question) && !empty($jsonObject->question))
			$this->question = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->question, "KalturaTreeQuestion");
		if(!is_null($xml) && count($xml->answers))
		{
			if(empty($xml->answers))
				$this->answers = array();
			else
				$this->answers = Kaltura_Client_ParseUtils::unmarshalArray($xml->answers, "KalturaTreeAnswer");
		}
		if(!is_null($jsonObject) && isset($jsonObject->answers))
		{
			if(empty($jsonObject->answers))
				$this->answers = array();
			else
				$this->answers = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->answers, "KalturaTreeAnswer");
		}
		if(!is_null($xml) && count($xml->recommendations) && !empty($xml->recommendations))
			$this->recommendations = Kaltura_Client_ParseUtils::unmarshalObject($xml->recommendations, "KalturaTreeRecommendations");
		if(!is_null($jsonObject) && isset($jsonObject->recommendations) && !empty($jsonObject->recommendations))
			$this->recommendations = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->recommendations, "KalturaTreeRecommendations");
	}
	/**
	 * The next question to present to the user, or null for terminal nodes.
	 *
	 * @var Kaltura_Client_Type_TreeQuestion
	 */
	public $question;

	/**
	 * Array of possible answer options for the question.
	 *
	 * @var Kaltura_Client_Type_TreeAnswer[]
	 */
	public $answers;

	/**
	 * Content recommendations based on the current path.
	 *
	 * @var Kaltura_Client_Type_TreeRecommendations
	 */
	public $recommendations;


}

