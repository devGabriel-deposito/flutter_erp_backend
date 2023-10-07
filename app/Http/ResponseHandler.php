<?php

namespace App\Http;

class ResponseHandler
{
    public static function json(
        string|array|null $message = null,
        int|null $code = null,
        string|array|null $content = null,
    ) {
        $response = array();

        if (isset($message)) $response['message'] = $message;
        if (isset($content)) $response['content'] = $content;

        return response()->json($response, $code ?? 400);
    }
}
