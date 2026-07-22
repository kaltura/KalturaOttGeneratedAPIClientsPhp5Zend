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
class Kaltura_Client_Type_SemanticSearchParams extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaSemanticSearchParams';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->query))
			$this->query = (string)$xml->query;
		if(!is_null($jsonObject) && isset($jsonObject->query))
			$this->query = (string)$jsonObject->query;
		if(!is_null($xml) && count($xml->refineQuery))
		{
			if(!empty($xml->refineQuery) && ((int) $xml->refineQuery === 1 || strtolower((string)$xml->refineQuery) === 'true'))
				$this->refineQuery = true;
			else
				$this->refineQuery = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->refineQuery))
		{
			if(!empty($jsonObject->refineQuery) && ((int) $jsonObject->refineQuery === 1 || strtolower((string)$jsonObject->refineQuery) === 'true'))
				$this->refineQuery = true;
			else
				$this->refineQuery = false;
		}
		if(!is_null($xml) && count($xml->size))
			$this->size = (int)$xml->size;
		if(!is_null($jsonObject) && isset($jsonObject->size))
			$this->size = (int)$jsonObject->size;
		if(!is_null($xml) && count($xml->programParams) && !empty($xml->programParams))
			$this->programParams = Kaltura_Client_ParseUtils::unmarshalObject($xml->programParams, "KalturaProgramSemanticSearchParams");
		if(!is_null($jsonObject) && isset($jsonObject->programParams) && !empty($jsonObject->programParams))
			$this->programParams = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->programParams, "KalturaProgramSemanticSearchParams");
		if(!is_null($xml) && count($xml->mediaParams) && !empty($xml->mediaParams))
			$this->mediaParams = Kaltura_Client_ParseUtils::unmarshalObject($xml->mediaParams, "KalturaMediaSemanticSearchParams");
		if(!is_null($jsonObject) && isset($jsonObject->mediaParams) && !empty($jsonObject->mediaParams))
			$this->mediaParams = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->mediaParams, "KalturaMediaSemanticSearchParams");
	}
	/**
	 * Search query text.
	 *
	 * @var string
	 */
	public $query = null;

	/**
	 * Whether to refine the query using LLM.
	 *
	 * @var bool
	 */
	public $refineQuery = null;

	/**
	 * Maximum number of results to return.
	 *
	 * @var int
	 */
	public $size = null;

	/**
	 * Program-specific search parameters.
	 *             If provided, programs will be included in search results.
	 *
	 * @var Kaltura_Client_Type_ProgramSemanticSearchParams
	 */
	public $programParams;

	/**
	 * Media-specific search parameters.
	 *             If provided, media/VOD assets will be included in search results.
	 *
	 * @var Kaltura_Client_Type_MediaSemanticSearchParams
	 */
	public $mediaParams;


}

