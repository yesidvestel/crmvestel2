<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Proxy\V1\Service\Session\Participant;

use Twilio\Deserialize;
use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Values;
use Twilio\Version;

/**
 * PLEASE NOTE that this class contains beta products that are subject to change. Use them with caution.
 *
 * @property string sid
 * @property string sessionSid
 * @property string serviceSid
 * @property string accountSid
 * @property string data
 * @property string type
 * @property string participantSid
 * @property string inboundParticipantSid
 * @property string inboundResourceSid
 * @property string inboundResourceStatus
 * @property string inboundResourceType
 * @property string inboundResourceUrl
 * @property string outboundParticipantSid
 * @property string outboundResourceSid
 * @property string outboundResourceStatus
 * @property string outboundResourceType
 * @property string outboundResourceUrl
 * @property \DateTime dateCreated
 * @property \DateTime dateUpdated
 * @property string url
 */
class MessageInteractionInstance extends InstanceResource
{
    /**
     * Initialize the MessageInteractionInstance
     *
     * @param \Twilio\Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $serviceSid Service Sid.
     * @param string $sessionSid Session Sid.
     * @param string $participantSid Participant Sid.
     * @param string $sid A string that uniquely identifies this Message
     *                    Interaction.
     * @return \Twilio\Rest\Proxy\V1\Service\Session\Participant\MessageInteractionInstance
     */
    public function __construct(Version $version, array $payload, $serviceSid, $sessionSid, $participantSid, $sid = null)
    {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = array(
            'sid' => Values::array_get($payload, 'sid'),
            'sessionSid' => Values::array_get($payload, 'session_sid'),
            'serviceSid' => Values::array_get($payload, 'service_sid'),
            'accountSid' => Values::array_get($payload, 'account_sid'),
            'data' => Values::array_get($payload, 'data'),
            'type' => Values::array_get($payload, 'type'),
            'participantSid' => Values::array_get($payload, 'participant_sid'),
            'inboundParticipantSid' => Values::array_get($payload, 'inbound_participant_sid'),
            'inboundResourceSid' => Values::array_get($payload, 'inbound_resource_sid'),
            'inboundResourceStatus' => Values::array_get($payload, 'inbound_resource_status'),
            'inboundResourceType' => Values::array_get($payload, 'inbound_resource_type'),
            'inboundResourceUrl' => Values::array_get($payload, 'inbound_resource_url'),
            'outboundParticipantSid' => Values::array_get($payload, 'outbound_participant_sid'),
            'outboundResourceSid' => Values::array_get($payload, 'outbound_resource_sid'),
            'outboundResourceStatus' => Values::array_get($payload, 'outbound_resource_status'),
            'outboundResourceType' => Values::array_get($payload, 'outbound_resource_type'),
            'outboundResourceUrl' => Values::array_get($payload, 'outbound_resource_url'),
            'dateCreated' => Deserialize::dateTime(Values::array_get($payload, 'date_created')),
            'dateUpdated' => Deserialize::dateTime(Values::array_get($payload, 'date_updated')),
            'url' => Values::array_get($payload, 'url'),
        );

        $this->solution = array(
            'serviceSid' => $serviceSid,
            'sessionSid' => $sessionSid,
            'participantSid' => $participantSid,
            'sid' => $sid ?: $this->properties['sid'],
        );
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return \Twilio\Rest\Proxy\V1\Service\Session\Participant\MessageInteractionContext Context for this
     *                                                                                     MessageInteractionInstance
     */
    protected function proxy()
    {
        if (!$this->context) {
            $this->context = new MessageInteractionContext(
                $this->version,
                $this->solution['serviceSid'],
                $this->solution['sessionSid'],
                $this->solution['participantSid'],
                $this->solution['sid']
            );
        }

        return $this->context;
    }

    /**
     * Fetch a MessageInteractionInstance
     *
     * @return MessageInteractionInstance Fetched MessageInteractionInstance
     */
    public function fetch()
    {
        return $this->proxy()->fetch();
    }

    /**
     * Magic getter to access properties
     *
     * @param string $name Property to access
     * @return mixed The requested property
     * @throws TwilioException For unknown properties
     */
    public function __get($name)
    {
        if (array_key_exists($name, $this->properties)) {
            return $this->properties[$name];
        }

        if (property_exists($this, '_' . $name)) {
            $method = 'get' . ucfirst($name);
            return $this->$method();
        }

        throw new TwilioException('Unknown property: ' . $name);
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString()
    {
        $context = array();
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.Proxy.V1.MessageInteractionInstance ' . implode(' ', $context) . ']';
    }
}