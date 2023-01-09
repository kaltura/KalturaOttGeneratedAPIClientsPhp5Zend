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
// Copyright (C) 2006-2022  Kaltura Inc.
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
class Kaltura_Client_RecordingService extends Kaltura_Client_ServiceBase
{
	function __construct(Kaltura_Client_Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * @return Kaltura_Client_Type_Recording
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function add(Kaltura_Client_Type_Recording $recording)
	{
		$kparams = array();
		$this->client->addParam($kparams, "recording", $recording->toParams());
		$this->client->queueServiceActionCall("recording", "add", "KalturaRecording", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaRecording");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_Recording");
		return $resultObject;
	}

	/**
	 * @return array
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function bulkdelete($recordingIds)
	{
		$kparams = array();
		$this->client->addParam($kparams, "recordingIds", $recordingIds);
		$this->client->queueServiceActionCall("recording", "bulkdelete", "KalturaActionResult", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalArray($resultXmlObject->result, "KalturaActionResult");
		foreach($resultObject as $resultObjectItem){
			$this->client->validateObjectType($resultObjectItem, "Kaltura_Client_Type_ActionResult");
		}
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_Recording
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function cancel($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("recording", "cancel", "KalturaRecording", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaRecording");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_Recording");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_Recording
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("recording", "delete", "KalturaRecording", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaRecording");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_Recording");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_Recording
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("recording", "get", "KalturaRecording", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaRecording");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_Recording");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_ImmediateRecording
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function immediateRecord($assetId, $epgChannelId, $crid, $endPadding)
	{
		$kparams = array();
		$this->client->addParam($kparams, "assetId", $assetId);
		$this->client->addParam($kparams, "epgChannelId", $epgChannelId);
		$this->client->addParam($kparams, "crid", $crid);
		$this->client->addParam($kparams, "endPadding", $endPadding);
		$this->client->queueServiceActionCall("recording", "immediateRecord", "KalturaImmediateRecording", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaImmediateRecording");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_ImmediateRecording");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_RecordingListResponse
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function listAction(Kaltura_Client_Type_RecordingFilter $filter = null, Kaltura_Client_Type_FilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("recording", "list", "KalturaRecordingListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaRecordingListResponse");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_RecordingListResponse");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_Recording
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function protect($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("recording", "protect", "KalturaRecording", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaRecording");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_Recording");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_Recording
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function stop($assetId, $epgChannelId, $householdRecordingId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "assetId", $assetId);
		$this->client->addParam($kparams, "epgChannelId", $epgChannelId);
		$this->client->addParam($kparams, "householdRecordingId", $householdRecordingId);
		$this->client->queueServiceActionCall("recording", "stop", "KalturaRecording", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaRecording");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_Recording");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_Recording
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function update($id, Kaltura_Client_Type_Recording $recording)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "recording", $recording->toParams());
		$this->client->queueServiceActionCall("recording", "update", "KalturaRecording", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaRecording");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_Recording");
		return $resultObject;
	}
}
