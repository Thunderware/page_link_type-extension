<?php namespace Thunderware\PageLinkTypeExtension;

use Anomaly\NavigationModule\Link\Contract\LinkEntryInterface;
use Anomaly\Streams\Platform\Model\PageLinkType\PageLinkTypePagesEntryModel;

/**
 * Class UrlLinkTypeModel
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\UrlLinkTypeExtension
 */
class PageLinkTypeModel extends PageLinkTypePagesEntryModel implements LinkEntryInterface
{

    /**
     * Get the URL.
     *
     * @return string
     */
    public function getUrl()
    {
        // if this page is not the root page then return it's standard path
        if($this->page->id != $this->page->first()->id) {
            return $this->page->path();
        } else {
            // otherwise we will return / since it is the first page
            return '/';
        }
    }
}
