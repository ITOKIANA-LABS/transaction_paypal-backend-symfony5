<?php

namespace Container2xcnrI5;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHoldera4b85 = null;
    private $initializer5f6bf = null;
    private static $publicProperties54775 = [
        
    ];
    public function getConnection()
    {
        $this->initializer5f6bf && ($this->initializer5f6bf->__invoke($valueHoldera4b85, $this, 'getConnection', array(), $this->initializer5f6bf) || 1) && $this->valueHoldera4b85 = $valueHoldera4b85;
        return $this->valueHoldera4b85->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer5f6bf && ($this->initializer5f6bf->__invoke($valueHoldera4b85, $this, 'getMetadataFactory', array(), $this->initializer5f6bf) || 1) && $this->valueHoldera4b85 = $valueHoldera4b85;
        return $this->valueHoldera4b85->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer5f6bf && ($this->initializer5f6bf->__invoke($valueHoldera4b85, $this, 'getExpressionBuilder', array(), $this->initializer5f6bf) || 1) && $this->valueHoldera4b85 = $valueHoldera4b85;
        return $this->valueHoldera4b85->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer5f6bf && ($this->initializer5f6bf->__invoke($valueHoldera4b85, $this, 'beginTransaction', array(), $this->initializer5f6bf) || 1) && $this->valueHoldera4b85 = $valueHoldera4b85;
        return $this->valueHoldera4b85->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer5f6bf && ($this->initializer5f6bf->__invoke($valueHoldera4b85, $this, 'getCache', array(), $this->initializer5f6bf) || 1) && $this->valueHoldera4b85 = $valueHoldera4b85;
        return $this->valueHoldera4b85->getCache();
    }
    public function transactional($func)
    {
        $this->initializer5f6bf && ($this->initializer5f6bf->__invoke($valueHoldera4b85, $this, 'transactional', array('func' => $func), $this->initializer5f6bf) || 1) && $this->valueHoldera4b85 = $valueHoldera4b85;
        return $this->valueHoldera4b85->transactional($func);
    }
    public function commit()
    {
        $this->initializer5f6bf && ($this->initializer5f6bf->__invoke($valueHoldera4b85, $this, 'commit', array(), $this->initializer5f6bf) || 1) && $this->valueHoldera4b85 = $valueHoldera4b85;
        return $this->valueHoldera4b85->commit();
    }
    public function rollback()
    {
        $this->initializer5f6bf && ($this->initializer5f6bf->__invoke($valueHoldera4b85, $this, 'rollback', array(), $this->initializer5f6bf) || 1) && $this->valueHoldera4b85 = $valueHoldera4b85;
        return $this->valueHoldera4b85->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer5f6bf && ($this->initializer5f6bf->__invoke($valueHoldera4b85, $this, 'getClassMetadata', array('className' => $className), $this->initializer5f6bf) || 1) && $this->valueHoldera4b85 = $valueHoldera4b85;
        return $this->valueHoldera4b85->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer5f6bf && ($this->initializer5f6bf->__invoke($valueHoldera4b85, $this, 'createQuery', array('dql' => $dql), $this->initializer5f6bf) || 1) && $this->valueHoldera4b85 = $valueHoldera4b85;
        return $this->valueHoldera4b85->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer5f6bf && ($this->initializer5f6bf->__invoke($valueHoldera4b85, $this, 'createNamedQuery', array('name' => $name), $this->initializer5f6bf) || 1) && $this->valueHoldera4b85 = $valueHoldera4b85;
        return $this->valueHoldera4b85->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer5f6bf && ($this->initializer5f6bf->__invoke($valueHoldera4b85, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer5f6bf) || 1) && $this->valueHoldera4b85 = $valueHoldera4b85;
        return $this->valueHoldera4b85->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer5f6bf && ($this->initializer5f6bf->__invoke($valueHoldera4b85, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer5f6bf) || 1) && $this->valueHoldera4b85 = $valueHoldera4b85;
        return $this->valueHoldera4b85->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer5f6bf && ($this->initializer5f6bf->__invoke($valueHoldera4b85, $this, 'createQueryBuilder', array(), $this->initializer5f6bf) || 1) && $this->valueHoldera4b85 = $valueHoldera4b85;
        return $this->valueHoldera4b85->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer5f6bf && ($this->initializer5f6bf->__invoke($valueHoldera4b85, $this, 'flush', array('entity' => $entity), $this->initializer5f6bf) || 1) && $this->valueHoldera4b85 = $valueHoldera4b85;
        return $this->valueHoldera4b85->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer5f6bf && ($this->initializer5f6bf->__invoke($valueHoldera4b85, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5f6bf) || 1) && $this->valueHoldera4b85 = $valueHoldera4b85;
        return $this->valueHoldera4b85->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer5f6bf && ($this->initializer5f6bf->__invoke($valueHoldera4b85, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer5f6bf) || 1) && $this->valueHoldera4b85 = $valueHoldera4b85;
        return $this->valueHoldera4b85->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer5f6bf && ($this->initializer5f6bf->__invoke($valueHoldera4b85, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer5f6bf) || 1) && $this->valueHoldera4b85 = $valueHoldera4b85;
        return $this->valueHoldera4b85->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer5f6bf && ($this->initializer5f6bf->__invoke($valueHoldera4b85, $this, 'clear', array('entityName' => $entityName), $this->initializer5f6bf) || 1) && $this->valueHoldera4b85 = $valueHoldera4b85;
        return $this->valueHoldera4b85->clear($entityName);
    }
    public function close()
    {
        $this->initializer5f6bf && ($this->initializer5f6bf->__invoke($valueHoldera4b85, $this, 'close', array(), $this->initializer5f6bf) || 1) && $this->valueHoldera4b85 = $valueHoldera4b85;
        return $this->valueHoldera4b85->close();
    }
    public function persist($entity)
    {
        $this->initializer5f6bf && ($this->initializer5f6bf->__invoke($valueHoldera4b85, $this, 'persist', array('entity' => $entity), $this->initializer5f6bf) || 1) && $this->valueHoldera4b85 = $valueHoldera4b85;
        return $this->valueHoldera4b85->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer5f6bf && ($this->initializer5f6bf->__invoke($valueHoldera4b85, $this, 'remove', array('entity' => $entity), $this->initializer5f6bf) || 1) && $this->valueHoldera4b85 = $valueHoldera4b85;
        return $this->valueHoldera4b85->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer5f6bf && ($this->initializer5f6bf->__invoke($valueHoldera4b85, $this, 'refresh', array('entity' => $entity), $this->initializer5f6bf) || 1) && $this->valueHoldera4b85 = $valueHoldera4b85;
        return $this->valueHoldera4b85->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer5f6bf && ($this->initializer5f6bf->__invoke($valueHoldera4b85, $this, 'detach', array('entity' => $entity), $this->initializer5f6bf) || 1) && $this->valueHoldera4b85 = $valueHoldera4b85;
        return $this->valueHoldera4b85->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer5f6bf && ($this->initializer5f6bf->__invoke($valueHoldera4b85, $this, 'merge', array('entity' => $entity), $this->initializer5f6bf) || 1) && $this->valueHoldera4b85 = $valueHoldera4b85;
        return $this->valueHoldera4b85->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer5f6bf && ($this->initializer5f6bf->__invoke($valueHoldera4b85, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer5f6bf) || 1) && $this->valueHoldera4b85 = $valueHoldera4b85;
        return $this->valueHoldera4b85->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer5f6bf && ($this->initializer5f6bf->__invoke($valueHoldera4b85, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5f6bf) || 1) && $this->valueHoldera4b85 = $valueHoldera4b85;
        return $this->valueHoldera4b85->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer5f6bf && ($this->initializer5f6bf->__invoke($valueHoldera4b85, $this, 'getRepository', array('entityName' => $entityName), $this->initializer5f6bf) || 1) && $this->valueHoldera4b85 = $valueHoldera4b85;
        return $this->valueHoldera4b85->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer5f6bf && ($this->initializer5f6bf->__invoke($valueHoldera4b85, $this, 'contains', array('entity' => $entity), $this->initializer5f6bf) || 1) && $this->valueHoldera4b85 = $valueHoldera4b85;
        return $this->valueHoldera4b85->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer5f6bf && ($this->initializer5f6bf->__invoke($valueHoldera4b85, $this, 'getEventManager', array(), $this->initializer5f6bf) || 1) && $this->valueHoldera4b85 = $valueHoldera4b85;
        return $this->valueHoldera4b85->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer5f6bf && ($this->initializer5f6bf->__invoke($valueHoldera4b85, $this, 'getConfiguration', array(), $this->initializer5f6bf) || 1) && $this->valueHoldera4b85 = $valueHoldera4b85;
        return $this->valueHoldera4b85->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer5f6bf && ($this->initializer5f6bf->__invoke($valueHoldera4b85, $this, 'isOpen', array(), $this->initializer5f6bf) || 1) && $this->valueHoldera4b85 = $valueHoldera4b85;
        return $this->valueHoldera4b85->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer5f6bf && ($this->initializer5f6bf->__invoke($valueHoldera4b85, $this, 'getUnitOfWork', array(), $this->initializer5f6bf) || 1) && $this->valueHoldera4b85 = $valueHoldera4b85;
        return $this->valueHoldera4b85->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer5f6bf && ($this->initializer5f6bf->__invoke($valueHoldera4b85, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5f6bf) || 1) && $this->valueHoldera4b85 = $valueHoldera4b85;
        return $this->valueHoldera4b85->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer5f6bf && ($this->initializer5f6bf->__invoke($valueHoldera4b85, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5f6bf) || 1) && $this->valueHoldera4b85 = $valueHoldera4b85;
        return $this->valueHoldera4b85->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer5f6bf && ($this->initializer5f6bf->__invoke($valueHoldera4b85, $this, 'getProxyFactory', array(), $this->initializer5f6bf) || 1) && $this->valueHoldera4b85 = $valueHoldera4b85;
        return $this->valueHoldera4b85->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer5f6bf && ($this->initializer5f6bf->__invoke($valueHoldera4b85, $this, 'initializeObject', array('obj' => $obj), $this->initializer5f6bf) || 1) && $this->valueHoldera4b85 = $valueHoldera4b85;
        return $this->valueHoldera4b85->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer5f6bf && ($this->initializer5f6bf->__invoke($valueHoldera4b85, $this, 'getFilters', array(), $this->initializer5f6bf) || 1) && $this->valueHoldera4b85 = $valueHoldera4b85;
        return $this->valueHoldera4b85->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer5f6bf && ($this->initializer5f6bf->__invoke($valueHoldera4b85, $this, 'isFiltersStateClean', array(), $this->initializer5f6bf) || 1) && $this->valueHoldera4b85 = $valueHoldera4b85;
        return $this->valueHoldera4b85->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer5f6bf && ($this->initializer5f6bf->__invoke($valueHoldera4b85, $this, 'hasFilters', array(), $this->initializer5f6bf) || 1) && $this->valueHoldera4b85 = $valueHoldera4b85;
        return $this->valueHoldera4b85->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer5f6bf = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHoldera4b85) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera4b85 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHoldera4b85->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer5f6bf && ($this->initializer5f6bf->__invoke($valueHoldera4b85, $this, '__get', ['name' => $name], $this->initializer5f6bf) || 1) && $this->valueHoldera4b85 = $valueHoldera4b85;
        if (isset(self::$publicProperties54775[$name])) {
            return $this->valueHoldera4b85->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera4b85;
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
        $targetObject = $this->valueHoldera4b85;
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
        $this->initializer5f6bf && ($this->initializer5f6bf->__invoke($valueHoldera4b85, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5f6bf) || 1) && $this->valueHoldera4b85 = $valueHoldera4b85;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera4b85;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHoldera4b85;
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
        $this->initializer5f6bf && ($this->initializer5f6bf->__invoke($valueHoldera4b85, $this, '__isset', array('name' => $name), $this->initializer5f6bf) || 1) && $this->valueHoldera4b85 = $valueHoldera4b85;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera4b85;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHoldera4b85;
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
        $this->initializer5f6bf && ($this->initializer5f6bf->__invoke($valueHoldera4b85, $this, '__unset', array('name' => $name), $this->initializer5f6bf) || 1) && $this->valueHoldera4b85 = $valueHoldera4b85;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera4b85;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHoldera4b85;
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
        $this->initializer5f6bf && ($this->initializer5f6bf->__invoke($valueHoldera4b85, $this, '__clone', array(), $this->initializer5f6bf) || 1) && $this->valueHoldera4b85 = $valueHoldera4b85;
        $this->valueHoldera4b85 = clone $this->valueHoldera4b85;
    }
    public function __sleep()
    {
        $this->initializer5f6bf && ($this->initializer5f6bf->__invoke($valueHoldera4b85, $this, '__sleep', array(), $this->initializer5f6bf) || 1) && $this->valueHoldera4b85 = $valueHoldera4b85;
        return array('valueHoldera4b85');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer5f6bf = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer5f6bf;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer5f6bf && ($this->initializer5f6bf->__invoke($valueHoldera4b85, $this, 'initializeProxy', array(), $this->initializer5f6bf) || 1) && $this->valueHoldera4b85 = $valueHoldera4b85;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera4b85;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera4b85;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
