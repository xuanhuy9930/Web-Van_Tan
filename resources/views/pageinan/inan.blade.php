@extends('master-layout')
@section('title')
Mẫu thiết kế
@endsection
@section('css') 
<link rel="stylesheet" type="text/css" href="css/inan.css">


@endsection
@section('content')
<main>	
	<div class="container">
		<div class="row">
			<div class="col-md-12" style="    padding-bottom: 20px;">
				<h5 class="main-title wow rotateInDownRight" data-wow-duration="1s">In ấn</h5>
			</div>	
			<!-- Danh thiếp - Name card  -->
			<div class="col-md-6 col-xs-12" style="background-image: linear-gradient(to right top , #FFFF66 , white, #FFFF66, white);">
				<h5 class="title text-center wow bounceInDown"data-wow-duration="2s" ><i>Danh thiếp - Name card </i></h5>
				<div class="col-md-12 col-xs-12"style="padding: 0 20px;">
					<p class="sub-title-left wow bounceInLeft" data-wow-duration="3s">Bạn làm doanh nhân tự do, bạn làm trong cơ quan nhà nước hay bất kỳ vị trí nào khác miễn là bạn có các mối quan hệ và bạn muốn phát triển sự nghiệp của mình, tôi dám chắc rằng sẽ là thiếu sót vô cùng lớn nếu như bạn không có tấm danh thiếp của bản thân hay công ty bởi vì không ai có thể nhớ hết các thông tin qua truyền miệng sau một lần gặp, nhưng cũng thật kỳ cục khi phải tìm kiếm bút giấy để viết lại thông tin của mình khi khách hàng hỏi đến. 
					</p>
					<!-- <span>
						<ul class="sub-title-thongtin wow fadeInUpBig"data-wow-duration="3s" style="list-style: none;padding: 0px 12px 0 20px">* Thông tin sản phẩm:
							<li class="thongtin">Kích thước: Thông dụng nhất là 90x54, 90 x50 hoặc tùy theo yêu cầu, sở thích của khách hàng.</li>
							<li class="thongtin">Chất liệu:
								<li style="padding-left: 30px;">-Giấy Couche 300
								</li>
								<li style="padding-left: 30px;">-Giấy op</li>
								<li style="padding-left: 30px;">-Các loại giấy mỹ thuật </li>
							</li>
							<li class="thongtin">Cán mờ hoặc cán bóng để tạo lớp màng bảo vệ giấy đồng thời giúp tăng tính thẩm mỹ cho sản phẩm.</li>
						</ul>
					</span>
				-->
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="col-md-12 col-xs-12">
					<h1 class="title-bottom text-center">Sản phẩm đã làm</h1>
				</div>
				<div class="sanpham col-md-12 col-sm-12 col-xs-12" style="display: flex;">
					<div class="col-md-4 col-sm-6 col-xs-12">
						<img class="img-fluid img-sanpham  wow flipInY" data-wow-duration="2s"src="images/inan/danhthiep-1.jpg" alt="">
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<img class="img-fluid img-sanpham  wow flipInY" data-wow-duration="2s"src="images/inan/danhthiep.jpg" alt="">
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<img class="img-fluid img-sanpham  wow flipInY" data-wow-duration="2s"src="images/inan/danhthiep-3.jpg" alt="">
					</div>
				</div>
				<a class="chitietsanpham"href="#">Chi tiết sản phẩm</a>


			</div>
		</div>
		<!-- Tem - Nhãn   -->
		<div class="col-md-6 col-xs-12" style="background-image: linear-gradient(to right top , #FFFF66 , white, #FFFF66, white);">
			<h5 class="title text-center wow bounceInDown"data-wow-duration="2s"><i>Tem - Nhãn </i></h5>
			<div class="col-md-12 col-xs-12"style="float:left; padding-bottom:10px;padding: 0 20px;">
				<p class="sub-title-right wow bounceInRight"data-wow-duration="3s">
					Như người bán hàng thầm lặng nhưng vô cùng hiệu quả để bạn có thể tiếp cận Khách hàng. Theo nghiên cứu thì đối với một sản phẩm lạ, sản phẩm mới trên thị trường, thì có đến 80% người khi được hỏi đều đồng ý với việc sẽ mua sản phẩm nào có bao bì và tem nhãn đẹp mắt. Và có tới 95% số người cho rằng sản phẩm lưu hành trên thị trường thì bắt buộc phải có tem nhãn ghi thông tin, nguồn gốc về sản phẩm đó. Vậy nếu như sản phẩm của bạn hiện tại chưa có tem nhãn thì có lẽ bạn vẫn chỉ đang tiếp cận với khoảng dưới 5% lượng khách hàng tiềm năng này. 
				</p>
					<!-- <p class="sub-title wow bounceInRight" data-wow-duration="3s"style="padding-bottom: 20px;">
						TẠI SAO bạn lại không đầu tư nâng tầm sản phẩm của mình với những mẫu tem nhãn đẹp và giá thành không thể hợp lý hơn?		
					</p> -->
					<!-- <span>
						<ul class="sub-title-thongtin wow fadeInUpBig" data-wow-duration="3s" style="list-style: none;padding: 0px 12px 0 20px">* Thông tin sản phẩm: Công ty chúng chuyên sản xuất các loại tem nhãn:
							<li class="thongtin">In logo - sticker dán Trà sữa, chai lọ PE, nhựa, Thủy tinh...</li>
							<li class="thongtin">In logo - sticker dán hoa quả, bánh kẹo, mũ bảo hộ.</li>
							<li class="thongtin">
								In sticker dán má, chân tay, vải, quần áo, gỗ, kim loại, laptop.
							</li>
							<li class="thongtin">
								Tem vỡ bảo hành sản phẩm.
							</li>
							<li class="thongtin">
								Decan dán đuôi otô.
							</li>
							<li class="thongtin">
								Tem vỡ 7 màu chất lượng cao.
							</li>
							<li class="thongtin">
								Tem nhôm
							</li>

						</ul>
					</span> -->
					<!-- <strong class="title-temnhan wow tada" data-wow-duration="1s"data-wow-iteration="2" data-wow-delay="1s" style="text-align: center;color: red;display: block;font-size: 1.5em;    padding-top: 10px;">Đặc biệt tất cả các sản phẩm sẽ được cắt bế theo mọi hình dáng khách hàng yêu cầu.</strong> -->
					
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12" style="float:right; padding-bottom: 30px;">
					<div class="col-md-12 col-xs-12">
						<h1 class="title-bottom text-center">Sản phẩm đã làm</h1>
					</div>
					<div class="sanpham col-md-12 col-sm-12 col-xs-12" style="display: flex;">
						<div class="col-md-4 col-sm-6 col-xs-12">
							<img class="img-fluid img-sanpham  wow flipInY" data-wow-duration="2s"src="images/inan/temnhan.jpg" alt="">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<img class="img-fluid img-sanpham  wow flipInY" data-wow-duration="2s"src="images/inan/temnhan-1.jpg" alt="">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<img class="img-fluid img-sanpham  wow flipInY" data-wow-duration="2s"src="images/inan/temnhan-2.jpg" alt="">
						</div>
					</div>
					<a class="chitietsanpham"href="#">Chi tiết sản phẩm</a>
				</div>
				
			</div>

			<!-- Tờ in - tờ quảng cáo -->
			<div class="col-md-6 col-xs-12" style="background-image: linear-gradient(to right top , #FFFF66 , white, #FFFF66, white);">
				<h5 class=" title text-center wow bounceInLeft"data-wow-duration="2s"  data-wow-iteration="1s"><i>Tờ rơi - Tờ quảng cáo</i></h5>
				<div class="col-md-12 col-xs-12"style="float:left; padding-bottom: 30px;">
					<p class="sub-title-left wow bounceInLeft" data-wow-duration="3s">
						Bạn thường làm gì khi ra ngoài đường và một ai đó đưa cho bạn tờ rơi của họ? Bạn có đọc chúng với một sự mong đợi? Hay bạn ném chúng đi ngay lập tức khi chỉ mới liếc mắt qua lần đầu tiên? Lần cuối cùng mà có một thiết kế tờ rơi khiến bạn chú ý là từ bao giờ?Để đảm bảo rằng những thiết kế tờ rơi của bạn có sức ảnh hưởng nhất định tới người xem hãy để Công ty chúng tôi giúp bạn điều đó.	
					</p>
					<!-- <span>
						<ul class="sub-title-thongtin wow fadeInUpBig" data-wow-duration="3s"style="list-style: none;padding: 0px 12px 0 20px">* Thông tin sản phẩm:
							<li class="thongtin">Kích thước: A5, A4, A3 (tùy theo khách hàng yêu cầu).
							</li>
							<li class="thongtin">Chất liệu:
								<li style="padding-left: 30px;">-Giấy ốp định lượng: 100, 150, 200, 250
								</li>
								<li style="padding-left: 30px;">-Giấy couche, định lượng: 80, 100, 150, 200, 250, 300</li>
								<li style="padding-left: 30px;">-Các loại giấy theo yêu cầu cuả khách hàng
								</li>
							</li>
							<li class="thongtin">Yêu cầu sau in:  Bế, gấp rãnh lằn, cán mờ hoặc cán bóng.</li>
						</ul>
					</span> -->

				</div>	
				<div class="col-md-12 col-sm-12 col-xs-12" style="float:right; padding-bottom: 30px;">
					<div class="col-md-12 col-xs-12">
						<h1 class="title-bottom text-center">Sản phẩm đã làm</h1>
					</div>
					<div class="sanpham col-md-12 col-sm-12 col-xs-12" style="display: flex;">
						<div class=" col-md-4 col-sm-6 col-xs-12">
							<img class="img-fluid img-sanpham  wow flipInY" data-wow-duration="2s"src="images/inan/toquangcao.jpg" alt="">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<img class="img-fluid img-sanpham  wow flipInY" data-wow-duration="2s"src="images/inan/toquangcao-1.jpg" alt="">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<img class="img-fluid img-sanpham  wow flipInY" data-wow-duration="2s"src="images/inan/toquangcao-2.jpg" alt="">
						</div>
					</div>
					<a class="chitietsanpham"href="#">Chi tiết sản phẩm
					</a>
				</div>
				
			</div>
			<!-- in áo, đồng phục, logo công ty   -->
			<div class="col-md-6 col-xs-12" style="background-image: linear-gradient(to right top , #FFFF66 , white, #FFFF66, white);">
				<h5 class="title text-center wow bounceInDown"data-wow-duration="2s"><i>In áo, đồng phục, logo công ty </i></h5>
				<div class="col-md-12 col-xs-12"style="float:left; padding-bottom: 30px;">
					
					<p class="sub-title-right wow bounceInRight" data-wow-duration="3s">Áo đồng phục từ lâu đã trở thành một nét văn hóa, một sản phẩm không thể thiếu trong trường lớp cũng như các tập thể công ty, doanh nghiệp. Để in áo đồng phục đẹp, chúng ta cần có những bản thiết kế, những ý tưởng cùng chất liệu để có thể tạo nên chiếc áo chứa đựng biết bao ý nghĩa.Sản phẩm của công ty chúng tôi được sản xuất trọn gói từ thiết kế -> cắt -> may -> in do vậy luôn có được giá tốt nhất cho khách hàng.
					</p>
					
					<!-- <span>
						<ul class="sub-title-thongtin wow fadeInUpBig" data-wow-duration="3s" style="list-style: none;padding: 0px 12px 0 20px">* Thông tin sản phẩm:
							<li class="thongtin">Đồng phục lớp</li>
							<li class="thongtin">Đồng Phục công ty, câu lạc bộ, nhóm</li>
							<li class="thongtin">
								Đồng phục áo khoác
							</li>
							<li class="thongtin">
								Chất liệu: vải cotton hoặc lascote (hoặc theo yêu cầu của khách hàng)
							</li>
						</ul>
					</span> -->
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12" style="float:right; padding-bottom: 30px;">
					<div class="col-md-12 col-xs-12">
						<h1 class="title-bottom text-center">Sản phẩm đã làm</h1>
					</div>
					<div class="sanpham col-md-12 col-sm-12 col-xs-12" style="display: flex;">
						<div class="col-md-4 col-sm-6 col-xs-12">
							<img class="img-fluid img-sanpham  wow flipInY" data-wow-duration="2s"src="images/inan/logocongty.jpg" alt="">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<img class="img-fluid img-sanpham  wow flipInY" data-wow-duration="2s"src="images/inan/inao.jpg" alt="">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<img class="img-fluid img-sanpham  wow flipInY" data-wow-duration="2s"src="images/inan/inao-1.jpg" alt="">
						</div>
					</div>
					<a class="chitietsanpham"href="#">Chi tiết sản phẩm</a>
				</div>
				
			</div>
			<!-- Phong bì -->
			<div class="col-md-6 col-xs-12" style="background-image: linear-gradient(to right top , #FFFF66 , white, #FFFF66, white);">
				<h5 class=" title text-center wow bounceInLeft"data-wow-duration="2s"  data-wow-iteration="1s"><i>Phong bì</i></h5>
				<div class="col-md-12 col-xs-12"style="float:left; padding-bottom: 30px;">
					
					<p class="sub-title-left" >
						<ul class="sub-title-thongtin wow bounceInLeft"data-wow-duration="3s" style="list-style: none;padding: 0px 12px 0 20px"> Từ một chiếc phong bì thư, khách hàng có thể biết gì về doanh nghiệp bạn:
							<li class="thongtin">Sự chuyên nghiệp:<!--  Một doanh nghiệp uy tín sẽ luôn thể hiện sự uy tín trên tất cả các ấn phẩm mà họ gửi tới khách hàng. -->
							</li>
							<li class="thongtin">Sự tôn trọng:<!--  Khi bạn tôn trọng khách hàng những gì bạn gửi tới khách hàng đều thể hiện điều đó. -->
							</li>
							<!-- <li class="thongtin">Quyết định mở ra hay không: Có rất nhiều khách hàng nhận được phong bì và nhanh chóng đưa chúng vào thùng rác. Bởi họ nghĩ không có thông tin gì đáng đọc trong chiếc phong bao sơ sài này đâu.
							</li> --><!-- Chính vì thế, không cần biết thông tin trong chiếc phong bì của bạn là gì. Điều quan trọng khi cầm trên tay bao thư, khách hàng cảm thấy người gửi đến cho mình là một người quan trọng và mình cần phải mở chiếc phong bì này ra - Hãy để công ty chúng tôi giúp bạn điều đó.	 -->
						</ul>
						
					</p>
					<!-- <span>
						<ul class="sub-title-thongtin wow fadeInUpBig" data-wow-duration="3s"style="list-style: none;padding: 0px 12px 0 20px">* Thông tin sản phẩm:
							<li class="thongtin">Kích thước: 12x22cm, 14x22cm, 16x23cm, 24x35cm (hoặc tùy theo khách hàng yêu cầu)
							</li>
							<li class="thongtin">Chất liệu giấy: Các loại giấy op, giấy couche với định lượng khách nhau.
							</li>

						</ul>
					</span> -->

				</div>	
				<div class="col-md-12 col-sm-12 col-xs-12" style="float:right; padding-bottom: 30px;">
					<div class="col-md-12 col-xs-12">
						<h1 class="title-bottom text-center">Sản phẩm đã làm</h1>
					</div>
					<div class="sanpham col-md-12 col-sm-12 col-xs-12" style="display: flex;">
						<div class="col-md-4 col-sm-6 col-xs-12">
							<img class="img-fluid img-sanpham  wow flipInY" data-wow-duration="2s"src="images/inan/mauphongbi.jpg" alt="">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<img class="img-fluid img-sanpham  wow flipInY" data-wow-duration="2s"src="images/inan/mauphongbi-1.jpg" alt="">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<img class="img-fluid img-sanpham  wow flipInY" data-wow-duration="2s"src="images/inan/mauphongbi-2.jpg" alt="">
						</div>
					</div>
					<a class="chitietsanpham"href="#">Chi tiết sản phẩm</a>
				</div>
				
			</div>
			<!-- In kỷ yếu, sổ lưu bút.  -->
			<div class="col-md-6 col-xs-12" style="background-image: linear-gradient(to right top , #FFFF66 , white, #FFFF66, white);">
				<h5 class="title text-center wow bounceInDown"data-wow-duration="2s"><i>In kỷ yếu, sổ lưu bút</i></h5>
				<div class="col-md-12 col-xs-12"style="float:left; padding-bottom: 30px;">
					
					<p class="sub-title-right wow bounceInRight" data-wow-duration="3s">Là một trong những thế mạnh của công ty. Hiện nay không chỉ lứa tuổi học trò làm kỷ yếu học sinh mà các cơ quan, doanh nghiệp cũng làm kỷ yếu vào các dịp đặc biệt như kỷ niệm thành lập công ty.Sản phẩm được làm ra sẽ được bao trọn các công đoạn từ chụp ảnh, chỉnh sửa ảnh, tư vấn, thiết kế, in ấn mà bạn sẽ không phải mất công đi tìm các đối tác khác nhau cho mỗi phần việc làm.
					</p>
					
					<!-- <span>
						<ul class="sub-title-thongtin wow fadeInUpBig" data-wow-duration="3s" style="list-style: none;padding: 0px 12px 0 20px">* Thông tin sản phẩm:
							<li class="thongtin">Giấy: giấy couche, giấy ốp, giấy mỹ thuật  (hoặc khách hàng yêu cầu)</li>
							<li class="thongtin">KÍch thước: A5, A4 (hoặc khách hàng yêu cầu)</li>
							<li class="thongtin">
								Đóng bìa cứng, bìa da mạ chữ vàng (hoặc khách hàng yêu cầu)
							</li>
						</ul>
					</span> -->
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12" style="float:right; padding-bottom: 30px;">
					<div class="col-md-12 col-xs-12">
						<h1 class="title-bottom text-center">Sản phẩm đã làm</h1>
					</div>
					<div class="sanpham col-md-12 col-sm-12 col-xs-12" style="display: flex;">
						<div class="col-md-4 col-sm-6 col-xs-12">
							<img class="img-fluid img-sanpham  wow flipInY" data-wow-duration="2s"src="images/inan/inkiyeu.jpg" alt="">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<img class="img-fluid img-sanpham  wow flipInY" data-wow-duration="2s"src="images/inan/inkiyeu-1.jpg" alt="">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<img class="img-fluid img-sanpham  wow flipInY" data-wow-duration="2s"src="images/inan/inkiyeu-2.jpg" alt="">
						</div>
					</div>
					<a class="chitietsanpham"href="#">Chi tiết sản phẩm</a>
				</div>
				
			</div>
			<!-- Túi nilon -->
			<div class="col-md-6 col-xs-12" style="background-image: linear-gradient(to right top , #FFFF66 , white, #FFFF66, white);">
				<h5 class=" title text-center wow bounceInLeft"data-wow-duration="2s"  data-wow-iteration="1s"><i>Túi nilon</i></h5>
				<div class="col-md-12 col-xs-12"style="float:left; padding-bottom: 30px;">
					<p class="sub-title-left wow bounceInLeft" >
						In lên túi nilon một trong những cách quảng bá sản phẩm hết sức hiệu quả và tiết kiệm chi phí.Có thể in túi nilon trên nhiều chất liệu phù hợp với sản phẩm riêng của từng công ty. Thông dụng nhất là in túi nilon chất liệu PE hoặc HD
					</p>
					<!-- <p class="sub-title wow bounceInLeft"data-wow-duration="3s"style="padding-bottom:20px;">

						<ul class="sub-title-thongtin wow bounceInLeft"data-wow-duration="3s" style="list-style: none;padding: 0px 12px 0 20px">
							<li class="thongtin">Túi nilon PE: Có độ dai tốt nhất trong các loại túi nilon, độ bóng bề mặt cao, mịn màng khó bị kéo dãn. Túi PE có tính mềm dẻo hơn túi HD, khả năng đựng đồ vật nặng tốt hơn túi HD.
							</li>
							<li class="thongtin">Túi nilon HD là loại túi có bề mặt mờ, không nhìn xuyên vào bên trong, nhìn sang trọng. Túi HD  có 2 mức độ dày, mỏng để khách hàng lựa chọn. </li>
							
						</ul>	
					</p> -->
					<!-- <span>
						<ul class="sub-title-thongtin wow fadeInUpBig" data-wow-duration="3s"style="list-style: none;padding: 0px 12px 0 20px">Kích thước Túi nilon
							<li class="thongtin">Các kích thước tiêu chuẩn để in túi nilon:  kích thước tiêu chuẩn 20x30cm, 25x35cm, 30x42cm, 35x50cm, 40x60cm.
							</li>
							<li class="thongtin">Màu sắc đa dạng: trong, trắng, xanh cốm, tím, trắng, đen, vàng, đỏ, xanh dương, da cam, hồng,…
							</li>

						</ul>
					</span> -->

				</div>	
				<div class="col-md-12 col-sm-12 col-xs-12" style="float:right; padding-bottom: 30px;">
					<div class="col-md-12 col-xs-12">
						<h1 class="title-bottom text-center">Sản phẩm đã làm</h1>
					</div>
					<div class="sanpham col-md-12 col-sm-12 col-xs-12" style="display: flex;">
						<div class="col-md-4 col-sm-6 col-xs-12">
							<img class="img-fluid img-sanpham  wow flipInY" data-wow-duration="2s"src="images/inan/intuinilong.jpg" alt="">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<img class="img-fluid img-sanpham  wow flipInY" data-wow-duration="2s"src="images/inan/intuinilong-1.jpg" alt="">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<img class="img-fluid img-sanpham  wow flipInY" data-wow-duration="2s"src="images/inan/intuinilong-2.jpg" alt="">
						</div>
					</div>
					<a class="chitietsanpham"href="#">Chi tiết sản phẩm</a>
				</div>
				
			</div>
			<!-- Túi hộp giấy  -->
			<div class="col-md-6 col-xs-12" style="background-image: linear-gradient(to right top , #FFFF66 , white, #FFFF66, white);">
				<h5 class="title text-center wow bounceInDown"data-wow-duration="2s"><i>Túi hộp giấy</i></h5>
				<div class="col-md-12 col-xs-12"style="float:left; padding-bottom: 30px;">
					
					<p class="sub-title-right wow bounceInRight"  data-wow-duration="3s">Túi giấy là sản phẩm bao bì cao cấp  và là một trong những công cụ tiếp thị hiệu quả vượt trội so với những loại bao bì khác như túi ni lông, túi nhựa…Túi giấy cũng làm tăng giá trị sản phẩm và giúp cho hàng hóa bán được nhiều hơn.Túi giấy cao cấp được sử dụng nhiều trong các chương trình khuyến mại bởi chúng có ưu điểm như màu sắc đa dạng và kích thước tùy ý khi thiết kế. Với các nhà quảng cáo thì dễ dàng in ấn logo công ty hoặc hình ảnh hàng hóa. Túi giấy không chỉ mang lại lợi ích giới thiệu sản phẩm mà còn là cơ hội để các doanh nghiệp quảng bá thương hiệu và tiếp cận khách hàng tiềm năng.	
					</p>
					
					<!-- <span>
						<ul class="sub-title-thongtin wow fadeInUpBig" data-wow-duration="3s" style="list-style: none;padding: 0px 12px 0 20px">* Thông tin sản phẩm:
							<li class="thongtin">In túi giấy trên nguyên liệu giấy couches, duplex, Ivory..</li>
							<li class="thongtin">In túi giấy Kraft trên nguyên liệu giấy tái chế...</li>
							<li class="thongtin">
								Loại túi giấy đứng (cao x dài x đáy) :
								<li style="padding-left: 30px;">- 410 x 290 x 100 mm 
								</li>
								<li style="padding-left: 30px;">- 400 x 300 x 90 mm </li>
								<li style="padding-left: 30px;">- 255 x 200 x 120 mm </li>
								<li style="padding-left: 30px;">- 140 x 130 x 60 mm </li>
							</li>
							<li class="thongtin">
								Loại túi giấy ngang: (cao x dài x đáy):
								<li style="padding-left: 30px;">- 320 x 380 x 100 mm  
								</li>
								<li style="padding-left: 30px;">- 230 x 330 x 90 mm </li>
								<li style="padding-left: 30px;">- 230 x 280 x 75 mm </li>
							</li>
						</ul>
					</span> -->
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12" style="float:right; padding-bottom: 30px;">
					<div class="col-md-12 col-xs-12">
						<h1 class="title-bottom text-center">Sản phẩm đã làm</h1>
					</div>
					<div class="sanpham col-md-12 col-sm-12 col-xs-12" style="display: flex;">
						<div class="col-md-4 col-sm-6 col-xs-12">
							<img class="img-fluid img-sanpham  wow flipInY" data-wow-duration="2s"src="images/inan/tuihopgiay.jpg" alt="">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<img class="img-fluid img-sanpham  wow flipInY" data-wow-duration="2s"src="images/inan/tuihopgiay-1.jpg" alt="">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<img class="img-fluid img-sanpham  wow flipInY" data-wow-duration="2s"src="images/inan/tuihopgiay-2.jpg" alt="">
						</div>
					</div>
					<a class="chitietsanpham"href="#">Chi tiết sản phẩm</a>
				</div>
				
			</div>
			<!-- Phiếu giao hàng, phiếu nhập kho, Oder nhà hàng, quán cafe... -->
			<div class="col-md-6 col-xs-12" style="background-image: linear-gradient(to right top , #FFFF66 , white, #FFFF66, white);">
				<h5 class=" title text-center wow bounceInLeft"data-wow-duration="2s"  data-wow-iteration="1s"><i>Phiếu giao hàng, phiếu nhập kho, Oder nhà hàng, quán cafe...</i></h5>
				<div class="col-md-12 col-xs-12"style="float:left; padding-bottom: 30px;">
					<p class="sub-title-left wow bounceInLeft" >
						Thay vì sử dụng biểu mẫu có sẵn ngoài thị trường quý sản phẩm của khách sẽ được thiết kế độc quyền riêng nội dung thông tin doanh nghiệp và thông điệp gửi đến khách hàng  ngay trên mẫu phiếu in độc quyền theo mẫu khách hàng mong muốn
					</p>
					<!-- <span>
						<ul class="sub-title-thongtin wow fadeInUpBig" data-wow-duration="3s"style="list-style: none;padding: 0px 12px 0 20px">Thông tin sản phẩm:
							<li class="thongtin">Kích thước thông dụng: A4, A5, A6...
							</li>
							<li class="thongtin">In 1 trong 3 màu: đỏ, xanh, hoặc đen
							</li>
							<li class="thongtin">Giấy BB  60 gsm, 100 tờ/ cuốn
							</li>
							<li class="thongtin">Giấy carbonless 2 liên (100 tờ/ cuốn), 3 liên (99 tờ/ cuốn).
							</li>
							<li class="thongtin">Răng cưa đóng cuốn hoặc dán keo đầu.
							</li>

						</ul>
					</span> -->

				</div>	
				<div class="col-md-12 col-sm-12 col-xs-12" style="float:right; padding-bottom: 30px;">
					<div class="col-md-12 col-xs-12">
						<h1 class="title-bottom text-center">Sản phẩm đã làm</h1>
					</div>
					<div class="sanpham col-md-12 col-sm-12 col-xs-12" style="display: flex;">
						<div class="col-md-4 col-sm-6 col-xs-12">
							<img class="img-fluid img-sanpham  wow flipInY" data-wow-duration="2s"src="images/inan/phieugiaohang.jpg" alt="">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<img class="img-fluid img-sanpham  wow flipInY" data-wow-duration="2s"src="images/inan/phieunhapkho.jpg" alt="">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<img class="img-fluid img-sanpham  wow flipInY" data-wow-duration="2s"src="images/inan/phieuoder.jpg" alt="">
						</div>
					</div>
					<a class="chitietsanpham"href="#">Chi tiết sản phẩm</a>
				</div>
				
			</div>
			<!-- Giấy khen, giấy chứng nhận-->
			<div class="col-md-6 col-xs-12" style="background-image: linear-gradient(to right top , #FFFF66 , white, #FFFF66, white);">
				<h5 class=" title text-center wow bounceInLeft"data-wow-duration="2s"  data-wow-iteration="1s"><i>Giấy khen, giấy chứng nhận</i></h5>
				<div class="col-md-12 col-xs-12"style="float:left; padding-bottom: 30px;">
					<p class="sub-title-right wow bounceInLeft" >
						Giấy khen, giấy chứng nhận tuy chỉ là một tờ giấy trong ấn phẩm văn phòng nhưng chúng có ý nghĩa tinh thần rất lớn đối với người được trao tặng đồng thời nó hình thức khích lệ, cổ vũ ,động viên kịp thời các cá nhân, tập thể có thành tích tốt giúp họ có động lực để cố gắng hơn nữa trong học tập và trong công việc của mình. Tại Công ty chúng tôi các bạn có thể: lựa chọn cho mình rất nhiều các mẫu thiết kế Giấy khen, giấy chứng nhận khác nhau được tạo sẵn. Ngoài ra bạn cũng có thể đưa ra ý tưởng thiết kế mẫu Giấy khen, giấy chứng nhận của riêng đơn vị mình. Chúng tôi sẽ dựa vào đó giúp bạn thực hiện chúng theo ý của các bạn. Hoặc các bạn có thể gửi sẵn file mẫu giấy khen, bằng khen đã được thiết kế sẵn cho chúng tôi và chúng tôi sẽ thực hiện in ấn.
					</p>
					<!-- <span>
						<ul class="sub-title-thongtin wow fadeInUpBig" data-wow-duration="3s"style="list-style: none;padding: 0px 12px 0 20px">Thông tin sản phẩm:
							<li class="thongtin">Khổ in A5, A4, A3 hoặc tùy thuộc theo yêu cầu của khách hàng.
							</li>
							<li class="thongtin">Loại giấy: Có rất nhiều loại giấy cho bạn lựa chọn: Giấy couche, Giấy vân, giấy op, giấy bóng, giấy ngoại...
							</li>
						</ul>
					</span> -->

				</div>	
				<div class="col-md-12 col-sm-12 col-xs-12" style="float:right; padding-bottom: 30px;">
					<div class="col-md-12 col-xs-12">
						<h1 class="title-bottom text-center">Sản phẩm đã làm</h1>
					</div>
					<div class="sanpham col-md-12 col-sm-12 col-xs-12" style="display: flex;">
						<div class="col-md-4 col-sm-6 col-xs-12">
							<img class="img-fluid img-sanpham  wow flipInY" data-wow-duration="2s"src="images/inan/giaykhen.jpg" alt="">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<img class="img-fluid img-sanpham  wow flipInY" data-wow-duration="2s"src="images/inan/giaykhen-1.jpg" alt="">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<img class="img-fluid img-sanpham  wow flipInY" data-wow-duration="2s"src="images/inan/giaykhen-2.jpg" alt="">
						</div>
					</div>
					<a class="chitietsanpham"href="#">Chi tiết sản phẩm</a>
				</div>
				
			</div>
			<!-- Chìa khóa sản phẩm mika-->
			<div class="col-md-6 col-xs-12" style="background-image: linear-gradient(to right top , #FFFF66 , white, #FFFF66, white);">
				<h5 class=" title text-center wow bounceInLeft"data-wow-duration="2s"  data-wow-iteration="1s"><i>Công ty chúng tôi sản xuất các loại móc khóa:</i></h5>
				<div class="col-md-12 col-xs-12"style="float:left; padding-bottom: 30px;">
					<p class="sub-title-left wow bounceInLeft" >
						
					</p>
					<span>
						<ul class="sub-title-thongtin wow fadeInUpBig" data-wow-duration="3s"style="list-style: none;padding: 0px 12px 0 20px">
							<li class="thongtin">In Móc Khóa nhựa dẻo.
							</li>
							<li class="thongtin">In móc khóa mica
							</li>
							<li class="thongtin">Làm móc khóa keo cứng hình dáng bất kì
							</li>
						</ul>
					</span>

				</div>	
				<div class="col-md-12 col-sm-12 col-xs-12" style="float:right; padding-bottom: 30px;">
					<div class="col-md-12 col-xs-12">
						<h1 class="title-bottom text-center">Sản phẩm đã làm</h1>
					</div>
					<div class="sanpham col-md-12 col-sm-12 col-xs-12" style="display: flex;">
						<div class="col-md-4 col-sm-6 col-xs-12">
							<img class="img-fluid img-sanpham  wow flipInY" data-wow-duration="2s"src="images/inan/inmockhoa.jpg" alt="">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<img class="img-fluid img-sanpham  wow flipInY" data-wow-duration="2s"src="images/inan/inmockhoa-1.jpg" alt="">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<img class="img-fluid img-sanpham  wow flipInY" data-wow-duration="2s"src="images/inan/inmockhoa-2.jpg" alt="">
						</div>
					</div>
					<a class="chitietsanpham"href="#">Chi tiết sản phẩm</a>
				</div>
				
			</div>
			<!-- menu nhà hàng-->
			<div class="col-md-6 col-xs-12" style="background-image: linear-gradient(to right top , #FFFF66 , white, #FFFF66, white);">
				<h5 class=" title text-center wow bounceInLeft"data-wow-duration="2s"  data-wow-iteration="1s"><i>Menu nhà hàng quán cafe</i></h5>
				<div class="col-md-12 col-xs-12"style="float:left; padding-bottom: 30px;">
					<p class="sub-title-right wow bounceInLeft" >
						In menu nhà hàng là một trong những công cụ giới thiệu phong cách, văn hóa ẩm thực cũng như đẳng cấp của nhà hàng đến trực tiếp với khách hàng. Tâm lý chung cho thấy, ngoài việc bày trí không gian thì Menu cũng góp phần không nhỏ tạo nên tính hấp dẫn, sự sang trọng của một nhà hàng. Khách hàng của bạn sẽ nhìn vào những hình ảnh trong menu và có thể suy nghĩ về chất lượng các món ăn, thức uống. Vì vậy, việc đầu tư thiết kế, in ấn một menu đẹp, ấn tượng sẽ giúp nhà hàng, quán ăn hay quán cafe của bạn được nâng cao chất lượng dịch vụ và thu hút khách hàng.
					</p>
					<!-- <span>
						<ul class="sub-title-thongtin wow fadeInUpBig" data-wow-duration="3s"style="list-style: none;padding: 0px 12px 0 20px">Thông tin sản phẩm:
							<li class="thongtin">Nếu menu của bạn có nhiều trang chúng sẽ được đựng trong các quyển có vỏ ngoài giả da với các kích thước là A5, A4 hoặc khổ nhỏ hơn A4 một chút.
							</li>
							<li class="thongtin">Ngoài ra bạn cũng có thể đóng gáy soắn hoặc có thể bình bày trên tấm bìa nhựa cứng rất thuận tiện cho nhân viên của bạn đựng trong những tạp dề mang bên mình để khi khách hàng yêu cầu bạn có thể đưa luôn mà không mất 1s đi tìm chúng.
							</li>
						</ul>
					</span> -->

				</div>	
				<div class="col-md-12 col-sm-12 col-xs-12" style="float:right; padding-bottom: 30px;">
					<div class="col-md-12 col-xs-12">
						<h1 class="title-bottom text-center">Sản phẩm đã làm</h1>
					</div>
					<div class="sanpham col-md-12 col-sm-12 col-xs-12" style="display: flex;">
						<div class="col-md-4 col-sm-6 col-xs-12">
							<img class="img-fluid img-sanpham  wow flipInY" data-wow-duration="2s"src="images/inan/thietkemenu.jpg" alt="">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<img class="img-fluid img-sanpham  wow flipInY" data-wow-duration="2s"src="images/inan/thietkemenu-1.jpg" alt="">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<img class="img-fluid img-sanpham  wow flipInY" data-wow-duration="2s"src="images/inan/thietkemenu-2.jpg" alt="">
						</div>
						
					</div>
					<a class="chitietsanpham"href="#">Chi tiết sản phẩm</a>
				</div>
			</div>
		</div>
	</div>
</main>


@endsection
