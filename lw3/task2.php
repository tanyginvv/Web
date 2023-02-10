<?php
function getGetParameter(string $name): ?string
{
    return isset($_GET[$name]) ? $_GET[$name] : null;
}

$string = getGetParameter('identifier');

if (empty($string))
{
    echo "no identifier";
}
else
{
    if (!(is_numeric($string[0])))
    {
        for ($i = 0; $i < strlen($string); $i++)
        {
            if (!((is_numeric($string[$i])) or (ctype_alpha($string[$i]))))
            {
                echo "no";
                return;
            }
        }
        echo "yes";
    }
    else
        echo "no";
}