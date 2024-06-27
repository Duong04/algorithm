Palindrome Number

Given an integer x, return true if x is a palindrome, and false otherwise.

Example 1:

Input: x = 121

Output: true

Explanation: 121 reads as 121 from left to right and from right to left.\
// ----------------------------------------------------------------

Giải:
- chuyển đổi x thành 1 string
- Tạo 2 biến $left và $right, với $left có value = 0  và $right = độ dài của $str - 1
- Sau đó sử dụng vòng lặp white với đk -> $left < $right nếu $left > $right thì kết thúc vòng lặp
+ Trong vòng lặp kiểm tra vị trí của $str[$left] == $str[$right] không
+ Trường hợp không bằng thì lặp thức trả về False và kết thúc vòng lặp 
+ Ngược lại nếu bằng thì ta tiếp tục lặp tăng $left lên 1 và trừ $right xuống 1