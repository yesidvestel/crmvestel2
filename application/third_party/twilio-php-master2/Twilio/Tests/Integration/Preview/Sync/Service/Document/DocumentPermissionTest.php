<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Tests\Integration\Preview\Sync\Service\Document;

use Twilio\Exceptions\DeserializeException;
use Twilio\Exceptions\TwilioException;
use Twilio\Http\Response;
use Twilio\Serialize;
use Twilio\Tests\HolodeckTestCase;
use Twilio\Tests\Request;

class DocumentPermissionTest extends HolodeckTestCase
{
    public function testFetchRequest()
    {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->preview->sync->services("ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                ->documents("ETaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                ->documentPermissions("identity")->fetch();
        } catch (DeserializeException $e) {
        } catch (TwilioException $e) {
        }

        $this->assertRequest(new Request(
            'get',
            'https://preview.twilio.com/Sync/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Documents/ETaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Permissions/identity'
        ));
    }

    public function testFetchResponse()
    {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "service_sid": "ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "document_sid": "ETaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "identity": "identity",
                "read": true,
                "write": true,
                "manage": true,
                "url": "https://preview.twilio.com/Sync/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Documents/ETaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Permissions/identity"
            }
            '
        ));

        $actual = $this->twilio->preview->sync->services("ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
            ->documents("ETaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
            ->documentPermissions("identity")->fetch();

        $this->assertNotNull($actual);
    }

    public function testDeleteRequest()
    {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->preview->sync->services("ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                ->documents("ETaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                ->documentPermissions("identity")->delete();
        } catch (DeserializeException $e) {
        } catch (TwilioException $e) {
        }

        $this->assertRequest(new Request(
            'delete',
            'https://preview.twilio.com/Sync/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Documents/ETaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Permissions/identity'
        ));
    }

    public function testDeleteResponse()
    {
        $this->holodeck->mock(new Response(
            204,
            null
        ));

        $actual = $this->twilio->preview->sync->services("ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
            ->documents("ETaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
            ->documentPermissions("identity")->delete();

        $this->assertTrue($actual);
    }

    public function testReadRequest()
    {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->preview->sync->services("ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                ->documents("ETaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                ->documentPermissions->read();
        } catch (DeserializeException $e) {
        } catch (TwilioException $e) {
        }

        $this->assertRequest(new Request(
            'get',
            'https://preview.twilio.com/Sync/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Documents/ETaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Permissions'
        ));
    }

    public function testReadEmptyResponse()
    {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "permissions": [],
                "meta": {
                    "first_page_url": "https://preview.twilio.com/Sync/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Documents/sidOrUniqueName/Permissions?PageSize=50&Page=0",
                    "key": "permissions",
                    "next_page_url": null,
                    "page": 0,
                    "page_size": 50,
                    "previous_page_url": null,
                    "url": "https://preview.twilio.com/Sync/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Documents/sidOrUniqueName/Permissions?PageSize=50&Page=0"
                }
            }
            '
        ));

        $actual = $this->twilio->preview->sync->services("ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
            ->documents("ETaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
            ->documentPermissions->read();

        $this->assertNotNull($actual);
    }

    public function testReadFullResponse()
    {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "permissions": [
                    {
                        "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "service_sid": "ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "document_sid": "ETaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "identity": "identity",
                        "read": true,
                        "write": true,
                        "manage": true,
                        "url": "https://preview.twilio.com/Sync/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Documents/ETaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Permissions/identity"
                    }
                ],
                "meta": {
                    "first_page_url": "https://preview.twilio.com/Sync/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Documents/sidOrUniqueName/Permissions?PageSize=50&Page=0",
                    "key": "permissions",
                    "next_page_url": null,
                    "page": 0,
                    "page_size": 50,
                    "previous_page_url": null,
                    "url": "https://preview.twilio.com/Sync/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Documents/sidOrUniqueName/Permissions?PageSize=50&Page=0"
                }
            }
            '
        ));

        $actual = $this->twilio->preview->sync->services("ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
            ->documents("ETaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
            ->documentPermissions->read();

        $this->assertGreaterThan(0, count($actual));
    }

    public function testUpdateRequest()
    {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->preview->sync->services("ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                ->documents("ETaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                ->documentPermissions("identity")->update(True, True, True);
        } catch (DeserializeException $e) {
        } catch (TwilioException $e) {
        }

        $values = array(
            'Read' => Serialize::booleanToString(True),
            'Write' => Serialize::booleanToString(True),
            'Manage' => Serialize::booleanToString(True),
        );

        $this->assertRequest(new Request(
            'post',
            'https://preview.twilio.com/Sync/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Documents/ETaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Permissions/identity',
            null,
            $values
        ));
    }

    public function testUpdateResponse()
    {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "service_sid": "ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "document_sid": "ETaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "identity": "identity",
                "read": true,
                "write": true,
                "manage": true,
                "url": "https://preview.twilio.com/Sync/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Documents/ETaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Permissions/identity"
            }
            '
        ));

        $actual = $this->twilio->preview->sync->services("ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
            ->documents("ETaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
            ->documentPermissions("identity")->update(True, True, True);

        $this->assertNotNull($actual);
    }
}