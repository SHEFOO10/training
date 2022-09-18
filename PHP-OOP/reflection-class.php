<?php

class Resolver {

    /**
     * Build an instance of the given class
    * 
     * @param string $class
     * @return mixed
     *
     * @throws Exception
     */public function resolve($class)
    {
    $reflector = new \ReflectionClass($class);
    if( ! $reflector->isInstantiable())
     {
     throw new \Exception("[$class] is not instantiable");
     }
    
     $constructor = $reflector->getConstructor();
    
     if(is_null($constructor))
     {
     return new $class;
     }
    
     $parameters = $constructor->getParameters();
     $dependencies = $this->getDependencies($parameters);
    
     return $reflector->newInstanceArgs($dependencies);
    }
    
    /**
     * Build up a list of dependencies for a given methods parameters
     *
     * @param array $parameters
     * @return array
     */public function getDependencies($parameters)
    {
    $dependencies = array();
    
    foreach($parameters as $parameter)
    {
    $dependency = $parameter->getClass();
    
    if(is_null($dependency))
    {
    $dependencies[] = $this->resolveNonClass($parameter);
    }
    else
    {
    $dependencies[] = $this->resolve($dependency->name);
    }
    }
    
    return $dependencies;
    }
    
    /**
     * Determine what to do with a non-class value
     *
     * @param ReflectionParameter $parameter
     * @return mixed
     *
     * @throws Exception
     */public function resolveNonClass(ReflectionParameter $parameter)
    {
    if($parameter->isDefaultValueAvailable())
    {
    return $parameter->getDefaultValue();
    }
    
    throw new Exception("Erm.. Cannot resolve the unkown!?");
    }
    }
    

    class Foo {

        protected $bar;
        protected $baz;
        
        public function __construct(Bar $bar, Baz $baz)
        {
        $this->bar = $bar;
        $this->baz = $baz;
        }
        }
        
        class Bar {}
        
        class Baz {
        
        protected $qux;
        
        public function __construct(Qux $qux)
        {
        $this->qux = $qux;
        }
        }
        
        class Qux {
        
        protected $norf;
        
        public function __construct(Norf $norf)
        {
        $this->norf = $norf;
        }
        }
        
        class Norf {}
        //If we weren’t using the Reflection API we would need to have some code similar to this example in order create a working instance of Foo.
        
        $foo = new Foo(new Bar, new Baz(new Qux(new Norf)));
       // But, as we have the power of Reflection at our fingertips we can simply use:
        
        $foo = (new Resolver)->resolve('Foo');
        //This will also work with name-spaced classes, you simply pass through the full class namespace & class name like so:
        
        $foo = (new Resolver)->resolve('Acme\Repositories\Foo');