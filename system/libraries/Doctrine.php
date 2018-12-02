<?php
/**
 * Doctrine 2.4 bootstrap
 *
 */

use Doctrine\Common\ClassLoader,
    Doctrine\ORM\Configuration,
    Doctrine\ORM\EntityManager,
    Doctrine\Common\Cache\ArrayCache,
    Doctrine\DBAL\Logging\EchoSQLLogger;


class Doctrine {

    public $em = null;

    public function __construct()
    {
        // load database configuration from CodeIgniter
        require_once APPPATH.'config/database.php';

        // include Doctrine's ClassLoader class
        require_once APPPATH.'third_party/Doctrine/Common/ClassLoader.php';

        // load the Doctrine classes
        $doctrineClassLoader = new ClassLoader('Doctrine',  APPPATH.'third_party');
        $doctrineClassLoader->register();
        // load the entities
        $entityClassLoader = new ClassLoader('Entities', APPPATH.'models');
        $entityClassLoader->register();
        // load the proxy entities
        $proxiesClassLoader = new ClassLoader('Proxies', APPPATH.'models/proxies');
        $proxiesClassLoader->register();
        // load Symfony2 classes
        // this is necessary for YAML mapping files and for Command Line Interface (cli-doctrine.php)
        $symfonyClassLoader = new ClassLoader('Symfony',  APPPATH.'third_party/Doctrine');
        $symfonyClassLoader->register();

        // Set up the configuration
        $config = new Configuration;

        // Set up caches
        if(ENVIRONMENT == 'development')  // set environment in index.php
            // set up simple array caching for development mode
            $cache = new \Doctrine\Common\Cache\ArrayCache;
        else
            // set up caching with APC for production mode
            $cache = new \Doctrine\Common\Cache\ApcCache;
        $config->setMetadataCacheImpl($cache);
        $config->setQueryCacheImpl($cache);

        // set up annotation driver
        $driver = new \Doctrine\ORM\Mapping\Driver\PHPDriver(APPPATH.'models/Mappings');
        $config->setMetadataDriverImpl($driver);

        // Proxy configuration
        $config->setProxyDir(APPPATH.'/models/Proxies');
        $config->setProxyNamespace('Proxies');

        // Set up logger
        $logger = new EchoSQLLogger;
        $config->setSQLLogger($logger);

        $config->setAutoGenerateProxyClasses( TRUE ); // only for development

        // Database connection information
        $connectionOptions = array(
            'driver' => 'pdo_mysql',
            'user' =>     $db['default']['username'],
            'password' => $db['default']['password'],
            'host' =>     $db['default']['hostname'],
            'dbname' =>   $db['default']['database']
        );

        // Create EntityManager, and store it for use in our CodeIgniter controllers
        $this->em = EntityManager::create($connectionOptions, $config);
    }
}