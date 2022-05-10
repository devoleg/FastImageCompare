<?php
/**
 * (c) Paweł Plewa <pawel.plewa@gmail.com> 2018
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 *
 */

namespace devoleg\FastImageCompare;

interface INormalizable  {

    /**
     * @param $inputImagePath
     * @param $output
     * @param $tempDir
     * @return string path
     */
    public function normalize($inputImagePath, $output, $tempDir);

}