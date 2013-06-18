<?php
/**
 * Created by JetBrains PhpStorm.
 * User: mijahn
 * Date: 14/06/13
 * Time: 14:24
 * To change this template use File | Settings | File Templates.
 */

namespace wallPAPI;
include 'vendor/autoload.php';
use DateTime;
use RestService\Server;

class wallPAPI {

    private function createImage($filename) {
        $file = file_get_contents($filename);
        return $file;
    }

    public function returnImage() {
        $dir = "wallpaper";
        $image = array_diff(scandir($dir), array(".", ".."));
        $imageArrayPosition = $this->oneMinuteInteger(count($image));
        return $this->createImage($dir."/".$image[$imageArrayPosition]);
    }

    public function returnSmallImage() {
        $dir = "wallpaper-android";
        $image = array_diff(scandir($dir), array(".", ".."));
        $imageArrayPosition = $this->oneMinuteInteger(count($image));
        return $this->createImage($dir."/".$image[$imageArrayPosition]);
    }

    public function oneMinuteInteger($arraySize) {

        $seed = floor(time()/60);
        srand($seed);
        $arrayPosition = rand(0,$arraySize);

        return $arrayPosition;


    }
}