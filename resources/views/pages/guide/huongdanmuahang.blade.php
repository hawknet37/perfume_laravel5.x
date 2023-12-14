@extends('layout')

@section('slider')
    @include('pages.include.slider')
@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center" style="display: flex; justify-content: center;">
        <div class="col-md-8">
            <div class="features_items">
                <h2 class="title text-center">Hướng dẫn mua hàng</h2>
                <div class="row">
                    <div class="col-md-12">
                        <div class="accordion">
                            <button class="accordion-btn">1. Tôi có cần một tài khoản để đặt hàng không?</button>
                            <div class="accordion-panel">
                                <p>
                                    Có, tất cả những gì bạn cần là một địa chỉ email và số điện thoại. Mihawk Perfume khuyên bạn nên đăng ký tài khoản để dễ dàng theo dõi và lưu trữ những sản phẩm yêu thích của mình. Bên cạnh đó, việc đăng ký tài khoản sẽ giúp bạn tích lũy được giá trị mua hàng để nhận được những chương trình ưu đãi dành cho thành viên của Mihawk Perfume.
                                    <br>
                                    Bạn cũng có thể đặt hàng và theo dõi các đơn đặt hàng với tư cách là khách và đăng ký (<a href="http://mihawkperfume.com/shopperfume_laravel/dang-nhap">click vào để đăng ký</a>) vào thời điểm phù hợp với bạn.
                                </p>
                            </div>
                            <button class="accordion-btn">2. Làm cách nào để nhận email cập nhật từ Mihawk Perfume?</button>
                            <div class="accordion-panel">
                                <p>
                                    Chúng tôi sẽ thông báo về những sản phẩm mới, các xu hướng về nước hoa, các chương trình khuyến mãi độc quyền, ưu đãi đặc biệt qua email cho các khách hàng của mình. Hãy nhập địa chỉ email của bạn ở cuối trang chủ của chúng tôi và nhận lại những điều bất ngờ và thú vị.
                                </p>
                            </div>
                            <button class="accordion-btn">3. Cách đặt hàng trên Mihawk Perfume</button>
                            <div class="accordion-panel">
                                <p>
                                    Dễ dàng thôi, chúng tôi sẽ chỉ cho bạn:<br>
                                    - Chọn một thương hiệu hoặc danh mục (nước hoa nam, nước hoa nữ…) từ menu của Website hoặc sử dụng khung tìm kiếm để khám phá một chai nước hoa cụ thể mà bạn đang tìm.<br>
                                    - Sau khi vào được trang sản phẩm bạn đang tìm kiếm, bạn chỉ việc chọn dung tích (size) mà bạn muốn mua và bấm vào MUA NGAY để thanh toán hoặc bấm vào THÊM VÀO GIỎ HÀNG để tiếp tục xem thêm những sản phẩm khác.<br>
                                    - Bạn có thể đăng nhập bằng tài khoản (nếu có) hoặc có thể tiến hành mua hàng trực tiếp bằng cách nhập đầy đủ thông tin (tên, địa chỉ, số điện thoại, email) trong mục thanh toán. Chúng tôi sẽ gửi email xác nhận và bộ phận CSKH sẽ gọi điện để xác nhận đơn hàng của bạn sớm nhất (trong khung giờ 9h-21h) trước khi đơn hàng được vận chuyển.
                                </p>
                            </div>
                            <button class="accordion-btn">4. Tôi có thể đặt hàng qua điện thoại được không?</button>
                            <div class="accordion-panel">
                                <p>
                                    Chắc chắn rồi, đội ngũ chăm sóc khách hàng chuyên nghiệp, thân thiện của chúng tôi luôn sẵn sàng phục vụ, hỗ trợ bạn 7 ngày trong tuần từ 9h đến 21h giờ hàng ngày. Gọi ngay <b>1900 0129</b> để chúng tôi được hỗ trợ bạn.
                                </p>
                            </div>
                            <button class="accordion-btn"> 5. Tôi có thể tìm lời khuyên về nước hoa phù hợp ở đâu?</button>
                            <div class="accordion-panel">
                                <p>
                                    Đội ngũ tư vấn viên với nhiều năm kinh nghiệm, tận tâm và luôn luôn lắng nghe chia sẻ khách hàng của chúng tôi sẵn sàng giúp đỡ bạn, mang tới những câu trả lời thỏa đáng nhất, giúp bạn dễ dàng đưa ra được lựa chọn của mình.
                                </p>
                            </div>
                            <button class="accordion-btn">6. Tôi có thể thay đổi thông tin hoặc hủy đơn hàng không?</button>
                            <div class="accordion-panel">
                                <p>
                                    Hoàn toàn có thể. Liên hệ ngay tổng đài dịch vụ chăm sóc khách hàng <b>1900 0129</b> của chúng tôi để được hỗ trợ thay đổi hoặc hủy đơn hàng kịp thời. Chúng tôi có thể thay đổi địa chỉ nhận hàng, số điện thoại, thông tin nhận hàng. Chúng tôi không thể thêm sản phẩm vào một đơn hàng hiện tại, tuy nhiên chúng tôi sẽ hỗ trợ bạn đặt lại một đơn hàng mới cho bất kỳ thông tin hay sản phẩm bổ sung nào. Tìm hiểu thêm trong chính sách hoàn trả và hoàn tiền của chúng tôi.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .accordion-btn {
        background-color: #f9f9f9;
        color: #333;
        cursor: pointer;
        padding: 18px;
        width: 100%;
        text-align: left;
        border: none;
        outline: none;
        transition: 0.4s;
        border-bottom: 1px solid #ddd;
    }

    .accordion-btn:hover {
        background-color: #ddd;
    }

    .accordion-panel {
        padding: 0 18px;
        display: none;
        overflow: hidden;
        background-color: white;
    }

    .active, .accordion-btn.active {
        background-color: #ddd;
    }
</style>

<script>
    var accBtn = document.getElementsByClassName("accordion-btn");
    var i;

    for (i = 0; i < accBtn.length; i++) {
        accBtn[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        });
    }
</script>

@endsection
