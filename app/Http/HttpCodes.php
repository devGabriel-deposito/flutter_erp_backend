<?php

namespace App\Http;

class HttpCodes
{

    public static int $ok = 200;
    public static int $created = 201;
    public static int $unauthorized = 401;
    public static int $unprocessableContent = 422;
    public static int $internalServerError = 500;
}
