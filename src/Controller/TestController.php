<?php
namespace Viettqt\PhpApi\Controller;
use Viettqt\JetDB\DB;

class TestController
{
    public static function list(): void
    {
        var_dump(DB::table('users')->get());
    }
}