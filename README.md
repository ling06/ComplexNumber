# ComplexNumber

Класс, написанный ради интереса для тестового задания, но не отправленный за ненадобностью.

tests:  
$cn = new ComplexNumber(1, 1);  
echo (clone $cn)->add(new ComplexNumber(1, 1)), PHP_EOL; // 2+2i  
echo (clone $cn)->substract(3, 3), PHP_EOL; // -2-2i  
echo (clone $cn)->divide(2, 2), PHP_EOL; // 0.5  
echo (clone $cn)->multiply(4, 2), PHP_EOL; // 2+6i  
echo (clone $cn)->add(1, 2)->substract(new ComplexNumber(3, 1))->multiply(0, 2), PHP_EOL; // -4-2i  
echo (clone $cn)->multiply(3), PHP_EOL; // 3+3i  
echo (clone $cn)->divide(0), PHP_EOL; // Exception
