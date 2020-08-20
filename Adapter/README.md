# 适配器模式

### *将一个类的接口转换成客户期望的另一个接口，适配器然原本接口不兼容的类可以合作无间*

------

鸭子的接口方法有`quack`和`fly`，火鸡的接口方法有`gobble`和`fly`，如何让一只火鸡假扮成一只火鸡呢？(火鸡也能兼容鸭子的接口)，实现一个适配器，它实现需要适配的接口（鸭子接口），而在对应的接口方法中调用被适配者（一只野生火鸡）的方法。


### 适配器模式
- 一个适配器只能封装一个类吗？复杂情况下，可能需要一个适配器包装多个被适配者，这个时候请看[外观模式](Facade/)。
- 与[装饰者模式](Decorator/)：适配器意图是转换接口，装饰者意图是为类扩展新的行为或者责任。

