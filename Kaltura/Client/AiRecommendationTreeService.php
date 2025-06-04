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
class Kaltura_Client_AiRecommendationTreeService extends Kaltura_Client_ServiceBase
{
	function __construct(Kaltura_Client_Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * @return Kaltura_Client_Type_TreeNextNodeResponse
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function getNextNodeAndRecommendation($treeId = null, $previousQuestionId = null, $answerId = null, $topQuestion = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "treeId", $treeId);
		$this->client->addParam($kparams, "previousQuestionId", $previousQuestionId);
		$this->client->addParam($kparams, "answerId", $answerId);
		$this->client->addParam($kparams, "topQuestion", $topQuestion);
		$this->client->queueServiceActionCall("airecommendationtree", "getNextNodeAndRecommendation", "KalturaTreeNextNodeResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$rawResult = $this->client->doQueue();
		if ($this->client->getConfig()->format === Kaltura_Client_ClientBase::KALTURA_SERVICE_FORMAT_JSON) {
			$jsObject = json_decode($rawResult);
			$resultObject = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsObject);
			return $resultObject;
		} else {
			$resultXmlObject = new \SimpleXMLElement($rawResult);
			$this->client->checkIfError($resultXmlObject->result);
			$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaTreeNextNodeResponse");
			$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_TreeNextNodeResponse");
		}
			return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_AiRecommendationTreePartnerConfiguration
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function getPartnerConfig()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("airecommendationtree", "getPartnerConfig", "KalturaAiRecommendationTreePartnerConfiguration", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$rawResult = $this->client->doQueue();
		if ($this->client->getConfig()->format === Kaltura_Client_ClientBase::KALTURA_SERVICE_FORMAT_JSON) {
			$jsObject = json_decode($rawResult);
			$resultObject = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsObject);
			return $resultObject;
		} else {
			$resultXmlObject = new \SimpleXMLElement($rawResult);
			$this->client->checkIfError($resultXmlObject->result);
			$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaAiRecommendationTreePartnerConfiguration");
			$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_AiRecommendationTreePartnerConfiguration");
		}
			return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_TreeNaturalTextResponse
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function getRecommendationWithNaturalText($naturalTextQuery, $previousQuestionId = null, $treeId = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "naturalTextQuery", $naturalTextQuery);
		$this->client->addParam($kparams, "previousQuestionId", $previousQuestionId);
		$this->client->addParam($kparams, "treeId", $treeId);
		$this->client->queueServiceActionCall("airecommendationtree", "getRecommendationWithNaturalText", "KalturaTreeNaturalTextResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$rawResult = $this->client->doQueue();
		if ($this->client->getConfig()->format === Kaltura_Client_ClientBase::KALTURA_SERVICE_FORMAT_JSON) {
			$jsObject = json_decode($rawResult);
			$resultObject = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsObject);
			return $resultObject;
		} else {
			$resultXmlObject = new \SimpleXMLElement($rawResult);
			$this->client->checkIfError($resultXmlObject->result);
			$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaTreeNaturalTextResponse");
			$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_TreeNaturalTextResponse");
		}
			return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_AiRecommendationTreePartnerConfiguration
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function upsertPartnerConfig(Kaltura_Client_Type_AiRecommendationTreePartnerConfiguration $configuration)
	{
		$kparams = array();
		$this->client->addParam($kparams, "configuration", $configuration->toParams());
		$this->client->queueServiceActionCall("airecommendationtree", "upsertPartnerConfig", "KalturaAiRecommendationTreePartnerConfiguration", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$rawResult = $this->client->doQueue();
		if ($this->client->getConfig()->format === Kaltura_Client_ClientBase::KALTURA_SERVICE_FORMAT_JSON) {
			$jsObject = json_decode($rawResult);
			$resultObject = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsObject);
			return $resultObject;
		} else {
			$resultXmlObject = new \SimpleXMLElement($rawResult);
			$this->client->checkIfError($resultXmlObject->result);
			$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaAiRecommendationTreePartnerConfiguration");
			$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_AiRecommendationTreePartnerConfiguration");
		}
			return $resultObject;
	}
}
