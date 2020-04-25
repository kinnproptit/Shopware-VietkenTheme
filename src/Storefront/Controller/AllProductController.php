<?php declare(strict_types=1);

namespace VietkenDesign\Storefront\Controller;

use Shopware\Core\Framework\Routing\Annotation\RouteScope;
use Shopware\Core\System\SalesChannel\SalesChannelContext;
use Shopware\Storefront\Controller\StorefrontController;
use Shopware\Storefront\Page\Navigation\NavigationPageLoader;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * @RouteScope(scopes={"storefront"})
 */
class AllProductController extends StorefrontController
{

     /**
     * @var NavigationPageLoader
     */
    private $navigationPageLoader;

    /**
     * @var MenuOffcanvasPageletLoaderInterface
     */

    public function __construct(NavigationPageLoader $navigationPageLoader) {
        $this->navigationPageLoader = $navigationPageLoader;
    }

    /**
     * @Route("/all-product", name="frontend.all.product", options={"seo"="false"}, methods={"GET"})
     */
    public function showProducts(Request $request, SalesChannelContext $context)
    {
        $page = $this->navigationPageLoader->load($request, $context);

        return $this->renderStorefront('@VietkenDesign/storefront/page/all-product/index.html.twig', ['page' => $page]);
    }
}