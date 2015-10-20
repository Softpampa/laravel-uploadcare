<?php

namespace Softpampa\LaravelUploadcare;

use Uploadcare\Api as Api;

class UploadcareService extends Api
{
    public function __construct($public, $private)
    {
        parent::__construct($public, $private);
    }

    /**
     * Returns <script> sections to include Uploadcare widget.
     *
     * @param string $version Uploadcare version
     * @param bool   $async
     *
     * @return string
     */
    public function scriptTag($version = null, $async = false)
    {
            $result = <<<EOT
<script>UPLOADCARE_LOCALE = 'pt';</script>
EOT;
        return $result.$this->widget->getScriptTag($version, $async);
    }

    /**
     * Returns UUID from uploaded file.
     *
     * @param string $path Path from file
     *
     * @return string
     */
    public function uploadFromPath($path)
    {
        $file = $this->uploader->fromPath($path);
        $file->store();

        return $file->getUuid();
    }
}
