<?php

namespace ContainerY6Xsglu;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldere2ac6 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializercc46c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd6e63 = [
        
    ];

    public function getConnection()
    {
        $this->initializercc46c && ($this->initializercc46c->__invoke($valueHoldere2ac6, $this, 'getConnection', array(), $this->initializercc46c) || 1) && $this->valueHoldere2ac6 = $valueHoldere2ac6;

        return $this->valueHoldere2ac6->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializercc46c && ($this->initializercc46c->__invoke($valueHoldere2ac6, $this, 'getMetadataFactory', array(), $this->initializercc46c) || 1) && $this->valueHoldere2ac6 = $valueHoldere2ac6;

        return $this->valueHoldere2ac6->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializercc46c && ($this->initializercc46c->__invoke($valueHoldere2ac6, $this, 'getExpressionBuilder', array(), $this->initializercc46c) || 1) && $this->valueHoldere2ac6 = $valueHoldere2ac6;

        return $this->valueHoldere2ac6->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializercc46c && ($this->initializercc46c->__invoke($valueHoldere2ac6, $this, 'beginTransaction', array(), $this->initializercc46c) || 1) && $this->valueHoldere2ac6 = $valueHoldere2ac6;

        return $this->valueHoldere2ac6->beginTransaction();
    }

    public function getCache()
    {
        $this->initializercc46c && ($this->initializercc46c->__invoke($valueHoldere2ac6, $this, 'getCache', array(), $this->initializercc46c) || 1) && $this->valueHoldere2ac6 = $valueHoldere2ac6;

        return $this->valueHoldere2ac6->getCache();
    }

    public function transactional($func)
    {
        $this->initializercc46c && ($this->initializercc46c->__invoke($valueHoldere2ac6, $this, 'transactional', array('func' => $func), $this->initializercc46c) || 1) && $this->valueHoldere2ac6 = $valueHoldere2ac6;

        return $this->valueHoldere2ac6->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializercc46c && ($this->initializercc46c->__invoke($valueHoldere2ac6, $this, 'wrapInTransaction', array('func' => $func), $this->initializercc46c) || 1) && $this->valueHoldere2ac6 = $valueHoldere2ac6;

        return $this->valueHoldere2ac6->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializercc46c && ($this->initializercc46c->__invoke($valueHoldere2ac6, $this, 'commit', array(), $this->initializercc46c) || 1) && $this->valueHoldere2ac6 = $valueHoldere2ac6;

        return $this->valueHoldere2ac6->commit();
    }

    public function rollback()
    {
        $this->initializercc46c && ($this->initializercc46c->__invoke($valueHoldere2ac6, $this, 'rollback', array(), $this->initializercc46c) || 1) && $this->valueHoldere2ac6 = $valueHoldere2ac6;

        return $this->valueHoldere2ac6->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializercc46c && ($this->initializercc46c->__invoke($valueHoldere2ac6, $this, 'getClassMetadata', array('className' => $className), $this->initializercc46c) || 1) && $this->valueHoldere2ac6 = $valueHoldere2ac6;

        return $this->valueHoldere2ac6->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializercc46c && ($this->initializercc46c->__invoke($valueHoldere2ac6, $this, 'createQuery', array('dql' => $dql), $this->initializercc46c) || 1) && $this->valueHoldere2ac6 = $valueHoldere2ac6;

        return $this->valueHoldere2ac6->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializercc46c && ($this->initializercc46c->__invoke($valueHoldere2ac6, $this, 'createNamedQuery', array('name' => $name), $this->initializercc46c) || 1) && $this->valueHoldere2ac6 = $valueHoldere2ac6;

        return $this->valueHoldere2ac6->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializercc46c && ($this->initializercc46c->__invoke($valueHoldere2ac6, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializercc46c) || 1) && $this->valueHoldere2ac6 = $valueHoldere2ac6;

        return $this->valueHoldere2ac6->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializercc46c && ($this->initializercc46c->__invoke($valueHoldere2ac6, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializercc46c) || 1) && $this->valueHoldere2ac6 = $valueHoldere2ac6;

        return $this->valueHoldere2ac6->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializercc46c && ($this->initializercc46c->__invoke($valueHoldere2ac6, $this, 'createQueryBuilder', array(), $this->initializercc46c) || 1) && $this->valueHoldere2ac6 = $valueHoldere2ac6;

        return $this->valueHoldere2ac6->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializercc46c && ($this->initializercc46c->__invoke($valueHoldere2ac6, $this, 'flush', array('entity' => $entity), $this->initializercc46c) || 1) && $this->valueHoldere2ac6 = $valueHoldere2ac6;

        return $this->valueHoldere2ac6->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializercc46c && ($this->initializercc46c->__invoke($valueHoldere2ac6, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercc46c) || 1) && $this->valueHoldere2ac6 = $valueHoldere2ac6;

        return $this->valueHoldere2ac6->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializercc46c && ($this->initializercc46c->__invoke($valueHoldere2ac6, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializercc46c) || 1) && $this->valueHoldere2ac6 = $valueHoldere2ac6;

        return $this->valueHoldere2ac6->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializercc46c && ($this->initializercc46c->__invoke($valueHoldere2ac6, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializercc46c) || 1) && $this->valueHoldere2ac6 = $valueHoldere2ac6;

        return $this->valueHoldere2ac6->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializercc46c && ($this->initializercc46c->__invoke($valueHoldere2ac6, $this, 'clear', array('entityName' => $entityName), $this->initializercc46c) || 1) && $this->valueHoldere2ac6 = $valueHoldere2ac6;

        return $this->valueHoldere2ac6->clear($entityName);
    }

    public function close()
    {
        $this->initializercc46c && ($this->initializercc46c->__invoke($valueHoldere2ac6, $this, 'close', array(), $this->initializercc46c) || 1) && $this->valueHoldere2ac6 = $valueHoldere2ac6;

        return $this->valueHoldere2ac6->close();
    }

    public function persist($entity)
    {
        $this->initializercc46c && ($this->initializercc46c->__invoke($valueHoldere2ac6, $this, 'persist', array('entity' => $entity), $this->initializercc46c) || 1) && $this->valueHoldere2ac6 = $valueHoldere2ac6;

        return $this->valueHoldere2ac6->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializercc46c && ($this->initializercc46c->__invoke($valueHoldere2ac6, $this, 'remove', array('entity' => $entity), $this->initializercc46c) || 1) && $this->valueHoldere2ac6 = $valueHoldere2ac6;

        return $this->valueHoldere2ac6->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializercc46c && ($this->initializercc46c->__invoke($valueHoldere2ac6, $this, 'refresh', array('entity' => $entity), $this->initializercc46c) || 1) && $this->valueHoldere2ac6 = $valueHoldere2ac6;

        return $this->valueHoldere2ac6->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializercc46c && ($this->initializercc46c->__invoke($valueHoldere2ac6, $this, 'detach', array('entity' => $entity), $this->initializercc46c) || 1) && $this->valueHoldere2ac6 = $valueHoldere2ac6;

        return $this->valueHoldere2ac6->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializercc46c && ($this->initializercc46c->__invoke($valueHoldere2ac6, $this, 'merge', array('entity' => $entity), $this->initializercc46c) || 1) && $this->valueHoldere2ac6 = $valueHoldere2ac6;

        return $this->valueHoldere2ac6->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializercc46c && ($this->initializercc46c->__invoke($valueHoldere2ac6, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializercc46c) || 1) && $this->valueHoldere2ac6 = $valueHoldere2ac6;

        return $this->valueHoldere2ac6->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializercc46c && ($this->initializercc46c->__invoke($valueHoldere2ac6, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercc46c) || 1) && $this->valueHoldere2ac6 = $valueHoldere2ac6;

        return $this->valueHoldere2ac6->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializercc46c && ($this->initializercc46c->__invoke($valueHoldere2ac6, $this, 'getRepository', array('entityName' => $entityName), $this->initializercc46c) || 1) && $this->valueHoldere2ac6 = $valueHoldere2ac6;

        return $this->valueHoldere2ac6->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializercc46c && ($this->initializercc46c->__invoke($valueHoldere2ac6, $this, 'contains', array('entity' => $entity), $this->initializercc46c) || 1) && $this->valueHoldere2ac6 = $valueHoldere2ac6;

        return $this->valueHoldere2ac6->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializercc46c && ($this->initializercc46c->__invoke($valueHoldere2ac6, $this, 'getEventManager', array(), $this->initializercc46c) || 1) && $this->valueHoldere2ac6 = $valueHoldere2ac6;

        return $this->valueHoldere2ac6->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializercc46c && ($this->initializercc46c->__invoke($valueHoldere2ac6, $this, 'getConfiguration', array(), $this->initializercc46c) || 1) && $this->valueHoldere2ac6 = $valueHoldere2ac6;

        return $this->valueHoldere2ac6->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializercc46c && ($this->initializercc46c->__invoke($valueHoldere2ac6, $this, 'isOpen', array(), $this->initializercc46c) || 1) && $this->valueHoldere2ac6 = $valueHoldere2ac6;

        return $this->valueHoldere2ac6->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializercc46c && ($this->initializercc46c->__invoke($valueHoldere2ac6, $this, 'getUnitOfWork', array(), $this->initializercc46c) || 1) && $this->valueHoldere2ac6 = $valueHoldere2ac6;

        return $this->valueHoldere2ac6->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializercc46c && ($this->initializercc46c->__invoke($valueHoldere2ac6, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializercc46c) || 1) && $this->valueHoldere2ac6 = $valueHoldere2ac6;

        return $this->valueHoldere2ac6->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializercc46c && ($this->initializercc46c->__invoke($valueHoldere2ac6, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializercc46c) || 1) && $this->valueHoldere2ac6 = $valueHoldere2ac6;

        return $this->valueHoldere2ac6->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializercc46c && ($this->initializercc46c->__invoke($valueHoldere2ac6, $this, 'getProxyFactory', array(), $this->initializercc46c) || 1) && $this->valueHoldere2ac6 = $valueHoldere2ac6;

        return $this->valueHoldere2ac6->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializercc46c && ($this->initializercc46c->__invoke($valueHoldere2ac6, $this, 'initializeObject', array('obj' => $obj), $this->initializercc46c) || 1) && $this->valueHoldere2ac6 = $valueHoldere2ac6;

        return $this->valueHoldere2ac6->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializercc46c && ($this->initializercc46c->__invoke($valueHoldere2ac6, $this, 'getFilters', array(), $this->initializercc46c) || 1) && $this->valueHoldere2ac6 = $valueHoldere2ac6;

        return $this->valueHoldere2ac6->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializercc46c && ($this->initializercc46c->__invoke($valueHoldere2ac6, $this, 'isFiltersStateClean', array(), $this->initializercc46c) || 1) && $this->valueHoldere2ac6 = $valueHoldere2ac6;

        return $this->valueHoldere2ac6->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializercc46c && ($this->initializercc46c->__invoke($valueHoldere2ac6, $this, 'hasFilters', array(), $this->initializercc46c) || 1) && $this->valueHoldere2ac6 = $valueHoldere2ac6;

        return $this->valueHoldere2ac6->hasFilters();
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

        $instance->initializercc46c = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHoldere2ac6) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere2ac6 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldere2ac6->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializercc46c && ($this->initializercc46c->__invoke($valueHoldere2ac6, $this, '__get', ['name' => $name], $this->initializercc46c) || 1) && $this->valueHoldere2ac6 = $valueHoldere2ac6;

        if (isset(self::$publicPropertiesd6e63[$name])) {
            return $this->valueHoldere2ac6->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere2ac6;

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

        $targetObject = $this->valueHoldere2ac6;
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
        $this->initializercc46c && ($this->initializercc46c->__invoke($valueHoldere2ac6, $this, '__set', array('name' => $name, 'value' => $value), $this->initializercc46c) || 1) && $this->valueHoldere2ac6 = $valueHoldere2ac6;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere2ac6;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere2ac6;
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
        $this->initializercc46c && ($this->initializercc46c->__invoke($valueHoldere2ac6, $this, '__isset', array('name' => $name), $this->initializercc46c) || 1) && $this->valueHoldere2ac6 = $valueHoldere2ac6;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere2ac6;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldere2ac6;
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
        $this->initializercc46c && ($this->initializercc46c->__invoke($valueHoldere2ac6, $this, '__unset', array('name' => $name), $this->initializercc46c) || 1) && $this->valueHoldere2ac6 = $valueHoldere2ac6;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere2ac6;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldere2ac6;
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
        $this->initializercc46c && ($this->initializercc46c->__invoke($valueHoldere2ac6, $this, '__clone', array(), $this->initializercc46c) || 1) && $this->valueHoldere2ac6 = $valueHoldere2ac6;

        $this->valueHoldere2ac6 = clone $this->valueHoldere2ac6;
    }

    public function __sleep()
    {
        $this->initializercc46c && ($this->initializercc46c->__invoke($valueHoldere2ac6, $this, '__sleep', array(), $this->initializercc46c) || 1) && $this->valueHoldere2ac6 = $valueHoldere2ac6;

        return array('valueHoldere2ac6');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializercc46c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializercc46c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializercc46c && ($this->initializercc46c->__invoke($valueHoldere2ac6, $this, 'initializeProxy', array(), $this->initializercc46c) || 1) && $this->valueHoldere2ac6 = $valueHoldere2ac6;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere2ac6;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere2ac6;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
