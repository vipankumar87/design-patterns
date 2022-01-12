# Design Patterns

In software engineering, creational design patterns are design patterns that deal with object creation mechanisms,
trying to create objects in a manner suitable to the situation. The basic form of object creation could result in design
problems or added complexity to the design. Creational design patterns solve this problem by somehow controlling this
object creation.

![Just enjoy coding](https://myoctocat.com/assets/images/base-octocat.svg)

## Run Tests

### Run all tests

`./vendor/bin/pest`

- 1.1. Abstract Factory
    - 1.1.1. Purpose
      > To create series of related or dependent objects without specifying their concrete classes. Usually the created classes all implement the same interface. The client of the abstract factory does not care about how these objects are created, it just knows how they go together.

- 1.2. Builder
    - 1.2.1. Purpose
      > Builder is an interface that build parts of a complex object. Sometimes, if the builder has a better knowledge of what it builds, this interface could be an abstract class with default methods (aka adapter). If you have a complex inheritance tree for objects, it is logical to have a complex inheritance tree for builders too. Note: Builders have often a fluent interface, see the mock builder of PHPUnit for example.

[//]: # (  ##### Run Builder test)

[//]: # (  `php vendor/bin/codecept run unit BuilderFactoryTest`)

- 1.3. Factory Method
    - 1.3.1. Purpose
      > The good point over the SimpleFactory is you can subclass it to implement different ways to create objects. For simple cases, this abstract class could be just an interface. This pattern is a “real” Design Pattern because it achieves the Dependency Inversion principle a.k.a the “D” in SOLID principles. It means the FactoryMethod class depends on abstractions, not concrete classes. This is the real trick compared to SimpleFactory or StaticFactory.
