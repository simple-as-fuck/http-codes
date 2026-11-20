<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

use Kayex\HttpCodes;

final class HttpCodesTest extends TestCase
{
    public function testIsSuccessfulReturnsTrueOnSuccessfulCodes(): void
    {
        $successCodes = [
            HttpCodes::HTTP_OK,
            HttpCodes::HTTP_CREATED,
            HttpCodes::HTTP_ACCEPTED,
            HttpCodes::HTTP_NONAUTHORITATIVE_INFORMATION,
            HttpCodes::HTTP_NO_CONTENT,
            HttpCodes::HTTP_RESET_CONTENT,
            HttpCodes::HTTP_PARTIAL_CONTENT,
        ];

        foreach ($successCodes as $code) {
            $successful = HttpCodes::isSuccessful($code);

            self::assertTrue($successful);
        }
    }

    public function testIsSuccessFulReturnsFalseOnNotSuccessfulCode(): void
    {
        $notSuccessfulCodes = [
            HttpCodes::HTTP_CONTINUE,
            HttpCodes::HTTP_SWITCHING_PROTOCOLS,

            HttpCodes::HTTP_MULTIPLE_CHOICES,
            HttpCodes::HTTP_MOVED_PERMANENTLY,
            HttpCodes::HTTP_FOUND,
            HttpCodes::HTTP_SEE_OTHER,
            HttpCodes::HTTP_NOT_MODIFIED,
            HttpCodes::HTTP_USE_PROXY,
            HttpCodes::HTTP_UNUSED,
            HttpCodes::HTTP_TEMPORARY_REDIRECT,

            HttpCodes::HTTP_BAD_REQUEST,
            HttpCodes::HTTP_UNAUTHORIZED,
            HttpCodes::HTTP_PAYMENT_REQUIRED,
            HttpCodes::HTTP_FORBIDDEN,
            HttpCodes::HTTP_NOT_FOUND,
            HttpCodes::HTTP_METHOD_NOT_ALLOWED,
            HttpCodes::HTTP_NOT_ACCEPTABLE,
            HttpCodes::HTTP_PROXY_AUTHENTICATION_REQUIRED,
            HttpCodes::HTTP_REQUEST_TIMEOUT,
            HttpCodes::HTTP_CONFLICT,
            HttpCodes::HTTP_GONE,
            HttpCodes::HTTP_LENGTH_REQUIRED,
            HttpCodes::HTTP_PRECONDITION_FAILED,
            HttpCodes::HTTP_REQUEST_ENTITY_TOO_LARGE,
            HttpCodes::HTTP_REQUEST_URI_TOO_LONG,
            HttpCodes::HTTP_UNSUPPORTED_MEDIA_TYPE,
            HttpCodes::HTTP_REQUESTED_RANGE_NOT_SATISFIABLE,
            HttpCodes::HTTP_EXPECTATION_FAILED,
            HttpCodes::HTTP_TOO_MANY_REQUESTS,

            HttpCodes::HTTP_INTERNAL_SERVER_ERROR,
            HttpCodes::HTTP_NOT_IMPLEMENTED,
            HttpCodes::HTTP_BAD_GATEWAY,
            HttpCodes::HTTP_SERVICE_UNAVAILABLE,
            HttpCodes::HTTP_GATEWAY_TIMEOUT,
            HttpCodes::HTTP_VERSION_NOT_SUPPORTED,
        ];

        foreach ($notSuccessfulCodes as $code) {
            $successful = HttpCodes::isSuccessful($code);

            self::assertFalse($successful);
        }
    }
}