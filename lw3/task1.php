<?php
header("Content-Type: text/plain");
function getGetParameter(string $name): ?string
{
    return isset($_GET[$name]) ? $_GET[$name] : null;
}
$text = getGetParameter('text');
if ($text === null)
{
    return;
}
$text = trim($text);
while (strripos($text, '  '))
{
    $text = str_replace('  ', ' ', $text);
}
echo $text;

