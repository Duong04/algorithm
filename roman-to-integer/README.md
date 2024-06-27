Roman to Integer

Roman numerals are represented by seven different symbols: I, V, X, L, C, D and M.

Symbol       Value
I             1
V             5
X             10
L             50
C             100
D             500
M             1000

For example, 2 is written as II in Roman numeral, just two ones added together. 12 is written as XII, which is simply X + II. The number 27 is written as XXVII, which is XX + V + II.

Roman numerals are usually written largest to smallest from left to right. However, the numeral for four is not IIII. Instead, the number four is written as IV. Because the one is before the five we subtract it making four. The same principle applies to the number nine, which is written as IX. There are six instances where subtraction is used:

I can be placed before V (5) and X (10) to make 4 and 9. 
X can be placed before L (50) and C (100) to make 40 and 90. 
C can be placed before D (500) and M (1000) to make 400 and 900.
Given a roman numeral, convert it to an integer.

Example 1:

Input: s = "III"
Output: 3
Explanation: III = 3.

Example 2:

Input: s = "LVIII"
Output: 58
Explanation: L = 50, V= 5, III = 3.

///----------------------------------------------------------------

Giải: bài này mình nghĩ ra được 2 cách giải nhưng về tối ưu và dễ hiểu hơn thì mình thấy c1 sẽ ok hơn cách 2 ^_^
- Trick: C1 mình có thể giải thêm 1 kiểu nữa là lặp từ phải sang trái và so sánh với giá trị prev (Chỉ cần làm điều ngược lại với C1 thì ta có thêm 1 cách giải nữa 👀) ^_^
C1:
- Tạo ra 1 mảng có tên là Roman sẽ có các key là roman với value tương tự
- Tạo 2 biến $total và $length (Biến này đếm độ dài chuỗi)
- Sao đó sử dụng loop For lặp từ trái sang phải để check giá trị hiện tại với giá trị tiếp theo
+ nên sẽ có 2 biến là $currentValue(giá trị hiện tại) và $nextValue(giá trị tiếp theo) -> Nếu giá trị hiện tại mà nhỏ hơn giá triwj tiếp theo thì ta sẽ -= và ngược lại sẽ +=
- Kết thúc vòng lặp return $total

C2:
- Tạo ra 1 mảng có tên là Roman sẽ có các key là roman với value tương tự
- Tạo 2 biến $total(tổng giá trị) và $temp(sẽ lưu giá trị sau mỗi lần lặp)
- Sao đó sử dụng loop For lặp từ phải sang trái để check biến $temp <= value của vị trí $i của mảng $roman hay ko
+ trường hợp mà <= -> += vị trí $i của mảng $roman
+ Và trường hợp ngược lại -> -= vị trí $i của mảng $roman