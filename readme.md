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

- [ ] Abstract Factory
	* Provide an interface for creating families of related or dependent objects without specifying their concrete classes.

- [ ] Builder
	* Separate the construction of a complex object from its representation so that the same
	construction process can create different representations.

- [ ] Factory Method
	* Define an interface for creating an object, but let subclasses decide which class to instantiate. Factory Method lets
	a class defer instantiation to subclasses.

- [ ] Prototype
- [ ] Singleton
- [ ] Simple Factory Method


### Structural

- [ ] Adapter
- [ ] Bridge
- [ ] Composite
- [ ] Decorator
- [ ] Facade
- [ ] Flyweight
- [ ] Proxy


### Behavioral

- [ ] Chain of Responsibility
- [ ] Command
- [ ] Interpreter
- [ ] Iterator
- [ ] Mediator
- [ ] Memento
- [ ] Observer
- [ ] State
- [ ] Strategy
- [ ] Template Method
- [ ] Visitor

