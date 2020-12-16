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
// Copyright (C) 2006-2020  Kaltura Inc.
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
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->pushNotificationEnabled))
		{
			if(!empty($xml->pushNotificationEnabled) && ((int) $xml->pushNotificationEnabled === 1 || strtolower((string)$xml->pushNotificationEnabled) === 'true'))
				$this->pushNotificationEnabled = true;
			else
				$this->pushNotificationEnabled = false;
		}
		if(count($xml->pushSystemAnnouncementsEnabled))
		{
			if(!empty($xml->pushSystemAnnouncementsEnabled) && ((int) $xml->pushSystemAnnouncementsEnabled === 1 || strtolower((string)$xml->pushSystemAnnouncementsEnabled) === 'true'))
				$this->pushSystemAnnouncementsEnabled = true;
			else
				$this->pushSystemAnnouncementsEnabled = false;
		}
		if(count($xml->pushStartHour))
			$this->pushStartHour = (int)$xml->pushStartHour;
		if(count($xml->pushEndHour))
			$this->pushEndHour = (int)$xml->pushEndHour;
		if(count($xml->inboxEnabled))
		{
			if(!empty($xml->inboxEnabled) && ((int) $xml->inboxEnabled === 1 || strtolower((string)$xml->inboxEnabled) === 'true'))
				$this->inboxEnabled = true;
			else
				$this->inboxEnabled = false;
		}
		if(count($xml->messageTTLDays))
			$this->messageTTLDays = (int)$xml->messageTTLDays;
		if(count($xml->automaticIssueFollowNotification))
		{
			if(!empty($xml->automaticIssueFollowNotification) && ((int) $xml->automaticIssueFollowNotification === 1 || strtolower((string)$xml->automaticIssueFollowNotification) === 'true'))
				$this->automaticIssueFollowNotification = true;
			else
				$this->automaticIssueFollowNotification = false;
		}
		if(count($xml->topicExpirationDurationDays))
			$this->topicExpirationDurationDays = (int)$xml->topicExpirationDurationDays;
		if(count($xml->reminderEnabled))
		{
			if(!empty($xml->reminderEnabled) && ((int) $xml->reminderEnabled === 1 || strtolower((string)$xml->reminderEnabled) === 'true'))
				$this->reminderEnabled = true;
			else
				$this->reminderEnabled = false;
		}
		if(count($xml->reminderOffsetSec))
			$this->reminderOffsetSec = (int)$xml->reminderOffsetSec;
		if(count($xml->pushAdapterUrl))
			$this->pushAdapterUrl = (string)$xml->pushAdapterUrl;
		if(count($xml->churnMailTemplateName))
			$this->churnMailTemplateName = (string)$xml->churnMailTemplateName;
		if(count($xml->churnMailSubject))
			$this->churnMailSubject = (string)$xml->churnMailSubject;
		if(count($xml->senderEmail))
			$this->senderEmail = (string)$xml->senderEmail;
		if(count($xml->mailSenderName))
			$this->mailSenderName = (string)$xml->mailSenderName;
		if(count($xml->mailNotificationAdapterId))
			$this->mailNotificationAdapterId = (string)$xml->mailNotificationAdapterId;
		if(count($xml->smsEnabled))
		{
			if(!empty($xml->smsEnabled) && ((int) $xml->smsEnabled === 1 || strtolower((string)$xml->smsEnabled) === 'true'))
				$this->smsEnabled = true;
			else
				$this->smsEnabled = false;
		}
		if(count($xml->iotEnabled))
		{
			if(!empty($xml->iotEnabled) && ((int) $xml->iotEnabled === 1 || strtolower((string)$xml->iotEnabled) === 'true'))
				$this->iotEnabled = true;
			else
				$this->iotEnabled = false;
		}
		if(count($xml->epgNotification) && !empty($xml->epgNotification))
			$this->epgNotification = Kaltura_Client_ParseUtils::unmarshalObject($xml->epgNotification, "KalturaEpgNotificationSettings");
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


}

