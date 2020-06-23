<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Tests\Integration\Chat\V2\Service\User;

use Twilio\Exceptions\DeserializeException;
use Twilio\Exceptions\TwilioException;
use Twilio\Http\Response;
use Twilio\Tests\HolodeckTestCase;
use Twilio\Tests\Request;

class UserBindingTest extends HolodeckTestCase
{
    public function testReadRequest()
    {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->chat->v2->services("ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                ->users("USaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                ->userBindings->read();
        } catch (DeserializeException $e) {
        } catch (TwilioException $e) {
        }

        $this->assertRequest(new Request(
            'get',
            'https://chat.twilio.com/v2/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Users/USaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Bindings'
        ));
    }

    public function testReadFullResponse()
    {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "meta": {
                    "page": 0,
                    "page_size": 50,
                    "first_page_url": "https://chat.twilio.com/v2/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Users/USaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Bindings?PageSize=50&Page=0",
                    "previous_page_url": null,
                    "url": "https://chat.twilio.com/v2/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Users/USaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Bindings?PageSize=50&Page=0",
                    "next_page_url": null,
                    "key": "bindings"
                },
                "bindings": [
                    {
                        "sid": "BSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "service_sid": "ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "date_created": "2016-10-21T11:37:03Z",
                        "date_updated": "2016-10-21T11:37:03Z",
                        "endpoint": "TestUser-endpoint",
                        "identity": "TestUser",
                        "user_sid": "USaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "binding_type": "gcm",
                        "credential_sid": "CRaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "message_types": [
                            "removed_from_channel",
                            "new_message",
                            "added_to_channel",
                            "invited_to_channel"
                        ],
                        "url": "https://chat.twilio.com/v2/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Users/USaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Bindings/BSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"
                    }
                ]
            }
            '
        ));

        $actual = $this->twilio->chat->v2->services("ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
            ->users("USaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
            ->userBindings->read();

        $this->assertGreaterThan(0, count($actual));
    }

    public function testReadEmptyResponse()
    {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "meta": {
                    "page": 0,
                    "page_size": 50,
                    "first_page_url": "https://chat.twilio.com/v2/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Users/USaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Bindings?PageSize=50&Page=0",
                    "previous_page_url": null,
                    "url": "https://chat.twilio.com/v2/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Users/USaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Bindings?PageSize=50&Page=0",
                    "next_page_url": null,
                    "key": "bindings"
                },
                "bindings": []
            }
            '
        ));

        $actual = $this->twilio->chat->v2->services("ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
            ->users("USaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
            ->userBindings->read();

        $this->assertNotNull($actual);
    }

    public function testFetchRequest()
    {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->chat->v2->services("ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                ->users("USaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                ->userBindings("BSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")->fetch();
        } catch (DeserializeException $e) {
        } catch (TwilioException $e) {
        }

        $this->assertRequest(new Request(
            'get',
            'https://chat.twilio.com/v2/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Users/USaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Bindings/BSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'
        ));
    }

    public function testFetchResponse()
    {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "sid": "BSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "service_sid": "ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "date_created": "2016-10-21T11:37:03Z",
                "date_updated": "2016-10-21T11:37:03Z",
                "endpoint": "TestUser-endpoint",
                "identity": "TestUser",
                "user_sid": "USaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "binding_type": "gcm",
                "credential_sid": "CRaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "message_types": [
                    "removed_from_channel",
                    "new_message",
                    "added_to_channel",
                    "invited_to_channel"
                ],
                "url": "https://chat.twilio.com/v2/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Users/USaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Bindings/BSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"
            }
            '
        ));

        $actual = $this->twilio->chat->v2->services("ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
            ->users("USaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
            ->userBindings("BSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")->fetch();

        $this->assertNotNull($actual);
    }

    public function testDeleteRequest()
    {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->chat->v2->services("ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                ->users("USaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                ->userBindings("BSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")->delete();
        } catch (DeserializeException $e) {
        } catch (TwilioException $e) {
        }

        $this->assertRequest(new Request(
            'delete',
            'https://chat.twilio.com/v2/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Users/USaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Bindings/BSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'
        ));
    }

    public function testDeleteResponse()
    {
        $this->holodeck->mock(new Response(
            204,
            null
        ));

        $actual = $this->twilio->chat->v2->services("ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
            ->users("USaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
            ->userBindings("BSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")->delete();

        $this->assertTrue($actual);
    }
}