@extends('layout')

@section('slider')
    @include('pages.include.slider')
@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center" style="display: flex; justify-content: center;"> 
        <div class="col-md-8">
            <div class="features_items">
                <h2 class="title text-center">Quy định đổi trả</h2>
                <b>Chúng tôi, Mihawk Perfume, cam kết luôn cung cấp hàng hóa chất lượng 100% chính hãng và dịch vụ chăm sóc khách hàng tốt nhất đến Quý khách hàng. Trong trường hợp có nhu cầu đổi trả, Quý khách vui lòng tham khảo chính sách đổi trả của Mihawk Perfume như bên dưới và liên hệ tổng đài hotline <b>1900 0129</b> (9h-21h) để được chúng tôi hỗ trợ đổi trả nhanh chóng nhất.
                </b>
                <div class="row">
                    <div class="col-md-12">
                        <div class="accordion">
                            <button class="accordion-btn">I. Chính sách đổi hàng hóa:</button>
                            <div class="accordion-panel">
                                <p>
                                    - Thời gian: Trong vòng 07 ngày làm việc kể từ ngày xuất hóa đơn (áp dụng cho đơn hàng mua tại cửa hàng) hoặc trong vòng 07 ngày làm việc kể từ ngày đơn hàng đã được giao hàng thành công (áp dụng cho đơn hàng mua online).
                                    <br>- Đơn hàng đặt online: Quý khách vui lòng cung cấp video và hình ảnh kiện hàng nhận được, và video quá trình mở bao bì seal của sản phẩm cần đổi. Chi phí vận chuyển hoặc phát sinh (nếu có) trong quá trình đổi hàng sẽ do Mihawk Perfume thanh toán.
                                    <br>- Đơn hàng mua tại cửa hàng: Quý khách vui lòng mang hóa đơn và sản phẩm đến cửa hàng đã mua để thực hiện yêu cầu đổi hàng. Sản phẩm mang trả phải còn đầy đủ vỏ hộp và các phụ kiện liên quan đến sản phẩm.

                                </p>
                            </div>
                            <button class="accordion-btn">II. Chính sách trả hàng hóa</button>
                            <div class="accordion-panel">
                                <p>
                                    - Chỉ áp dụng trả hàng cho các sản phẩm được chứng minh lỗi kết cấu sản phẩm trong quá trình sản xuất của hãng hoặc trong quá trình vận chuyển (thay đổi hình dạng, hư hỏng vòi xịt, ống xịt).
                                    <br>- Thời gian: Trong vòng 07 ngày làm việc kể từ ngày xuất hóa đơn (áp dụng cho đơn hàng mua tại cửa hàng) hoặc trong vòng 07 ngày làm việc kể từ ngày đơn hàng đã được giao hàng thành công (áp dụng cho đơn hàng mua online).
                                    <br>- Đơn hàng đặt online: Quý khách vui lòng cung cấp video và hình ảnh kiện hàng nhận được, và video quá trình mở bao bì seal của sản phẩm cần đổi. Chi phí vận chuyển hoặc phát sinh nếu có trong quá trình trả hàng sẽ do Mihawk Perfume thanh toán.
                                    <br>- Đơn hàng mua tại cửa hàng: Quý khách vui lòng mang hóa đơn và sản phẩm đến cửa hàng đã mua để thực hiện yêu cầu trả hàng.
                                    <br>- Sản phẩm mang trả phải còn đầy đủ vỏ hộp và các phụ kiện liên quan đến sản phẩm.
                                    <br>- Trong trường hợp khách hàng thanh toán qua thẻ (Visa, Master Card: Credit, Debit) chỉ được áp dụng chính sách đổi hàng.
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
