<?php

namespace ContainerGI9glz2;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder777a8 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer1315b = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties6af11 = [
        
    ];

    public function getConnection()
    {
        $this->initializer1315b && ($this->initializer1315b->__invoke($valueHolder777a8, $this, 'getConnection', array(), $this->initializer1315b) || 1) && $this->valueHolder777a8 = $valueHolder777a8;

        return $this->valueHolder777a8->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer1315b && ($this->initializer1315b->__invoke($valueHolder777a8, $this, 'getMetadataFactory', array(), $this->initializer1315b) || 1) && $this->valueHolder777a8 = $valueHolder777a8;

        return $this->valueHolder777a8->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer1315b && ($this->initializer1315b->__invoke($valueHolder777a8, $this, 'getExpressionBuilder', array(), $this->initializer1315b) || 1) && $this->valueHolder777a8 = $valueHolder777a8;

        return $this->valueHolder777a8->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer1315b && ($this->initializer1315b->__invoke($valueHolder777a8, $this, 'beginTransaction', array(), $this->initializer1315b) || 1) && $this->valueHolder777a8 = $valueHolder777a8;

        return $this->valueHolder777a8->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer1315b && ($this->initializer1315b->__invoke($valueHolder777a8, $this, 'getCache', array(), $this->initializer1315b) || 1) && $this->valueHolder777a8 = $valueHolder777a8;

        return $this->valueHolder777a8->getCache();
    }

    public function transactional($func)
    {
        $this->initializer1315b && ($this->initializer1315b->__invoke($valueHolder777a8, $this, 'transactional', array('func' => $func), $this->initializer1315b) || 1) && $this->valueHolder777a8 = $valueHolder777a8;

        return $this->valueHolder777a8->transactional($func);
    }

    public function commit()
    {
        $this->initializer1315b && ($this->initializer1315b->__invoke($valueHolder777a8, $this, 'commit', array(), $this->initializer1315b) || 1) && $this->valueHolder777a8 = $valueHolder777a8;

        return $this->valueHolder777a8->commit();
    }

    public function rollback()
    {
        $this->initializer1315b && ($this->initializer1315b->__invoke($valueHolder777a8, $this, 'rollback', array(), $this->initializer1315b) || 1) && $this->valueHolder777a8 = $valueHolder777a8;

        return $this->valueHolder777a8->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer1315b && ($this->initializer1315b->__invoke($valueHolder777a8, $this, 'getClassMetadata', array('className' => $className), $this->initializer1315b) || 1) && $this->valueHolder777a8 = $valueHolder777a8;

        return $this->valueHolder777a8->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer1315b && ($this->initializer1315b->__invoke($valueHolder777a8, $this, 'createQuery', array('dql' => $dql), $this->initializer1315b) || 1) && $this->valueHolder777a8 = $valueHolder777a8;

        return $this->valueHolder777a8->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer1315b && ($this->initializer1315b->__invoke($valueHolder777a8, $this, 'createNamedQuery', array('name' => $name), $this->initializer1315b) || 1) && $this->valueHolder777a8 = $valueHolder777a8;

        return $this->valueHolder777a8->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer1315b && ($this->initializer1315b->__invoke($valueHolder777a8, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer1315b) || 1) && $this->valueHolder777a8 = $valueHolder777a8;

        return $this->valueHolder777a8->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer1315b && ($this->initializer1315b->__invoke($valueHolder777a8, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer1315b) || 1) && $this->valueHolder777a8 = $valueHolder777a8;

        return $this->valueHolder777a8->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer1315b && ($this->initializer1315b->__invoke($valueHolder777a8, $this, 'createQueryBuilder', array(), $this->initializer1315b) || 1) && $this->valueHolder777a8 = $valueHolder777a8;

        return $this->valueHolder777a8->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer1315b && ($this->initializer1315b->__invoke($valueHolder777a8, $this, 'flush', array('entity' => $entity), $this->initializer1315b) || 1) && $this->valueHolder777a8 = $valueHolder777a8;

        return $this->valueHolder777a8->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer1315b && ($this->initializer1315b->__invoke($valueHolder777a8, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1315b) || 1) && $this->valueHolder777a8 = $valueHolder777a8;

        return $this->valueHolder777a8->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer1315b && ($this->initializer1315b->__invoke($valueHolder777a8, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer1315b) || 1) && $this->valueHolder777a8 = $valueHolder777a8;

        return $this->valueHolder777a8->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer1315b && ($this->initializer1315b->__invoke($valueHolder777a8, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer1315b) || 1) && $this->valueHolder777a8 = $valueHolder777a8;

        return $this->valueHolder777a8->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer1315b && ($this->initializer1315b->__invoke($valueHolder777a8, $this, 'clear', array('entityName' => $entityName), $this->initializer1315b) || 1) && $this->valueHolder777a8 = $valueHolder777a8;

        return $this->valueHolder777a8->clear($entityName);
    }

    public function close()
    {
        $this->initializer1315b && ($this->initializer1315b->__invoke($valueHolder777a8, $this, 'close', array(), $this->initializer1315b) || 1) && $this->valueHolder777a8 = $valueHolder777a8;

        return $this->valueHolder777a8->close();
    }

    public function persist($entity)
    {
        $this->initializer1315b && ($this->initializer1315b->__invoke($valueHolder777a8, $this, 'persist', array('entity' => $entity), $this->initializer1315b) || 1) && $this->valueHolder777a8 = $valueHolder777a8;

        return $this->valueHolder777a8->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer1315b && ($this->initializer1315b->__invoke($valueHolder777a8, $this, 'remove', array('entity' => $entity), $this->initializer1315b) || 1) && $this->valueHolder777a8 = $valueHolder777a8;

        return $this->valueHolder777a8->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer1315b && ($this->initializer1315b->__invoke($valueHolder777a8, $this, 'refresh', array('entity' => $entity), $this->initializer1315b) || 1) && $this->valueHolder777a8 = $valueHolder777a8;

        return $this->valueHolder777a8->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer1315b && ($this->initializer1315b->__invoke($valueHolder777a8, $this, 'detach', array('entity' => $entity), $this->initializer1315b) || 1) && $this->valueHolder777a8 = $valueHolder777a8;

        return $this->valueHolder777a8->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer1315b && ($this->initializer1315b->__invoke($valueHolder777a8, $this, 'merge', array('entity' => $entity), $this->initializer1315b) || 1) && $this->valueHolder777a8 = $valueHolder777a8;

        return $this->valueHolder777a8->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer1315b && ($this->initializer1315b->__invoke($valueHolder777a8, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer1315b) || 1) && $this->valueHolder777a8 = $valueHolder777a8;

        return $this->valueHolder777a8->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer1315b && ($this->initializer1315b->__invoke($valueHolder777a8, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1315b) || 1) && $this->valueHolder777a8 = $valueHolder777a8;

        return $this->valueHolder777a8->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer1315b && ($this->initializer1315b->__invoke($valueHolder777a8, $this, 'getRepository', array('entityName' => $entityName), $this->initializer1315b) || 1) && $this->valueHolder777a8 = $valueHolder777a8;

        return $this->valueHolder777a8->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer1315b && ($this->initializer1315b->__invoke($valueHolder777a8, $this, 'contains', array('entity' => $entity), $this->initializer1315b) || 1) && $this->valueHolder777a8 = $valueHolder777a8;

        return $this->valueHolder777a8->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer1315b && ($this->initializer1315b->__invoke($valueHolder777a8, $this, 'getEventManager', array(), $this->initializer1315b) || 1) && $this->valueHolder777a8 = $valueHolder777a8;

        return $this->valueHolder777a8->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer1315b && ($this->initializer1315b->__invoke($valueHolder777a8, $this, 'getConfiguration', array(), $this->initializer1315b) || 1) && $this->valueHolder777a8 = $valueHolder777a8;

        return $this->valueHolder777a8->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer1315b && ($this->initializer1315b->__invoke($valueHolder777a8, $this, 'isOpen', array(), $this->initializer1315b) || 1) && $this->valueHolder777a8 = $valueHolder777a8;

        return $this->valueHolder777a8->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer1315b && ($this->initializer1315b->__invoke($valueHolder777a8, $this, 'getUnitOfWork', array(), $this->initializer1315b) || 1) && $this->valueHolder777a8 = $valueHolder777a8;

        return $this->valueHolder777a8->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer1315b && ($this->initializer1315b->__invoke($valueHolder777a8, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1315b) || 1) && $this->valueHolder777a8 = $valueHolder777a8;

        return $this->valueHolder777a8->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer1315b && ($this->initializer1315b->__invoke($valueHolder777a8, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1315b) || 1) && $this->valueHolder777a8 = $valueHolder777a8;

        return $this->valueHolder777a8->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer1315b && ($this->initializer1315b->__invoke($valueHolder777a8, $this, 'getProxyFactory', array(), $this->initializer1315b) || 1) && $this->valueHolder777a8 = $valueHolder777a8;

        return $this->valueHolder777a8->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer1315b && ($this->initializer1315b->__invoke($valueHolder777a8, $this, 'initializeObject', array('obj' => $obj), $this->initializer1315b) || 1) && $this->valueHolder777a8 = $valueHolder777a8;

        return $this->valueHolder777a8->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer1315b && ($this->initializer1315b->__invoke($valueHolder777a8, $this, 'getFilters', array(), $this->initializer1315b) || 1) && $this->valueHolder777a8 = $valueHolder777a8;

        return $this->valueHolder777a8->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer1315b && ($this->initializer1315b->__invoke($valueHolder777a8, $this, 'isFiltersStateClean', array(), $this->initializer1315b) || 1) && $this->valueHolder777a8 = $valueHolder777a8;

        return $this->valueHolder777a8->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer1315b && ($this->initializer1315b->__invoke($valueHolder777a8, $this, 'hasFilters', array(), $this->initializer1315b) || 1) && $this->valueHolder777a8 = $valueHolder777a8;

        return $this->valueHolder777a8->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer1315b = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder777a8) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder777a8 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder777a8->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer1315b && ($this->initializer1315b->__invoke($valueHolder777a8, $this, '__get', ['name' => $name], $this->initializer1315b) || 1) && $this->valueHolder777a8 = $valueHolder777a8;

        if (isset(self::$publicProperties6af11[$name])) {
            return $this->valueHolder777a8->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder777a8;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder777a8;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer1315b && ($this->initializer1315b->__invoke($valueHolder777a8, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer1315b) || 1) && $this->valueHolder777a8 = $valueHolder777a8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder777a8;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder777a8;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer1315b && ($this->initializer1315b->__invoke($valueHolder777a8, $this, '__isset', array('name' => $name), $this->initializer1315b) || 1) && $this->valueHolder777a8 = $valueHolder777a8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder777a8;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder777a8;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer1315b && ($this->initializer1315b->__invoke($valueHolder777a8, $this, '__unset', array('name' => $name), $this->initializer1315b) || 1) && $this->valueHolder777a8 = $valueHolder777a8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder777a8;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder777a8;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer1315b && ($this->initializer1315b->__invoke($valueHolder777a8, $this, '__clone', array(), $this->initializer1315b) || 1) && $this->valueHolder777a8 = $valueHolder777a8;

        $this->valueHolder777a8 = clone $this->valueHolder777a8;
    }

    public function __sleep()
    {
        $this->initializer1315b && ($this->initializer1315b->__invoke($valueHolder777a8, $this, '__sleep', array(), $this->initializer1315b) || 1) && $this->valueHolder777a8 = $valueHolder777a8;

        return array('valueHolder777a8');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer1315b = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer1315b;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer1315b && ($this->initializer1315b->__invoke($valueHolder777a8, $this, 'initializeProxy', array(), $this->initializer1315b) || 1) && $this->valueHolder777a8 = $valueHolder777a8;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder777a8;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder777a8;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
