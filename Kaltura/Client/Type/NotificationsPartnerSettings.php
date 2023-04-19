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
class Kaltura_Client_Type_NotificationsPartnerSettings extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaNotificationsPartnerSettings';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->pushNotificationEnabled))
		{
			if(!empty($xml->pushNotificationEnabled) && ((int) $xml->pushNotificationEnabled === 1 || strtolower((string)$xml->pushNotificationEnabled) === 'true'))
				$this->pushNotificationEnabled = true;
			else
				$this->pushNotificationEnabled = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->pushNotificationEnabled))
		{
			if(!empty($jsonObject->pushNotificationEnabled) && ((int) $jsonObject->pushNotificationEnabled === 1 || strtolower((string)$jsonObject->pushNotificationEnabled) === 'true'))
				$this->pushNotificationEnabled = true;
			else
				$this->pushNotificationEnabled = false;
		}
		if(!is_null($xml) && count($xml->pushSystemAnnouncementsEnabled))
		{
			if(!empty($xml->pushSystemAnnouncementsEnabled) && ((int) $xml->pushSystemAnnouncementsEnabled === 1 || strtolower((string)$xml->pushSystemAnnouncementsEnabled) === 'true'))
				$this->pushSystemAnnouncementsEnabled = true;
			else
				$this->pushSystemAnnouncementsEnabled = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->pushSystemAnnouncementsEnabled))
		{
			if(!empty($jsonObject->pushSystemAnnouncementsEnabled) && ((int) $jsonObject->pushSystemAnnouncementsEnabled === 1 || strtolower((string)$jsonObject->pushSystemAnnouncementsEnabled) === 'true'))
				$this->pushSystemAnnouncementsEnabled = true;
			else
				$this->pushSystemAnnouncementsEnabled = false;
		}
		if(!is_null($xml) && count($xml->pushStartHour))
			$this->pushStartHour = (int)$xml->pushStartHour;
		if(!is_null($jsonObject) && isset($jsonObject->pushStartHour))
			$this->pushStartHour = (int)$jsonObject->pushStartHour;
		if(!is_null($xml) && count($xml->pushEndHour))
			$this->pushEndHour = (int)$xml->pushEndHour;
		if(!is_null($jsonObject) && isset($jsonObject->pushEndHour))
			$this->pushEndHour = (int)$jsonObject->pushEndHour;
		if(!is_null($xml) && count($xml->inboxEnabled))
		{
			if(!empty($xml->inboxEnabled) && ((int) $xml->inboxEnabled === 1 || strtolower((string)$xml->inboxEnabled) === 'true'))
				$this->inboxEnabled = true;
			else
				$this->inboxEnabled = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->inboxEnabled))
		{
			if(!empty($jsonObject->inboxEnabled) && ((int) $jsonObject->inboxEnabled === 1 || strtolower((string)$jsonObject->inboxEnabled) === 'true'))
				$this->inboxEnabled = true;
			else
				$this->inboxEnabled = false;
		}
		if(!is_null($xml) && count($xml->messageTTLDays))
			$this->messageTTLDays = (int)$xml->messageTTLDays;
		if(!is_null($jsonObject) && isset($jsonObject->messageTTLDays))
			$this->messageTTLDays = (int)$jsonObject->messageTTLDays;
		if(!is_null($xml) && count($xml->automaticIssueFollowNotification))
		{
			if(!empty($xml->automaticIssueFollowNotification) && ((int) $xml->automaticIssueFollowNotification === 1 || strtolower((string)$xml->automaticIssueFollowNotification) === 'true'))
				$this->automaticIssueFollowNotification = true;
			else
				$this->automaticIssueFollowNotification = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->automaticIssueFollowNotification))
		{
			if(!empty($jsonObject->automaticIssueFollowNotification) && ((int) $jsonObject->automaticIssueFollowNotification === 1 || strtolower((string)$jsonObject->automaticIssueFollowNotification) === 'true'))
				$this->automaticIssueFollowNotification = true;
			else
				$this->automaticIssueFollowNotification = false;
		}
		if(!is_null($xml) && count($xml->topicExpirationDurationDays))
			$this->topicExpirationDurationDays = (int)$xml->topicExpirationDurationDays;
		if(!is_null($jsonObject) && isset($jsonObject->topicExpirationDurationDays))
			$this->topicExpirationDurationDays = (int)$jsonObject->topicExpirationDurationDays;
		if(!is_null($xml) && count($xml->reminderEnabled))
		{
			if(!empty($xml->reminderEnabled) && ((int) $xml->reminderEnabled === 1 || strtolower((string)$xml->reminderEnabled) === 'true'))
				$this->reminderEnabled = true;
			else
				$this->reminderEnabled = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->reminderEnabled))
		{
			if(!empty($jsonObject->reminderEnabled) && ((int) $jsonObject->reminderEnabled === 1 || strtolower((string)$jsonObject->reminderEnabled) === 'true'))
				$this->reminderEnabled = true;
			else
				$this->reminderEnabled = false;
		}
		if(!is_null($xml) && count($xml->reminderOffsetSec))
			$this->reminderOffsetSec = (int)$xml->reminderOffsetSec;
		if(!is_null($jsonObject) && isset($jsonObject->reminderOffsetSec))
			$this->reminderOffsetSec = (int)$jsonObject->reminderOffsetSec;
		if(!is_null($xml) && count($xml->pushAdapterUrl))
			$this->pushAdapterUrl = (string)$xml->pushAdapterUrl;
		if(!is_null($jsonObject) && isset($jsonObject->pushAdapterUrl))
			$this->pushAdapterUrl = (string)$jsonObject->pushAdapterUrl;
		if(!is_null($xml) && count($xml->churnMailTemplateName))
			$this->churnMailTemplateName = (string)$xml->churnMailTemplateName;
		if(!is_null($jsonObject) && isset($jsonObject->churnMailTemplateName))
			$this->churnMailTemplateName = (string)$jsonObject->churnMailTemplateName;
		if(!is_null($xml) && count($xml->churnMailSubject))
			$this->churnMailSubject = (string)$xml->churnMailSubject;
		if(!is_null($jsonObject) && isset($jsonObject->churnMailSubject))
			$this->churnMailSubject = (string)$jsonObject->churnMailSubject;
		if(!is_null($xml) && count($xml->senderEmail))
			$this->senderEmail = (string)$xml->senderEmail;
		if(!is_null($jsonObject) && isset($jsonObject->senderEmail))
			$this->senderEmail = (string)$jsonObject->senderEmail;
		if(!is_null($xml) && count($xml->mailSenderName))
			$this->mailSenderName = (string)$xml->mailSenderName;
		if(!is_null($jsonObject) && isset($jsonObject->mailSenderName))
			$this->mailSenderName = (string)$jsonObject->mailSenderName;
		if(!is_null($xml) && count($xml->mailNotificationAdapterId))
			$this->mailNotificationAdapterId = (string)$xml->mailNotificationAdapterId;
		if(!is_null($jsonObject) && isset($jsonObject->mailNotificationAdapterId))
			$this->mailNotificationAdapterId = (string)$jsonObject->mailNotificationAdapterId;
		if(!is_null($xml) && count($xml->smsEnabled))
		{
			if(!empty($xml->smsEnabled) && ((int) $xml->smsEnabled === 1 || strtolower((string)$xml->smsEnabled) === 'true'))
				$this->smsEnabled = true;
			else
				$this->smsEnabled = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->smsEnabled))
		{
			if(!empty($jsonObject->smsEnabled) && ((int) $jsonObject->smsEnabled === 1 || strtolower((string)$jsonObject->smsEnabled) === 'true'))
				$this->smsEnabled = true;
			else
				$this->smsEnabled = false;
		}
		if(!is_null($xml) && count($xml->iotEnabled))
		{
			if(!empty($xml->iotEnabled) && ((int) $xml->iotEnabled === 1 || strtolower((string)$xml->iotEnabled) === 'true'))
				$this->iotEnabled = true;
			else
				$this->iotEnabled = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->iotEnabled))
		{
			if(!empty($jsonObject->iotEnabled) && ((int) $jsonObject->iotEnabled === 1 || strtolower((string)$jsonObject->iotEnabled) === 'true'))
				$this->iotEnabled = true;
			else
				$this->iotEnabled = false;
		}
		if(!is_null($xml) && count($xml->epgNotification) && !empty($xml->epgNotification))
			$this->epgNotification = Kaltura_Client_ParseUtils::unmarshalObject($xml->epgNotification, "KalturaEpgNotificationSettings");
		if(!is_null($jsonObject) && isset($jsonObject->epgNotification) && !empty($jsonObject->epgNotification))
			$this->epgNotification = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->epgNotification, "KalturaEpgNotificationSettings");
		if(!is_null($xml) && count($xml->lineupNotification) && !empty($xml->lineupNotification))
			$this->lineupNotification = Kaltura_Client_ParseUtils::unmarshalObject($xml->lineupNotification, "KalturaLineupNotificationSettings");
		if(!is_null($jsonObject) && isset($jsonObject->lineupNotification) && !empty($jsonObject->lineupNotification))
			$this->lineupNotification = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->lineupNotification, "KalturaLineupNotificationSettings");
	}
	/**
	 * Push notification capability is enabled for the account
	 *
	 * @var bool
	 */
	public $pushNotificationEnabled = null;

	/**
	 * System announcement capability is enabled for the account
	 *
	 * @var bool
	 */
	public $pushSystemAnnouncementsEnabled = null;

	/**
	 * Window start time (UTC) for send automated push messages
	 *
	 * @var int
	 */
	public $pushStartHour = null;

	/**
	 * Window end time (UTC) for send automated push messages
	 *
	 * @var int
	 */
	public $pushEndHour = null;

	/**
	 * Inbox enabled
	 *
	 * @var bool
	 */
	public $inboxEnabled = null;

	/**
	 * Message TTL in days
	 *
	 * @var int
	 */
	public $messageTTLDays = null;

	/**
	 * Automatic issue follow notification
	 *
	 * @var bool
	 */
	public $automaticIssueFollowNotification = null;

	/**
	 * Topic expiration duration in days
	 *
	 * @var int
	 */
	public $topicExpirationDurationDays = null;

	/**
	 * Reminder enabled
	 *
	 * @var bool
	 */
	public $reminderEnabled = null;

	/**
	 * Offset time (UTC) in seconds for send reminder
	 *
	 * @var int
	 */
	public $reminderOffsetSec = null;

	/**
	 * Push adapter URL
	 *
	 * @var string
	 */
	public $pushAdapterUrl = null;

	/**
	 * Churn mail template name
	 *
	 * @var string
	 */
	public $churnMailTemplateName = null;

	/**
	 * Churn mail subject
	 *
	 * @var string
	 */
	public $churnMailSubject = null;

	/**
	 * Sender email
	 *
	 * @var string
	 */
	public $senderEmail = null;

	/**
	 * Mail sender name
	 *
	 * @var string
	 */
	public $mailSenderName = null;

	/**
	 * Mail notification adapter identifier
	 *
	 * @var bigint
	 */
	public $mailNotificationAdapterId = null;

	/**
	 * SMS capability is enabled for the account
	 *
	 * @var bool
	 */
	public $smsEnabled = null;

	/**
	 * IOT capability is enabled for the account
	 *
	 * @var bool
	 */
	public $iotEnabled = null;

	/**
	 * Settings for epg notifications
	 *
	 * @var Kaltura_Client_Type_EpgNotificationSettings
	 */
	public $epgNotification;

	/**
	 * Settings for lineup notifications
	 *
	 * @var Kaltura_Client_Type_LineupNotificationSettings
	 */
	public $lineupNotification;


}

