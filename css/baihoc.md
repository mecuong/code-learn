# CSS

### CSS là gì?
CSS là viết tắt của Cascading Style Sheets.
CSS mô tả cách các phần tử HTML hiển thị trên màn hình và các phương tiện khác.
CSS rất hữu ích và tiện lợi. Nó có thể kiểm soát tất cả các trang trên một website.
Các stylesheet ngoài được lưu trữ dưới dạng các tập tin `*.CSS`.

### Vì sao website cần có CSS?
CSS được dùng để định nghĩa kiểu cách cho các trang trên website của chúng, gồm cả thiết kế, dàn trang và các cách hiển thị khác nhau trên nhiều thiết bị với kích thước màn hình khác nhau, điều mà HTML đơn thuần thôi chưa thể thực hiện được

### Có bao nhiêu cách nhúng CSS vào website ?
Có nhiều cách.
- Dùng thẻ `link` với thuộc tính rel `Relationship` giá trị là `stylesheet`, thuộc tính href với giá trị là link dẫn đến file css
- Dùng thẻ `style` trong html để trực tiếp viết vào file html (phạm vi bài học sẽ dùng cách này)
- Inline sử dụng `thuộc tính style` của thẻ để đưa thuộc tính CSS vaò
- Import (`@import`) trong file css
- Dùng `Javascript` để thực hiện các thao tác trên


### Cú pháp CSS

Bộ quy tắc của CSS gồm có công cụ chọn (selector) và khối khai báo (declaration). Công cụ chọn trỏ tới phần từ HTML mà bạn muốn tạo kiểu cách. Khối khai báo chứa một hoặc nhiều thuộc tính, phân tách với nhau bằng các dấu chấm phẩy `;`. Mỗi thuộc tính bao gồm tên và giá trị đặc tính CSS, phân tách bằng dấu hai chấm `:`.

