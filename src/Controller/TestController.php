<?php
namespace Viettqt\PhpApi\Controller;
use Viettqt\JetDB\DB;
use Viettqt\JetResponse\Response;

class TestController
{
    public static function list(): void
    {
        $data = DB::table('users')->get();
        $response = new Response();
        $response->setStatus(200);
        $response->setBody($data);

        $response->sendWithJson();
    }
}