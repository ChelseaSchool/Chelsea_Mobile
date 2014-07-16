<?php

function write_metadata()
{
    $metadata = <<<EOF
		<meta charset='utf-8'>
		<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
		<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1'>
		<meta name="apple-mobile-web-app-capable" content="yes">
EOF;
    echo $metadata;
}