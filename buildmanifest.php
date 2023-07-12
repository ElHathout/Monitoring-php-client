#!/usr/bin/env php
<?php

$source = __DIR__ . "/monitor";
$version = getenv('CI_COMMIT_TAG');
if ($version === false) {
  $version = 'dev';
}

$sha1 = sha1(file_get_contents($source));

$manifest = file_get_contents("manifest.json.tmpl");
$manifest = str_replace("{{version}}", $version, $manifest);
$manifest = str_replace("{{sha1}}", $sha1, $manifest);

file_put_contents(__DIR__ . "/manifest.json", $manifest);

