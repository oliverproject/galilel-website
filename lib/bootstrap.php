<?php
/*
 * Converts bytes into human readable file size.
 *
 * @param string $bytes
 * @return string human readable file size (2,32 МB)
 */
function FileSizeHumanReadable($bytes)
{
    $bytes = floatval($bytes);
        $arBytes = array(
            0 => array(
                "UNIT" => "TB",
                "VALUE" => pow(1024, 4)
            ),
            1 => array(
                "UNIT" => "GB",
                "VALUE" => pow(1024, 3)
            ),
            2 => array(
                "UNIT" => "MB",
                "VALUE" => pow(1024, 2)
            ),
            3 => array(
                "UNIT" => "KB",
                "VALUE" => 1024
            ),
            4 => array(
                "UNIT" => "B",
                "VALUE" => 1
            ),
        );

    foreach ($arBytes as $arItem)
    {
        if ($bytes >= $arItem["VALUE"])
        {
            $result = $bytes / $arItem["VALUE"];
            $result = str_replace(".", "," , strval(round($result, 2)))." ".$arItem["UNIT"];
            break;
        }
    }
    return $result;
}

/*
 * Read all files in a directory.
 *
 * @param string $directory
 * @return array with filenames
 */
function FileNamesDirectory($directory)
{
    $result = array();

    foreach (new DirectoryIterator($directory) as $fileInfo)
    {
        if ($fileInfo->isDot()) continue;
        $result[] = $fileInfo->getFilename();
    }

    rsort($result);
    return $result;
}

/*
 * Read the statistics from wallet notification file.
 *
 * @param string $filename
 * @return array with key -> value
 */
function GalilelData($filename)
{
    $result = array();

    /* loop through all lines in file. */
    foreach (file("$filename") as $line)
    {

        /* build array. */
        list ($key, $value) = explode(' ', $line, 2);
        $result[$key] = $value;
    }
    return $result;
}
?>
