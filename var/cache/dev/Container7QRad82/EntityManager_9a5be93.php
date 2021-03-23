<?php

namespace Container7QRad82;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderfea9f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer78781 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesc7916 = [
        
    ];

    public function getConnection()
    {
        $this->initializer78781 && ($this->initializer78781->__invoke($valueHolderfea9f, $this, 'getConnection', array(), $this->initializer78781) || 1) && $this->valueHolderfea9f = $valueHolderfea9f;

        return $this->valueHolderfea9f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer78781 && ($this->initializer78781->__invoke($valueHolderfea9f, $this, 'getMetadataFactory', array(), $this->initializer78781) || 1) && $this->valueHolderfea9f = $valueHolderfea9f;

        return $this->valueHolderfea9f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer78781 && ($this->initializer78781->__invoke($valueHolderfea9f, $this, 'getExpressionBuilder', array(), $this->initializer78781) || 1) && $this->valueHolderfea9f = $valueHolderfea9f;

        return $this->valueHolderfea9f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer78781 && ($this->initializer78781->__invoke($valueHolderfea9f, $this, 'beginTransaction', array(), $this->initializer78781) || 1) && $this->valueHolderfea9f = $valueHolderfea9f;

        return $this->valueHolderfea9f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer78781 && ($this->initializer78781->__invoke($valueHolderfea9f, $this, 'getCache', array(), $this->initializer78781) || 1) && $this->valueHolderfea9f = $valueHolderfea9f;

        return $this->valueHolderfea9f->getCache();
    }

    public function transactional($func)
    {
        $this->initializer78781 && ($this->initializer78781->__invoke($valueHolderfea9f, $this, 'transactional', array('func' => $func), $this->initializer78781) || 1) && $this->valueHolderfea9f = $valueHolderfea9f;

        return $this->valueHolderfea9f->transactional($func);
    }

    public function commit()
    {
        $this->initializer78781 && ($this->initializer78781->__invoke($valueHolderfea9f, $this, 'commit', array(), $this->initializer78781) || 1) && $this->valueHolderfea9f = $valueHolderfea9f;

        return $this->valueHolderfea9f->commit();
    }

    public function rollback()
    {
        $this->initializer78781 && ($this->initializer78781->__invoke($valueHolderfea9f, $this, 'rollback', array(), $this->initializer78781) || 1) && $this->valueHolderfea9f = $valueHolderfea9f;

        return $this->valueHolderfea9f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer78781 && ($this->initializer78781->__invoke($valueHolderfea9f, $this, 'getClassMetadata', array('className' => $className), $this->initializer78781) || 1) && $this->valueHolderfea9f = $valueHolderfea9f;

        return $this->valueHolderfea9f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer78781 && ($this->initializer78781->__invoke($valueHolderfea9f, $this, 'createQuery', array('dql' => $dql), $this->initializer78781) || 1) && $this->valueHolderfea9f = $valueHolderfea9f;

        return $this->valueHolderfea9f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer78781 && ($this->initializer78781->__invoke($valueHolderfea9f, $this, 'createNamedQuery', array('name' => $name), $this->initializer78781) || 1) && $this->valueHolderfea9f = $valueHolderfea9f;

        return $this->valueHolderfea9f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer78781 && ($this->initializer78781->__invoke($valueHolderfea9f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer78781) || 1) && $this->valueHolderfea9f = $valueHolderfea9f;

        return $this->valueHolderfea9f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer78781 && ($this->initializer78781->__invoke($valueHolderfea9f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer78781) || 1) && $this->valueHolderfea9f = $valueHolderfea9f;

        return $this->valueHolderfea9f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer78781 && ($this->initializer78781->__invoke($valueHolderfea9f, $this, 'createQueryBuilder', array(), $this->initializer78781) || 1) && $this->valueHolderfea9f = $valueHolderfea9f;

        return $this->valueHolderfea9f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer78781 && ($this->initializer78781->__invoke($valueHolderfea9f, $this, 'flush', array('entity' => $entity), $this->initializer78781) || 1) && $this->valueHolderfea9f = $valueHolderfea9f;

        return $this->valueHolderfea9f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer78781 && ($this->initializer78781->__invoke($valueHolderfea9f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer78781) || 1) && $this->valueHolderfea9f = $valueHolderfea9f;

        return $this->valueHolderfea9f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer78781 && ($this->initializer78781->__invoke($valueHolderfea9f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer78781) || 1) && $this->valueHolderfea9f = $valueHolderfea9f;

        return $this->valueHolderfea9f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer78781 && ($this->initializer78781->__invoke($valueHolderfea9f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer78781) || 1) && $this->valueHolderfea9f = $valueHolderfea9f;

        return $this->valueHolderfea9f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer78781 && ($this->initializer78781->__invoke($valueHolderfea9f, $this, 'clear', array('entityName' => $entityName), $this->initializer78781) || 1) && $this->valueHolderfea9f = $valueHolderfea9f;

        return $this->valueHolderfea9f->clear($entityName);
    }

    public function close()
    {
        $this->initializer78781 && ($this->initializer78781->__invoke($valueHolderfea9f, $this, 'close', array(), $this->initializer78781) || 1) && $this->valueHolderfea9f = $valueHolderfea9f;

        return $this->valueHolderfea9f->close();
    }

    public function persist($entity)
    {
        $this->initializer78781 && ($this->initializer78781->__invoke($valueHolderfea9f, $this, 'persist', array('entity' => $entity), $this->initializer78781) || 1) && $this->valueHolderfea9f = $valueHolderfea9f;

        return $this->valueHolderfea9f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer78781 && ($this->initializer78781->__invoke($valueHolderfea9f, $this, 'remove', array('entity' => $entity), $this->initializer78781) || 1) && $this->valueHolderfea9f = $valueHolderfea9f;

        return $this->valueHolderfea9f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer78781 && ($this->initializer78781->__invoke($valueHolderfea9f, $this, 'refresh', array('entity' => $entity), $this->initializer78781) || 1) && $this->valueHolderfea9f = $valueHolderfea9f;

        return $this->valueHolderfea9f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer78781 && ($this->initializer78781->__invoke($valueHolderfea9f, $this, 'detach', array('entity' => $entity), $this->initializer78781) || 1) && $this->valueHolderfea9f = $valueHolderfea9f;

        return $this->valueHolderfea9f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer78781 && ($this->initializer78781->__invoke($valueHolderfea9f, $this, 'merge', array('entity' => $entity), $this->initializer78781) || 1) && $this->valueHolderfea9f = $valueHolderfea9f;

        return $this->valueHolderfea9f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer78781 && ($this->initializer78781->__invoke($valueHolderfea9f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer78781) || 1) && $this->valueHolderfea9f = $valueHolderfea9f;

        return $this->valueHolderfea9f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer78781 && ($this->initializer78781->__invoke($valueHolderfea9f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer78781) || 1) && $this->valueHolderfea9f = $valueHolderfea9f;

        return $this->valueHolderfea9f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer78781 && ($this->initializer78781->__invoke($valueHolderfea9f, $this, 'getRepository', array('entityName' => $entityName), $this->initializer78781) || 1) && $this->valueHolderfea9f = $valueHolderfea9f;

        return $this->valueHolderfea9f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer78781 && ($this->initializer78781->__invoke($valueHolderfea9f, $this, 'contains', array('entity' => $entity), $this->initializer78781) || 1) && $this->valueHolderfea9f = $valueHolderfea9f;

        return $this->valueHolderfea9f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer78781 && ($this->initializer78781->__invoke($valueHolderfea9f, $this, 'getEventManager', array(), $this->initializer78781) || 1) && $this->valueHolderfea9f = $valueHolderfea9f;

        return $this->valueHolderfea9f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer78781 && ($this->initializer78781->__invoke($valueHolderfea9f, $this, 'getConfiguration', array(), $this->initializer78781) || 1) && $this->valueHolderfea9f = $valueHolderfea9f;

        return $this->valueHolderfea9f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer78781 && ($this->initializer78781->__invoke($valueHolderfea9f, $this, 'isOpen', array(), $this->initializer78781) || 1) && $this->valueHolderfea9f = $valueHolderfea9f;

        return $this->valueHolderfea9f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer78781 && ($this->initializer78781->__invoke($valueHolderfea9f, $this, 'getUnitOfWork', array(), $this->initializer78781) || 1) && $this->valueHolderfea9f = $valueHolderfea9f;

        return $this->valueHolderfea9f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer78781 && ($this->initializer78781->__invoke($valueHolderfea9f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer78781) || 1) && $this->valueHolderfea9f = $valueHolderfea9f;

        return $this->valueHolderfea9f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer78781 && ($this->initializer78781->__invoke($valueHolderfea9f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer78781) || 1) && $this->valueHolderfea9f = $valueHolderfea9f;

        return $this->valueHolderfea9f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer78781 && ($this->initializer78781->__invoke($valueHolderfea9f, $this, 'getProxyFactory', array(), $this->initializer78781) || 1) && $this->valueHolderfea9f = $valueHolderfea9f;

        return $this->valueHolderfea9f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer78781 && ($this->initializer78781->__invoke($valueHolderfea9f, $this, 'initializeObject', array('obj' => $obj), $this->initializer78781) || 1) && $this->valueHolderfea9f = $valueHolderfea9f;

        return $this->valueHolderfea9f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer78781 && ($this->initializer78781->__invoke($valueHolderfea9f, $this, 'getFilters', array(), $this->initializer78781) || 1) && $this->valueHolderfea9f = $valueHolderfea9f;

        return $this->valueHolderfea9f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer78781 && ($this->initializer78781->__invoke($valueHolderfea9f, $this, 'isFiltersStateClean', array(), $this->initializer78781) || 1) && $this->valueHolderfea9f = $valueHolderfea9f;

        return $this->valueHolderfea9f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer78781 && ($this->initializer78781->__invoke($valueHolderfea9f, $this, 'hasFilters', array(), $this->initializer78781) || 1) && $this->valueHolderfea9f = $valueHolderfea9f;

        return $this->valueHolderfea9f->hasFilters();
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

        $instance->initializer78781 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderfea9f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderfea9f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderfea9f->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer78781 && ($this->initializer78781->__invoke($valueHolderfea9f, $this, '__get', ['name' => $name], $this->initializer78781) || 1) && $this->valueHolderfea9f = $valueHolderfea9f;

        if (isset(self::$publicPropertiesc7916[$name])) {
            return $this->valueHolderfea9f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfea9f;

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

        $targetObject = $this->valueHolderfea9f;
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
        $this->initializer78781 && ($this->initializer78781->__invoke($valueHolderfea9f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer78781) || 1) && $this->valueHolderfea9f = $valueHolderfea9f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfea9f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderfea9f;
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
        $this->initializer78781 && ($this->initializer78781->__invoke($valueHolderfea9f, $this, '__isset', array('name' => $name), $this->initializer78781) || 1) && $this->valueHolderfea9f = $valueHolderfea9f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfea9f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderfea9f;
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
        $this->initializer78781 && ($this->initializer78781->__invoke($valueHolderfea9f, $this, '__unset', array('name' => $name), $this->initializer78781) || 1) && $this->valueHolderfea9f = $valueHolderfea9f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfea9f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderfea9f;
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
        $this->initializer78781 && ($this->initializer78781->__invoke($valueHolderfea9f, $this, '__clone', array(), $this->initializer78781) || 1) && $this->valueHolderfea9f = $valueHolderfea9f;

        $this->valueHolderfea9f = clone $this->valueHolderfea9f;
    }

    public function __sleep()
    {
        $this->initializer78781 && ($this->initializer78781->__invoke($valueHolderfea9f, $this, '__sleep', array(), $this->initializer78781) || 1) && $this->valueHolderfea9f = $valueHolderfea9f;

        return array('valueHolderfea9f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer78781 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer78781;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer78781 && ($this->initializer78781->__invoke($valueHolderfea9f, $this, 'initializeProxy', array(), $this->initializer78781) || 1) && $this->valueHolderfea9f = $valueHolderfea9f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderfea9f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderfea9f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
