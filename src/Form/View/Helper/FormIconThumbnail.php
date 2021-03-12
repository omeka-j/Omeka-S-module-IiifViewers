<?php
namespace IiifViewers\Form\View\Helper;

use Omeka\Api\Representation\AssetRepresentation;
use Laminas\Form\View\Helper\AbstractHelper;
use Laminas\Form\ElementInterface;

class FormIconThumbnail extends AbstractHelper
{
    public function __invoke(ElementInterface $element)
    {
        return $this->render($element);
    }

    /**
     * Render the asset form.
     *
     * @param ElementInterface $element The asset element with type Omeka\Form\Element\Asset
     * @return string
     */
    public function render(ElementInterface $element)
    {
        $view = $this->getView();
        return $view->partial('common/icon-thumbnail-form', ['element' => $element]);
    }
}
