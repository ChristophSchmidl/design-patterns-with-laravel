<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Design Patterns with Laravel

**S.O.L.I.D - Principle**

S.O.L.I.D is an acronym for the first five object-oriented design(OOD) principles by Robert C. Martin, namely:

* **S**ingle Responsibility Principle
	* A class should have one and only one reason to change, meaning that a class should have only one job.

* **O**pen/Closed Principle
	* Objects or entities should be open for extension, but closed for modification.

* **L**iskov Substitution Principle
	* Let q(x) be a property provable about objects of x of type T. Then q(y) should be provable for objects y of type S where S is a subtype of T.
	= Every subclass/derived class should be substitutable for their base/parent class.

* **I**nterface Segregation Principle
	* A client should never be forced to implement an interface that it doesn't use or clients shouldn't be forced to depend on methods they do not use.

* **D**ependency Inversion Principle
	* Entities must depend on abstractions not on concretions. It states that the high level module must not depend on the low level module, but they should depend on abstractions.

Another rule states **Encapsulate What Varies**, so only abstract away things that vary in your application.

A more detailed article can be found on <a href="https://scotch.io/bar-talk/s-o-l-i-d-the-first-five-principles-of-object-oriented-design">Scotch.io</a>
or in the original book called <a href="https://www.amazon.com/Software-Development-Principles-Patterns-Practices/dp/0135974445/ref=sr_1_2?ie=UTF8&qid=1502116411&sr=8-2&keywords=agile+software+development">
Agile Software Development, Principles, Patterns, and Practices</a> by Robert C. Martin.

The following definitions were taken from the book <a href="https://www.amazon.com/Design-Patterns-Elements-Reusable-Object-Oriented/dp/0201633612/ref=sr_1_1?ie=UTF8&qid=1502116580&sr=8-1&keywords=design+patterns">
Design Patterns: Elements of Reusable Object-Oriented Software</a>.

### Creational

- [ ] **Abstract Factory**
	* Provide an interface for creating families of related or dependent objects without specifying their concrete classes.

- [ ] **Builder**
	* Separate the construction of a complex object from its representation so that the same
	construction process can create different representations.

- [ ] **Factory Method**
	* Define an interface for creating an object, but let subclasses decide which class to instantiate. Factory Method lets
	a class defer instantiation to subclasses.

- [ ] **Prototype**
	* Specify the kinds of objects to create using a prototypical instance, and create new objects by copying this prototype.

- [ ] **Singleton**
	* Ensure a class only has one instance, and provide a global point of access to it.

- [ ] **Simple Factory Method**


### Structural

- [ ] **Adapter**
	* Convert the interface of a class into another interface clients expect. Adapter lets classes work together that
	couldn't otherwise because of incompatible interfaces.

- [ ] **Bridge**
	* Decouple an abstraction from its implementation so that the two can vary independently.

- [ ] **Composite**
	* Compose objects into three structures to represent part-whole hierarchies. Composite lets clients treat individual
	objects and compositions of objects uniformly.

- [ ] **Decorator**
	* Attach additional responsibilities to an object dynamically. Decorators provide a flexible alternative to subclassing
	for extending functionality.

- [ ] **Facade**
	* Provide a unified interface to a set of interfaces in a subsystem. Facade defines a higher-level interface that makes
	the subsystem easier to use.

- [ ] **Flyweight**
	* Use sharing to support large numbers of fine-grained objects efficiently.

- [ ] **Proxy**
	* Provide a surrogate or placeholder for another object to control access to it.

### Behavioral

- [ ] **Chain of Responsibility**
	* Avoid coupling the sender of a request to its receiver by giving more than one object a change to handle the request.
	Chain the receiving objects and pass the request along the chain until an object handles it.

- [ ] **Command**
	* Encapsulate a request as an object, thereby letting you parameterize clients with different requests, queue,
	or log requests, and support undoable operations.

- [ ] **Interpreter**
	* Given a language, define a representation for its grammar along with an interpreter that uses the
	representation to interpret sentences in the language.

- [ ] **Iterator**
	* Provide a way to access the elements of an aggregate object sequentially without exposing its underlying
	representation.

- [ ] **Mediator**
	* Define an object that encapsulates how a set of objects interact. Mediator promotes loose coupling by keeping
	 objects from referring to each other explicitly, and it lets you vary their interaction independently.

- [ ] **Memento**
	* Without violating encapsulation, capture and externalize an object's internal state so that the object can be
	restored to this state later.

- [ ] **Observer**
	* Define a one-to-many dependency between objects so that when one object changes state, all its dependents are notified
	and updated automatically.

- [ ] **State**
	* Allow an object to alter its behaviour when its internal state changes. The object will appear to change its class.

- [ ] **Strategy**
	* Define a family of algorithms, encapsulate each one, and make them interchangeable. Strategy lets the algorithm
	vary independently from clients that use it.

- [ ] **Template Method**
	* Define the skeleton of an algorithm in an operation, deferring some steps to subclasses. Template Method lets
	subclasses redefine certain steps of an algorithm without changing the algorithm's structure.

- [ ] **Visitor**
	* Represent an operation to be performed on the elements of an object structure. Visitor lets you define a new operation
	without changing the classes of the elements on which it operates.

