<?php

// 只有类和方法才能被 final
// 方法：不可被子类覆盖
// 类：不能被继承


final class Child
{
}

// Class OtherChild may not inherit from final class (Child)
// class OtherChild extends Child
// {
// }
