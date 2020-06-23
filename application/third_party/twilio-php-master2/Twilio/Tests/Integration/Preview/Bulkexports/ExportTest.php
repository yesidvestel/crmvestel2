<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Tests\Integration\Preview\Bulkexports;

use Twilio\Exceptions\DeserializeException;
use Twilio\Exceptions\TwilioException;
use Twilio\Http\Response;
use Twilio\Tests\HolodeckTestCase;
use Twilio\Tests\Request;

class ExportTest extends HolodeckTestCase
{
    public function testFetchRequest()
    {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->preview->bulkExports->exports("resourceType")->fetch();
        } catch (DeserializeException $e) {
        } catch (TwilioException $e) {
        }

        $this->assertRequest(new Request(
            'get',
            'https://preview.twilio.com/BulkExports/Exports/resourceType'
        ));
    }

    public function testFetchResponse()
    {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "resource_type": "Calls",
                "url": "https://preview.twilio.com/BulkExports/Exports/Calls",
                "links": {
                    "days": "https://preview.twilio.com/BulkExports/Exports/Calls/Days"
                }
            }
            '
        ));

        $actual = $this->twilio->preview->bulkExports->exports("resourceType")->fetch();

        $this->assertNotNull($actual);
    }
}