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
class HealthNeedsController extends StorefrontController
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
     * @Route("/health-needs", name="frontend.health.needs", methods={"GET"})
     */
    public function healthNeedsPage(Request $request, SalesChannelContext $context)
    {
        $page = $this->navigationPageLoader->load($request, $context);

        return $this->renderStorefront('@VietkenDesign/storefront/page/health-needs/index.html.twig', ['page' => $page]);
    }

     /**
     * @Route("/regimens", name="frontend.health.needs.regimens", methods={"GET"})
     */
    public function regimensPage(Request $request, SalesChannelContext $context)
    {
        $page = $this->navigationPageLoader->load($request, $context);
        return $this->renderStorefront('@VietkenDesign/storefront/page/health-needs/regimens/index.html.twig', ['page' => $page]);
    }

    /**
     * @Route("/regimens/heart-health", name="frontend.health.needs.heart.health", methods={"GET"})
     */
    public function heartHealthPage(Request $request, SalesChannelContext $context)
    {
        $page = $this->navigationPageLoader->load($request, $context);
        return $this->renderStorefront('@VietkenDesign/storefront/page/health-needs/heart-health/index.html.twig', ['page' => $page]);
    }

    /**
     * @Route("/regimens/energy", name="frontend.health.needs.energy", methods={"GET"})
     */
    public function energyPage(Request $request, SalesChannelContext $context)
    {
        $page = $this->navigationPageLoader->load($request, $context);
        return $this->renderStorefront('@VietkenDesign/storefront/page/health-needs/energy/index.html.twig', ['page' => $page]);
    }
}