<?php

namespace ContainerRuEXM3B;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera7812 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere9068 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesae632 = [
        
    ];

    public function getConnection()
    {
        $this->initializere9068 && ($this->initializere9068->__invoke($valueHoldera7812, $this, 'getConnection', array(), $this->initializere9068) || 1) && $this->valueHoldera7812 = $valueHoldera7812;

        return $this->valueHoldera7812->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializere9068 && ($this->initializere9068->__invoke($valueHoldera7812, $this, 'getMetadataFactory', array(), $this->initializere9068) || 1) && $this->valueHoldera7812 = $valueHoldera7812;

        return $this->valueHoldera7812->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializere9068 && ($this->initializere9068->__invoke($valueHoldera7812, $this, 'getExpressionBuilder', array(), $this->initializere9068) || 1) && $this->valueHoldera7812 = $valueHoldera7812;

        return $this->valueHoldera7812->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializere9068 && ($this->initializere9068->__invoke($valueHoldera7812, $this, 'beginTransaction', array(), $this->initializere9068) || 1) && $this->valueHoldera7812 = $valueHoldera7812;

        return $this->valueHoldera7812->beginTransaction();
    }

    public function getCache()
    {
        $this->initializere9068 && ($this->initializere9068->__invoke($valueHoldera7812, $this, 'getCache', array(), $this->initializere9068) || 1) && $this->valueHoldera7812 = $valueHoldera7812;

        return $this->valueHoldera7812->getCache();
    }

    public function transactional($func)
    {
        $this->initializere9068 && ($this->initializere9068->__invoke($valueHoldera7812, $this, 'transactional', array('func' => $func), $this->initializere9068) || 1) && $this->valueHoldera7812 = $valueHoldera7812;

        return $this->valueHoldera7812->transactional($func);
    }

    public function commit()
    {
        $this->initializere9068 && ($this->initializere9068->__invoke($valueHoldera7812, $this, 'commit', array(), $this->initializere9068) || 1) && $this->valueHoldera7812 = $valueHoldera7812;

        return $this->valueHoldera7812->commit();
    }

    public function rollback()
    {
        $this->initializere9068 && ($this->initializere9068->__invoke($valueHoldera7812, $this, 'rollback', array(), $this->initializere9068) || 1) && $this->valueHoldera7812 = $valueHoldera7812;

        return $this->valueHoldera7812->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializere9068 && ($this->initializere9068->__invoke($valueHoldera7812, $this, 'getClassMetadata', array('className' => $className), $this->initializere9068) || 1) && $this->valueHoldera7812 = $valueHoldera7812;

        return $this->valueHoldera7812->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializere9068 && ($this->initializere9068->__invoke($valueHoldera7812, $this, 'createQuery', array('dql' => $dql), $this->initializere9068) || 1) && $this->valueHoldera7812 = $valueHoldera7812;

        return $this->valueHoldera7812->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializere9068 && ($this->initializere9068->__invoke($valueHoldera7812, $this, 'createNamedQuery', array('name' => $name), $this->initializere9068) || 1) && $this->valueHoldera7812 = $valueHoldera7812;

        return $this->valueHoldera7812->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializere9068 && ($this->initializere9068->__invoke($valueHoldera7812, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializere9068) || 1) && $this->valueHoldera7812 = $valueHoldera7812;

        return $this->valueHoldera7812->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializere9068 && ($this->initializere9068->__invoke($valueHoldera7812, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializere9068) || 1) && $this->valueHoldera7812 = $valueHoldera7812;

        return $this->valueHoldera7812->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializere9068 && ($this->initializere9068->__invoke($valueHoldera7812, $this, 'createQueryBuilder', array(), $this->initializere9068) || 1) && $this->valueHoldera7812 = $valueHoldera7812;

        return $this->valueHoldera7812->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializere9068 && ($this->initializere9068->__invoke($valueHoldera7812, $this, 'flush', array('entity' => $entity), $this->initializere9068) || 1) && $this->valueHoldera7812 = $valueHoldera7812;

        return $this->valueHoldera7812->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializere9068 && ($this->initializere9068->__invoke($valueHoldera7812, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere9068) || 1) && $this->valueHoldera7812 = $valueHoldera7812;

        return $this->valueHoldera7812->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializere9068 && ($this->initializere9068->__invoke($valueHoldera7812, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializere9068) || 1) && $this->valueHoldera7812 = $valueHoldera7812;

        return $this->valueHoldera7812->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializere9068 && ($this->initializere9068->__invoke($valueHoldera7812, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializere9068) || 1) && $this->valueHoldera7812 = $valueHoldera7812;

        return $this->valueHoldera7812->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializere9068 && ($this->initializere9068->__invoke($valueHoldera7812, $this, 'clear', array('entityName' => $entityName), $this->initializere9068) || 1) && $this->valueHoldera7812 = $valueHoldera7812;

        return $this->valueHoldera7812->clear($entityName);
    }

    public function close()
    {
        $this->initializere9068 && ($this->initializere9068->__invoke($valueHoldera7812, $this, 'close', array(), $this->initializere9068) || 1) && $this->valueHoldera7812 = $valueHoldera7812;

        return $this->valueHoldera7812->close();
    }

    public function persist($entity)
    {
        $this->initializere9068 && ($this->initializere9068->__invoke($valueHoldera7812, $this, 'persist', array('entity' => $entity), $this->initializere9068) || 1) && $this->valueHoldera7812 = $valueHoldera7812;

        return $this->valueHoldera7812->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializere9068 && ($this->initializere9068->__invoke($valueHoldera7812, $this, 'remove', array('entity' => $entity), $this->initializere9068) || 1) && $this->valueHoldera7812 = $valueHoldera7812;

        return $this->valueHoldera7812->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializere9068 && ($this->initializere9068->__invoke($valueHoldera7812, $this, 'refresh', array('entity' => $entity), $this->initializere9068) || 1) && $this->valueHoldera7812 = $valueHoldera7812;

        return $this->valueHoldera7812->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializere9068 && ($this->initializere9068->__invoke($valueHoldera7812, $this, 'detach', array('entity' => $entity), $this->initializere9068) || 1) && $this->valueHoldera7812 = $valueHoldera7812;

        return $this->valueHoldera7812->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializere9068 && ($this->initializere9068->__invoke($valueHoldera7812, $this, 'merge', array('entity' => $entity), $this->initializere9068) || 1) && $this->valueHoldera7812 = $valueHoldera7812;

        return $this->valueHoldera7812->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializere9068 && ($this->initializere9068->__invoke($valueHoldera7812, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializere9068) || 1) && $this->valueHoldera7812 = $valueHoldera7812;

        return $this->valueHoldera7812->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializere9068 && ($this->initializere9068->__invoke($valueHoldera7812, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere9068) || 1) && $this->valueHoldera7812 = $valueHoldera7812;

        return $this->valueHoldera7812->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializere9068 && ($this->initializere9068->__invoke($valueHoldera7812, $this, 'getRepository', array('entityName' => $entityName), $this->initializere9068) || 1) && $this->valueHoldera7812 = $valueHoldera7812;

        return $this->valueHoldera7812->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializere9068 && ($this->initializere9068->__invoke($valueHoldera7812, $this, 'contains', array('entity' => $entity), $this->initializere9068) || 1) && $this->valueHoldera7812 = $valueHoldera7812;

        return $this->valueHoldera7812->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializere9068 && ($this->initializere9068->__invoke($valueHoldera7812, $this, 'getEventManager', array(), $this->initializere9068) || 1) && $this->valueHoldera7812 = $valueHoldera7812;

        return $this->valueHoldera7812->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializere9068 && ($this->initializere9068->__invoke($valueHoldera7812, $this, 'getConfiguration', array(), $this->initializere9068) || 1) && $this->valueHoldera7812 = $valueHoldera7812;

        return $this->valueHoldera7812->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializere9068 && ($this->initializere9068->__invoke($valueHoldera7812, $this, 'isOpen', array(), $this->initializere9068) || 1) && $this->valueHoldera7812 = $valueHoldera7812;

        return $this->valueHoldera7812->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializere9068 && ($this->initializere9068->__invoke($valueHoldera7812, $this, 'getUnitOfWork', array(), $this->initializere9068) || 1) && $this->valueHoldera7812 = $valueHoldera7812;

        return $this->valueHoldera7812->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializere9068 && ($this->initializere9068->__invoke($valueHoldera7812, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializere9068) || 1) && $this->valueHoldera7812 = $valueHoldera7812;

        return $this->valueHoldera7812->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializere9068 && ($this->initializere9068->__invoke($valueHoldera7812, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializere9068) || 1) && $this->valueHoldera7812 = $valueHoldera7812;

        return $this->valueHoldera7812->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializere9068 && ($this->initializere9068->__invoke($valueHoldera7812, $this, 'getProxyFactory', array(), $this->initializere9068) || 1) && $this->valueHoldera7812 = $valueHoldera7812;

        return $this->valueHoldera7812->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializere9068 && ($this->initializere9068->__invoke($valueHoldera7812, $this, 'initializeObject', array('obj' => $obj), $this->initializere9068) || 1) && $this->valueHoldera7812 = $valueHoldera7812;

        return $this->valueHoldera7812->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializere9068 && ($this->initializere9068->__invoke($valueHoldera7812, $this, 'getFilters', array(), $this->initializere9068) || 1) && $this->valueHoldera7812 = $valueHoldera7812;

        return $this->valueHoldera7812->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializere9068 && ($this->initializere9068->__invoke($valueHoldera7812, $this, 'isFiltersStateClean', array(), $this->initializere9068) || 1) && $this->valueHoldera7812 = $valueHoldera7812;

        return $this->valueHoldera7812->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializere9068 && ($this->initializere9068->__invoke($valueHoldera7812, $this, 'hasFilters', array(), $this->initializere9068) || 1) && $this->valueHoldera7812 = $valueHoldera7812;

        return $this->valueHoldera7812->hasFilters();
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

        $instance->initializere9068 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldera7812) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera7812 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldera7812->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializere9068 && ($this->initializere9068->__invoke($valueHoldera7812, $this, '__get', ['name' => $name], $this->initializere9068) || 1) && $this->valueHoldera7812 = $valueHoldera7812;

        if (isset(self::$publicPropertiesae632[$name])) {
            return $this->valueHoldera7812->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera7812;

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

        $targetObject = $this->valueHoldera7812;
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
        $this->initializere9068 && ($this->initializere9068->__invoke($valueHoldera7812, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere9068) || 1) && $this->valueHoldera7812 = $valueHoldera7812;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera7812;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera7812;
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
        $this->initializere9068 && ($this->initializere9068->__invoke($valueHoldera7812, $this, '__isset', array('name' => $name), $this->initializere9068) || 1) && $this->valueHoldera7812 = $valueHoldera7812;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera7812;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera7812;
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
        $this->initializere9068 && ($this->initializere9068->__invoke($valueHoldera7812, $this, '__unset', array('name' => $name), $this->initializere9068) || 1) && $this->valueHoldera7812 = $valueHoldera7812;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera7812;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera7812;
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
        $this->initializere9068 && ($this->initializere9068->__invoke($valueHoldera7812, $this, '__clone', array(), $this->initializere9068) || 1) && $this->valueHoldera7812 = $valueHoldera7812;

        $this->valueHoldera7812 = clone $this->valueHoldera7812;
    }

    public function __sleep()
    {
        $this->initializere9068 && ($this->initializere9068->__invoke($valueHoldera7812, $this, '__sleep', array(), $this->initializere9068) || 1) && $this->valueHoldera7812 = $valueHoldera7812;

        return array('valueHoldera7812');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializere9068 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializere9068;
    }

    public function initializeProxy() : bool
    {
        return $this->initializere9068 && ($this->initializere9068->__invoke($valueHoldera7812, $this, 'initializeProxy', array(), $this->initializere9068) || 1) && $this->valueHoldera7812 = $valueHoldera7812;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera7812;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera7812;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
