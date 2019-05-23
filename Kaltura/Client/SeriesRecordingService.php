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
// Copyright (C) 2006-2019  Kaltura Inc.
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
class Kaltura_Client_SeriesRecordingService extends Kaltura_Client_ServiceBase
{
	function __construct(Kaltura_Client_Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * @return Kaltura_Client_Type_SeriesRecording
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function add(Kaltura_Client_Type_SeriesRecording $recording)
	{
		$kparams = array();
		$this->client->addParam($kparams, "recording", $recording->toParams());
		$this->client->queueServiceActionCall("seriesrecording", "add", "KalturaSeriesRecording", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaSeriesRecording");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_SeriesRecording");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_SeriesRecording
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function cancel($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("seriesrecording", "cancel", "KalturaSeriesRecording", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaSeriesRecording");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_SeriesRecording");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_SeriesRecording
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function cancelByEpgId($id, $epgId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "epgId", $epgId);
		$this->client->queueServiceActionCall("seriesrecording", "cancelByEpgId", "KalturaSeriesRecording", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaSeriesRecording");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_SeriesRecording");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_SeriesRecording
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function cancelBySeasonNumber($id, $seasonNumber)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "seasonNumber", $seasonNumber);
		$this->client->queueServiceActionCall("seriesrecording", "cancelBySeasonNumber", "KalturaSeriesRecording", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaSeriesRecording");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_SeriesRecording");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_SeriesRecording
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("seriesrecording", "delete", "KalturaSeriesRecording", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaSeriesRecording");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_SeriesRecording");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_SeriesRecording
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function deleteBySeasonNumber($id, $seasonNumber)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "seasonNumber", $seasonNumber);
		$this->client->queueServiceActionCall("seriesrecording", "deleteBySeasonNumber", "KalturaSeriesRecording", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaSeriesRecording");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_SeriesRecording");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_SeriesRecordingListResponse
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function listAction(Kaltura_Client_Type_SeriesRecordingFilter $filter = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("seriesrecording", "list", "KalturaSeriesRecordingListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaSeriesRecordingListResponse");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_SeriesRecordingListResponse");
		return $resultObject;
	}
}
