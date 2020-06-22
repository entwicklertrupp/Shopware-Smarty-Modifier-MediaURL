<?php
function smarty_modifier_picurl($value)
{
    $media = Shopware()->Models()->getRepository('Shopware\Models\Media\Media')->findOneBy(['id' => $value]);
    $path = $media->getPath();
    $mediaUrl = Shopware()->Container()->get('shopware_media.media_service')->getUrl($path);

    return $mediaUrl;
}
