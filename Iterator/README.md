# 迭代器模式

### *提供一种方法顺序访问一个集合对象中的各个元素，而又不暴露其内部的表示*。

------

### 汇总
-  当集合背后为复杂的数据结构， 且你希望对客户端隐藏其复杂性时 （出于使用便利性或安全性的考虑）， 可以使用迭代器模式。

- 使用该模式可以减少程序中重复的遍历代码。

-如果你希望代码能够遍历不同的甚至是无法预知的数据结构， 可以使用迭代器模式。

- 优点：
    - 单一职责原则。
    - 开闭原则。
    - 你可以并行遍历同一集合， 因为每个迭代器对象都包含其自身的遍历状态。

- 缺点：
    - 如果你的程序只与简单的集合进行交互， 应用该模式可能会矫枉过正。
    - 对于某些特殊集合， 使用迭代器可能比直接遍历的效率低。

- 使用迭代器模式来遍历[组合模式](/Composite)树。
