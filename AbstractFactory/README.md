# 抽象工厂模式

### *提供一个接口，用于创建相关或者依赖对象的家族，而不需要明确指定类*

------

在案例中，我们实现了一个类似于工厂模式中的点餐功能，但是这里加了原料工厂 制作步骤和原料统一，但是根据店铺不同会有不同的制作原料。


### 工厂汇总
- 所有的工厂都是用来封装对对象的创建
- 简单工厂，虽不是一个设计模式，但仍不失为一个简单的方法把客户程序从具体类解耦。
- 工厂方法是用继承，把对象的创建委托给子类，子类实现工厂方法来创建对象。
- 抽象工厂使用对象组合，对象的创建被实现在工厂接口所暴露出来的方法之中。
- 所有的工厂模式都通过减少应用程序与具体类之间的依赖来减轻耦合。
- 工厂方法允许类实例化延迟到子类进行。
- 抽象工厂创建相关的对象家族，而不需要袭来他的具体类。
- 依赖倒置原则，知道我们避免依赖具体类型，而要尽量依赖抽象。
- 工厂是很有威力的技巧，帮助我们针对抽象编程，而不要针对具体类编程。