![image](https://user-images.githubusercontent.com/68834774/104127972-929f1b80-5397-11eb-881e-83b49039468c.png)

### Các thuộc tính cơ bản

#### Các thuộc tính Color
Chức năng để thiết lập màu sắc và độ trong suốt của văn bản

|Thuộc tính |	Mô tả   |
|-----------|-----------|
|color	    |Đặt màu sắc cho đoạn văn bản	|
|opacity	|Đặt mức độ trong suốt cho một phần tử nào đó|

#### Các thuộc tính Background và Border

Chức năng thiết lập các thuộc tính màu nền và đường biên cho các đối tượng trên trang.

|Thuộc tính |	Mô tả   |
|-----------|-----------|
|background	|Một thuộc tính viết tắt để đặt thuộc tính nền trong lời khai báo|
|background-attachment	|Đặt một ảnh nền để cố định hoặc cuộn với phần còn lại của trang|
|background-blend-mode	|Chỉ định các chế độ trộn của mỗi lớp nền(màu sắc/hình ảnh)|
|background-color	|Chỉ định màu nền của một phần tử|
|background-image	|Chỉ định một hoặc nhiều hình ảnh nền cho một phần tử|
|background-position	|Chỉ định vị trí của hình ảnh nền|
|background-repeat	|Thiết lập như thế nào một ảnh nền sẽ được lặp đi lặp lại|
|background-clip	|Chỉ định khu vực để sơn màu nền|
|background-origin	|Chỉ định nơi các hình nền được định vị|
|background-size	|Chỉ định kích thước của ảnh nền|
|border	|Thiết lập tất cả các thuộc tính đường viền trong lời khai báo|
|border-bottom	|Thiết lập tất cả các thuộc tính đường viền dưới trong lời khai báo|
|border-bottom-color	|Thiết lập màu của đường viền dưới|
|border-bottom-left-radius	|Xác định hình dạng của các đường viền góc dưới bên trái|
|border-bottom-right-radius	|Xác định hình dạng của các đường viền góc dưới bên phải|
|border-bottom-style	|Thiết lập kiểu (style) của đường viền dưới|
|border-bottom-width	|Thiết lập độ rộng của đường viền dưới|
|border-color	|Thiết lập màu sắc của bốn đường viền|
|border-image	|Một thuộc tính viết tắt để thiết lập tất cả các thuộc tính border-image-*|
|border-image-outset	|Chỉ định giá trị khu vực ảnh viền vượt ra ngoài vùng giới hạn của vùng bao|
|border-image-repeat	|Chỉ định ảnh viền nên được lặp đi lặp lại, tròn hoặc kéo dài|
|border-image-slice	|Chỉ định cụ thể như thế nào để cắt ảnh viền|
|border-image-source	|Chỉ định đường dẫn tới hình ảnh để sử dụng như đường viền|
|border-image-width	|Chỉ định độ rộng của ảnh-viền|
|border-left	|Thiết lập tất cả thuộc tính đường viền trái trong lời khai báo|
|border-left-color	|Thiết lập màu sắc của đường viền trái|
|border-left-style	|Thiết lập kiểu ( style) của đường viền trái|
|border-left-width	|Thiết lập độ rộng của đường viền trái|
|border-radius	|Thuộc tính viết tắt để thiết lập tất cả bốn đường viền-*-thuộc tính radius(bán kính)|
|border-right	|Thiết lập thuộc tính đường viền phải trong lời khai báo|
|border-right-color	|Thiết lập màu sắc cho đường viền phải|
|border-right-style	|Thiết lập kiểu (style) cho đường viền phải|
|border-right-width	|Thiết lập độ rộng cho đường viền phải|
|border-style	|Thiết lập kiểu (style)  cho bốn đường viền|
|border-top	|Thiết lập thuộc tính đường viền trên trong lời khai báo|
|border-top-color	|Thiết lập màu sắc cho đường viền trên|
|border-top-left-radius	|Xác định hình dạng của đường viền góc trên bên trái|
|border-top-right-radius	|Xác định hình dạng của đường viền góc trên bên phải|
|border-top-style	|Thiết lập kiểu (style) cho đường viền trên|
|border-top-width	|Thiết lập độ rộng của đường viền trên|
|border-width	|Thiết lập độ rộng của bốn đường viền|
|box-decoration-break	|Thiết lập dáng vẻ của hình nền và đường viền của một phần tử  tại trang ngắt, hoặc đối với phần tử in-line , tại  dòng ngắt.|
|box-shadow	|Gắn một hoặc nhiều đổ bóng (drop-shadows) vào hộp|

#### Các thuộc tính Basic Box

|Thuộc tính |	Mô tả   |
|-----------|-----------|
|bottom	    |Xác định vị trí cuối của phần tử position (vị trí)|
|clear	    |Xác định hai bên của phần tử (left,right) nơi mà phần tử float không được cho phép (ngăn cản thành phần không được float trái, phải hay cả hai)|
|clip	    |Xác định đoạn cho phần tử khi sử dụng thuộc tính position có giá trị “absolute“|
|display	|Chỉ định làm thế nào một phần tử HTML nào đó sẽ được hiển thị|
|float	    |Xác định có hay không một box được float(trôi nổi)|
|height	    |Thiết lập chiều cao của thành phần|
|left	    |Xác định vị trí bên trái của phần tử position|
|margin	    |Thiết lập thuộc tính margin (căn lề cho phần tử) trong một thông báo|
|margin-bottom	|Thiết lập lề dưới của một phần tử|
|margin-left	|Thiết lập lề trái của một phần tử|
|margin-right	|Thiết lập lề phải của một phần tử|
|margin-top	    |Thiết lập lề trên của một phần tử|
|max-height	    |Thiết lập chiều cao tối đa của một phần tử|
|max-width	    |Thiết lập chiều rộng tối đa của một phần tử|
|min-height	    |Thiết lập chiều cao tối thiểu của một phần tử|
|min-width	    |Thiết lập chiều rộng tối thiểu của một phần tử|
|overflow	    |Chỉ định những gì sẽ xảy ra nếu nội dung tràn ra ngoài phần tử hộp|
|overflow-x	    |Xác định có hay không để cắt cạnh trái/phải của đoạn văn bản, nếu nó tràn ra khỏi khu vực nội dung của phần tử|
|overflow-y	    |Xác định có hay không để cắt cạnh trên /dưới của đoạn văn bản, nếu nó tràn ra khỏi khu vực nội dung của phần tử|
|padding	    |Thiết lập lại thuộc tính padding (vùng đệm) trong lời khai báo|
|padding-bottom	|Thiết lập vùng đệm dưới của phần tử|
|padding-left	|Thiết lập vùng đệm trái của một phần tử|
|padding-right	|Thiết lập vùng đệm phải của một phần tử|
|padding-top	|Thiết lập vùng đệm trên của một phần tử|
|position	    |Xác định kiểu của phương thức định vị được sử dụng cho một phần tử (static, relative, absolute or fixed)|
|right	        |Xác định vị trí phải của phần tử position|
|top	        |Xác định vị trí trên của phần tử position|
|visibility	    |Xác định có hay không một phần tử có thể nhìn thấy được|
|width	        |Thiết lập độ rộng của phần tử|
|vertical-align	|Sắp xếp nội dung theo chiều dọc của phần tử|
|z-index	    |Thiết lập thứ tự xếp chồng nhau của phần tử position|

#### Thuộc tính cho bố cục Flexible Box

|Thuộc tính |	Mô tả   |
|-----------|-----------|
|align-content	|Xác định sự căn chỉnh giữa các dòng bên trong một khối linh hoạt ( flexible container) khi các mục không sử dụng các khoảng cách có sẵn|
|align-items	|Xác định sự căn chỉnh cho các mục bên trong một khối linh hoạt ( flexible container)|
|align-self	|Xác định sự căn chỉnh cho các mục được chọn bên trong một khối linh hoạt ( flexible container)|
|flex	|Xác định độ dài của các mục, tương đối với phần còn lại|
|flex-basis	|Xác định độ dài ban đầu của một mục linh hoạt (flexible item)|
|flex-direction	|Xác định hướng của các mục linh hoạt (flexible items)|
|flex-flow	|Một thuộc tính viết tắt cho thuộc tính flex-direction và flex-wrap|
|flex-grow	|Chỉ định bao nhiêu mục sẽ tăng tương đối so với phần còn lại|
|flex-shrink	|Chỉ định bao nhiêu mục sẽ giảm tương đối so với phần còn lại|
|flex-wrap	|Chỉ định liệu các mục linh hoạt (flexible items) nên bọc hay không|
|justify-content	|Xác định sự căn chỉnh giữa các mục bên trong một khối linh hoạt (flexible container) khi các mục không sử dụng tất cả các khoảng cách có sẵn|
|order	|Thiết lập thứ tự của các mục linh hoạt (flexible items), tương đối so với phần còn lại|



