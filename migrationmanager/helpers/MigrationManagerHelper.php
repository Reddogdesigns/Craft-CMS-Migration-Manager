<?php

namespace Craft;

class MigrationManagerHelper
{
    public static function getTransformById($id)
    {
        $transforms = craft()->assetTransforms->getAllTransforms();
        foreach ($transforms as $key => $transform) {
            if ($transform->id == $id) {
                return $transform;
            }
        }

        return false;
    }

    public static function getAssetSourceByHandle($handle)
    {
        $sources = craft()->assetSources->getAllSources();
        foreach($sources as $source)
        {
            if ($source->handle == $handle)
            {
                return $source;
            }
        }
        return false;
    }
}