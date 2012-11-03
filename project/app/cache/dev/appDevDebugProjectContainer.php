<?php

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InactiveScopeException;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\DependencyInjection\Parameter;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * appDevDebugProjectContainer
 *
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 */
class appDevDebugProjectContainer extends Container
{
    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->parameters = $this->getDefaultParameters();

        $this->services =
        $this->scopedServices =
        $this->scopeStacks = array();

        $this->set('service_container', $this);

        $this->scopes = array('request' => 'container');
        $this->scopeChildren = array('request' => array());
    }

    /**
     * Gets the 'annotation_reader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Doctrine\Common\Annotations\FileCacheReader A Doctrine\Common\Annotations\FileCacheReader instance.
     */
    protected function getAnnotationReaderService()
    {
        return $this->services['annotation_reader'] = new \Doctrine\Common\Annotations\FileCacheReader(new \Doctrine\Common\Annotations\AnnotationReader(), '/vagrant/project/app/cache/dev/annotations', true);
    }

    /**
     * Gets the 'assetic.asset_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Assetic\Factory\LazyAssetManager A Assetic\Factory\LazyAssetManager instance.
     */
    protected function getAssetic_AssetManagerService()
    {
        $a = $this->get('templating.loader');

        $this->services['assetic.asset_manager'] = $instance = new \Assetic\Factory\LazyAssetManager($this->get('assetic.asset_factory'), array('twig' => new \Assetic\Factory\Loader\CachedFormulaLoader(new \Assetic\Extension\Twig\TwigFormulaLoader($this->get('twig')), new \Assetic\Cache\ConfigCache('/vagrant/project/app/cache/dev/assetic/config'), true)));

        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'FrameworkBundle', '/vagrant/project/app/Resources/FrameworkBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'FrameworkBundle', '/vagrant/project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'TwigBundle', '/vagrant/project/app/Resources/TwigBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'TwigBundle', '/vagrant/project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'MonologBundle', '/vagrant/project/app/Resources/MonologBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'MonologBundle', '/vagrant/project/vendor/symfony/monolog-bundle/Symfony/Bundle/MonologBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'AsseticBundle', '/vagrant/project/app/Resources/AsseticBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'AsseticBundle', '/vagrant/project/vendor/symfony/assetic-bundle/Symfony/Bundle/AsseticBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'DoctrineBundle', '/vagrant/project/app/Resources/DoctrineBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'DoctrineBundle', '/vagrant/project/vendor/doctrine/doctrine-bundle/Doctrine/Bundle/DoctrineBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'DoctrinePHPCRBundle', '/vagrant/project/app/Resources/DoctrinePHPCRBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'DoctrinePHPCRBundle', '/vagrant/project/vendor/doctrine/phpcr-bundle/Doctrine/Bundle/PHPCRBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'LiipDoctrineCacheBundle', '/vagrant/project/app/Resources/LiipDoctrineCacheBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'LiipDoctrineCacheBundle', '/vagrant/project/vendor/liip/doctrine-cache-bundle/Liip/DoctrineCacheBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'KnpMenuBundle', '/vagrant/project/app/Resources/KnpMenuBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'KnpMenuBundle', '/vagrant/project/vendor/knplabs/knp-menu-bundle/Knp/Bundle/MenuBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'LuneticsLocaleBundle', '/vagrant/project/app/Resources/LuneticsLocaleBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'LuneticsLocaleBundle', '/vagrant/project/vendor/lunetics/locale-bundle/Lunetics/LocaleBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'FOSRestBundle', '/vagrant/project/app/Resources/FOSRestBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'FOSRestBundle', '/vagrant/project/vendor/friendsofsymfony/rest-bundle/FOS/RestBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'JMSSerializerBundle', '/vagrant/project/app/Resources/JMSSerializerBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'JMSSerializerBundle', '/vagrant/project/vendor/jms/serializer-bundle/JMS/SerializerBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SymfonyCmfRoutingExtraBundle', '/vagrant/project/app/Resources/SymfonyCmfRoutingExtraBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SymfonyCmfRoutingExtraBundle', '/vagrant/project/vendor/symfony-cmf/routing-extra-bundle/Symfony/Cmf/Bundle/RoutingExtraBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SymfonyCmfCoreBundle', '/vagrant/project/app/Resources/SymfonyCmfCoreBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SymfonyCmfCoreBundle', '/vagrant/project/vendor/symfony-cmf/core-bundle/Symfony/Cmf/Bundle/CoreBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SymfonyCmfMenuBundle', '/vagrant/project/app/Resources/SymfonyCmfMenuBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SymfonyCmfMenuBundle', '/vagrant/project/vendor/symfony-cmf/menu-bundle/Symfony/Cmf/Bundle/MenuBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SymfonyCmfContentBundle', '/vagrant/project/app/Resources/SymfonyCmfContentBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SymfonyCmfContentBundle', '/vagrant/project/vendor/symfony-cmf/content-bundle/Symfony/Cmf/Bundle/ContentBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SymfonyCmfSimpleCmsBundle', '/vagrant/project/app/Resources/SymfonyCmfSimpleCmsBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SymfonyCmfSimpleCmsBundle', '/vagrant/project/vendor/symfony-cmf/simple-cms-bundle/Symfony/Cmf/Bundle/SimpleCmsBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SymfonyCmfCreateBundle', '/vagrant/project/app/Resources/SymfonyCmfCreateBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SymfonyCmfCreateBundle', '/vagrant/project/vendor/symfony-cmf/create-bundle/Symfony/Cmf/Bundle/CreateBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'AcmeMainBundle', '/vagrant/project/app/Resources/AcmeMainBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'AcmeMainBundle', '/vagrant/project/src/Acme/MainBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'WebProfilerBundle', '/vagrant/project/app/Resources/WebProfilerBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'WebProfilerBundle', '/vagrant/project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SensioDistributionBundle', '/vagrant/project/app/Resources/SensioDistributionBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SensioDistributionBundle', '/vagrant/project/vendor/sensio/distribution-bundle/Sensio/Bundle/DistributionBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, '', '/vagrant/project/app/Resources/views', '/\\.[^.]+\\.twig$/'), 'twig');

        return $instance;
    }

    /**
     * Gets the 'assetic.controller' service.
     *
     * @return Symfony\Bundle\AsseticBundle\Controller\AsseticController A Symfony\Bundle\AsseticBundle\Controller\AsseticController instance.
     */
    protected function getAssetic_ControllerService()
    {
        $instance = new \Symfony\Bundle\AsseticBundle\Controller\AsseticController($this->get('request'), $this->get('assetic.asset_manager'), $this->get('assetic.cache'), false, $this->get('profiler'));

        $instance->setValueSupplier($this->get('assetic.value_supplier.default'));

        return $instance;
    }

    /**
     * Gets the 'assetic.filter.cssrewrite' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Assetic\Filter\CssRewriteFilter A Assetic\Filter\CssRewriteFilter instance.
     */
    protected function getAssetic_Filter_CssrewriteService()
    {
        return $this->services['assetic.filter.cssrewrite'] = new \Assetic\Filter\CssRewriteFilter();
    }

    /**
     * Gets the 'assetic.filter_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\AsseticBundle\FilterManager A Symfony\Bundle\AsseticBundle\FilterManager instance.
     */
    protected function getAssetic_FilterManagerService()
    {
        return $this->services['assetic.filter_manager'] = new \Symfony\Bundle\AsseticBundle\FilterManager($this, array('cssrewrite' => 'assetic.filter.cssrewrite'));
    }

    /**
     * Gets the 'assetic.request_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\AsseticBundle\EventListener\RequestListener A Symfony\Bundle\AsseticBundle\EventListener\RequestListener instance.
     */
    protected function getAssetic_RequestListenerService()
    {
        return $this->services['assetic.request_listener'] = new \Symfony\Bundle\AsseticBundle\EventListener\RequestListener();
    }

    /**
     * Gets the 'cache_clearer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer A Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer instance.
     */
    protected function getCacheClearerService()
    {
        return $this->services['cache_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer(array());
    }

    /**
     * Gets the 'cache_warmer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate A Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate instance.
     */
    protected function getCacheWarmerService()
    {
        $a = $this->get('kernel');
        $b = $this->get('templating.filename_parser');

        $c = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplateFinder($a, $b, '/vagrant/project/app/Resources');

        return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(array(0 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplatePathsCacheWarmer($c, $this->get('templating.locator')), 1 => new \Symfony\Bundle\AsseticBundle\CacheWarmer\AssetManagerCacheWarmer($this), 2 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer($this->get('symfony_cmf_routing_extra.router')), 3 => new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheCacheWarmer($this, $c), 4 => new \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer($this->get('doctrine_phpcr'))));
    }

    /**
     * Gets the 'controller_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Controller\TraceableControllerResolver A Symfony\Bundle\FrameworkBundle\Controller\TraceableControllerResolver instance.
     */
    protected function getControllerResolverService()
    {
        return $this->services['controller_resolver'] = new \Symfony\Bundle\FrameworkBundle\Controller\TraceableControllerResolver($this, $this->get('controller_name_converter'), $this->get('debug.stopwatch'), $this->get('monolog.logger.request'));
    }

    /**
     * Gets the 'data_collector.request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\DataCollector\RequestDataCollector A Symfony\Component\HttpKernel\DataCollector\RequestDataCollector instance.
     */
    protected function getDataCollector_RequestService()
    {
        return $this->services['data_collector.request'] = new \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector();
    }

    /**
     * Gets the 'data_collector.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector A Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector instance.
     */
    protected function getDataCollector_RouterService()
    {
        return $this->services['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector();
    }

    /**
     * Gets the 'debug.stopwatch' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\Debug\Stopwatch A Symfony\Component\HttpKernel\Debug\Stopwatch instance.
     */
    protected function getDebug_StopwatchService()
    {
        return $this->services['debug.stopwatch'] = new \Symfony\Component\HttpKernel\Debug\Stopwatch();
    }

    /**
     * Gets the 'doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Doctrine\Bundle\DoctrineBundle\Registry A Doctrine\Bundle\DoctrineBundle\Registry instance.
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, array('default' => 'doctrine.dbal.default_connection'), array(), 'default', '');
    }

    /**
     * Gets the 'doctrine.dbal.connection_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Doctrine\Bundle\DoctrineBundle\ConnectionFactory A Doctrine\Bundle\DoctrineBundle\ConnectionFactory instance.
     */
    protected function getDoctrine_Dbal_ConnectionFactoryService()
    {
        return $this->services['doctrine.dbal.connection_factory'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory(array());
    }

    /**
     * Gets the 'doctrine.dbal.default_connection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return stdClass A stdClass instance.
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        $a = new \Doctrine\DBAL\Logging\LoggerChain();
        $a->addLogger(new \Symfony\Bridge\Doctrine\Logger\DbalLogger($this->get('monolog.logger.doctrine'), $this->get('debug.stopwatch')));
        $a->addLogger($this->get('doctrine.dbal.logger.profiling.default'));

        $b = new \Doctrine\DBAL\Configuration();
        $b->setSQLLogger($a);

        return $this->services['doctrine.dbal.default_connection'] = $this->get('doctrine.dbal.connection_factory')->createConnection(array('charset' => 'UTF8', 'path' => '/vagrant/project/app/app.sqlite', 'driver' => 'pdo_sqlite', 'host' => 'localhost', 'port' => NULL, 'user' => 'root', 'password' => NULL, 'driverOptions' => array()), $b, new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this), array());
    }

    /**
     * Gets the 'doctrine_phpcr' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Doctrine\Bundle\PHPCRBundle\ManagerRegistry A Doctrine\Bundle\PHPCRBundle\ManagerRegistry instance.
     */
    protected function getDoctrinePhpcrService()
    {
        $this->services['doctrine_phpcr'] = $instance = new \Doctrine\Bundle\PHPCRBundle\ManagerRegistry('PHPCR', array('default' => 'doctrine_phpcr.default_session'), array('default' => 'doctrine_phpcr.odm.default_document_manager'), 'default', 'default', 'Doctrine\\ODM\\PHPCR\\Proxy\\Proxy');

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'doctrine_phpcr.default_session' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Jackalope\Session A Jackalope\Session instance.
     */
    protected function getDoctrinePhpcr_DefaultSessionService()
    {
        return $this->services['doctrine_phpcr.default_session'] = $this->get('doctrine_phpcr.jackalope.repository.default')->login(new \PHPCR\SimpleCredentials('admin', 'admin'), 'default');
    }

    /**
     * Gets the 'doctrine_phpcr.jackalope.repository.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Jackalope\Repository A Jackalope\Repository instance.
     */
    protected function getDoctrinePhpcr_Jackalope_Repository_DefaultService()
    {
        return $this->services['doctrine_phpcr.jackalope.repository.default'] = call_user_func(array('Jackalope\\RepositoryFactoryDoctrineDBAL', 'getRepository'), array('jackalope.doctrine_dbal_connection' => $this->get('doctrine.dbal.default_connection'), 'jackalope.check_login_on_server' => false));
    }

    /**
     * Gets the 'doctrine_phpcr.jackalope.repository.factory.doctrinedbal' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Jackalope\Repository A Jackalope\Repository instance.
     */
    protected function getDoctrinePhpcr_Jackalope_Repository_Factory_DoctrinedbalService()
    {
        return $this->services['doctrine_phpcr.jackalope.repository.factory.doctrinedbal'] = call_user_func(array('Jackalope\\RepositoryFactoryDoctrineDBAL', 'getRepository'), array());
    }

    /**
     * Gets the 'doctrine_phpcr.jackalope.repository.factory.jackrabbit' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Jackalope\Repository A Jackalope\Repository instance.
     */
    protected function getDoctrinePhpcr_Jackalope_Repository_Factory_JackrabbitService()
    {
        return $this->services['doctrine_phpcr.jackalope.repository.factory.jackrabbit'] = call_user_func(array('Jackalope\\RepositoryFactoryJackrabbit', 'getRepository'), array('jackalope.jackrabbit_check_login_on_server' => false));
    }

    /**
     * Gets the 'doctrine_phpcr.odm.default_document_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Doctrine\ODM\PHPCR\DocumentManager A Doctrine\ODM\PHPCR\DocumentManager instance.
     */
    protected function getDoctrinePhpcr_Odm_DefaultDocumentManagerService()
    {
        $a = $this->get('annotation_reader');

        $b = new \Doctrine\Common\Cache\ArrayCache();
        $b->setNamespace('sf2phpcr_default_5bda14f457c842887cebd363a07663d1');

        $c = new \Doctrine\ODM\PHPCR\Mapping\Driver\AnnotationDriver($a, array(0 => '/vagrant/project/vendor/doctrine/phpcr-odm/lib/Doctrine/ODM/PHPCR/Document', 1 => '/vagrant/project/vendor/symfony-cmf/menu-bundle/Symfony/Cmf/Bundle/MenuBundle/Document', 2 => '/vagrant/project/vendor/symfony-cmf/content-bundle/Symfony/Cmf/Bundle/ContentBundle/Document', 3 => '/vagrant/project/vendor/symfony-cmf/simple-cms-bundle/Symfony/Cmf/Bundle/SimpleCmsBundle/Document', 4 => '/vagrant/project/vendor/symfony-cmf/create-bundle/Symfony/Cmf/Bundle/CreateBundle/Document'));

        $d = new \Doctrine\Bundle\PHPCRBundle\Mapping\Driver\XmlDriver(array('/vagrant/project/vendor/symfony-cmf/routing-extra-bundle/Symfony/Cmf/Bundle/RoutingExtraBundle/Resources/config/doctrine' => 'Symfony\\Cmf\\Bundle\\RoutingExtraBundle\\Document'));
        $d->setGlobalBasename('mapping');

        $e = new \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain();
        $e->addDriver($c, 'Doctrine\\ODM\\PHPCR\\Document');
        $e->addDriver($c, 'Symfony\\Cmf\\Bundle\\MenuBundle\\Document');
        $e->addDriver($c, 'Symfony\\Cmf\\Bundle\\ContentBundle\\Document');
        $e->addDriver($c, 'Symfony\\Cmf\\Bundle\\SimpleCmsBundle\\Document');
        $e->addDriver($c, 'Symfony\\Cmf\\Bundle\\CreateBundle\\Document');
        $e->addDriver($d, 'Symfony\\Cmf\\Bundle\\RoutingExtraBundle\\Document');

        $f = new \Doctrine\ODM\PHPCR\Configuration();
        $f->setDocumentNamespaces(array('__PHPCRODM__' => 'Doctrine\\ODM\\PHPCR\\Document', 'SymfonyCmfRoutingExtraBundle' => 'Symfony\\Cmf\\Bundle\\RoutingExtraBundle\\Document', 'SymfonyCmfMenuBundle' => 'Symfony\\Cmf\\Bundle\\MenuBundle\\Document', 'SymfonyCmfContentBundle' => 'Symfony\\Cmf\\Bundle\\ContentBundle\\Document', 'SymfonyCmfSimpleCmsBundle' => 'Symfony\\Cmf\\Bundle\\SimpleCmsBundle\\Document', 'SymfonyCmfCreateBundle' => 'Symfony\\Cmf\\Bundle\\CreateBundle\\Document'));
        $f->setMetadataCacheImpl($b);
        $f->setMetadataDriverImpl($e, false);
        $f->setProxyDir('/vagrant/project/app/cache/dev/doctrine/PHPCRProxies');
        $f->setProxyNamespace('PHPCRProxies');
        $f->setAutoGenerateProxyClasses(true);

        $g = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this);
        $g->addEventListener(array(0 => 'postLoad', 1 => 'postPersist'), $this->get('symfony_cmf_routing_extra.phpcrodm_route_idprefix_listener'));
        $g->addEventListener(array(0 => 'postLoad', 1 => 'postPersist'), $this->get('symfony_cmf_simple_cms.phpcrodm_route_idprefix_listener'));

        $this->services['doctrine_phpcr.odm.default_document_manager'] = $instance = new \Doctrine\ODM\PHPCR\DocumentManager($this->get('doctrine_phpcr.default_session'), $f, $g);

        $instance->setLocaleChooserStrategy($this->get('doctrine_phpcr.odm.locale_chooser'));

        return $instance;
    }

    /**
     * Gets the 'doctrine_phpcr.odm.locale_chooser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Doctrine\ODM\PHPCR\Translation\LocaleChooser\LocaleChooser A Doctrine\ODM\PHPCR\Translation\LocaleChooser\LocaleChooser instance.
     */
    protected function getDoctrinePhpcr_Odm_LocaleChooserService()
    {
        return $this->services['doctrine_phpcr.odm.locale_chooser'] = new \Doctrine\ODM\PHPCR\Translation\LocaleChooser\LocaleChooser(array('en' => array(0 => 'en', 1 => 'en', 2 => 'de'), 'de' => array(0 => 'de', 1 => 'en')), 'en');
    }

    /**
     * Gets the 'doctrine_phpcr.odm.locale_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Doctrine\Bundle\PHPCRBundle\EventListener\LocaleListener A Doctrine\Bundle\PHPCRBundle\EventListener\LocaleListener instance.
     */
    protected function getDoctrinePhpcr_Odm_LocaleListenerService()
    {
        return $this->services['doctrine_phpcr.odm.locale_listener'] = new \Doctrine\Bundle\PHPCRBundle\EventListener\LocaleListener($this->get('doctrine_phpcr.odm.locale_chooser'));
    }

    /**
     * Gets the 'event_dispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\Debug\ContainerAwareTraceableEventDispatcher A Symfony\Component\HttpKernel\Debug\ContainerAwareTraceableEventDispatcher instance.
     */
    protected function getEventDispatcherService()
    {
        $this->services['event_dispatcher'] = $instance = new \Symfony\Component\HttpKernel\Debug\ContainerAwareTraceableEventDispatcher($this, $this->get('debug.stopwatch'), $this->get('monolog.logger.event'));

        $instance->addListenerService('kernel.controller', array(0 => 'data_collector.router', 1 => 'onKernelController'), 0);
        $instance->addListenerService('kernel.response', array(0 => 'monolog.handler.firephp', 1 => 'onKernelResponse'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'assetic.request_listener', 1 => 'onKernelRequest'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'fos_rest.body_listener', 1 => 'onKernelRequest'), 0);
        $instance->addListenerService('kernel.controller', array(0 => 'fos_rest.format_listener', 1 => 'onKernelController'), 0);
        $instance->addSubscriberService('response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener');
        $instance->addSubscriberService('streamed_response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener');
        $instance->addSubscriberService('locale_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener');
        $instance->addSubscriberService('session_listener', 'Symfony\\Bundle\\FrameworkBundle\\EventListener\\SessionListener');
        $instance->addSubscriberService('profiler_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ProfilerListener');
        $instance->addSubscriberService('data_collector.request', 'Symfony\\Component\\HttpKernel\\DataCollector\\RequestDataCollector');
        $instance->addSubscriberService('router_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener');
        $instance->addSubscriberService('twig.exception_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener');
        $instance->addSubscriberService('doctrine_phpcr.odm.locale_listener', 'Doctrine\\Bundle\\PHPCRBundle\\EventListener\\LocaleListener');
        $instance->addSubscriberService('lunetics_locale.locale_listener', 'Lunetics\\LocaleBundle\\EventListener\\LocaleListener');
        $instance->addSubscriberService('lunetics_locale.locale_update_listener', 'Lunetics\\LocaleBundle\\EventListener\\LocaleUpdateListener');
        $instance->addSubscriberService('web_profiler.debug_toolbar', 'Symfony\\Bundle\\WebProfilerBundle\\EventListener\\WebDebugToolbarListener');

        return $instance;
    }

    /**
     * Gets the 'file_locator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\Config\FileLocator A Symfony\Component\HttpKernel\Config\FileLocator instance.
     */
    protected function getFileLocatorService()
    {
        return $this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator($this->get('kernel'), '/vagrant/project/app/Resources');
    }

    /**
     * Gets the 'filesystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Filesystem\Filesystem A Symfony\Component\Filesystem\Filesystem instance.
     */
    protected function getFilesystemService()
    {
        return $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem();
    }

    /**
     * Gets the 'form.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\FormFactory A Symfony\Component\Form\FormFactory instance.
     */
    protected function getForm_FactoryService()
    {
        return $this->services['form.factory'] = new \Symfony\Component\Form\FormFactory($this->get('form.registry'), $this->get('form.resolved_type_factory'));
    }

    /**
     * Gets the 'form.registry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\FormRegistry A Symfony\Component\Form\FormRegistry instance.
     */
    protected function getForm_RegistryService()
    {
        return $this->services['form.registry'] = new \Symfony\Component\Form\FormRegistry(array(0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension($this, array('field' => 'form.type.field', 'form' => 'form.type.form', 'birthday' => 'form.type.birthday', 'checkbox' => 'form.type.checkbox', 'choice' => 'form.type.choice', 'collection' => 'form.type.collection', 'country' => 'form.type.country', 'date' => 'form.type.date', 'datetime' => 'form.type.datetime', 'email' => 'form.type.email', 'file' => 'form.type.file', 'hidden' => 'form.type.hidden', 'integer' => 'form.type.integer', 'language' => 'form.type.language', 'locale' => 'form.type.locale', 'money' => 'form.type.money', 'number' => 'form.type.number', 'password' => 'form.type.password', 'percent' => 'form.type.percent', 'radio' => 'form.type.radio', 'repeated' => 'form.type.repeated', 'search' => 'form.type.search', 'textarea' => 'form.type.textarea', 'text' => 'form.type.text', 'time' => 'form.type.time', 'timezone' => 'form.type.timezone', 'url' => 'form.type.url', 'phpcr_document' => 'form.type.phpcr.document', 'symfony_cmf_routing_extra_terms_form_type' => 'symfony_cmf_routing_extra.terms_form_type'), array('form' => array(0 => 'form.type_extension.form.http_foundation', 1 => 'form.type_extension.form.validator'), 'repeated' => array(0 => 'form.type_extension.repeated.validator')), array(0 => 'form.type_guesser.validator', 1 => 'form.type_guesser.doctrine_phpcr'))), $this->get('form.resolved_type_factory'));
    }

    /**
     * Gets the 'form.resolved_type_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\ResolvedFormTypeFactory A Symfony\Component\Form\ResolvedFormTypeFactory instance.
     */
    protected function getForm_ResolvedTypeFactoryService()
    {
        return $this->services['form.resolved_type_factory'] = new \Symfony\Component\Form\ResolvedFormTypeFactory();
    }

    /**
     * Gets the 'form.type.birthday' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\BirthdayType A Symfony\Component\Form\Extension\Core\Type\BirthdayType instance.
     */
    protected function getForm_Type_BirthdayService()
    {
        return $this->services['form.type.birthday'] = new \Symfony\Component\Form\Extension\Core\Type\BirthdayType();
    }

    /**
     * Gets the 'form.type.checkbox' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\CheckboxType A Symfony\Component\Form\Extension\Core\Type\CheckboxType instance.
     */
    protected function getForm_Type_CheckboxService()
    {
        return $this->services['form.type.checkbox'] = new \Symfony\Component\Form\Extension\Core\Type\CheckboxType();
    }

    /**
     * Gets the 'form.type.choice' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\ChoiceType A Symfony\Component\Form\Extension\Core\Type\ChoiceType instance.
     */
    protected function getForm_Type_ChoiceService()
    {
        return $this->services['form.type.choice'] = new \Symfony\Component\Form\Extension\Core\Type\ChoiceType();
    }

    /**
     * Gets the 'form.type.collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\CollectionType A Symfony\Component\Form\Extension\Core\Type\CollectionType instance.
     */
    protected function getForm_Type_CollectionService()
    {
        return $this->services['form.type.collection'] = new \Symfony\Component\Form\Extension\Core\Type\CollectionType();
    }

    /**
     * Gets the 'form.type.country' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\CountryType A Symfony\Component\Form\Extension\Core\Type\CountryType instance.
     */
    protected function getForm_Type_CountryService()
    {
        return $this->services['form.type.country'] = new \Symfony\Component\Form\Extension\Core\Type\CountryType();
    }

    /**
     * Gets the 'form.type.date' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\DateType A Symfony\Component\Form\Extension\Core\Type\DateType instance.
     */
    protected function getForm_Type_DateService()
    {
        return $this->services['form.type.date'] = new \Symfony\Component\Form\Extension\Core\Type\DateType();
    }

    /**
     * Gets the 'form.type.datetime' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\DateTimeType A Symfony\Component\Form\Extension\Core\Type\DateTimeType instance.
     */
    protected function getForm_Type_DatetimeService()
    {
        return $this->services['form.type.datetime'] = new \Symfony\Component\Form\Extension\Core\Type\DateTimeType();
    }

    /**
     * Gets the 'form.type.email' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\EmailType A Symfony\Component\Form\Extension\Core\Type\EmailType instance.
     */
    protected function getForm_Type_EmailService()
    {
        return $this->services['form.type.email'] = new \Symfony\Component\Form\Extension\Core\Type\EmailType();
    }

    /**
     * Gets the 'form.type.field' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\FieldType A Symfony\Component\Form\Extension\Core\Type\FieldType instance.
     */
    protected function getForm_Type_FieldService()
    {
        return $this->services['form.type.field'] = new \Symfony\Component\Form\Extension\Core\Type\FieldType();
    }

    /**
     * Gets the 'form.type.file' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\FileType A Symfony\Component\Form\Extension\Core\Type\FileType instance.
     */
    protected function getForm_Type_FileService()
    {
        return $this->services['form.type.file'] = new \Symfony\Component\Form\Extension\Core\Type\FileType();
    }

    /**
     * Gets the 'form.type.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\FormType A Symfony\Component\Form\Extension\Core\Type\FormType instance.
     */
    protected function getForm_Type_FormService()
    {
        return $this->services['form.type.form'] = new \Symfony\Component\Form\Extension\Core\Type\FormType();
    }

    /**
     * Gets the 'form.type.hidden' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\HiddenType A Symfony\Component\Form\Extension\Core\Type\HiddenType instance.
     */
    protected function getForm_Type_HiddenService()
    {
        return $this->services['form.type.hidden'] = new \Symfony\Component\Form\Extension\Core\Type\HiddenType();
    }

    /**
     * Gets the 'form.type.integer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\IntegerType A Symfony\Component\Form\Extension\Core\Type\IntegerType instance.
     */
    protected function getForm_Type_IntegerService()
    {
        return $this->services['form.type.integer'] = new \Symfony\Component\Form\Extension\Core\Type\IntegerType();
    }

    /**
     * Gets the 'form.type.language' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\LanguageType A Symfony\Component\Form\Extension\Core\Type\LanguageType instance.
     */
    protected function getForm_Type_LanguageService()
    {
        return $this->services['form.type.language'] = new \Symfony\Component\Form\Extension\Core\Type\LanguageType();
    }

    /**
     * Gets the 'form.type.locale' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\LocaleType A Symfony\Component\Form\Extension\Core\Type\LocaleType instance.
     */
    protected function getForm_Type_LocaleService()
    {
        return $this->services['form.type.locale'] = new \Symfony\Component\Form\Extension\Core\Type\LocaleType();
    }

    /**
     * Gets the 'form.type.money' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\MoneyType A Symfony\Component\Form\Extension\Core\Type\MoneyType instance.
     */
    protected function getForm_Type_MoneyService()
    {
        return $this->services['form.type.money'] = new \Symfony\Component\Form\Extension\Core\Type\MoneyType();
    }

    /**
     * Gets the 'form.type.number' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\NumberType A Symfony\Component\Form\Extension\Core\Type\NumberType instance.
     */
    protected function getForm_Type_NumberService()
    {
        return $this->services['form.type.number'] = new \Symfony\Component\Form\Extension\Core\Type\NumberType();
    }

    /**
     * Gets the 'form.type.password' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\PasswordType A Symfony\Component\Form\Extension\Core\Type\PasswordType instance.
     */
    protected function getForm_Type_PasswordService()
    {
        return $this->services['form.type.password'] = new \Symfony\Component\Form\Extension\Core\Type\PasswordType();
    }

    /**
     * Gets the 'form.type.percent' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\PercentType A Symfony\Component\Form\Extension\Core\Type\PercentType instance.
     */
    protected function getForm_Type_PercentService()
    {
        return $this->services['form.type.percent'] = new \Symfony\Component\Form\Extension\Core\Type\PercentType();
    }

    /**
     * Gets the 'form.type.phpcr.document' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Doctrine\Bundle\PHPCRBundle\Form\Type\DocumentType A Doctrine\Bundle\PHPCRBundle\Form\Type\DocumentType instance.
     */
    protected function getForm_Type_Phpcr_DocumentService()
    {
        return $this->services['form.type.phpcr.document'] = new \Doctrine\Bundle\PHPCRBundle\Form\Type\DocumentType($this->get('doctrine_phpcr'));
    }

    /**
     * Gets the 'form.type.radio' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\RadioType A Symfony\Component\Form\Extension\Core\Type\RadioType instance.
     */
    protected function getForm_Type_RadioService()
    {
        return $this->services['form.type.radio'] = new \Symfony\Component\Form\Extension\Core\Type\RadioType();
    }

    /**
     * Gets the 'form.type.repeated' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\RepeatedType A Symfony\Component\Form\Extension\Core\Type\RepeatedType instance.
     */
    protected function getForm_Type_RepeatedService()
    {
        return $this->services['form.type.repeated'] = new \Symfony\Component\Form\Extension\Core\Type\RepeatedType();
    }

    /**
     * Gets the 'form.type.search' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\SearchType A Symfony\Component\Form\Extension\Core\Type\SearchType instance.
     */
    protected function getForm_Type_SearchService()
    {
        return $this->services['form.type.search'] = new \Symfony\Component\Form\Extension\Core\Type\SearchType();
    }

    /**
     * Gets the 'form.type.text' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\TextType A Symfony\Component\Form\Extension\Core\Type\TextType instance.
     */
    protected function getForm_Type_TextService()
    {
        return $this->services['form.type.text'] = new \Symfony\Component\Form\Extension\Core\Type\TextType();
    }

    /**
     * Gets the 'form.type.textarea' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\TextareaType A Symfony\Component\Form\Extension\Core\Type\TextareaType instance.
     */
    protected function getForm_Type_TextareaService()
    {
        return $this->services['form.type.textarea'] = new \Symfony\Component\Form\Extension\Core\Type\TextareaType();
    }

    /**
     * Gets the 'form.type.time' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\TimeType A Symfony\Component\Form\Extension\Core\Type\TimeType instance.
     */
    protected function getForm_Type_TimeService()
    {
        return $this->services['form.type.time'] = new \Symfony\Component\Form\Extension\Core\Type\TimeType();
    }

    /**
     * Gets the 'form.type.timezone' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\TimezoneType A Symfony\Component\Form\Extension\Core\Type\TimezoneType instance.
     */
    protected function getForm_Type_TimezoneService()
    {
        return $this->services['form.type.timezone'] = new \Symfony\Component\Form\Extension\Core\Type\TimezoneType();
    }

    /**
     * Gets the 'form.type.url' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\UrlType A Symfony\Component\Form\Extension\Core\Type\UrlType instance.
     */
    protected function getForm_Type_UrlService()
    {
        return $this->services['form.type.url'] = new \Symfony\Component\Form\Extension\Core\Type\UrlType();
    }

    /**
     * Gets the 'form.type_extension.form.http_foundation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension A Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension instance.
     */
    protected function getForm_TypeExtension_Form_HttpFoundationService()
    {
        return $this->services['form.type_extension.form.http_foundation'] = new \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension();
    }

    /**
     * Gets the 'form.type_extension.form.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension instance.
     */
    protected function getForm_TypeExtension_Form_ValidatorService()
    {
        return $this->services['form.type_extension.form.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension($this->get('validator'));
    }

    /**
     * Gets the 'form.type_extension.repeated.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension instance.
     */
    protected function getForm_TypeExtension_Repeated_ValidatorService()
    {
        return $this->services['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension();
    }

    /**
     * Gets the 'form.type_guesser.doctrine_phpcr' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Doctrine\Bundle\PHPCRBundle\Form\PHPCRTypeGuesser A Doctrine\Bundle\PHPCRBundle\Form\PHPCRTypeGuesser instance.
     */
    protected function getForm_TypeGuesser_DoctrinePhpcrService()
    {
        return $this->services['form.type_guesser.doctrine_phpcr'] = new \Doctrine\Bundle\PHPCRBundle\Form\PHPCRTypeGuesser($this->get('doctrine_phpcr'));
    }

    /**
     * Gets the 'form.type_guesser.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser A Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser instance.
     */
    protected function getForm_TypeGuesser_ValidatorService()
    {
        return $this->services['form.type_guesser.validator'] = new \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser($this->get('validator.mapping.class_metadata_factory'));
    }

    /**
     * Gets the 'fos_rest.body_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\RestBundle\EventListener\BodyListener A FOS\RestBundle\EventListener\BodyListener instance.
     */
    protected function getFosRest_BodyListenerService()
    {
        return $this->services['fos_rest.body_listener'] = new \FOS\RestBundle\EventListener\BodyListener($this->get('fos_rest.decoder_provider'));
    }

    /**
     * Gets the 'fos_rest.decoder.json' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\Rest\Decoder\JsonDecoder A FOS\Rest\Decoder\JsonDecoder instance.
     */
    protected function getFosRest_Decoder_JsonService()
    {
        return $this->services['fos_rest.decoder.json'] = new \FOS\Rest\Decoder\JsonDecoder();
    }

    /**
     * Gets the 'fos_rest.decoder.xml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\Rest\Decoder\XmlDecoder A FOS\Rest\Decoder\XmlDecoder instance.
     */
    protected function getFosRest_Decoder_XmlService()
    {
        return $this->services['fos_rest.decoder.xml'] = new \FOS\Rest\Decoder\XmlDecoder();
    }

    /**
     * Gets the 'fos_rest.decoder_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\RestBundle\Decoder\ContainerDecoderProvider A FOS\RestBundle\Decoder\ContainerDecoderProvider instance.
     */
    protected function getFosRest_DecoderProviderService()
    {
        $this->services['fos_rest.decoder_provider'] = $instance = new \FOS\RestBundle\Decoder\ContainerDecoderProvider(array('json' => 'fos_rest.decoder.json', 'xml' => 'fos_rest.decoder.xml'));

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'fos_rest.format_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\RestBundle\EventListener\FormatListener A FOS\RestBundle\EventListener\FormatListener instance.
     */
    protected function getFosRest_FormatListenerService()
    {
        return $this->services['fos_rest.format_listener'] = new \FOS\RestBundle\EventListener\FormatListener($this->get('fos_rest.format_negotiator'), 'html', array(0 => 'html', 1 => '*/*'), true);
    }

    /**
     * Gets the 'fos_rest.format_negotiator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\Rest\Util\FormatNegotiator A FOS\Rest\Util\FormatNegotiator instance.
     */
    protected function getFosRest_FormatNegotiatorService()
    {
        return $this->services['fos_rest.format_negotiator'] = new \FOS\Rest\Util\FormatNegotiator();
    }

    /**
     * Gets the 'fos_rest.request.param_fetcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\RestBundle\Request\ParamFetcher A FOS\RestBundle\Request\ParamFetcher instance.
     */
    protected function getFosRest_Request_ParamFetcherService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('fos_rest.request.param_fetcher', 'request');
        }

        return $this->services['fos_rest.request.param_fetcher'] = $this->scopedServices['request']['fos_rest.request.param_fetcher'] = new \FOS\RestBundle\Request\ParamFetcher($this->get('fos_rest.request.param_fetcher.reader'), $this->get('request'));
    }

    /**
     * Gets the 'fos_rest.request.param_fetcher.reader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\RestBundle\Request\ParamReader A FOS\RestBundle\Request\ParamReader instance.
     */
    protected function getFosRest_Request_ParamFetcher_ReaderService()
    {
        return $this->services['fos_rest.request.param_fetcher.reader'] = new \FOS\RestBundle\Request\ParamReader($this->get('annotation_reader'));
    }

    /**
     * Gets the 'fos_rest.routing.loader.controller' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\RestBundle\Routing\Loader\RestRouteLoader A FOS\RestBundle\Routing\Loader\RestRouteLoader instance.
     */
    protected function getFosRest_Routing_Loader_ControllerService()
    {
        return $this->services['fos_rest.routing.loader.controller'] = new \FOS\RestBundle\Routing\Loader\RestRouteLoader($this, $this->get('file_locator'), $this->get('controller_name_converter'), $this->get('fos_rest.routing.loader.reader.controller'), NULL);
    }

    /**
     * Gets the 'fos_rest.routing.loader.processor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\RestBundle\Routing\Loader\RestRouteProcessor A FOS\RestBundle\Routing\Loader\RestRouteProcessor instance.
     */
    protected function getFosRest_Routing_Loader_ProcessorService()
    {
        return $this->services['fos_rest.routing.loader.processor'] = new \FOS\RestBundle\Routing\Loader\RestRouteProcessor();
    }

    /**
     * Gets the 'fos_rest.routing.loader.reader.action' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\RestBundle\Routing\Loader\Reader\RestActionReader A FOS\RestBundle\Routing\Loader\Reader\RestActionReader instance.
     */
    protected function getFosRest_Routing_Loader_Reader_ActionService()
    {
        return $this->services['fos_rest.routing.loader.reader.action'] = new \FOS\RestBundle\Routing\Loader\Reader\RestActionReader($this->get('annotation_reader'), $this->get('fos_rest.request.param_fetcher.reader'));
    }

    /**
     * Gets the 'fos_rest.routing.loader.reader.controller' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\RestBundle\Routing\Loader\Reader\RestControllerReader A FOS\RestBundle\Routing\Loader\Reader\RestControllerReader instance.
     */
    protected function getFosRest_Routing_Loader_Reader_ControllerService()
    {
        return $this->services['fos_rest.routing.loader.reader.controller'] = new \FOS\RestBundle\Routing\Loader\Reader\RestControllerReader($this->get('fos_rest.routing.loader.reader.action'), $this->get('annotation_reader'));
    }

    /**
     * Gets the 'fos_rest.routing.loader.xml_collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\RestBundle\Routing\Loader\RestXmlCollectionLoader A FOS\RestBundle\Routing\Loader\RestXmlCollectionLoader instance.
     */
    protected function getFosRest_Routing_Loader_XmlCollectionService()
    {
        return $this->services['fos_rest.routing.loader.xml_collection'] = new \FOS\RestBundle\Routing\Loader\RestXmlCollectionLoader($this->get('file_locator'), $this->get('fos_rest.routing.loader.processor'));
    }

    /**
     * Gets the 'fos_rest.routing.loader.yaml_collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\RestBundle\Routing\Loader\RestYamlCollectionLoader A FOS\RestBundle\Routing\Loader\RestYamlCollectionLoader instance.
     */
    protected function getFosRest_Routing_Loader_YamlCollectionService()
    {
        return $this->services['fos_rest.routing.loader.yaml_collection'] = new \FOS\RestBundle\Routing\Loader\RestYamlCollectionLoader($this->get('file_locator'), $this->get('fos_rest.routing.loader.processor'));
    }

    /**
     * Gets the 'fos_rest.serializer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return JMS\SerializerBundle\Serializer\LazyLoadingSerializer A JMS\SerializerBundle\Serializer\LazyLoadingSerializer instance.
     */
    protected function getFosRest_SerializerService()
    {
        $a = new \Metadata\MetadataFactory($this->get('jms_serializer.metadata.lazy_loading_driver'), 'Metadata\\ClassHierarchyMetadata', true);
        $a->setCache(new \Metadata\Cache\FileCache('/vagrant/project/app/cache/dev/jms_serializer'));

        $this->services['fos_rest.serializer'] = $instance = new \JMS\SerializerBundle\Serializer\LazyLoadingSerializer($a, array('json' => 'jms_serializer.json_serialization_visitor', 'xml' => 'jms_serializer.xml_serialization_visitor', 'yml' => 'jms_serializer.yaml_serialization_visitor'), array('json' => 'jms_serializer.json_deserialization_visitor', 'xml' => 'jms_serializer.xml_deserialization_visitor'));

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'fos_rest.view_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\RestBundle\View\ViewHandler A FOS\RestBundle\View\ViewHandler instance.
     */
    protected function getFosRest_ViewHandlerService()
    {
        $this->services['fos_rest.view_handler'] = $instance = new \FOS\RestBundle\View\ViewHandler(array('json' => false, 'xml' => false, 'html' => true), 400, array('html' => 302), 'twig');

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'http_kernel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\HttpKernel A Symfony\Bundle\FrameworkBundle\HttpKernel instance.
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Bundle\FrameworkBundle\HttpKernel($this->get('event_dispatcher'), $this, $this->get('controller_resolver'));
    }

    /**
     * Gets the 'jms_serializer.json_deserialization_visitor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return JMS\SerializerBundle\Serializer\JsonDeserializationVisitor A JMS\SerializerBundle\Serializer\JsonDeserializationVisitor instance.
     */
    protected function getJmsSerializer_JsonDeserializationVisitorService()
    {
        return $this->services['jms_serializer.json_deserialization_visitor'] = new \JMS\SerializerBundle\Serializer\JsonDeserializationVisitor($this->get('jms_serializer.naming_strategy'), array(0 => $this->get('jms_serializer.array_collection_handler'), 1 => $this->get('jms_serializer.datetime_handler')), $this->get('jms_serializer.unserialize_object_constructor'));
    }

    /**
     * Gets the 'jms_serializer.json_serialization_visitor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return JMS\SerializerBundle\Serializer\JsonSerializationVisitor A JMS\SerializerBundle\Serializer\JsonSerializationVisitor instance.
     */
    protected function getJmsSerializer_JsonSerializationVisitorService()
    {
        $this->services['jms_serializer.json_serialization_visitor'] = $instance = new \JMS\SerializerBundle\Serializer\JsonSerializationVisitor($this->get('jms_serializer.naming_strategy'), array(0 => $this->get('jms_serializer.doctrine_handler'), 1 => $this->get('jms_serializer.constraint_violation_handler'), 2 => $this->get('jms_serializer.datetime_handler'), 3 => $this->get('jms_serializer.form_error_handler')));

        $instance->setOptions(0);

        return $instance;
    }

    /**
     * Gets the 'jms_serializer.metadata.lazy_loading_driver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Metadata\Driver\LazyLoadingDriver A Metadata\Driver\LazyLoadingDriver instance.
     */
    protected function getJmsSerializer_Metadata_LazyLoadingDriverService()
    {
        return $this->services['jms_serializer.metadata.lazy_loading_driver'] = new \Metadata\Driver\LazyLoadingDriver($this, 'jms_serializer.metadata_driver');
    }

    /**
     * Gets the 'jms_serializer.metadata_driver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Metadata\Driver\DriverChain A Metadata\Driver\DriverChain instance.
     */
    protected function getJmsSerializer_MetadataDriverService()
    {
        $a = new \Metadata\Driver\FileLocator(array('Symfony\\Bundle\\FrameworkBundle' => '/vagrant/project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/config/serializer', 'Symfony\\Bundle\\TwigBundle' => '/vagrant/project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/config/serializer', 'Symfony\\Bundle\\MonologBundle' => '/vagrant/project/vendor/symfony/monolog-bundle/Symfony/Bundle/MonologBundle/Resources/config/serializer', 'Symfony\\Bundle\\AsseticBundle' => '/vagrant/project/vendor/symfony/assetic-bundle/Symfony/Bundle/AsseticBundle/Resources/config/serializer', 'Doctrine\\Bundle\\DoctrineBundle' => '/vagrant/project/vendor/doctrine/doctrine-bundle/Doctrine/Bundle/DoctrineBundle/Resources/config/serializer', 'Doctrine\\Bundle\\PHPCRBundle' => '/vagrant/project/vendor/doctrine/phpcr-bundle/Doctrine/Bundle/PHPCRBundle/Resources/config/serializer', 'Liip\\DoctrineCacheBundle' => '/vagrant/project/vendor/liip/doctrine-cache-bundle/Liip/DoctrineCacheBundle/Resources/config/serializer', 'Knp\\Bundle\\MenuBundle' => '/vagrant/project/vendor/knplabs/knp-menu-bundle/Knp/Bundle/MenuBundle/Resources/config/serializer', 'Lunetics\\LocaleBundle' => '/vagrant/project/vendor/lunetics/locale-bundle/Lunetics/LocaleBundle/Resources/config/serializer', 'FOS\\RestBundle' => '/vagrant/project/vendor/friendsofsymfony/rest-bundle/FOS/RestBundle/Resources/config/serializer', 'JMS\\SerializerBundle' => '/vagrant/project/vendor/jms/serializer-bundle/JMS/SerializerBundle/Resources/config/serializer', 'Symfony\\Cmf\\Bundle\\RoutingExtraBundle' => '/vagrant/project/vendor/symfony-cmf/routing-extra-bundle/Symfony/Cmf/Bundle/RoutingExtraBundle/Resources/config/serializer', 'Symfony\\Cmf\\Bundle\\CoreBundle' => '/vagrant/project/vendor/symfony-cmf/core-bundle/Symfony/Cmf/Bundle/CoreBundle/Resources/config/serializer', 'Symfony\\Cmf\\Bundle\\MenuBundle' => '/vagrant/project/vendor/symfony-cmf/menu-bundle/Symfony/Cmf/Bundle/MenuBundle/Resources/config/serializer', 'Symfony\\Cmf\\Bundle\\ContentBundle' => '/vagrant/project/vendor/symfony-cmf/content-bundle/Symfony/Cmf/Bundle/ContentBundle/Resources/config/serializer', 'Symfony\\Cmf\\Bundle\\SimpleCmsBundle' => '/vagrant/project/vendor/symfony-cmf/simple-cms-bundle/Symfony/Cmf/Bundle/SimpleCmsBundle/Resources/config/serializer', 'Symfony\\Cmf\\Bundle\\CreateBundle' => '/vagrant/project/vendor/symfony-cmf/create-bundle/Symfony/Cmf/Bundle/CreateBundle/Resources/config/serializer', 'Acme\\MainBundle' => '/vagrant/project/src/Acme/MainBundle/Resources/config/serializer', 'Symfony\\Bundle\\WebProfilerBundle' => '/vagrant/project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/config/serializer', 'Sensio\\Bundle\\DistributionBundle' => '/vagrant/project/vendor/sensio/distribution-bundle/Sensio/Bundle/DistributionBundle/Resources/config/serializer'));

        return $this->services['jms_serializer.metadata_driver'] = new \Metadata\Driver\DriverChain(array(0 => new \JMS\SerializerBundle\Metadata\Driver\YamlDriver($a), 1 => new \JMS\SerializerBundle\Metadata\Driver\XmlDriver($a), 2 => new \JMS\SerializerBundle\Metadata\Driver\PhpDriver($a), 3 => new \JMS\SerializerBundle\Metadata\Driver\AnnotationDriver($this->get('annotation_reader'))));
    }

    /**
     * Gets the 'jms_serializer.naming_strategy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return JMS\SerializerBundle\Serializer\Naming\CacheNamingStrategy A JMS\SerializerBundle\Serializer\Naming\CacheNamingStrategy instance.
     */
    protected function getJmsSerializer_NamingStrategyService()
    {
        return $this->services['jms_serializer.naming_strategy'] = new \JMS\SerializerBundle\Serializer\Naming\CacheNamingStrategy(new \JMS\SerializerBundle\Serializer\Naming\SerializedNameAnnotationStrategy(new \JMS\SerializerBundle\Serializer\Naming\CamelCaseNamingStrategy('_', true)));
    }

    /**
     * Gets the 'jms_serializer.xml_deserialization_visitor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return JMS\SerializerBundle\Serializer\XmlDeserializationVisitor A JMS\SerializerBundle\Serializer\XmlDeserializationVisitor instance.
     */
    protected function getJmsSerializer_XmlDeserializationVisitorService()
    {
        return $this->services['jms_serializer.xml_deserialization_visitor'] = new \JMS\SerializerBundle\Serializer\XmlDeserializationVisitor($this->get('jms_serializer.naming_strategy'), array(0 => $this->get('jms_serializer.array_collection_handler'), 1 => $this->get('jms_serializer.datetime_handler')), $this->get('jms_serializer.unserialize_object_constructor'));
    }

    /**
     * Gets the 'jms_serializer.xml_serialization_visitor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return JMS\SerializerBundle\Serializer\XmlSerializationVisitor A JMS\SerializerBundle\Serializer\XmlSerializationVisitor instance.
     */
    protected function getJmsSerializer_XmlSerializationVisitorService()
    {
        return $this->services['jms_serializer.xml_serialization_visitor'] = new \JMS\SerializerBundle\Serializer\XmlSerializationVisitor($this->get('jms_serializer.naming_strategy'), array(0 => $this->get('jms_serializer.doctrine_handler'), 1 => $this->get('jms_serializer.constraint_violation_handler'), 2 => $this->get('jms_serializer.datetime_handler'), 3 => $this->get('jms_serializer.form_error_handler')));
    }

    /**
     * Gets the 'jms_serializer.yaml_serialization_visitor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return JMS\SerializerBundle\Serializer\YamlSerializationVisitor A JMS\SerializerBundle\Serializer\YamlSerializationVisitor instance.
     */
    protected function getJmsSerializer_YamlSerializationVisitorService()
    {
        return $this->services['jms_serializer.yaml_serialization_visitor'] = new \JMS\SerializerBundle\Serializer\YamlSerializationVisitor($this->get('jms_serializer.naming_strategy'), array(0 => $this->get('jms_serializer.doctrine_handler'), 1 => $this->get('jms_serializer.constraint_violation_handler'), 2 => $this->get('jms_serializer.datetime_handler'), 3 => $this->get('jms_serializer.form_error_handler')));
    }

    /**
     * Gets the 'kernel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getKernelService()
    {
        throw new RuntimeException('You have requested a synthetic service ("kernel"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'knp_menu.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Knp\Menu\Silex\RouterAwareFactory A Knp\Menu\Silex\RouterAwareFactory instance.
     */
    protected function getKnpMenu_FactoryService()
    {
        return $this->services['knp_menu.factory'] = new \Knp\Menu\Silex\RouterAwareFactory($this->get('symfony_cmf_routing_extra.router'));
    }

    /**
     * Gets the 'knp_menu.menu_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Knp\Menu\Provider\ChainProvider A Knp\Menu\Provider\ChainProvider instance.
     */
    protected function getKnpMenu_MenuProviderService()
    {
        return $this->services['knp_menu.menu_provider'] = new \Knp\Menu\Provider\ChainProvider(array(0 => new \Knp\Bundle\MenuBundle\Provider\ContainerAwareProvider($this, array()), 1 => new \Knp\Bundle\MenuBundle\Provider\BuilderAliasProvider($this->get('kernel'), $this, $this->get('knp_menu.factory')), 2 => $this->get('symfony_cmf_menu.provider'), 3 => $this->get('symfony_cmf_simple_cms.menu_provider')));
    }

    /**
     * Gets the 'knp_menu.renderer.list' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Knp\Menu\Renderer\ListRenderer A Knp\Menu\Renderer\ListRenderer instance.
     */
    protected function getKnpMenu_Renderer_ListService()
    {
        return $this->services['knp_menu.renderer.list'] = new \Knp\Menu\Renderer\ListRenderer(array(), 'UTF-8');
    }

    /**
     * Gets the 'knp_menu.renderer.twig' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Knp\Menu\Renderer\TwigRenderer A Knp\Menu\Renderer\TwigRenderer instance.
     */
    protected function getKnpMenu_Renderer_TwigService()
    {
        return $this->services['knp_menu.renderer.twig'] = new \Knp\Menu\Renderer\TwigRenderer($this->get('twig'), 'knp_menu.html.twig', array());
    }

    /**
     * Gets the 'knp_menu.renderer_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Knp\Bundle\MenuBundle\Renderer\ContainerAwareProvider A Knp\Bundle\MenuBundle\Renderer\ContainerAwareProvider instance.
     */
    protected function getKnpMenu_RendererProviderService()
    {
        return $this->services['knp_menu.renderer_provider'] = new \Knp\Bundle\MenuBundle\Renderer\ContainerAwareProvider($this, 'twig', array('list' => 'knp_menu.renderer.list', 'twig' => 'knp_menu.renderer.twig'));
    }

    /**
     * Gets the 'liip_doctrine_cache.ns.meta' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Doctrine\Common\Cache\FilesystemCache A Doctrine\Common\Cache\FilesystemCache instance.
     */
    protected function getLiipDoctrineCache_Ns_MetaService()
    {
        $this->services['liip_doctrine_cache.ns.meta'] = $instance = new \Doctrine\Common\Cache\FilesystemCache('/vagrant/project/app/cache/dev/doctrine/cache', NULL);

        $instance->setNamespace('meta');

        return $instance;
    }

    /**
     * Gets the 'liip_doctrine_cache.ns.nodes' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Doctrine\Common\Cache\FilesystemCache A Doctrine\Common\Cache\FilesystemCache instance.
     */
    protected function getLiipDoctrineCache_Ns_NodesService()
    {
        $this->services['liip_doctrine_cache.ns.nodes'] = $instance = new \Doctrine\Common\Cache\FilesystemCache('/vagrant/project/app/cache/dev/doctrine/cache', NULL);

        $instance->setNamespace('nodes');

        return $instance;
    }

    /**
     * Gets the 'locale_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\EventListener\LocaleListener A Symfony\Component\HttpKernel\EventListener\LocaleListener instance.
     */
    protected function getLocaleListenerService()
    {
        return $this->services['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener('en', $this->get('symfony_cmf_routing_extra.router'));
    }

    /**
     * Gets the 'logger' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getLoggerService()
    {
        $this->services['logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

        $instance->pushHandler($this->get('monolog.handler.firephp'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'lunetics_locale.browser_guesser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Lunetics\LocaleBundle\LocaleGuesser\BrowserLocaleGuesser A Lunetics\LocaleBundle\LocaleGuesser\BrowserLocaleGuesser instance.
     */
    protected function getLuneticsLocale_BrowserGuesserService()
    {
        return $this->services['lunetics_locale.browser_guesser'] = new \Lunetics\LocaleBundle\LocaleGuesser\BrowserLocaleGuesser($this->get('lunetics_locale.validator.meta'));
    }

    /**
     * Gets the 'lunetics_locale.cookie_guesser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Lunetics\LocaleBundle\LocaleGuesser\CookieLocaleGuesser A Lunetics\LocaleBundle\LocaleGuesser\CookieLocaleGuesser instance.
     */
    protected function getLuneticsLocale_CookieGuesserService()
    {
        return $this->services['lunetics_locale.cookie_guesser'] = new \Lunetics\LocaleBundle\LocaleGuesser\CookieLocaleGuesser($this->get('lunetics_locale.validator.meta'), 'lunetics_locale');
    }

    /**
     * Gets the 'lunetics_locale.guesser_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Lunetics\LocaleBundle\LocaleGuesser\LocaleGuesserManager A Lunetics\LocaleBundle\LocaleGuesser\LocaleGuesserManager instance.
     */
    protected function getLuneticsLocale_GuesserManagerService()
    {
        $this->services['lunetics_locale.guesser_manager'] = $instance = new \Lunetics\LocaleBundle\LocaleGuesser\LocaleGuesserManager(array(0 => 'cookie', 1 => 'router', 2 => 'browser'), $this->get('logger'));

        $instance->addGuesser($this->get('lunetics_locale.router_guesser'), 'router');
        $instance->addGuesser($this->get('lunetics_locale.browser_guesser'), 'browser');
        $instance->addGuesser($this->get('lunetics_locale.cookie_guesser'), 'cookie');

        return $instance;
    }

    /**
     * Gets the 'lunetics_locale.information' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Lunetics\LocaleBundle\LocaleInformaion\LocaleInformation A Lunetics\LocaleBundle\LocaleInformaion\LocaleInformation instance.
     */
    protected function getLuneticsLocale_InformationService()
    {
        return $this->services['lunetics_locale.information'] = new \Lunetics\LocaleBundle\LocaleInformaion\LocaleInformation($this->get('lunetics_locale.validator.meta'), array(0 => 'en', 1 => 'de'));
    }

    /**
     * Gets the 'lunetics_locale.locale_cookie' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Lunetics\LocaleBundle\Cookie\LocaleCookie A Lunetics\LocaleBundle\Cookie\LocaleCookie instance.
     */
    protected function getLuneticsLocale_LocaleCookieService()
    {
        return $this->services['lunetics_locale.locale_cookie'] = new \Lunetics\LocaleBundle\Cookie\LocaleCookie('lunetics_locale', '86400', '/', NULL, false, true, true);
    }

    /**
     * Gets the 'lunetics_locale.locale_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Lunetics\LocaleBundle\EventListener\LocaleListener A Lunetics\LocaleBundle\EventListener\LocaleListener instance.
     */
    protected function getLuneticsLocale_LocaleListenerService()
    {
        $this->services['lunetics_locale.locale_listener'] = $instance = new \Lunetics\LocaleBundle\EventListener\LocaleListener('en', $this->get('lunetics_locale.guesser_manager'), $this->get('logger'));

        $instance->setEventDispatcher($this->get('event_dispatcher'));

        return $instance;
    }

    /**
     * Gets the 'lunetics_locale.locale_session' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Lunetics\LocaleBundle\Session\LocaleSession A Lunetics\LocaleBundle\Session\LocaleSession instance.
     */
    protected function getLuneticsLocale_LocaleSessionService()
    {
        return $this->services['lunetics_locale.locale_session'] = new \Lunetics\LocaleBundle\Session\LocaleSession($this->get('session'), 'lunetics_locale');
    }

    /**
     * Gets the 'lunetics_locale.locale_update_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Lunetics\LocaleBundle\EventListener\LocaleUpdateListener A Lunetics\LocaleBundle\EventListener\LocaleUpdateListener instance.
     */
    protected function getLuneticsLocale_LocaleUpdateListenerService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('lunetics_locale.locale_update_listener', 'request');
        }

        return $this->services['lunetics_locale.locale_update_listener'] = $this->scopedServices['request']['lunetics_locale.locale_update_listener'] = new \Lunetics\LocaleBundle\EventListener\LocaleUpdateListener($this->get('lunetics_locale.locale_cookie'), $this->get('lunetics_locale.locale_session'), $this->get('request'), $this->get('event_dispatcher'), array(0 => 'cookie', 1 => 'router', 2 => 'browser'), $this->get('logger'));
    }

    /**
     * Gets the 'lunetics_locale.query_guesser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Lunetics\LocaleBundle\LocaleGuesser\QueryLocaleGuesser A Lunetics\LocaleBundle\LocaleGuesser\QueryLocaleGuesser instance.
     */
    protected function getLuneticsLocale_QueryGuesserService()
    {
        return $this->services['lunetics_locale.query_guesser'] = new \Lunetics\LocaleBundle\LocaleGuesser\QueryLocaleGuesser($this->get('lunetics_locale.validator.meta'), '_locale');
    }

    /**
     * Gets the 'lunetics_locale.router_guesser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Lunetics\LocaleBundle\LocaleGuesser\RouterLocaleGuesser A Lunetics\LocaleBundle\LocaleGuesser\RouterLocaleGuesser instance.
     */
    protected function getLuneticsLocale_RouterGuesserService()
    {
        return $this->services['lunetics_locale.router_guesser'] = new \Lunetics\LocaleBundle\LocaleGuesser\RouterLocaleGuesser($this->get('lunetics_locale.validator.meta'));
    }

    /**
     * Gets the 'lunetics_locale.session_guesser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Lunetics\LocaleBundle\LocaleGuesser\SessionLocaleGuesser A Lunetics\LocaleBundle\LocaleGuesser\SessionLocaleGuesser instance.
     */
    protected function getLuneticsLocale_SessionGuesserService()
    {
        return $this->services['lunetics_locale.session_guesser'] = new \Lunetics\LocaleBundle\LocaleGuesser\SessionLocaleGuesser($this->get('session'), $this->get('lunetics_locale.validator.meta'), 'lunetics_locale');
    }

    /**
     * Gets the 'lunetics_locale.switcher_controller' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Lunetics\LocaleBundle\Controller\LocaleController A Lunetics\LocaleBundle\Controller\LocaleController instance.
     */
    protected function getLuneticsLocale_SwitcherControllerService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('lunetics_locale.switcher_controller', 'request');
        }

        return $this->services['lunetics_locale.switcher_controller'] = $this->scopedServices['request']['lunetics_locale.switcher_controller'] = new \Lunetics\LocaleBundle\Controller\LocaleController($this->get('symfony_cmf_routing_extra.router'), $this->get('lunetics_locale.validator.meta'), true, NULL, '302');
    }

    /**
     * Gets the 'lunetics_locale.switcher_helper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Lunetics\LocaleBundle\Templating\Helper\LocaleSwitchHelper A Lunetics\LocaleBundle\Templating\Helper\LocaleSwitchHelper instance.
     */
    protected function getLuneticsLocale_SwitcherHelperService()
    {
        return $this->services['lunetics_locale.switcher_helper'] = new \Lunetics\LocaleBundle\Templating\Helper\LocaleSwitchHelper($this->get('templating'), 'links');
    }

    /**
     * Gets the 'lunetics_locale.twig.switcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Lunetics\LocaleBundle\Twig\Extension\LocaleSwitcherExtension A Lunetics\LocaleBundle\Twig\Extension\LocaleSwitcherExtension instance.
     */
    protected function getLuneticsLocale_Twig_SwitcherService()
    {
        return $this->services['lunetics_locale.twig.switcher'] = new \Lunetics\LocaleBundle\Twig\Extension\LocaleSwitcherExtension($this);
    }

    /**
     * Gets the 'lunetics_locale.validator.meta' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Lunetics\LocaleBundle\Validator\MetaValidator A Lunetics\LocaleBundle\Validator\MetaValidator instance.
     */
    protected function getLuneticsLocale_Validator_MetaService()
    {
        return $this->services['lunetics_locale.validator.meta'] = new \Lunetics\LocaleBundle\Validator\MetaValidator($this->get('validator'));
    }

    /**
     * Gets the 'monolog.handler.debug' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Handler\DebugHandler A Symfony\Bridge\Monolog\Handler\DebugHandler instance.
     */
    protected function getMonolog_Handler_DebugService()
    {
        return $this->services['monolog.handler.debug'] = new \Symfony\Bridge\Monolog\Handler\DebugHandler(100, true);
    }

    /**
     * Gets the 'monolog.handler.firephp' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Handler\FirePHPHandler A Symfony\Bridge\Monolog\Handler\FirePHPHandler instance.
     */
    protected function getMonolog_Handler_FirephpService()
    {
        return $this->services['monolog.handler.firephp'] = new \Symfony\Bridge\Monolog\Handler\FirePHPHandler(200, true);
    }

    /**
     * Gets the 'monolog.handler.main' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Monolog\Handler\StreamHandler A Monolog\Handler\StreamHandler instance.
     */
    protected function getMonolog_Handler_MainService()
    {
        return $this->services['monolog.handler.main'] = new \Monolog\Handler\StreamHandler('/vagrant/project/app/logs/dev.log', 100, true);
    }

    /**
     * Gets the 'monolog.logger.doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_DoctrineService()
    {
        $this->services['monolog.logger.doctrine'] = $instance = new \Symfony\Bridge\Monolog\Logger('doctrine');

        $instance->pushHandler($this->get('monolog.handler.firephp'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.event' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_EventService()
    {
        $this->services['monolog.logger.event'] = $instance = new \Symfony\Bridge\Monolog\Logger('event');

        $instance->pushHandler($this->get('monolog.handler.firephp'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.profiler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_ProfilerService()
    {
        $this->services['monolog.logger.profiler'] = $instance = new \Symfony\Bridge\Monolog\Logger('profiler');

        $instance->pushHandler($this->get('monolog.handler.firephp'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->services['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushHandler($this->get('monolog.handler.firephp'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_RouterService()
    {
        $this->services['monolog.logger.router'] = $instance = new \Symfony\Bridge\Monolog\Logger('router');

        $instance->pushHandler($this->get('monolog.handler.firephp'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.templating' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_TemplatingService()
    {
        $this->services['monolog.logger.templating'] = $instance = new \Symfony\Bridge\Monolog\Logger('templating');

        $instance->pushHandler($this->get('monolog.handler.firephp'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'profiler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\Profiler\Profiler A Symfony\Component\HttpKernel\Profiler\Profiler instance.
     */
    protected function getProfilerService()
    {
        $a = $this->get('monolog.logger.profiler');
        $b = $this->get('kernel');

        $c = new \Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector();
        $c->setKernel($b);

        $d = new \Symfony\Component\HttpKernel\DataCollector\EventDataCollector();
        $d->setEventDispatcher($this->get('event_dispatcher'));

        $e = new \Doctrine\Bundle\DoctrineBundle\DataCollector\DoctrineDataCollector($this->get('doctrine'));
        $e->addLogger('default', $this->get('doctrine.dbal.logger.profiling.default'));

        $this->services['profiler'] = $instance = new \Symfony\Component\HttpKernel\Profiler\Profiler(new \Symfony\Component\HttpKernel\Profiler\FileProfilerStorage('file:/vagrant/project/app/cache/dev/profiler', '', '', 86400), $a);

        $instance->add($c);
        $instance->add($this->get('data_collector.request'));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector());
        $instance->add($d);
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector($a));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\TimeDataCollector($b));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector());
        $instance->add($this->get('data_collector.router'));
        $instance->add($e);

        return $instance;
    }

    /**
     * Gets the 'profiler_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\EventListener\ProfilerListener A Symfony\Component\HttpKernel\EventListener\ProfilerListener instance.
     */
    protected function getProfilerListenerService()
    {
        return $this->services['profiler_listener'] = new \Symfony\Component\HttpKernel\EventListener\ProfilerListener($this->get('profiler'), NULL, false, false);
    }

    /**
     * Gets the 'request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getRequestService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('request', 'request');
        }

        throw new RuntimeException('You have requested a synthetic service ("request"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\EventListener\ResponseListener A Symfony\Component\HttpKernel\EventListener\ResponseListener instance.
     */
    protected function getResponseListenerService()
    {
        return $this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8');
    }

    /**
     * Gets the 'router_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\EventListener\RouterListener A Symfony\Component\HttpKernel\EventListener\RouterListener instance.
     */
    protected function getRouterListenerService()
    {
        return $this->services['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener($this->get('symfony_cmf_routing_extra.router'), $this->get('router.request_context'), $this->get('monolog.logger.request'));
    }

    /**
     * Gets the 'routing.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader A Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader instance.
     */
    protected function getRouting_LoaderService()
    {
        $a = $this->get('file_locator');

        $b = new \Symfony\Component\Config\Loader\LoaderResolver();
        $b->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($a));
        $b->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($a));
        $b->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($a));
        $b->addLoader(new \Symfony\Bundle\AsseticBundle\Routing\AsseticLoader($this->get('assetic.asset_manager')));
        $b->addLoader($this->get('fos_rest.routing.loader.controller'));
        $b->addLoader($this->get('fos_rest.routing.loader.yaml_collection'));
        $b->addLoader($this->get('fos_rest.routing.loader.xml_collection'));

        return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader($this->get('controller_name_converter'), $this->get('monolog.logger.router'), $b);
    }

    /**
     * Gets the 'sensio.distribution.webconfigurator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sensio\Bundle\DistributionBundle\Configurator\Configurator A Sensio\Bundle\DistributionBundle\Configurator\Configurator instance.
     */
    protected function getSensio_Distribution_WebconfiguratorService()
    {
        return $this->services['sensio.distribution.webconfigurator'] = new \Sensio\Bundle\DistributionBundle\Configurator\Configurator('/vagrant/project/app');
    }

    /**
     * Gets the 'service_container' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getServiceContainerService()
    {
        throw new RuntimeException('You have requested a synthetic service ("service_container"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'session' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpFoundation\Session\Session A Symfony\Component\HttpFoundation\Session\Session instance.
     */
    protected function getSessionService()
    {
        return $this->services['session'] = new \Symfony\Component\HttpFoundation\Session\Session($this->get('session.storage.native'), new \Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag(), new \Symfony\Component\HttpFoundation\Session\Flash\FlashBag());
    }

    /**
     * Gets the 'session.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler A Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler instance.
     */
    protected function getSession_HandlerService()
    {
        return $this->services['session.handler'] = new \Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler('/vagrant/project/app/cache/dev/sessions');
    }

    /**
     * Gets the 'session.storage.filesystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage instance.
     */
    protected function getSession_Storage_FilesystemService()
    {
        return $this->services['session.storage.filesystem'] = new \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage('/vagrant/project/app/cache/dev/sessions');
    }

    /**
     * Gets the 'session.storage.native' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage instance.
     */
    protected function getSession_Storage_NativeService()
    {
        return $this->services['session.storage.native'] = new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage(array(), $this->get('session.handler'));
    }

    /**
     * Gets the 'session_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\EventListener\SessionListener A Symfony\Bundle\FrameworkBundle\EventListener\SessionListener instance.
     */
    protected function getSessionListenerService()
    {
        return $this->services['session_listener'] = new \Symfony\Bundle\FrameworkBundle\EventListener\SessionListener($this);
    }

    /**
     * Gets the 'streamed_response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\EventListener\StreamedResponseListener A Symfony\Component\HttpKernel\EventListener\StreamedResponseListener instance.
     */
    protected function getStreamedResponseListenerService()
    {
        return $this->services['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener();
    }

    /**
     * Gets the 'symfony_cmf_content.controller' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Cmf\Bundle\ContentBundle\Controller\ContentController A Symfony\Cmf\Bundle\ContentBundle\Controller\ContentController instance.
     */
    protected function getSymfonyCmfContent_ControllerService()
    {
        return $this->services['symfony_cmf_content.controller'] = new \Symfony\Cmf\Bundle\ContentBundle\Controller\ContentController($this->get('templating'), 'SymfonyCmfContentBundle:StaticContent:index.html.twig', $this->get('fos_rest.view_handler'), $this->get('symfony_cmf_core.publish_workflow_checker'));
    }

    /**
     * Gets the 'symfony_cmf_core.publish_workflow_checker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Cmf\Bundle\CoreBundle\PublishWorkflow\PublishWorkflowChecker A Symfony\Cmf\Bundle\CoreBundle\PublishWorkflow\PublishWorkflowChecker instance.
     */
    protected function getSymfonyCmfCore_PublishWorkflowCheckerService()
    {
        return $this->services['symfony_cmf_core.publish_workflow_checker'] = new \Symfony\Cmf\Bundle\CoreBundle\PublishWorkflow\PublishWorkflowChecker('IS_AUTHENTICATED_ANONYMOUSLY', NULL);
    }

    /**
     * Gets the 'symfony_cmf_core.twig.children_extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Cmf\Bundle\CoreBundle\Twig\TwigExtension A Symfony\Cmf\Bundle\CoreBundle\Twig\TwigExtension instance.
     */
    protected function getSymfonyCmfCore_Twig_ChildrenExtensionService()
    {
        return $this->services['symfony_cmf_core.twig.children_extension'] = new \Symfony\Cmf\Bundle\CoreBundle\Twig\TwigExtension($this->get('doctrine_phpcr'), 'default', $this->get('symfony_cmf_core.publish_workflow_checker'));
    }

    /**
     * Gets the 'symfony_cmf_create.jsloader.controller' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Cmf\Bundle\CreateBundle\Controller\JsloaderController A Symfony\Cmf\Bundle\CreateBundle\Controller\JsloaderController instance.
     */
    protected function getSymfonyCmfCreate_Jsloader_ControllerService()
    {
        return $this->services['symfony_cmf_create.jsloader.controller'] = new \Symfony\Cmf\Bundle\CreateBundle\Controller\JsloaderController($this->get('fos_rest.view_handler'), 'http://dev.iks-project.eu:8081', false, false, 'IS_AUTHENTICATED_ANONYMOUSLY', NULL);
    }

    /**
     * Gets the 'symfony_cmf_create.rdf_driver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Midgard\CreatePHP\Metadata\RdfDriverXml A Midgard\CreatePHP\Metadata\RdfDriverXml instance.
     */
    protected function getSymfonyCmfCreate_RdfDriverService()
    {
        return $this->services['symfony_cmf_create.rdf_driver'] = new \Midgard\CreatePHP\Metadata\RdfDriverXml(array(0 => '/vagrant/project/vendor/symfony-cmf/content-bundle/Symfony/Cmf/Bundle/ContentBundle/Resources/rdf-mappings', 1 => '/vagrant/project/vendor/symfony-cmf/simple-cms-bundle/Symfony/Cmf/Bundle/SimpleCmsBundle/Resources/rdf-mappings'));
    }

    /**
     * Gets the 'symfony_cmf_create.rdf_type_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Midgard\CreatePHP\Metadata\RdfTypeFactory A Midgard\CreatePHP\Metadata\RdfTypeFactory instance.
     */
    protected function getSymfonyCmfCreate_RdfTypeFactoryService()
    {
        return $this->services['symfony_cmf_create.rdf_type_factory'] = new \Midgard\CreatePHP\Metadata\RdfTypeFactory($this->get('symfony_cmf_create.object_mapper'), $this->get('symfony_cmf_create.rdf_driver'));
    }

    /**
     * Gets the 'symfony_cmf_create.rest.controller' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Cmf\Bundle\CreateBundle\Controller\RestController A Symfony\Cmf\Bundle\CreateBundle\Controller\RestController instance.
     */
    protected function getSymfonyCmfCreate_Rest_ControllerService()
    {
        return $this->services['symfony_cmf_create.rest.controller'] = new \Symfony\Cmf\Bundle\CreateBundle\Controller\RestController($this->get('fos_rest.view_handler'), $this->get('symfony_cmf_create.object_mapper'), $this->get('symfony_cmf_create.rdf_type_factory'), $this->get('symfony_cmf_create.rest.handler'), 'IS_AUTHENTICATED_ANONYMOUSLY', NULL);
    }

    /**
     * Gets the 'symfony_cmf_create.rest.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Midgard\CreatePHP\RestService A Midgard\CreatePHP\RestService instance.
     */
    protected function getSymfonyCmfCreate_Rest_HandlerService()
    {
        return $this->services['symfony_cmf_create.rest.handler'] = new \Midgard\CreatePHP\RestService($this->get('symfony_cmf_create.object_mapper'));
    }

    /**
     * Gets the 'symfony_cmf_create.twig_extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Midgard\CreatePHP\Extension\Twig\CreatephpExtension A Midgard\CreatePHP\Extension\Twig\CreatephpExtension instance.
     */
    protected function getSymfonyCmfCreate_TwigExtensionService()
    {
        return $this->services['symfony_cmf_create.twig_extension'] = new \Midgard\CreatePHP\Extension\Twig\CreatephpExtension($this->get('symfony_cmf_create.rdf_type_factory'));
    }

    /**
     * Gets the 'symfony_cmf_menu.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Cmf\Bundle\MenuBundle\ContentAwareFactory A Symfony\Cmf\Bundle\MenuBundle\ContentAwareFactory instance.
     */
    protected function getSymfonyCmfMenu_FactoryService()
    {
        $a = $this->get('symfony_cmf_routing_extra.router');

        return $this->services['symfony_cmf_menu.factory'] = new \Symfony\Cmf\Bundle\MenuBundle\ContentAwareFactory($this, $a, $a, 'contentDocument', NULL);
    }

    /**
     * Gets the 'symfony_cmf_menu.provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Cmf\Bundle\MenuBundle\Provider\PHPCRMenuProvider A Symfony\Cmf\Bundle\MenuBundle\Provider\PHPCRMenuProvider instance.
     */
    protected function getSymfonyCmfMenu_ProviderService()
    {
        return $this->services['symfony_cmf_menu.provider'] = new \Symfony\Cmf\Bundle\MenuBundle\Provider\PHPCRMenuProvider($this, $this->get('symfony_cmf_menu.factory'), 'default', '/cms');
    }

    /**
     * Gets the 'symfony_cmf_routing_extra.content_repository' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Cmf\Bundle\RoutingExtraBundle\Document\ContentRepository A Symfony\Cmf\Bundle\RoutingExtraBundle\Document\ContentRepository instance.
     */
    protected function getSymfonyCmfRoutingExtra_ContentRepositoryService()
    {
        return $this->services['symfony_cmf_routing_extra.content_repository'] = new \Symfony\Cmf\Bundle\RoutingExtraBundle\Document\ContentRepository($this->get('symfony_cmf_routing_extra.manager_registry'));
    }

    /**
     * Gets the 'symfony_cmf_routing_extra.dynamic_router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Cmf\Bundle\RoutingExtraBundle\Routing\DynamicRouter A Symfony\Cmf\Bundle\RoutingExtraBundle\Routing\DynamicRouter instance.
     */
    protected function getSymfonyCmfRoutingExtra_DynamicRouterService()
    {
        $this->services['symfony_cmf_routing_extra.dynamic_router'] = $instance = new \Symfony\Cmf\Bundle\RoutingExtraBundle\Routing\DynamicRouter($this->get('symfony_cmf_routing_extra.route_repository'));

        $instance->setContext($this->get('router.request_context'));
        $instance->setContainer($this);
        $instance->setContentRepository($this->get('symfony_cmf_routing_extra.content_repository'));
        $instance->addControllerMapper($this->get('symfony_cmf_routing_extra.mapper_explicit_template'));

        return $instance;
    }

    /**
     * Gets the 'symfony_cmf_routing_extra.manager_registry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Doctrine\ManagerRegistry A Symfony\Bridge\Doctrine\ManagerRegistry instance.
     */
    protected function getSymfonyCmfRoutingExtra_ManagerRegistryService()
    {
        return $this->services['symfony_cmf_routing_extra.manager_registry'] = $this->get('doctrine_phpcr')->getManager('default');
    }

    /**
     * Gets the 'symfony_cmf_routing_extra.mapper_controllers_by_alias' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Cmf\Component\Routing\Mapper\ControllerAliasMapper A Symfony\Cmf\Component\Routing\Mapper\ControllerAliasMapper instance.
     */
    protected function getSymfonyCmfRoutingExtra_MapperControllersByAliasService()
    {
        return $this->services['symfony_cmf_routing_extra.mapper_controllers_by_alias'] = new \Symfony\Cmf\Component\Routing\Mapper\ControllerAliasMapper(array());
    }

    /**
     * Gets the 'symfony_cmf_routing_extra.mapper_controllers_by_class' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Cmf\Component\Routing\Mapper\ControllerClassMapper A Symfony\Cmf\Component\Routing\Mapper\ControllerClassMapper instance.
     */
    protected function getSymfonyCmfRoutingExtra_MapperControllersByClassService()
    {
        return $this->services['symfony_cmf_routing_extra.mapper_controllers_by_class'] = new \Symfony\Cmf\Component\Routing\Mapper\ControllerClassMapper(array());
    }

    /**
     * Gets the 'symfony_cmf_routing_extra.mapper_explicit_template' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Cmf\Component\Routing\Mapper\ExplicitTemplateMapper A Symfony\Cmf\Component\Routing\Mapper\ExplicitTemplateMapper instance.
     */
    protected function getSymfonyCmfRoutingExtra_MapperExplicitTemplateService()
    {
        return $this->services['symfony_cmf_routing_extra.mapper_explicit_template'] = new \Symfony\Cmf\Component\Routing\Mapper\ExplicitTemplateMapper('symfony_cmf_content.controller:indexAction');
    }

    /**
     * Gets the 'symfony_cmf_routing_extra.mapper_templates_by_class' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Cmf\Component\Routing\Mapper\TemplateClassMapper A Symfony\Cmf\Component\Routing\Mapper\TemplateClassMapper instance.
     */
    protected function getSymfonyCmfRoutingExtra_MapperTemplatesByClassService()
    {
        return $this->services['symfony_cmf_routing_extra.mapper_templates_by_class'] = new \Symfony\Cmf\Component\Routing\Mapper\TemplateClassMapper('symfony_cmf_content.controller:indexAction', array());
    }

    /**
     * Gets the 'symfony_cmf_routing_extra.phpcrodm_route_idprefix_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Cmf\Bundle\RoutingExtraBundle\Listener\IdPrefix A Symfony\Cmf\Bundle\RoutingExtraBundle\Listener\IdPrefix instance.
     */
    protected function getSymfonyCmfRoutingExtra_PhpcrodmRouteIdprefixListenerService()
    {
        return $this->services['symfony_cmf_routing_extra.phpcrodm_route_idprefix_listener'] = new \Symfony\Cmf\Bundle\RoutingExtraBundle\Listener\IdPrefix('/cms/routes');
    }

    /**
     * Gets the 'symfony_cmf_routing_extra.redirect_controller' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Cmf\Bundle\RoutingExtraBundle\Controller\RedirectController A Symfony\Cmf\Bundle\RoutingExtraBundle\Controller\RedirectController instance.
     */
    protected function getSymfonyCmfRoutingExtra_RedirectControllerService()
    {
        return $this->services['symfony_cmf_routing_extra.redirect_controller'] = new \Symfony\Cmf\Bundle\RoutingExtraBundle\Controller\RedirectController($this->get('symfony_cmf_routing_extra.router'));
    }

    /**
     * Gets the 'symfony_cmf_routing_extra.route_repository' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Cmf\Bundle\RoutingExtraBundle\Document\RouteRepository A Symfony\Cmf\Bundle\RoutingExtraBundle\Document\RouteRepository instance.
     */
    protected function getSymfonyCmfRoutingExtra_RouteRepositoryService()
    {
        $this->services['symfony_cmf_routing_extra.route_repository'] = $instance = new \Symfony\Cmf\Bundle\RoutingExtraBundle\Document\RouteRepository($this->get('symfony_cmf_routing_extra.manager_registry'), NULL);

        $instance->setPrefix('/cms/routes');

        return $instance;
    }

    /**
     * Gets the 'symfony_cmf_routing_extra.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Cmf\Component\Routing\ChainRouter A Symfony\Cmf\Component\Routing\ChainRouter instance.
     */
    protected function getSymfonyCmfRoutingExtra_RouterService()
    {
        $a = $this->get('router.request_context');

        $this->services['symfony_cmf_routing_extra.router'] = $instance = new \Symfony\Cmf\Component\Routing\ChainRouter($this->get('logger'));

        $instance->setContext($a);
        $instance->add(new \Symfony\Bundle\FrameworkBundle\Routing\Router($this, '/vagrant/project/app/cache/dev/assetic/routing.yml', array('cache_dir' => '/vagrant/project/app/cache/dev', 'debug' => true, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'appdevUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'appdevUrlMatcher', 'strict_requirements' => true), $a, $this->get('monolog.logger.router')), 100);
        $instance->add($this->get('symfony_cmf_simple_cms.dynamic_router'), 10);

        return $instance;
    }

    /**
     * Gets the 'symfony_cmf_routing_extra.terms_form_type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Cmf\Bundle\RoutingExtraBundle\Form\Type\TermsFormType A Symfony\Cmf\Bundle\RoutingExtraBundle\Form\Type\TermsFormType instance.
     */
    protected function getSymfonyCmfRoutingExtra_TermsFormTypeService()
    {
        return $this->services['symfony_cmf_routing_extra.terms_form_type'] = new \Symfony\Cmf\Bundle\RoutingExtraBundle\Form\Type\TermsFormType($this->get('symfony_cmf_routing_extra.router'));
    }

    /**
     * Gets the 'symfony_cmf_simple_cms.dynamic_router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Cmf\Bundle\RoutingExtraBundle\Routing\DynamicRouter A Symfony\Cmf\Bundle\RoutingExtraBundle\Routing\DynamicRouter instance.
     */
    protected function getSymfonyCmfSimpleCms_DynamicRouterService()
    {
        $this->services['symfony_cmf_simple_cms.dynamic_router'] = $instance = new \Symfony\Cmf\Bundle\RoutingExtraBundle\Routing\DynamicRouter($this->get('symfony_cmf_simple_cms.multilang_route_repository'));

        $instance->setContext($this->get('router.request_context'));
        $instance->setContainer($this);
        $instance->addControllerMapper($this->get('symfony_cmf_simple_cms.mapper_templates_by_class'));
        $instance->setContentRepository($this->get('symfony_cmf_routing_extra.content_repository'));

        return $instance;
    }

    /**
     * Gets the 'symfony_cmf_simple_cms.mapper_controllers_by_class' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Cmf\Component\Routing\Mapper\ControllerClassMapper A Symfony\Cmf\Component\Routing\Mapper\ControllerClassMapper instance.
     */
    protected function getSymfonyCmfSimpleCms_MapperControllersByClassService()
    {
        return $this->services['symfony_cmf_simple_cms.mapper_controllers_by_class'] = new \Symfony\Cmf\Component\Routing\Mapper\ControllerClassMapper(array());
    }

    /**
     * Gets the 'symfony_cmf_simple_cms.mapper_templates_by_class' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Cmf\Component\Routing\Mapper\TemplateClassMapper A Symfony\Cmf\Component\Routing\Mapper\TemplateClassMapper instance.
     */
    protected function getSymfonyCmfSimpleCms_MapperTemplatesByClassService()
    {
        return $this->services['symfony_cmf_simple_cms.mapper_templates_by_class'] = new \Symfony\Cmf\Component\Routing\Mapper\TemplateClassMapper('symfony_cmf_content.controller:indexAction', array('Symfony\\Cmf\\Bundle\\SimpleCmsBundle\\Document\\Page' => 'SymfonyCmfSimpleCmsBundle:Page:index.html.twig'));
    }

    /**
     * Gets the 'symfony_cmf_simple_cms.menu_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Cmf\Bundle\MenuBundle\Provider\PHPCRMenuProvider A Symfony\Cmf\Bundle\MenuBundle\Provider\PHPCRMenuProvider instance.
     */
    protected function getSymfonyCmfSimpleCms_MenuProviderService()
    {
        return $this->services['symfony_cmf_simple_cms.menu_provider'] = new \Symfony\Cmf\Bundle\MenuBundle\Provider\PHPCRMenuProvider($this, $this->get('symfony_cmf_menu.factory'), 'default', '/cms/simple');
    }

    /**
     * Gets the 'symfony_cmf_simple_cms.multilang_route_repository' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Cmf\Bundle\SimpleCmsBundle\Document\MultilangRouteRepository A Symfony\Cmf\Bundle\SimpleCmsBundle\Document\MultilangRouteRepository instance.
     */
    protected function getSymfonyCmfSimpleCms_MultilangRouteRepositoryService()
    {
        $this->services['symfony_cmf_simple_cms.multilang_route_repository'] = $instance = new \Symfony\Cmf\Bundle\SimpleCmsBundle\Document\MultilangRouteRepository($this->get('symfony_cmf_routing_extra.manager_registry'), NULL, array(0 => 'en', 1 => 'de'));

        $instance->setPrefix('/cms/simple');

        return $instance;
    }

    /**
     * Gets the 'symfony_cmf_simple_cms.phpcrodm_route_idprefix_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Cmf\Bundle\RoutingExtraBundle\Listener\IdPrefix A Symfony\Cmf\Bundle\RoutingExtraBundle\Listener\IdPrefix instance.
     */
    protected function getSymfonyCmfSimpleCms_PhpcrodmRouteIdprefixListenerService()
    {
        return $this->services['symfony_cmf_simple_cms.phpcrodm_route_idprefix_listener'] = new \Symfony\Cmf\Bundle\RoutingExtraBundle\Listener\IdPrefix('/cms/simple');
    }

    /**
     * Gets the 'templating' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\TwigBundle\Debug\TimedTwigEngine A Symfony\Bundle\TwigBundle\Debug\TimedTwigEngine instance.
     */
    protected function getTemplatingService()
    {
        $this->services['templating'] = $instance = new \Symfony\Bundle\TwigBundle\Debug\TimedTwigEngine($this->get('twig'), $this->get('templating.name_parser'), $this->get('templating.locator'), $this->get('debug.stopwatch'), $this->get('templating.globals'));

        $instance->setDefaultEscapingStrategy(array(0 => $instance, 1 => 'guessDefaultEscapingStrategy'));

        return $instance;
    }

    /**
     * Gets the 'templating.asset.package_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Asset\PackageFactory A Symfony\Bundle\FrameworkBundle\Templating\Asset\PackageFactory instance.
     */
    protected function getTemplating_Asset_PackageFactoryService()
    {
        return $this->services['templating.asset.package_factory'] = new \Symfony\Bundle\FrameworkBundle\Templating\Asset\PackageFactory($this);
    }

    /**
     * Gets the 'templating.filename_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser A Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser instance.
     */
    protected function getTemplating_FilenameParserService()
    {
        return $this->services['templating.filename_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser();
    }

    /**
     * Gets the 'templating.globals' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\GlobalVariables A Symfony\Bundle\FrameworkBundle\Templating\GlobalVariables instance.
     */
    protected function getTemplating_GlobalsService()
    {
        return $this->services['templating.globals'] = new \Symfony\Bundle\FrameworkBundle\Templating\GlobalVariables($this);
    }

    /**
     * Gets the 'templating.helper.actions' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Helper\ActionsHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\ActionsHelper instance.
     */
    protected function getTemplating_Helper_ActionsService()
    {
        return $this->services['templating.helper.actions'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\ActionsHelper($this->get('http_kernel'));
    }

    /**
     * Gets the 'templating.helper.assets' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Templating\Helper\CoreAssetsHelper A Symfony\Component\Templating\Helper\CoreAssetsHelper instance.
     */
    protected function getTemplating_Helper_AssetsService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('templating.helper.assets', 'request');
        }

        return $this->services['templating.helper.assets'] = $this->scopedServices['request']['templating.helper.assets'] = new \Symfony\Component\Templating\Helper\CoreAssetsHelper(new \Symfony\Bundle\FrameworkBundle\Templating\Asset\PathPackage($this->get('request'), NULL, '%s?%s'), array());
    }

    /**
     * Gets the 'templating.helper.code' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Helper\CodeHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\CodeHelper instance.
     */
    protected function getTemplating_Helper_CodeService()
    {
        return $this->services['templating.helper.code'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\CodeHelper(NULL, '/vagrant/project/app', 'UTF-8');
    }

    /**
     * Gets the 'templating.helper.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Helper\FormHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\FormHelper instance.
     */
    protected function getTemplating_Helper_FormService()
    {
        $a = new \Symfony\Bundle\FrameworkBundle\Templating\PhpEngine($this->get('templating.name_parser'), $this, $this->get('templating.loader'), $this->get('templating.globals'));
        $a->setCharset('UTF-8');
        $a->setHelpers(array('slots' => 'templating.helper.slots', 'assets' => 'templating.helper.assets', 'request' => 'templating.helper.request', 'session' => 'templating.helper.session', 'router' => 'templating.helper.router', 'actions' => 'templating.helper.actions', 'code' => 'templating.helper.code', 'translator' => 'templating.helper.translator', 'form' => 'templating.helper.form', 'assetic' => 'assetic.helper.dynamic', 'switch' => 'lunetics_locale.switcher_helper'));

        return $this->services['templating.helper.form'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\FormHelper(new \Symfony\Component\Form\FormRenderer(new \Symfony\Component\Form\Extension\Templating\TemplatingRendererEngine($a, array(0 => 'FrameworkBundle:Form')), NULL));
    }

    /**
     * Gets the 'templating.helper.request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Helper\RequestHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\RequestHelper instance.
     */
    protected function getTemplating_Helper_RequestService()
    {
        return $this->services['templating.helper.request'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\RequestHelper($this->get('request'));
    }

    /**
     * Gets the 'templating.helper.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper instance.
     */
    protected function getTemplating_Helper_RouterService()
    {
        return $this->services['templating.helper.router'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper($this->get('symfony_cmf_routing_extra.router'));
    }

    /**
     * Gets the 'templating.helper.session' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Helper\SessionHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\SessionHelper instance.
     */
    protected function getTemplating_Helper_SessionService()
    {
        return $this->services['templating.helper.session'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\SessionHelper($this->get('request'));
    }

    /**
     * Gets the 'templating.helper.slots' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Templating\Helper\SlotsHelper A Symfony\Component\Templating\Helper\SlotsHelper instance.
     */
    protected function getTemplating_Helper_SlotsService()
    {
        return $this->services['templating.helper.slots'] = new \Symfony\Component\Templating\Helper\SlotsHelper();
    }

    /**
     * Gets the 'templating.helper.translator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Helper\TranslatorHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\TranslatorHelper instance.
     */
    protected function getTemplating_Helper_TranslatorService()
    {
        return $this->services['templating.helper.translator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\TranslatorHelper($this->get('translator.default'));
    }

    /**
     * Gets the 'templating.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader A Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader instance.
     */
    protected function getTemplating_LoaderService()
    {
        return $this->services['templating.loader'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader($this->get('templating.locator'));
    }

    /**
     * Gets the 'templating.name_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser A Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser instance.
     */
    protected function getTemplating_NameParserService()
    {
        return $this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser($this->get('kernel'));
    }

    /**
     * Gets the 'translation.dumper.csv' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Dumper\CsvFileDumper A Symfony\Component\Translation\Dumper\CsvFileDumper instance.
     */
    protected function getTranslation_Dumper_CsvService()
    {
        return $this->services['translation.dumper.csv'] = new \Symfony\Component\Translation\Dumper\CsvFileDumper();
    }

    /**
     * Gets the 'translation.dumper.ini' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Dumper\IniFileDumper A Symfony\Component\Translation\Dumper\IniFileDumper instance.
     */
    protected function getTranslation_Dumper_IniService()
    {
        return $this->services['translation.dumper.ini'] = new \Symfony\Component\Translation\Dumper\IniFileDumper();
    }

    /**
     * Gets the 'translation.dumper.mo' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Dumper\MoFileDumper A Symfony\Component\Translation\Dumper\MoFileDumper instance.
     */
    protected function getTranslation_Dumper_MoService()
    {
        return $this->services['translation.dumper.mo'] = new \Symfony\Component\Translation\Dumper\MoFileDumper();
    }

    /**
     * Gets the 'translation.dumper.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Dumper\PhpFileDumper A Symfony\Component\Translation\Dumper\PhpFileDumper instance.
     */
    protected function getTranslation_Dumper_PhpService()
    {
        return $this->services['translation.dumper.php'] = new \Symfony\Component\Translation\Dumper\PhpFileDumper();
    }

    /**
     * Gets the 'translation.dumper.po' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Dumper\PoFileDumper A Symfony\Component\Translation\Dumper\PoFileDumper instance.
     */
    protected function getTranslation_Dumper_PoService()
    {
        return $this->services['translation.dumper.po'] = new \Symfony\Component\Translation\Dumper\PoFileDumper();
    }

    /**
     * Gets the 'translation.dumper.qt' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Dumper\QtFileDumper A Symfony\Component\Translation\Dumper\QtFileDumper instance.
     */
    protected function getTranslation_Dumper_QtService()
    {
        return $this->services['translation.dumper.qt'] = new \Symfony\Component\Translation\Dumper\QtFileDumper();
    }

    /**
     * Gets the 'translation.dumper.res' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Dumper\IcuResFileDumper A Symfony\Component\Translation\Dumper\IcuResFileDumper instance.
     */
    protected function getTranslation_Dumper_ResService()
    {
        return $this->services['translation.dumper.res'] = new \Symfony\Component\Translation\Dumper\IcuResFileDumper();
    }

    /**
     * Gets the 'translation.dumper.xliff' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Dumper\XliffFileDumper A Symfony\Component\Translation\Dumper\XliffFileDumper instance.
     */
    protected function getTranslation_Dumper_XliffService()
    {
        return $this->services['translation.dumper.xliff'] = new \Symfony\Component\Translation\Dumper\XliffFileDumper();
    }

    /**
     * Gets the 'translation.dumper.yml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Dumper\YamlFileDumper A Symfony\Component\Translation\Dumper\YamlFileDumper instance.
     */
    protected function getTranslation_Dumper_YmlService()
    {
        return $this->services['translation.dumper.yml'] = new \Symfony\Component\Translation\Dumper\YamlFileDumper();
    }

    /**
     * Gets the 'translation.extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Extractor\ChainExtractor A Symfony\Component\Translation\Extractor\ChainExtractor instance.
     */
    protected function getTranslation_ExtractorService()
    {
        $this->services['translation.extractor'] = $instance = new \Symfony\Component\Translation\Extractor\ChainExtractor();

        $instance->addExtractor('php', $this->get('translation.extractor.php'));
        $instance->addExtractor('twig', $this->get('twig.translation.extractor'));

        return $instance;
    }

    /**
     * Gets the 'translation.extractor.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor A Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor instance.
     */
    protected function getTranslation_Extractor_PhpService()
    {
        return $this->services['translation.extractor.php'] = new \Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor();
    }

    /**
     * Gets the 'translation.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader A Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader instance.
     */
    protected function getTranslation_LoaderService()
    {
        $a = $this->get('translation.loader.xliff');

        $this->services['translation.loader'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader();

        $instance->addLoader('php', $this->get('translation.loader.php'));
        $instance->addLoader('yml', $this->get('translation.loader.yml'));
        $instance->addLoader('xlf', $a);
        $instance->addLoader('xliff', $a);
        $instance->addLoader('po', $this->get('translation.loader.po'));
        $instance->addLoader('mo', $this->get('translation.loader.mo'));
        $instance->addLoader('ts', $this->get('translation.loader.qt'));
        $instance->addLoader('csv', $this->get('translation.loader.csv'));
        $instance->addLoader('res', $this->get('translation.loader.res'));
        $instance->addLoader('dat', $this->get('translation.loader.dat'));
        $instance->addLoader('ini', $this->get('translation.loader.ini'));

        return $instance;
    }

    /**
     * Gets the 'translation.loader.csv' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Loader\CsvFileLoader A Symfony\Component\Translation\Loader\CsvFileLoader instance.
     */
    protected function getTranslation_Loader_CsvService()
    {
        return $this->services['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader();
    }

    /**
     * Gets the 'translation.loader.dat' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Loader\IcuResFileLoader A Symfony\Component\Translation\Loader\IcuResFileLoader instance.
     */
    protected function getTranslation_Loader_DatService()
    {
        return $this->services['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader();
    }

    /**
     * Gets the 'translation.loader.ini' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Loader\IniFileLoader A Symfony\Component\Translation\Loader\IniFileLoader instance.
     */
    protected function getTranslation_Loader_IniService()
    {
        return $this->services['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader();
    }

    /**
     * Gets the 'translation.loader.mo' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Loader\MoFileLoader A Symfony\Component\Translation\Loader\MoFileLoader instance.
     */
    protected function getTranslation_Loader_MoService()
    {
        return $this->services['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader();
    }

    /**
     * Gets the 'translation.loader.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Loader\PhpFileLoader A Symfony\Component\Translation\Loader\PhpFileLoader instance.
     */
    protected function getTranslation_Loader_PhpService()
    {
        return $this->services['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader();
    }

    /**
     * Gets the 'translation.loader.po' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Loader\PoFileLoader A Symfony\Component\Translation\Loader\PoFileLoader instance.
     */
    protected function getTranslation_Loader_PoService()
    {
        return $this->services['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader();
    }

    /**
     * Gets the 'translation.loader.qt' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Loader\QtTranslationsLoader A Symfony\Component\Translation\Loader\QtTranslationsLoader instance.
     */
    protected function getTranslation_Loader_QtService()
    {
        return $this->services['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtTranslationsLoader();
    }

    /**
     * Gets the 'translation.loader.res' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Loader\IcuResFileLoader A Symfony\Component\Translation\Loader\IcuResFileLoader instance.
     */
    protected function getTranslation_Loader_ResService()
    {
        return $this->services['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader();
    }

    /**
     * Gets the 'translation.loader.xliff' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Loader\XliffFileLoader A Symfony\Component\Translation\Loader\XliffFileLoader instance.
     */
    protected function getTranslation_Loader_XliffService()
    {
        return $this->services['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader();
    }

    /**
     * Gets the 'translation.loader.yml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Loader\YamlFileLoader A Symfony\Component\Translation\Loader\YamlFileLoader instance.
     */
    protected function getTranslation_Loader_YmlService()
    {
        return $this->services['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader();
    }

    /**
     * Gets the 'translation.writer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Writer\TranslationWriter A Symfony\Component\Translation\Writer\TranslationWriter instance.
     */
    protected function getTranslation_WriterService()
    {
        $this->services['translation.writer'] = $instance = new \Symfony\Component\Translation\Writer\TranslationWriter();

        $instance->addDumper('php', $this->get('translation.dumper.php'));
        $instance->addDumper('xlf', $this->get('translation.dumper.xliff'));
        $instance->addDumper('po', $this->get('translation.dumper.po'));
        $instance->addDumper('mo', $this->get('translation.dumper.mo'));
        $instance->addDumper('yml', $this->get('translation.dumper.yml'));
        $instance->addDumper('ts', $this->get('translation.dumper.qt'));
        $instance->addDumper('csv', $this->get('translation.dumper.csv'));
        $instance->addDumper('ini', $this->get('translation.dumper.ini'));
        $instance->addDumper('res', $this->get('translation.dumper.res'));

        return $instance;
    }

    /**
     * Gets the 'translator.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Translation\Translator A Symfony\Bundle\FrameworkBundle\Translation\Translator instance.
     */
    protected function getTranslator_DefaultService()
    {
        $this->services['translator.default'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator($this, new \Symfony\Component\Translation\MessageSelector(), array('translation.loader.php' => array(0 => 'php'), 'translation.loader.yml' => array(0 => 'yml'), 'translation.loader.xliff' => array(0 => 'xlf', 1 => 'xliff'), 'translation.loader.po' => array(0 => 'po'), 'translation.loader.mo' => array(0 => 'mo'), 'translation.loader.qt' => array(0 => 'ts'), 'translation.loader.csv' => array(0 => 'csv'), 'translation.loader.res' => array(0 => 'res'), 'translation.loader.dat' => array(0 => 'dat'), 'translation.loader.ini' => array(0 => 'ini')), array('cache_dir' => '/vagrant/project/app/cache/dev/translations', 'debug' => true));

        $instance->setFallbackLocale('en');
        $instance->addResource('xlf', '/vagrant/project/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nb.xlf', 'nb', 'validators');
        $instance->addResource('xlf', '/vagrant/project/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.en.xlf', 'en', 'validators');
        $instance->addResource('xlf', '/vagrant/project/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.bg.xlf', 'bg', 'validators');
        $instance->addResource('xlf', '/vagrant/project/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hr.xlf', 'hr', 'validators');
        $instance->addResource('xlf', '/vagrant/project/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.es.xlf', 'es', 'validators');
        $instance->addResource('xlf', '/vagrant/project/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.he.xlf', 'he', 'validators');
        $instance->addResource('xlf', '/vagrant/project/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ru.xlf', 'ru', 'validators');
        $instance->addResource('xlf', '/vagrant/project/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sl.xlf', 'sl', 'validators');
        $instance->addResource('xlf', '/vagrant/project/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hu.xlf', 'hu', 'validators');
        $instance->addResource('xlf', '/vagrant/project/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.mn.xlf', 'mn', 'validators');
        $instance->addResource('xlf', '/vagrant/project/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sv.xlf', 'sv', 'validators');
        $instance->addResource('xlf', '/vagrant/project/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fa.xlf', 'fa', 'validators');
        $instance->addResource('xlf', '/vagrant/project/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ca.xlf', 'ca', 'validators');
        $instance->addResource('xlf', '/vagrant/project/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fr.xlf', 'fr', 'validators');
        $instance->addResource('xlf', '/vagrant/project/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fi.xlf', 'fi', 'validators');
        $instance->addResource('xlf', '/vagrant/project/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.eu.xlf', 'eu', 'validators');
        $instance->addResource('xlf', '/vagrant/project/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lt.xlf', 'lt', 'validators');
        $instance->addResource('xlf', '/vagrant/project/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.de.xlf', 'de', 'validators');
        $instance->addResource('xlf', '/vagrant/project/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sk.xlf', 'sk', 'validators');
        $instance->addResource('xlf', '/vagrant/project/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pl.xlf', 'pl', 'validators');
        $instance->addResource('xlf', '/vagrant/project/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.id.xlf', 'id', 'validators');
        $instance->addResource('xlf', '/vagrant/project/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pt.xlf', 'pt', 'validators');
        $instance->addResource('xlf', '/vagrant/project/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ja.xlf', 'ja', 'validators');
        $instance->addResource('xlf', '/vagrant/project/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.da.xlf', 'da', 'validators');
        $instance->addResource('xlf', '/vagrant/project/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nl.xlf', 'nl', 'validators');
        $instance->addResource('xlf', '/vagrant/project/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.et.xlf', 'et', 'validators');
        $instance->addResource('xlf', '/vagrant/project/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pt_BR.xlf', 'pt_BR', 'validators');
        $instance->addResource('xlf', '/vagrant/project/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ro.xlf', 'ro', 'validators');
        $instance->addResource('xlf', '/vagrant/project/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.zh_CN.xlf', 'zh_CN', 'validators');
        $instance->addResource('xlf', '/vagrant/project/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.it.xlf', 'it', 'validators');
        $instance->addResource('xlf', '/vagrant/project/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hy.xlf', 'hy', 'validators');
        $instance->addResource('xlf', '/vagrant/project/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ua.xlf', 'ua', 'validators');
        $instance->addResource('xlf', '/vagrant/project/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.cs.xlf', 'cs', 'validators');
        $instance->addResource('xlf', '/vagrant/project/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lb.xlf', 'lb', 'validators');
        $instance->addResource('xlf', '/vagrant/project/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sr_Latn.xlf', 'sr_Latn', 'validators');
        $instance->addResource('xlf', '/vagrant/project/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sr_Cyrl.xlf', 'sr_Cyrl', 'validators');
        $instance->addResource('xlf', '/vagrant/project/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.nb.xlf', 'nb', 'validators');
        $instance->addResource('xlf', '/vagrant/project/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.en.xlf', 'en', 'validators');
        $instance->addResource('xlf', '/vagrant/project/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hr.xlf', 'hr', 'validators');
        $instance->addResource('xlf', '/vagrant/project/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.es.xlf', 'es', 'validators');
        $instance->addResource('xlf', '/vagrant/project/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.he.xlf', 'he', 'validators');
        $instance->addResource('xlf', '/vagrant/project/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ru.xlf', 'ru', 'validators');
        $instance->addResource('xlf', '/vagrant/project/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sl.xlf', 'sl', 'validators');
        $instance->addResource('xlf', '/vagrant/project/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hu.xlf', 'hu', 'validators');
        $instance->addResource('xlf', '/vagrant/project/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.mn.xlf', 'mn', 'validators');
        $instance->addResource('xlf', '/vagrant/project/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sv.xlf', 'sv', 'validators');
        $instance->addResource('xlf', '/vagrant/project/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fa.xlf', 'fa', 'validators');
        $instance->addResource('xlf', '/vagrant/project/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ca.xlf', 'ca', 'validators');
        $instance->addResource('xlf', '/vagrant/project/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fr.xlf', 'fr', 'validators');
        $instance->addResource('xlf', '/vagrant/project/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fi.xlf', 'fi', 'validators');
        $instance->addResource('xlf', '/vagrant/project/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.eu.xlf', 'eu', 'validators');
        $instance->addResource('xlf', '/vagrant/project/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lt.xlf', 'lt', 'validators');
        $instance->addResource('xlf', '/vagrant/project/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.de.xlf', 'de', 'validators');
        $instance->addResource('xlf', '/vagrant/project/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sk.xlf', 'sk', 'validators');
        $instance->addResource('xlf', '/vagrant/project/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pl.xlf', 'pl', 'validators');
        $instance->addResource('xlf', '/vagrant/project/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.id.xlf', 'id', 'validators');
        $instance->addResource('xlf', '/vagrant/project/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pt.xlf', 'pt', 'validators');
        $instance->addResource('xlf', '/vagrant/project/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ja.xlf', 'ja', 'validators');
        $instance->addResource('xlf', '/vagrant/project/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.da.xlf', 'da', 'validators');
        $instance->addResource('xlf', '/vagrant/project/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.nl.xlf', 'nl', 'validators');
        $instance->addResource('xlf', '/vagrant/project/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.et.xlf', 'et', 'validators');
        $instance->addResource('xlf', '/vagrant/project/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pt_BR.xlf', 'pt_BR', 'validators');
        $instance->addResource('xlf', '/vagrant/project/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ro.xlf', 'ro', 'validators');
        $instance->addResource('xlf', '/vagrant/project/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.zh_CN.xlf', 'zh_CN', 'validators');
        $instance->addResource('xlf', '/vagrant/project/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.it.xlf', 'it', 'validators');
        $instance->addResource('xlf', '/vagrant/project/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hy.xlf', 'hy', 'validators');
        $instance->addResource('xlf', '/vagrant/project/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ua.xlf', 'ua', 'validators');
        $instance->addResource('xlf', '/vagrant/project/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.cs.xlf', 'cs', 'validators');
        $instance->addResource('xlf', '/vagrant/project/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lb.xlf', 'lb', 'validators');
        $instance->addResource('xlf', '/vagrant/project/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sr_Latn.xlf', 'sr_Latn', 'validators');
        $instance->addResource('xlf', '/vagrant/project/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sr_Cyrl.xlf', 'sr_Cyrl', 'validators');

        return $instance;
    }

    /**
     * Gets the 'twig' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Twig_Environment A Twig_Environment instance.
     */
    protected function getTwigService()
    {
        $this->services['twig'] = $instance = new \Twig_Environment($this->get('twig.loader'), array('debug' => true, 'strict_variables' => true, 'exception_controller' => 'Symfony\\Bundle\\TwigBundle\\Controller\\ExceptionController::showAction', 'cache' => '/vagrant/project/app/cache/dev/twig', 'charset' => 'UTF-8', 'paths' => array()));

        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension($this->get('translator.default')));
        $instance->addExtension(new \Symfony\Bundle\TwigBundle\Extension\AssetsExtension($this));
        $instance->addExtension(new \Symfony\Bundle\TwigBundle\Extension\ActionsExtension($this));
        $instance->addExtension(new \Symfony\Bundle\TwigBundle\Extension\CodeExtension($this));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension($this->get('symfony_cmf_routing_extra.router')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension(new \Symfony\Bridge\Twig\Form\TwigRenderer(new \Symfony\Bridge\Twig\Form\TwigRendererEngine(array(0 => 'SymfonyCmfRoutingExtraBundle:Form:terms_form_type.html.twig', 1 => 'form_div_layout.html.twig')), NULL)));
        $instance->addExtension(new \Twig_Extension_Debug());
        $instance->addExtension(new \Symfony\Bundle\AsseticBundle\Twig\AsseticExtension($this->get('assetic.asset_factory'), $this->get('templating.name_parser'), true, array(), array(0 => 'FrameworkBundle', 1 => 'TwigBundle', 2 => 'MonologBundle', 3 => 'AsseticBundle', 4 => 'DoctrineBundle', 5 => 'DoctrinePHPCRBundle', 6 => 'LiipDoctrineCacheBundle', 7 => 'KnpMenuBundle', 8 => 'LuneticsLocaleBundle', 9 => 'FOSRestBundle', 10 => 'JMSSerializerBundle', 11 => 'SymfonyCmfRoutingExtraBundle', 12 => 'SymfonyCmfCoreBundle', 13 => 'SymfonyCmfMenuBundle', 14 => 'SymfonyCmfContentBundle', 15 => 'SymfonyCmfSimpleCmsBundle', 16 => 'SymfonyCmfCreateBundle', 17 => 'AcmeMainBundle', 18 => 'WebProfilerBundle', 19 => 'SensioDistributionBundle'), $this->get('assetic.value_supplier.default')));
        $instance->addExtension(new \Knp\Menu\Twig\MenuExtension(new \Knp\Menu\Twig\Helper($this->get('knp_menu.renderer_provider'), $this->get('knp_menu.menu_provider'))));
        $instance->addExtension($this->get('lunetics_locale.twig.switcher'));
        $instance->addExtension(new \JMS\SerializerBundle\Twig\SerializerExtension($this->get('fos_rest.serializer')));
        $instance->addExtension($this->get('symfony_cmf_core.twig.children_extension'));
        $instance->addExtension($this->get('symfony_cmf_create.twig_extension'));

        return $instance;
    }

    /**
     * Gets the 'twig.exception_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\EventListener\ExceptionListener A Symfony\Component\HttpKernel\EventListener\ExceptionListener instance.
     */
    protected function getTwig_ExceptionListenerService()
    {
        return $this->services['twig.exception_listener'] = new \Symfony\Component\HttpKernel\EventListener\ExceptionListener('Symfony\\Bundle\\TwigBundle\\Controller\\ExceptionController::showAction', $this->get('monolog.logger.request'));
    }

    /**
     * Gets the 'twig.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\TwigBundle\Loader\FilesystemLoader A Symfony\Bundle\TwigBundle\Loader\FilesystemLoader instance.
     */
    protected function getTwig_LoaderService()
    {
        $this->services['twig.loader'] = $instance = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader($this->get('templating.locator'), $this->get('templating.name_parser'));

        $instance->addPath('/vagrant/project/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form');
        $instance->addPath('/vagrant/project/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views');

        return $instance;
    }

    /**
     * Gets the 'twig.translation.extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Twig\Translation\TwigExtractor A Symfony\Bridge\Twig\Translation\TwigExtractor instance.
     */
    protected function getTwig_Translation_ExtractorService()
    {
        return $this->services['twig.translation.extractor'] = new \Symfony\Bridge\Twig\Translation\TwigExtractor($this->get('twig'));
    }

    /**
     * Gets the 'validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Validator\Validator A Symfony\Component\Validator\Validator instance.
     */
    protected function getValidatorService()
    {
        return $this->services['validator'] = new \Symfony\Component\Validator\Validator($this->get('validator.mapping.class_metadata_factory'), new \Symfony\Bundle\FrameworkBundle\Validator\ConstraintValidatorFactory($this, array('lunetics_locale.validator.locale' => 'validator.lunetics_locale.locale', 'lunetics_locale.validator.locale_allowed' => 'validator.lunetics_locale.locale_allowed')), array());
    }

    /**
     * Gets the 'validator.lunetics_locale.locale' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Lunetics\LocaleBundle\Validator\LocaleValidator A Lunetics\LocaleBundle\Validator\LocaleValidator instance.
     */
    protected function getValidator_LuneticsLocale_LocaleService()
    {
        return $this->services['validator.lunetics_locale.locale'] = new \Lunetics\LocaleBundle\Validator\LocaleValidator(true, array(), array(), array());
    }

    /**
     * Gets the 'validator.lunetics_locale.locale_allowed' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Lunetics\LocaleBundle\Validator\LocaleAllowedValidator A Lunetics\LocaleBundle\Validator\LocaleAllowedValidator instance.
     */
    protected function getValidator_LuneticsLocale_LocaleAllowedService()
    {
        return $this->services['validator.lunetics_locale.locale_allowed'] = new \Lunetics\LocaleBundle\Validator\LocaleAllowedValidator(array(0 => 'en', 1 => 'de'), true, true);
    }

    /**
     * Gets the 'web_profiler.debug_toolbar' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener A Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener instance.
     */
    protected function getWebProfiler_DebugToolbarService()
    {
        return $this->services['web_profiler.debug_toolbar'] = new \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener($this->get('templating'), false, 2, 'bottom');
    }

    /**
     * Gets the database_connection service alias.
     *
     * @return stdClass An instance of the doctrine.dbal.default_connection service
     */
    protected function getDatabaseConnectionService()
    {
        return $this->get('doctrine.dbal.default_connection');
    }

    /**
     * Gets the debug.controller_resolver service alias.
     *
     * @return Symfony\Bundle\FrameworkBundle\Controller\TraceableControllerResolver An instance of the controller_resolver service
     */
    protected function getDebug_ControllerResolverService()
    {
        return $this->get('controller_resolver');
    }

    /**
     * Gets the debug.event_dispatcher service alias.
     *
     * @return Symfony\Component\HttpKernel\Debug\ContainerAwareTraceableEventDispatcher An instance of the event_dispatcher service
     */
    protected function getDebug_EventDispatcherService()
    {
        return $this->get('event_dispatcher');
    }

    /**
     * Gets the debug.templating.engine.twig service alias.
     *
     * @return Symfony\Bundle\TwigBundle\Debug\TimedTwigEngine An instance of the templating service
     */
    protected function getDebug_Templating_Engine_TwigService()
    {
        return $this->get('templating');
    }

    /**
     * Gets the doctrine_phpcr.odm.document_manager service alias.
     *
     * @return Doctrine\ODM\PHPCR\DocumentManager An instance of the doctrine_phpcr.odm.default_document_manager service
     */
    protected function getDoctrinePhpcr_Odm_DocumentManagerService()
    {
        return $this->get('doctrine_phpcr.odm.default_document_manager');
    }

    /**
     * Gets the doctrine_phpcr.session service alias.
     *
     * @return Jackalope\Session An instance of the doctrine_phpcr.default_session service
     */
    protected function getDoctrinePhpcr_SessionService()
    {
        return $this->get('doctrine_phpcr.default_session');
    }

    /**
     * Gets the fos_rest.router service alias.
     *
     * @return Symfony\Cmf\Component\Routing\ChainRouter An instance of the symfony_cmf_routing_extra.router service
     */
    protected function getFosRest_RouterService()
    {
        return $this->get('symfony_cmf_routing_extra.router');
    }

    /**
     * Gets the fos_rest.templating service alias.
     *
     * @return Symfony\Bundle\TwigBundle\Debug\TimedTwigEngine An instance of the templating service
     */
    protected function getFosRest_TemplatingService()
    {
        return $this->get('templating');
    }

    /**
     * Gets the router service alias.
     *
     * @return Symfony\Cmf\Component\Routing\ChainRouter An instance of the symfony_cmf_routing_extra.router service
     */
    protected function getRouterService()
    {
        return $this->get('symfony_cmf_routing_extra.router');
    }

    /**
     * Gets the serializer service alias.
     *
     * @return JMS\SerializerBundle\Serializer\LazyLoadingSerializer An instance of the fos_rest.serializer service
     */
    protected function getSerializerService()
    {
        return $this->get('fos_rest.serializer');
    }

    /**
     * Gets the session.storage service alias.
     *
     * @return Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage An instance of the session.storage.native service
     */
    protected function getSession_StorageService()
    {
        return $this->get('session.storage.native');
    }

    /**
     * Gets the symfony_cmf_simple_cms.route_repository service alias.
     *
     * @return Symfony\Cmf\Bundle\SimpleCmsBundle\Document\MultilangRouteRepository An instance of the symfony_cmf_simple_cms.multilang_route_repository service
     */
    protected function getSymfonyCmfSimpleCms_RouteRepositoryService()
    {
        return $this->get('symfony_cmf_simple_cms.multilang_route_repository');
    }

    /**
     * Gets the translator service alias.
     *
     * @return Symfony\Bundle\FrameworkBundle\Translation\Translator An instance of the translator.default service
     */
    protected function getTranslatorService()
    {
        return $this->get('translator.default');
    }

    /**
     * Gets the 'assetic.asset_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Bundle\AsseticBundle\Factory\AssetFactory A Symfony\Bundle\AsseticBundle\Factory\AssetFactory instance.
     */
    protected function getAssetic_AssetFactoryService()
    {
        $this->services['assetic.asset_factory'] = $instance = new \Symfony\Bundle\AsseticBundle\Factory\AssetFactory($this->get('kernel'), $this, $this->getParameterBag(), '/vagrant/project/app/../web', true);

        $instance->addWorker(new \Symfony\Bundle\AsseticBundle\Factory\Worker\UseControllerWorker());

        return $instance;
    }

    /**
     * Gets the 'assetic.cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Assetic\Cache\FilesystemCache A Assetic\Cache\FilesystemCache instance.
     */
    protected function getAssetic_CacheService()
    {
        return $this->services['assetic.cache'] = new \Assetic\Cache\FilesystemCache('/vagrant/project/app/cache/dev/assetic/assets');
    }

    /**
     * Gets the 'assetic.value_supplier.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Bundle\AsseticBundle\DefaultValueSupplier A Symfony\Bundle\AsseticBundle\DefaultValueSupplier instance.
     */
    protected function getAssetic_ValueSupplier_DefaultService()
    {
        return $this->services['assetic.value_supplier.default'] = new \Symfony\Bundle\AsseticBundle\DefaultValueSupplier($this);
    }

    /**
     * Gets the 'controller_name_converter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser A Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser instance.
     */
    protected function getControllerNameConverterService()
    {
        return $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser($this->get('kernel'));
    }

    /**
     * Gets the 'doctrine.dbal.logger.profiling.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Doctrine\DBAL\Logging\DebugStack A Doctrine\DBAL\Logging\DebugStack instance.
     */
    protected function getDoctrine_Dbal_Logger_Profiling_DefaultService()
    {
        return $this->services['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack();
    }

    /**
     * Gets the 'jms_serializer.array_collection_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return JMS\SerializerBundle\Serializer\Handler\ArrayCollectionHandler A JMS\SerializerBundle\Serializer\Handler\ArrayCollectionHandler instance.
     */
    protected function getJmsSerializer_ArrayCollectionHandlerService()
    {
        return $this->services['jms_serializer.array_collection_handler'] = new \JMS\SerializerBundle\Serializer\Handler\ArrayCollectionHandler();
    }

    /**
     * Gets the 'jms_serializer.constraint_violation_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return JMS\SerializerBundle\Serializer\Handler\ConstraintViolationHandler A JMS\SerializerBundle\Serializer\Handler\ConstraintViolationHandler instance.
     */
    protected function getJmsSerializer_ConstraintViolationHandlerService()
    {
        return $this->services['jms_serializer.constraint_violation_handler'] = new \JMS\SerializerBundle\Serializer\Handler\ConstraintViolationHandler();
    }

    /**
     * Gets the 'jms_serializer.datetime_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return JMS\SerializerBundle\Serializer\Handler\DateTimeHandler A JMS\SerializerBundle\Serializer\Handler\DateTimeHandler instance.
     */
    protected function getJmsSerializer_DatetimeHandlerService()
    {
        return $this->services['jms_serializer.datetime_handler'] = new \JMS\SerializerBundle\Serializer\Handler\DateTimeHandler('Y-m-d\\TH:i:sO', 'Europe/Berlin');
    }

    /**
     * Gets the 'jms_serializer.doctrine_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return JMS\SerializerBundle\Serializer\Handler\DoctrineProxyHandler A JMS\SerializerBundle\Serializer\Handler\DoctrineProxyHandler instance.
     */
    protected function getJmsSerializer_DoctrineHandlerService()
    {
        return $this->services['jms_serializer.doctrine_handler'] = new \JMS\SerializerBundle\Serializer\Handler\DoctrineProxyHandler();
    }

    /**
     * Gets the 'jms_serializer.form_error_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return JMS\SerializerBundle\Serializer\Handler\FormErrorHandler A JMS\SerializerBundle\Serializer\Handler\FormErrorHandler instance.
     */
    protected function getJmsSerializer_FormErrorHandlerService()
    {
        return $this->services['jms_serializer.form_error_handler'] = new \JMS\SerializerBundle\Serializer\Handler\FormErrorHandler($this->get('translator.default'));
    }

    /**
     * Gets the 'jms_serializer.unserialize_object_constructor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return JMS\SerializerBundle\Serializer\Construction\UnserializeObjectConstructor A JMS\SerializerBundle\Serializer\Construction\UnserializeObjectConstructor instance.
     */
    protected function getJmsSerializer_UnserializeObjectConstructorService()
    {
        return $this->services['jms_serializer.unserialize_object_constructor'] = new \JMS\SerializerBundle\Serializer\Construction\UnserializeObjectConstructor();
    }

    /**
     * Gets the 'router.request_context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Component\Routing\RequestContext A Symfony\Component\Routing\RequestContext instance.
     */
    protected function getRouter_RequestContextService()
    {
        return $this->services['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /**
     * Gets the 'symfony_cmf_create.object_mapper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Midgard\CreatePHP\Mapper\DoctrinePhpcrOdmMapper A Midgard\CreatePHP\Mapper\DoctrinePhpcrOdmMapper instance.
     */
    protected function getSymfonyCmfCreate_ObjectMapperService()
    {
        return $this->services['symfony_cmf_create.object_mapper'] = new \Midgard\CreatePHP\Mapper\DoctrinePhpcrOdmMapper(array(), $this->get('doctrine_phpcr'), NULL);
    }

    /**
     * Gets the 'templating.locator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator A Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator instance.
     */
    protected function getTemplating_LocatorService()
    {
        return $this->services['templating.locator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator($this->get('file_locator'), '/vagrant/project/app/cache/dev');
    }

    /**
     * Gets the 'validator.mapping.class_metadata_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Component\Validator\Mapping\ClassMetadataFactory A Symfony\Component\Validator\Mapping\ClassMetadataFactory instance.
     */
    protected function getValidator_Mapping_ClassMetadataFactoryService()
    {
        return $this->services['validator.mapping.class_metadata_factory'] = new \Symfony\Component\Validator\Mapping\ClassMetadataFactory(new \Symfony\Component\Validator\Mapping\Loader\LoaderChain(array(0 => new \Symfony\Component\Validator\Mapping\Loader\StaticMethodLoader(), 1 => new \Symfony\Component\Validator\Mapping\Loader\XmlFilesLoader(array(0 => '/vagrant/project/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/config/validation.xml')), 2 => new \Symfony\Component\Validator\Mapping\Loader\YamlFilesLoader(array()))), NULL);
    }

    /**
     * {@inheritdoc}
     */
    public function getParameter($name)
    {
        $name = strtolower($name);

        if (!array_key_exists($name, $this->parameters)) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }

        return $this->parameters[$name];
    }

    /**
     * {@inheritdoc}
     */
    public function hasParameter($name)
    {
        return array_key_exists(strtolower($name), $this->parameters);
    }

    /**
     * {@inheritdoc}
     */
    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    /**
     * {@inheritDoc}
     */
    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $this->parameterBag = new FrozenParameterBag($this->parameters);
        }

        return $this->parameterBag;
    }
    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'kernel.root_dir' => '/vagrant/project/app',
            'kernel.environment' => 'dev',
            'kernel.debug' => true,
            'kernel.name' => 'app',
            'kernel.cache_dir' => '/vagrant/project/app/cache/dev',
            'kernel.logs_dir' => '/vagrant/project/app/logs',
            'kernel.bundles' => array(
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'AsseticBundle' => 'Symfony\\Bundle\\AsseticBundle\\AsseticBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'DoctrinePHPCRBundle' => 'Doctrine\\Bundle\\PHPCRBundle\\DoctrinePHPCRBundle',
                'LiipDoctrineCacheBundle' => 'Liip\\DoctrineCacheBundle\\LiipDoctrineCacheBundle',
                'KnpMenuBundle' => 'Knp\\Bundle\\MenuBundle\\KnpMenuBundle',
                'LuneticsLocaleBundle' => 'Lunetics\\LocaleBundle\\LuneticsLocaleBundle',
                'FOSRestBundle' => 'FOS\\RestBundle\\FOSRestBundle',
                'JMSSerializerBundle' => 'JMS\\SerializerBundle\\JMSSerializerBundle',
                'SymfonyCmfRoutingExtraBundle' => 'Symfony\\Cmf\\Bundle\\RoutingExtraBundle\\SymfonyCmfRoutingExtraBundle',
                'SymfonyCmfCoreBundle' => 'Symfony\\Cmf\\Bundle\\CoreBundle\\SymfonyCmfCoreBundle',
                'SymfonyCmfMenuBundle' => 'Symfony\\Cmf\\Bundle\\MenuBundle\\SymfonyCmfMenuBundle',
                'SymfonyCmfContentBundle' => 'Symfony\\Cmf\\Bundle\\ContentBundle\\SymfonyCmfContentBundle',
                'SymfonyCmfSimpleCmsBundle' => 'Symfony\\Cmf\\Bundle\\SimpleCmsBundle\\SymfonyCmfSimpleCmsBundle',
                'SymfonyCmfCreateBundle' => 'Symfony\\Cmf\\Bundle\\CreateBundle\\SymfonyCmfCreateBundle',
                'AcmeMainBundle' => 'Acme\\MainBundle\\AcmeMainBundle',
                'WebProfilerBundle' => 'Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle',
                'SensioDistributionBundle' => 'Sensio\\Bundle\\DistributionBundle\\SensioDistributionBundle',
            ),
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'appDevDebugProjectContainer',
            'locale' => 'en',
            'locales' => array(
                0 => 'en',
                1 => 'de',
            ),
            'secret' => '10784a86848b5412b5f7fa644e90ef24e',
            'database_driver' => 'pdo_sqlite',
            'database_path' => '/vagrant/project/app/app.sqlite',
            'phpcr_backend' => array(
                'type' => 'doctrinedbal',
                'connection' => 'doctrine.dbal.default_connection',
            ),
            'phpcr_workspace' => 'default',
            'phpcr_user' => 'admin',
            'phpcr_pass' => 'admin',
            'database_host' => NULL,
            'database_port' => NULL,
            'database_name' => NULL,
            'database_user' => NULL,
            'database_password' => NULL,
            'controller_resolver.class' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerResolver',
            'controller_name_converter.class' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerNameParser',
            'response_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener',
            'streamed_response_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener',
            'locale_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener',
            'event_dispatcher.class' => 'Symfony\\Component\\EventDispatcher\\ContainerAwareEventDispatcher',
            'http_kernel.class' => 'Symfony\\Bundle\\FrameworkBundle\\HttpKernel',
            'filesystem.class' => 'Symfony\\Component\\Filesystem\\Filesystem',
            'cache_warmer.class' => 'Symfony\\Component\\HttpKernel\\CacheWarmer\\CacheWarmerAggregate',
            'cache_clearer.class' => 'Symfony\\Component\\HttpKernel\\CacheClearer\\ChainCacheClearer',
            'file_locator.class' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
            'translator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\Translator',
            'translator.identity.class' => 'Symfony\\Component\\Translation\\IdentityTranslator',
            'translator.selector.class' => 'Symfony\\Component\\Translation\\MessageSelector',
            'translation.loader.php.class' => 'Symfony\\Component\\Translation\\Loader\\PhpFileLoader',
            'translation.loader.yml.class' => 'Symfony\\Component\\Translation\\Loader\\YamlFileLoader',
            'translation.loader.xliff.class' => 'Symfony\\Component\\Translation\\Loader\\XliffFileLoader',
            'translation.loader.po.class' => 'Symfony\\Component\\Translation\\Loader\\PoFileLoader',
            'translation.loader.mo.class' => 'Symfony\\Component\\Translation\\Loader\\MoFileLoader',
            'translation.loader.qt.class' => 'Symfony\\Component\\Translation\\Loader\\QtTranslationsLoader',
            'translation.loader.csv.class' => 'Symfony\\Component\\Translation\\Loader\\CsvFileLoader',
            'translation.loader.res.class' => 'Symfony\\Component\\Translation\\Loader\\IcuResFileLoader',
            'translation.loader.dat.class' => 'Symfony\\Component\\Translation\\Loader\\IcuDatFileLoader',
            'translation.loader.ini.class' => 'Symfony\\Component\\Translation\\Loader\\IniFileLoader',
            'translation.dumper.php.class' => 'Symfony\\Component\\Translation\\Dumper\\PhpFileDumper',
            'translation.dumper.xliff.class' => 'Symfony\\Component\\Translation\\Dumper\\XliffFileDumper',
            'translation.dumper.po.class' => 'Symfony\\Component\\Translation\\Dumper\\PoFileDumper',
            'translation.dumper.mo.class' => 'Symfony\\Component\\Translation\\Dumper\\MoFileDumper',
            'translation.dumper.yml.class' => 'Symfony\\Component\\Translation\\Dumper\\YamlFileDumper',
            'translation.dumper.qt.class' => 'Symfony\\Component\\Translation\\Dumper\\QtFileDumper',
            'translation.dumper.csv.class' => 'Symfony\\Component\\Translation\\Dumper\\CsvFileDumper',
            'translation.dumper.ini.class' => 'Symfony\\Component\\Translation\\Dumper\\IniFileDumper',
            'translation.dumper.res.class' => 'Symfony\\Component\\Translation\\Dumper\\IcuResFileDumper',
            'translation.extractor.php.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\PhpExtractor',
            'translation.loader.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\TranslationLoader',
            'translation.extractor.class' => 'Symfony\\Component\\Translation\\Extractor\\ChainExtractor',
            'translation.writer.class' => 'Symfony\\Component\\Translation\\Writer\\TranslationWriter',
            'debug.event_dispatcher.class' => 'Symfony\\Component\\HttpKernel\\Debug\\ContainerAwareTraceableEventDispatcher',
            'debug.stopwatch.class' => 'Symfony\\Component\\HttpKernel\\Debug\\Stopwatch',
            'debug.container.dump' => '/vagrant/project/app/cache/dev/appDevDebugProjectContainer.xml',
            'debug.controller_resolver.class' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TraceableControllerResolver',
            'kernel.secret' => '10784a86848b5412b5f7fa644e90ef24e',
            'kernel.trust_proxy_headers' => false,
            'kernel.default_locale' => 'en',
            'session.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Session',
            'session.flashbag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBag',
            'session.attribute_bag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Attribute\\AttributeBag',
            'session.storage.native.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\NativeSessionStorage',
            'session.storage.mock_file.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\MockFileSessionStorage',
            'session.handler.native_file.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\NativeFileSessionHandler',
            'session_listener.class' => 'Symfony\\Bundle\\FrameworkBundle\\EventListener\\SessionListener',
            'session.storage.options' => array(

            ),
            'session.save_path' => '/vagrant/project/app/cache/dev/sessions',
            'form.resolved_type_factory.class' => 'Symfony\\Component\\Form\\ResolvedFormTypeFactory',
            'form.registry.class' => 'Symfony\\Component\\Form\\FormRegistry',
            'form.factory.class' => 'Symfony\\Component\\Form\\FormFactory',
            'form.extension.class' => 'Symfony\\Component\\Form\\Extension\\DependencyInjection\\DependencyInjectionExtension',
            'form.type_guesser.validator.class' => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser',
            'validator.class' => 'Symfony\\Component\\Validator\\Validator',
            'validator.mapping.class_metadata_factory.class' => 'Symfony\\Component\\Validator\\Mapping\\ClassMetadataFactory',
            'validator.mapping.cache.apc.class' => 'Symfony\\Component\\Validator\\Mapping\\Cache\\ApcCache',
            'validator.mapping.cache.prefix' => '',
            'validator.mapping.loader.loader_chain.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\LoaderChain',
            'validator.mapping.loader.static_method_loader.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\StaticMethodLoader',
            'validator.mapping.loader.annotation_loader.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\AnnotationLoader',
            'validator.mapping.loader.xml_files_loader.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\XmlFilesLoader',
            'validator.mapping.loader.yaml_files_loader.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\YamlFilesLoader',
            'validator.validator_factory.class' => 'Symfony\\Bundle\\FrameworkBundle\\Validator\\ConstraintValidatorFactory',
            'validator.mapping.loader.xml_files_loader.mapping_files' => array(
                0 => '/vagrant/project/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/config/validation.xml',
            ),
            'validator.mapping.loader.yaml_files_loader.mapping_files' => array(

            ),
            'profiler.class' => 'Symfony\\Component\\HttpKernel\\Profiler\\Profiler',
            'profiler_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ProfilerListener',
            'data_collector.config.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\ConfigDataCollector',
            'data_collector.request.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\RequestDataCollector',
            'data_collector.exception.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\ExceptionDataCollector',
            'data_collector.events.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\EventDataCollector',
            'data_collector.logger.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\LoggerDataCollector',
            'data_collector.time.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\TimeDataCollector',
            'data_collector.memory.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\MemoryDataCollector',
            'data_collector.router.class' => 'Symfony\\Bundle\\FrameworkBundle\\DataCollector\\RouterDataCollector',
            'profiler_listener.only_exceptions' => false,
            'profiler_listener.only_master_requests' => false,
            'profiler.storage.dsn' => 'file:/vagrant/project/app/cache/dev/profiler',
            'profiler.storage.username' => '',
            'profiler.storage.password' => '',
            'profiler.storage.lifetime' => 86400,
            'router.class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\Router',
            'router.request_context.class' => 'Symfony\\Component\\Routing\\RequestContext',
            'routing.loader.class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\DelegatingLoader',
            'routing.resolver.class' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
            'routing.loader.xml.class' => 'Symfony\\Component\\Routing\\Loader\\XmlFileLoader',
            'routing.loader.yml.class' => 'Symfony\\Component\\Routing\\Loader\\YamlFileLoader',
            'routing.loader.php.class' => 'Symfony\\Component\\Routing\\Loader\\PhpFileLoader',
            'router.options.generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper',
            'router.options.matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper',
            'router.cache_warmer.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\RouterCacheWarmer',
            'router.options.matcher.cache_class' => 'appdevUrlMatcher',
            'router.options.generator.cache_class' => 'appdevUrlGenerator',
            'router_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener',
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.resource' => '/vagrant/project/app/cache/dev/assetic/routing.yml',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'templating.engine.delegating.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\DelegatingEngine',
            'templating.name_parser.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateNameParser',
            'templating.filename_parser.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateFilenameParser',
            'templating.cache_warmer.template_paths.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplatePathsCacheWarmer',
            'templating.locator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\TemplateLocator',
            'templating.loader.filesystem.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\FilesystemLoader',
            'templating.loader.cache.class' => 'Symfony\\Component\\Templating\\Loader\\CacheLoader',
            'templating.loader.chain.class' => 'Symfony\\Component\\Templating\\Loader\\ChainLoader',
            'templating.finder.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplateFinder',
            'templating.engine.php.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\PhpEngine',
            'templating.helper.slots.class' => 'Symfony\\Component\\Templating\\Helper\\SlotsHelper',
            'templating.helper.assets.class' => 'Symfony\\Component\\Templating\\Helper\\CoreAssetsHelper',
            'templating.helper.actions.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\ActionsHelper',
            'templating.helper.router.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\RouterHelper',
            'templating.helper.request.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\RequestHelper',
            'templating.helper.session.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\SessionHelper',
            'templating.helper.code.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\CodeHelper',
            'templating.helper.translator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\TranslatorHelper',
            'templating.helper.form.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\FormHelper',
            'templating.form.engine.class' => 'Symfony\\Component\\Form\\Extension\\Templating\\TemplatingRendererEngine',
            'templating.form.renderer.class' => 'Symfony\\Component\\Form\\FormRenderer',
            'templating.globals.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\GlobalVariables',
            'templating.asset.path_package.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Asset\\PathPackage',
            'templating.asset.url_package.class' => 'Symfony\\Component\\Templating\\Asset\\UrlPackage',
            'templating.asset.package_factory.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Asset\\PackageFactory',
            'templating.helper.code.file_link_format' => NULL,
            'templating.helper.form.resources' => array(
                0 => 'FrameworkBundle:Form',
            ),
            'templating.hinclude.default_template' => NULL,
            'templating.debugger.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Debugger',
            'templating.loader.cache.path' => NULL,
            'templating.engines' => array(
                0 => 'twig',
            ),
            'annotations.reader.class' => 'Doctrine\\Common\\Annotations\\AnnotationReader',
            'annotations.cached_reader.class' => 'Doctrine\\Common\\Annotations\\CachedReader',
            'annotations.file_cache_reader.class' => 'Doctrine\\Common\\Annotations\\FileCacheReader',
            'twig.class' => 'Twig_Environment',
            'twig.loader.class' => 'Symfony\\Bundle\\TwigBundle\\Loader\\FilesystemLoader',
            'templating.engine.twig.class' => 'Symfony\\Bundle\\TwigBundle\\TwigEngine',
            'twig.cache_warmer.class' => 'Symfony\\Bundle\\TwigBundle\\CacheWarmer\\TemplateCacheCacheWarmer',
            'twig.extension.trans.class' => 'Symfony\\Bridge\\Twig\\Extension\\TranslationExtension',
            'twig.extension.assets.class' => 'Symfony\\Bundle\\TwigBundle\\Extension\\AssetsExtension',
            'twig.extension.actions.class' => 'Symfony\\Bundle\\TwigBundle\\Extension\\ActionsExtension',
            'twig.extension.code.class' => 'Symfony\\Bundle\\TwigBundle\\Extension\\CodeExtension',
            'twig.extension.routing.class' => 'Symfony\\Bridge\\Twig\\Extension\\RoutingExtension',
            'twig.extension.yaml.class' => 'Symfony\\Bridge\\Twig\\Extension\\YamlExtension',
            'twig.extension.form.class' => 'Symfony\\Bridge\\Twig\\Extension\\FormExtension',
            'twig.form.engine.class' => 'Symfony\\Bridge\\Twig\\Form\\TwigRendererEngine',
            'twig.form.renderer.class' => 'Symfony\\Bridge\\Twig\\Form\\TwigRenderer',
            'twig.translation.extractor.class' => 'Symfony\\Bridge\\Twig\\Translation\\TwigExtractor',
            'twig.exception_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener',
            'twig.exception_listener.controller' => 'Symfony\\Bundle\\TwigBundle\\Controller\\ExceptionController::showAction',
            'twig.form.resources' => array(
                0 => 'SymfonyCmfRoutingExtraBundle:Form:terms_form_type.html.twig',
                1 => 'form_div_layout.html.twig',
            ),
            'twig.options' => array(
                'debug' => true,
                'strict_variables' => true,
                'exception_controller' => 'Symfony\\Bundle\\TwigBundle\\Controller\\ExceptionController::showAction',
                'cache' => '/vagrant/project/app/cache/dev/twig',
                'charset' => 'UTF-8',
                'paths' => array(

                ),
            ),
            'debug.templating.engine.twig.class' => 'Symfony\\Bundle\\TwigBundle\\Debug\\TimedTwigEngine',
            'monolog.logger.class' => 'Symfony\\Bridge\\Monolog\\Logger',
            'monolog.gelf.publisher.class' => 'Gelf\\MessagePublisher',
            'monolog.handler.stream.class' => 'Monolog\\Handler\\StreamHandler',
            'monolog.handler.group.class' => 'Monolog\\Handler\\GroupHandler',
            'monolog.handler.buffer.class' => 'Monolog\\Handler\\BufferHandler',
            'monolog.handler.rotating_file.class' => 'Monolog\\Handler\\RotatingFileHandler',
            'monolog.handler.syslog.class' => 'Monolog\\Handler\\SyslogHandler',
            'monolog.handler.null.class' => 'Monolog\\Handler\\NullHandler',
            'monolog.handler.test.class' => 'Monolog\\Handler\\TestHandler',
            'monolog.handler.gelf.class' => 'Monolog\\Handler\\GelfHandler',
            'monolog.handler.firephp.class' => 'Symfony\\Bridge\\Monolog\\Handler\\FirePHPHandler',
            'monolog.handler.chromephp.class' => 'Symfony\\Bridge\\Monolog\\Handler\\ChromePhpHandler',
            'monolog.handler.debug.class' => 'Symfony\\Bridge\\Monolog\\Handler\\DebugHandler',
            'monolog.handler.swift_mailer.class' => 'Monolog\\Handler\\SwiftMailerHandler',
            'monolog.handler.native_mailer.class' => 'Monolog\\Handler\\NativeMailerHandler',
            'monolog.handler.socket.class' => 'Monolog\\Handler\\SocketHandler',
            'monolog.handler.fingers_crossed.class' => 'Monolog\\Handler\\FingersCrossedHandler',
            'monolog.handler.fingers_crossed.error_level_activation_strategy.class' => 'Monolog\\Handler\\FingersCrossed\\ErrorLevelActivationStrategy',
            'monolog.handlers_to_channels' => array(
                'monolog.handler.firephp' => NULL,
                'monolog.handler.main' => NULL,
            ),
            'assetic.asset_factory.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\AssetFactory',
            'assetic.asset_manager.class' => 'Assetic\\Factory\\LazyAssetManager',
            'assetic.asset_manager_cache_warmer.class' => 'Symfony\\Bundle\\AsseticBundle\\CacheWarmer\\AssetManagerCacheWarmer',
            'assetic.cached_formula_loader.class' => 'Assetic\\Factory\\Loader\\CachedFormulaLoader',
            'assetic.config_cache.class' => 'Assetic\\Cache\\ConfigCache',
            'assetic.config_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Loader\\ConfigurationLoader',
            'assetic.config_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\ConfigurationResource',
            'assetic.coalescing_directory_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\CoalescingDirectoryResource',
            'assetic.directory_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\DirectoryResource',
            'assetic.filter_manager.class' => 'Symfony\\Bundle\\AsseticBundle\\FilterManager',
            'assetic.worker.ensure_filter.class' => 'Assetic\\Factory\\Worker\\EnsureFilterWorker',
            'assetic.value_supplier.class' => 'Symfony\\Bundle\\AsseticBundle\\DefaultValueSupplier',
            'assetic.node.paths' => array(

            ),
            'assetic.cache_dir' => '/vagrant/project/app/cache/dev/assetic',
            'assetic.bundles' => array(
                0 => 'FrameworkBundle',
                1 => 'TwigBundle',
                2 => 'MonologBundle',
                3 => 'AsseticBundle',
                4 => 'DoctrineBundle',
                5 => 'DoctrinePHPCRBundle',
                6 => 'LiipDoctrineCacheBundle',
                7 => 'KnpMenuBundle',
                8 => 'LuneticsLocaleBundle',
                9 => 'FOSRestBundle',
                10 => 'JMSSerializerBundle',
                11 => 'SymfonyCmfRoutingExtraBundle',
                12 => 'SymfonyCmfCoreBundle',
                13 => 'SymfonyCmfMenuBundle',
                14 => 'SymfonyCmfContentBundle',
                15 => 'SymfonyCmfSimpleCmsBundle',
                16 => 'SymfonyCmfCreateBundle',
                17 => 'AcmeMainBundle',
                18 => 'WebProfilerBundle',
                19 => 'SensioDistributionBundle',
            ),
            'assetic.twig_extension.class' => 'Symfony\\Bundle\\AsseticBundle\\Twig\\AsseticExtension',
            'assetic.twig_formula_loader.class' => 'Assetic\\Extension\\Twig\\TwigFormulaLoader',
            'assetic.helper.dynamic.class' => 'Symfony\\Bundle\\AsseticBundle\\Templating\\DynamicAsseticHelper',
            'assetic.helper.static.class' => 'Symfony\\Bundle\\AsseticBundle\\Templating\\StaticAsseticHelper',
            'assetic.php_formula_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Loader\\AsseticHelperFormulaLoader',
            'assetic.debug' => true,
            'assetic.use_controller' => true,
            'assetic.enable_profiler' => false,
            'assetic.read_from' => '/vagrant/project/app/../web',
            'assetic.write_to' => '/vagrant/project/app/../web',
            'assetic.variables' => array(

            ),
            'assetic.java.bin' => '/usr/bin/java',
            'assetic.node.bin' => '/usr/bin/node',
            'assetic.ruby.bin' => '/opt/vagrant_ruby/bin/ruby',
            'assetic.sass.bin' => '/usr/bin/sass',
            'assetic.filter.cssrewrite.class' => 'Assetic\\Filter\\CssRewriteFilter',
            'assetic.twig_extension.functions' => array(

            ),
            'assetic.controller.class' => 'Symfony\\Bundle\\AsseticBundle\\Controller\\AsseticController',
            'assetic.routing_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Routing\\AsseticLoader',
            'assetic.cache.class' => 'Assetic\\Cache\\FilesystemCache',
            'assetic.use_controller_worker.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Worker\\UseControllerWorker',
            'assetic.request_listener.class' => 'Symfony\\Bundle\\AsseticBundle\\EventListener\\RequestListener',
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => array(

            ),
            'doctrine.default_entity_manager' => '',
            'doctrine.dbal.connection_factory.types' => array(

            ),
            'doctrine.connections' => array(
                'default' => 'doctrine.dbal.default_connection',
            ),
            'doctrine.default_connection' => 'default',
            'doctrine_phpcr.credentials.class' => 'PHPCR\\SimpleCredentials',
            'doctrine_phpcr.class' => 'Doctrine\\Bundle\\PHPCRBundle\\ManagerRegistry',
            'doctrine_phpcr.sessions' => array(
                'default' => 'doctrine_phpcr.default_session',
            ),
            'doctrine_phpcr.odm.document_managers' => array(
                'default' => 'doctrine_phpcr.odm.default_document_manager',
            ),
            'doctrine_phpcr.default_session' => 'default',
            'doctrine_phpcr.odm.default_document_manager' => 'default',
            'doctrine_phpcr.odm.configuration.class' => 'Doctrine\\ODM\\PHPCR\\Configuration',
            'doctrine_phpcr.odm.document_manager.class' => 'Doctrine\\ODM\\PHPCR\\DocumentManager',
            'doctrine_phpcr.odm.document_manager.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine_phpcr.odm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine_phpcr.odm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine_phpcr.odm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine_phpcr.odm.cache.memcache_host' => 'localhost',
            'doctrine_phpcr.odm.cache.memcache_port' => 11211,
            'doctrine_phpcr.odm.cache.memcache_instance.class' => 'Memcache',
            'doctrine_phpcr.odm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'form.type_guesser.doctrine_phpcr.class' => 'Doctrine\\Bundle\\PHPCRBundle\\Form\\PHPCRTypeGuesser',
            'doctrine_phpcr.odm.metadata.driver_chain.class' => 'Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine_phpcr.odm.metadata.annotation.class' => 'Doctrine\\ODM\\PHPCR\\Mapping\\Driver\\AnnotationDriver',
            'doctrine_phpcr.odm.metadata.xml.class' => 'Doctrine\\Bundle\\PHPCRBundle\\Mapping\\Driver\\XmlDriver',
            'doctrine_phpcr.odm.metadata.yml.class' => 'Doctrine\\Bundle\\PHPCRBundle\\Mapping\\Driver\\YamlDriver',
            'doctrine_phpcr.odm.metadata.php.class' => 'Doctrine\\Common\\Persistence\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine_phpcr.odm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'doctrine_phpcr.odm.locale_choooser.class' => 'Doctrine\\ODM\\PHPCR\\Translation\\LocaleChooser\\LocaleChooser',
            'doctrine_phpcr.odm.locale_listener.class' => 'Doctrine\\Bundle\\PHPCRBundle\\EventListener\\LocaleListener',
            'doctrine_phpcr.odm.auto_generate_proxy_classes' => true,
            'doctrine_phpcr.odm.proxy_dir' => '/vagrant/project/app/cache/dev/doctrine/PHPCRProxies',
            'doctrine_phpcr.odm.proxy_namespace' => 'PHPCRProxies',
            'doctrine_phpcr.odm.locales' => array(
                'en' => array(
                    0 => 'en',
                    1 => 'en',
                    2 => 'de',
                ),
                'de' => array(
                    0 => 'de',
                    1 => 'en',
                ),
            ),
            'liip_doctrine_cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'liip_doctrine_cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'liip_doctrine_cache.file_system.class' => 'Doctrine\\Common\\Cache\\FilesystemCache',
            'liip_doctrine_cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'liip_doctrine_cache.memcache_host' => 'localhost',
            'liip_doctrine_cache.memcache_port' => 11211,
            'liip_doctrine_cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'liip_doctrine_cache.memcached_host' => 'localhost',
            'liip_doctrine_cache.memcached_port' => 11211,
            'liip_doctrine_cache.php_file.class' => 'Doctrine\\Common\\Cache\\PhpFileCache',
            'liip_doctrine_cache.win_cache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'liip_doctrine_cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'liip_doctrine_cache.zend_data.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'liip_doctrine_cache.namespaces' => array(
                'meta' => array(
                    'type' => 'file_system',
                    'namespace' => NULL,
                    'host' => NULL,
                    'port' => NULL,
                    'id' => NULL,
                    'directory' => NULL,
                    'extension' => NULL,
                ),
                'nodes' => array(
                    'type' => 'file_system',
                    'namespace' => NULL,
                    'host' => NULL,
                    'port' => NULL,
                    'id' => NULL,
                    'directory' => NULL,
                    'extension' => NULL,
                ),
            ),
            'knp_menu.factory.class' => 'Knp\\Menu\\Silex\\RouterAwareFactory',
            'knp_menu.helper.class' => 'Knp\\Menu\\Twig\\Helper',
            'knp_menu.menu_provider.chain.class' => 'Knp\\Menu\\Provider\\ChainProvider',
            'knp_menu.menu_provider.container_aware.class' => 'Knp\\Bundle\\MenuBundle\\Provider\\ContainerAwareProvider',
            'knp_menu.menu_provider.builder_alias.class' => 'Knp\\Bundle\\MenuBundle\\Provider\\BuilderAliasProvider',
            'knp_menu.renderer_provider.class' => 'Knp\\Bundle\\MenuBundle\\Renderer\\ContainerAwareProvider',
            'knp_menu.renderer.list.class' => 'Knp\\Menu\\Renderer\\ListRenderer',
            'knp_menu.renderer.list.options' => array(

            ),
            'knp_menu.twig.extension.class' => 'Knp\\Menu\\Twig\\MenuExtension',
            'knp_menu.renderer.twig.class' => 'Knp\\Menu\\Renderer\\TwigRenderer',
            'knp_menu.renderer.twig.options' => array(

            ),
            'knp_menu.renderer.twig.template' => 'knp_menu.html.twig',
            'knp_menu.default_renderer' => 'twig',
            'lunetics_locale.strict_mode' => true,
            'lunetics_locale.allowed_locales' => array(
                0 => 'en',
                1 => 'de',
            ),
            'lunetics_locale.guessing_order' => array(
                0 => 'cookie',
                1 => 'router',
                2 => 'browser',
            ),
            'lunetics_locale.router_guesser.class' => 'Lunetics\\LocaleBundle\\LocaleGuesser\\RouterLocaleGuesser',
            'lunetics_locale.browser_guesser.class' => 'Lunetics\\LocaleBundle\\LocaleGuesser\\BrowserLocaleGuesser',
            'lunetics_locale.cookie_guesser.class' => 'Lunetics\\LocaleBundle\\LocaleGuesser\\CookieLocaleGuesser',
            'lunetics_locale.session_guesser.class' => 'Lunetics\\LocaleBundle\\LocaleGuesser\\SessionLocaleGuesser',
            'lunetics_locale.query_guesser.class' => 'Lunetics\\LocaleBundle\\LocaleGuesser\\QueryLocaleGuesser',
            'lunetics_locale.cookie.set_on_change' => true,
            'lunetics_locale.cookie.class' => 'Lunetics\\LocaleBundle\\Cookie\\LocaleCookie',
            'lunetics_locale.cookie.name' => 'lunetics_locale',
            'lunetics_locale.cookie.ttl' => '86400',
            'lunetics_locale.cookie.path' => '/',
            'lunetics_locale.cookie.domain' => NULL,
            'lunetics_locale.cookie.secure' => false,
            'lunetics_locale.cookie.httponly' => true,
            'lunetics_locale.session.variable' => 'lunetics_locale',
            'lunetics_locale.query.parameter_name' => '_locale',
            'lunetics_locale.switcher.template' => 'links',
            'lunetics_locale.switcher.show_current_locale' => false,
            'lunetics_locale.switcher.redirect_to_route' => NULL,
            'lunetics_locale.switcher.redirect_statuscode' => '302',
            'lunetics_locale.switcher.use_controller' => false,
            'lunetics_locale.switcher.use_referrer' => true,
            'lunetics_locale.intl_extension_installed' => true,
            'lunetics_locale.intl_extension_fallback.iso3166' => array(

            ),
            'lunetics_locale.intl_extension_fallback.iso639' => array(

            ),
            'lunetics_locale.intl_extension_fallback.script' => array(

            ),
            'lunetics_locale.request_listener.class' => 'Lunetics\\LocaleBundle\\EventListener\\LocaleListener',
            'lunetics_locale.guesser_manager.class' => 'Lunetics\\LocaleBundle\\LocaleGuesser\\LocaleGuesserManager',
            'lunetics_locale.information.class' => 'Lunetics\\LocaleBundle\\LocaleInformaion\\LocaleInformation',
            'fos_rest.serializer.exclusion_strategy.type' => '',
            'fos_rest.serializer.exclusion_strategy.value' => '',
            'fos_rest.routing.loader.controller.class' => 'FOS\\RestBundle\\Routing\\Loader\\RestRouteLoader',
            'fos_rest.routing.loader.yaml_collection.class' => 'FOS\\RestBundle\\Routing\\Loader\\RestYamlCollectionLoader',
            'fos_rest.routing.loader.xml_collection.class' => 'FOS\\RestBundle\\Routing\\Loader\\RestXmlCollectionLoader',
            'fos_rest.routing.loader.processor.class' => 'FOS\\RestBundle\\Routing\\Loader\\RestRouteProcessor',
            'fos_rest.routing.loader.reader.controller.class' => 'FOS\\RestBundle\\Routing\\Loader\\Reader\\RestControllerReader',
            'fos_rest.routing.loader.reader.action.class' => 'FOS\\RestBundle\\Routing\\Loader\\Reader\\RestActionReader',
            'fos_rest.format_negotiator.class' => 'FOS\\Rest\\Util\\FormatNegotiator',
            'fos_rest.request.param_fetcher.class' => 'FOS\\RestBundle\\Request\\ParamFetcher',
            'fos_rest.request.param_fetcher.reader.class' => 'FOS\\RestBundle\\Request\\ParamReader',
            'fos_rest.cache_dir' => '/vagrant/project/app/cache/dev/fos_rest',
            'fos_rest.formats' => array(
                'json' => false,
                'xml' => false,
                'html' => true,
            ),
            'fos_rest.default_engine' => 'twig',
            'fos_rest.force_redirects' => array(
                'html' => 302,
            ),
            'fos_rest.failed_validation' => 400,
            'fos_rest.routing.loader.default_format' => NULL,
            'fos_rest.exception.codes' => array(

            ),
            'fos_rest.exception.messages' => array(

            ),
            'fos_rest.decoders' => array(
                'json' => 'fos_rest.decoder.json',
                'xml' => 'fos_rest.decoder.xml',
            ),
            'fos_rest.default_priorities' => array(
                0 => 'html',
                1 => '*/*',
            ),
            'fos_rest.prefer_extension' => true,
            'fos_rest.fallback_format' => 'html',
            'fos_rest.mime_types' => array(

            ),
            'jms_serializer.metadata.file_locator.class' => 'Metadata\\Driver\\FileLocator',
            'jms_serializer.metadata.annotation_driver.class' => 'JMS\\SerializerBundle\\Metadata\\Driver\\AnnotationDriver',
            'jms_serializer.metadata.chain_driver.class' => 'Metadata\\Driver\\DriverChain',
            'jms_serializer.metadata.yaml_driver.class' => 'JMS\\SerializerBundle\\Metadata\\Driver\\YamlDriver',
            'jms_serializer.metadata.xml_driver.class' => 'JMS\\SerializerBundle\\Metadata\\Driver\\XmlDriver',
            'jms_serializer.metadata.php_driver.class' => 'JMS\\SerializerBundle\\Metadata\\Driver\\PhpDriver',
            'jms_serializer.metadata.lazy_loading_driver.class' => 'Metadata\\Driver\\LazyLoadingDriver',
            'jms_serializer.metadata.metadata_factory.class' => 'Metadata\\MetadataFactory',
            'jms_serializer.metadata.cache.file_cache.class' => 'Metadata\\Cache\\FileCache',
            'jms_serializer.camel_case_naming_strategy.class' => 'JMS\\SerializerBundle\\Serializer\\Naming\\CamelCaseNamingStrategy',
            'jms_serializer.serialized_name_annotation_strategy.class' => 'JMS\\SerializerBundle\\Serializer\\Naming\\SerializedNameAnnotationStrategy',
            'jms_serializer.cache_naming_strategy.class' => 'JMS\\SerializerBundle\\Serializer\\Naming\\CacheNamingStrategy',
            'jms_serializer.unserialize_object_constructor.class' => 'JMS\\SerializerBundle\\Serializer\\Construction\\UnserializeObjectConstructor',
            'jms_serializer.version_exclusion_strategy.class' => 'JMS\\SerializerBundle\\Serializer\\Exclusion\\VersionExclusionStrategy',
            'jms_serializer.serializer.class' => 'JMS\\SerializerBundle\\Serializer\\LazyLoadingSerializer',
            'jms_serializer.twig_extension.class' => 'JMS\\SerializerBundle\\Twig\\SerializerExtension',
            'jms_serializer.json_serialization_visitor.class' => 'JMS\\SerializerBundle\\Serializer\\JsonSerializationVisitor',
            'jms_serializer.json_serialization_visitor.options' => 0,
            'jms_serializer.json_deserialization_visitor.class' => 'JMS\\SerializerBundle\\Serializer\\JsonDeserializationVisitor',
            'jms_serializer.xml_serialization_visitor.class' => 'JMS\\SerializerBundle\\Serializer\\XmlSerializationVisitor',
            'jms_serializer.xml_deserialization_visitor.class' => 'JMS\\SerializerBundle\\Serializer\\XmlDeserializationVisitor',
            'jms_serializer.yaml_serialization_visitor.class' => 'JMS\\SerializerBundle\\Serializer\\YamlSerializationVisitor',
            'jms_serializer.object_based_custom_handler.class' => 'JMS\\SerializerBundle\\Serializer\\Handler\\ObjectBasedCustomHandler',
            'jms_serializer.datetime_handler.class' => 'JMS\\SerializerBundle\\Serializer\\Handler\\DateTimeHandler',
            'jms_serializer.array_collection_handler.class' => 'JMS\\SerializerBundle\\Serializer\\Handler\\ArrayCollectionHandler',
            'jms_serializer.form_error_handler.class' => 'JMS\\SerializerBundle\\Serializer\\Handler\\FormErrorHandler',
            'jms_serializer.constraint_violation_handler.class' => 'JMS\\SerializerBundle\\Serializer\\Handler\\ConstraintViolationHandler',
            'jms_serializer.doctrine_handler.class' => 'JMS\\SerializerBundle\\Serializer\\Handler\\DoctrineProxyHandler',
            'symfony_cmf_routing_extra.generic_controller' => 'symfony_cmf_content.controller:indexAction',
            'symfony_cmf_routing_extra.controllers_by_alias' => array(

            ),
            'symfony_cmf_routing_extra.controllers_by_class' => array(

            ),
            'symfony_cmf_routing_extra.templates_by_class' => array(

            ),
            'symfony_cmf_routing_extra.dynamic_router_class' => 'Symfony\\Cmf\\Bundle\\RoutingExtraBundle\\Routing\\DynamicRouter',
            'symfony_cmf_routing_extra.route_entity_class' => NULL,
            'symfony_cmf_routing_extra.route_repository_class' => 'Symfony\\Cmf\\Bundle\\RoutingExtraBundle\\Document\\RouteRepository',
            'symfony_cmf_routing_extra.content_repository_class' => 'Symfony\\Cmf\\Bundle\\RoutingExtraBundle\\Document\\ContentRepository',
            'symfony_cmf_routing_extra.phpcrodm_route_idprefix_listener_class' => 'Symfony\\Cmf\\Bundle\\RoutingExtraBundle\\Listener\\IdPrefix',
            'symfony_cmf_routing_extra.mapper_explicit_template_class' => 'Symfony\\Cmf\\Component\\Routing\\Mapper\\ExplicitTemplateMapper',
            'symfony_cmf_routing_extra.mapper_controllers_by_alias_class' => 'Symfony\\Cmf\\Component\\Routing\\Mapper\\ControllerAliasMapper',
            'symfony_cmf_routing_extra.mapper_controllers_by_class_class' => 'Symfony\\Cmf\\Component\\Routing\\Mapper\\ControllerClassMapper',
            'symfony_cmf_routing_extra.mapper_templates_by_class_class' => 'Symfony\\Cmf\\Component\\Routing\\Mapper\\TemplateClassMapper',
            'symfony_cmf_routing_extra.redirect_controller_class' => 'Symfony\\Cmf\\Bundle\\RoutingExtraBundle\\Controller\\RedirectController',
            'symfony_cmf_routing_extra.routing_repositoryroot' => '/cms/routes',
            'symfony_cmf_routing_extra.chain_router_class' => 'Symfony\\Cmf\\Component\\Routing\\ChainRouter',
            'symfony_cmf_routing_extra.terms_form_type_class' => 'Symfony\\Cmf\\Bundle\\RoutingExtraBundle\\Form\\Type\\TermsFormType',
            'symfony_cmf_core.role' => 'IS_AUTHENTICATED_ANONYMOUSLY',
            'symfony_cmf_core.document_manager_name' => 'default',
            'symfony_cmf_menu.provider_class' => 'Symfony\\Cmf\\Bundle\\MenuBundle\\Provider\\PHPCRMenuProvider',
            'symfony_cmf_menu.factory_class' => 'Symfony\\Cmf\\Bundle\\MenuBundle\\ContentAwareFactory',
            'symfony_cmf_menu.document_class' => 'Symfony\\Cmf\\Bundle\\MenuBundle\\Document\\MenuItem',
            'symfony_cmf_menu.multilang.document_class' => 'Symfony\\Cmf\\Bundle\\MenuBundle\\Document\\MultilangMenuItem',
            'symfony_cmf_menu.menu_basepath' => '/cms',
            'symfony_cmf_menu.document_manager_name' => 'default',
            'symfony_cmf_menu.content_key' => 'contentDocument',
            'symfony_cmf_menu.route_name' => NULL,
            'symfony_cmf_menu.content_basepath' => '/cms/content',
            'symfony_cmf_content.document_class' => 'Symfony\\Cmf\\Bundle\\ContentBundle\\Document\\StaticContent',
            'symfony_cmf_content.multilang.document_class' => 'Symfony\\Cmf\\Bundle\\ContentBundle\\Document\\MultilangStaticContent',
            'symfony_cmf_content.default_template' => 'SymfonyCmfContentBundle:StaticContent:index.html.twig',
            'symfony_cmf_content.content_basepath' => '/cms/content',
            'symfony_cmf_content.static_basepath' => '/cms/content/static',
            'symfony_cmf_simple_cms.basepath' => '/cms/simple',
            'symfony_cmf_simple_cms.generic_controller' => 'symfony_cmf_content.controller:indexAction',
            'symfony_cmf_simple_cms.controllers_by_class' => array(

            ),
            'symfony_cmf_simple_cms.templates_by_class' => array(
                'Symfony\\Cmf\\Bundle\\SimpleCmsBundle\\Document\\Page' => 'SymfonyCmfSimpleCmsBundle:Page:index.html.twig',
            ),
            'symfony_cmf_simple_cms.dynamic_router_class' => 'Symfony\\Cmf\\Bundle\\RoutingExtraBundle\\Routing\\DynamicRouter',
            'symfony_cmf_simple_cms.route_repository_class' => 'Symfony\\Cmf\\Bundle\\RoutingExtraBundle\\Document\\RouteRepository',
            'symfony_cmf_simple_cms.multilang_route_repository_class' => 'Symfony\\Cmf\\Bundle\\SimpleCmsBundle\\Document\\MultilangRouteRepository',
            'symfony_cmf_simple_cms.phpcrodm_route_idprefix_listener_class' => 'Symfony\\Cmf\\Bundle\\RoutingExtraBundle\\Listener\\IdPrefix',
            'symfony_cmf_simple_cms.mapper_controllers_by_class_class' => 'Symfony\\Cmf\\Component\\Routing\\Mapper\\ControllerClassMapper',
            'symfony_cmf_simple_cms.mapper_templates_by_class_class' => 'Symfony\\Cmf\\Component\\Routing\\Mapper\\TemplateClassMapper',
            'symfony_cmf_simple_cms.locales' => array(
                0 => 'en',
                1 => 'de',
            ),
            'symfony_cmf_simple_cms.document_class' => 'Symfony\\Cmf\\Bundle\\SimpleCmsBundle\\Document\\MultilangPage',
            'symfony_cmf_simple_cms.menu_provider.class' => 'Symfony\\Cmf\\Bundle\\MenuBundle\\Provider\\PHPCRMenuProvider',
            'symfony_cmf_create.phpcr_odm_mapper_class' => 'Midgard\\CreatePHP\\Mapper\\DoctrinePhpcrOdmMapper',
            'symfony_cmf_create.manager_name' => 'default',
            'symfony_cmf_create.map' => array(

            ),
            'symfony_cmf_create.stanbol_url' => 'http://dev.iks-project.eu:8081',
            'symfony_cmf_create.role' => 'IS_AUTHENTICATED_ANONYMOUSLY',
            'symfony_cmf_create.use_coffee' => false,
            'symfony_cmf_create.rdf_config_dirs' => array(
                0 => '/vagrant/project/vendor/symfony-cmf/content-bundle/Symfony/Cmf/Bundle/ContentBundle/Resources/rdf-mappings',
                1 => '/vagrant/project/vendor/symfony-cmf/simple-cms-bundle/Symfony/Cmf/Bundle/SimpleCmsBundle/Resources/rdf-mappings',
            ),
            'symfony_cmf_create.image.model_class' => false,
            'symfony_cmf_create.jsloader.controller.class' => 'Symfony\\Cmf\\Bundle\\CreateBundle\\Controller\\JsloaderController',
            'symfony_cmf_create.rest.controller.class' => 'Symfony\\Cmf\\Bundle\\CreateBundle\\Controller\\RestController',
            'symfony_cmf_create.rdf_type_factory_class' => 'Midgard\\CreatePHP\\Metadata\\RdfTypeFactory',
            'symfony_cmf_create.rest.handler_class' => 'Midgard\\CreatePHP\\RestService',
            'web_profiler.debug_toolbar.class' => 'Symfony\\Bundle\\WebProfilerBundle\\EventListener\\WebDebugToolbarListener',
            'web_profiler.debug_toolbar.intercept_redirects' => false,
            'web_profiler.debug_toolbar.mode' => 2,
            'web_profiler.debug_toolbar.position' => 'bottom',
            'sensio.distribution.webconfigurator.class' => 'Sensio\\Bundle\\DistributionBundle\\Configurator\\Configurator',
            'data_collector.templates' => array(
                'data_collector.config' => array(
                    0 => 'config',
                    1 => 'WebProfilerBundle:Collector:config',
                ),
                'data_collector.request' => array(
                    0 => 'request',
                    1 => 'WebProfilerBundle:Collector:request',
                ),
                'data_collector.exception' => array(
                    0 => 'exception',
                    1 => 'WebProfilerBundle:Collector:exception',
                ),
                'data_collector.events' => array(
                    0 => 'events',
                    1 => 'WebProfilerBundle:Collector:events',
                ),
                'data_collector.logger' => array(
                    0 => 'logger',
                    1 => 'WebProfilerBundle:Collector:logger',
                ),
                'data_collector.time' => array(
                    0 => 'time',
                    1 => 'WebProfilerBundle:Collector:time',
                ),
                'data_collector.memory' => array(
                    0 => 'memory',
                    1 => 'WebProfilerBundle:Collector:memory',
                ),
                'data_collector.router' => array(
                    0 => 'router',
                    1 => 'WebProfilerBundle:Collector:router',
                ),
                'data_collector.doctrine' => array(
                    0 => 'db',
                    1 => 'DoctrineBundle:Collector:db',
                ),
            ),
        );
    }
}
