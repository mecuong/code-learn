## HTML là gì ?
HTML là chữ viết tắt của Hypertext Markup Language, là ngôn ngữ được sử dụng rộng rãi nhất để viết các trang Web.

Hypertext là cách mà các trang Web (các tài liệu HTML) được kết nối với nhau. Và như thế, đường link có trên trang Web được gọi là Hyperlink.

Như tên gọi đã gợi ý, HTML là ngôn ngữ đánh dấu bằng thẻ (Markup Language), nghĩa là bạn sử dụng HTML để đánh dấu một tài liệu text bằng các thẻ (tag) để nói cho trình duyệt Web cách để cấu trúc nó để hiển thị ra màn hình.

Lúc đầu, HTML được phát triển với mục đích để xác định cấu trúc của các tài liệu như các tiêu đề, các đoạn văn, các danh sách… và tạo sự thuận lợi cho việc chia sẻ thông tin khoa học giữa các nhà nghiên cứu.

Bây giờ, HTML đã được sử dụng rộng rãi để định dạng các trang Web với sự giúp đỡ của các tag khác nhau có trong ngôn ngữ HTML.

Các thẻ trong HTML - Tag trong HTML
Như đã trình bày ở trên, HTML là ngôn ngữ đánh dấu bằng thẻ (tag) và sử dụng các thẻ khác nhau để định dạng nội dung. Những thẻ này được chứa trong hai dấu ngoặc đơn `<tên thẻ>`. Trừ một vài thẻ, hầu hết các thẻ đều có các thẻ đóng tương ứng với nó. Ví dụ, thẻ `<html>` có thẻ đóng tương ứng là `</html>` và thẻ `<body>` có thẻ đóng tương ứng là `</body>` ...

Ví dụ trên về tài liệu HTML đã sử dụng các thẻ sau đây:

|Tag	| Miêu tả|
|-------|--------|
| `<!DOCTYPE...>`	|Còn gọi là thẻ khai báo một tài liệu HTML. Thẻ này xác định loại tài liệu và phiên bản HTML.
| `<html>`	        |Thẻ này bao phủ các tài liệu HTML đầy đủ. Còn đầu trang tài liệu thì được biểu diễn bởi các thẻ `<head>`...`</head>` và thân tài liệu là các thẻ `<body>`...`</body>` .|
| `<head>`	        |Thẻ này đại diện cho đầu trang tài liệu mà có thể giữ các thẻ HTML như `<title>`, `<link>` ...|
|`<title>`	        |Thẻ `<title>` được sử dụng trong thẻ `<head>` chỉ tiêu đề tài liệu.|
|`<body>`       	|Thẻ này đại diện cho thân tài liệu và giữ các thẻ như `<h1>`, `<div>`, `<p>` ...|
|`<h1>`	            |Thẻ này đại diện cho các tiêu đề trang.|
|`<p>`	            |Thẻ này đại diện cho đoạn văn.|

### HTML được xử lý ra sao?
Khi một tập tin HTML được hình thành, việc xử lý nó sẽ do trình duyệt web đảm nhận. Trình duyệt sẽ đóng vai trò đọc hiểu nội dung HTML từ các thẻ bên trong và sẽ chuyển sang dạng văn bản đã được đánh dấu để đọc, nghe hoặc hiểu.

### Sử dụng thẻ
Đa phần nội dung trong HTML được chứa trong các thẻ đóng và mở `<tên thẻ>` và `</tên thẻ>`. Tuy nhiên vẫn có một số trường hợp ngoại lệ không cần đóng thẻ ví dụ như `<img>`, `<input>` hay thẻ comment `<!--...-->` vì chúng không có chứa nội dung yêu cầu hiển thị.

### Attribute (Thuộc tính của thẻ)
Thuộc tính ngôn ngữ
`<html lang="vi-VI">`: thuộc tính của thẻ HTML

Không có chứa thuộc tính
`<div>Nội dung</div>` : thẻ không chứa thuộc tính

Thuộc tính tiêu đề
`<p title="Đây là nội dung">`: thuộc tính có thể dùng cho nhiều thẻ như p, a, img,…

Thuộc tính href
`<a href="https://tuandc.com">`: thuộc tính chỉ định liên kết cho thẻ a

Thuộc tính kích thước
`<img src=img.jpg" width="104" height="142">`: Thuộc tính quy định kích thước chiều rộng (width) và chiều cao (height) cho hình ảnh.

Thuộc tính alt
`<img src="img.jpg" alt="tuandc.com">`: Thuộc tính alt sẽ cho biết mô tả chính xác về hình ảnh đó, hiển thị khi hình ảnh không được tìm thấy.

Thuộc tính id
`<div id="id_text">`: thuộc tính ID chỉ định ID cho thẻ, dùng để xác định thẻ cho lập trình, hoặc cho định dạng

Thuộc tính class
`<div class="design">`: thuộc tính class chỉ định thẻ thuộc nhóm, dùng để xác định thẻ cho lập trình, hoặc cho định dạng.

Thuộc tính style
`<div style="color:red;">`: thuộc tính style dùng để chèn trực tiếp định dang theo kiểu inline cho thẻ.

#### Tóm lại
- Các thẻ có thể có hoặc không có thuộc tính.
- Tùy thuộc vào thẻ mà có những thuộc tính bắt buộc.
- Chúng ta có thể đưa nhưng thuộc tính tùy chọn để tăng mục đích sử dụng

### Thực hành
- Tạo thư mục `html` trong thư mục `html` tạo file có tên `profile.html`
- Tiêu đề : `Thông tin` + `<Họ và tên>`
- Heading 1: `Code Learn: HTML`
- Đoạn nội dung giới thiệu về bạn
- Hiển thị hình ảnh của bạn :
    - Chị Trầm : https://mevn-public.s3-ap-southeast-1.amazonaws.com/for-github-readme/Huynh+Thi+Huong+Tram.png
    - Chị Cúc : https://mevn-public.s3-ap-southeast-1.amazonaws.com/for-github-readme/Nguyen+Thi+Huong+Cuc.jpg
    - Chị Chinh: https://mevn-public.s3-ap-southeast-1.amazonaws.com/for-github-readme/Ngo+Thi+Van+Chinh.png
    - Em Quỳnh : https://mevn-public.s3-ap-southeast-1.amazonaws.com/for-github-readme/Truong+Thi+Phuong+Quynh.png
- Hyperlink `Dự án của tôi` đến Github Repository của bạn
- Commit và push source code của bạn lên github


