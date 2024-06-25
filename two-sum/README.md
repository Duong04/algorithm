Given an array of integers nums and an integer target, return indices of the two numbers such that they add up to target.

You may assume that each input would have exactly one solution, and you may not use the same element twice.

You can return the answer in any order.

Example 1:

Input: nums = [2,7,11,15], target = 9
Output: [0,1]
Explanation: Because nums[0] + nums[1] == 9, we return [0, 1].

//----------------------------------------------------------------
$nums -> array;
$target -> number;

Hàm twoSum nhận vào 2 tham số -> $nums & $target

tạo ra một biến là $hash_map với type -> array

Mỗi lần lặp:
- ta sẽ lấy $target trừ đi cho phần tử ở vị trí thứ $i của mảng & lưu vào biến $result

- Và check điều kiện -> kiểm tra vị trí của biến $result có tồn tại trong mảng $hash_map hay không:

+ True: return một mảng mới có 2 value là [vị trí của biến $result trong mảng $hash_map, vị trí thứ $i của mảng $nums]

+False: thêm phần thử thứ $i của mảng $nums vào mảng $hash_map là 1 key và cho vị trí thứ i là 1 value 

Ví dụ: 
- Lần lặp đầu tiên:

$result = 9 - 2 -> $result = 7

- Check điều kiện -> false

+ lưu vào mảng $hash_map -> $hash_map sau khi được lưu sẽ là như thế này

-> $hash_map = [2 => 0];

- Lần lặp thứ 2: 

$result = 9 - 7 -> $result = 2

- Check điều kiện -> true

+ return [0, 1];