@extends('layout')

@section('slider')
    @include('pages.include.slider')
@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center" style="display: flex; justify-content: center;">
        <div class="col-md-8">
            <div class="features_items">
                <h2 class="title text-center">Hướng dẫn thanh toán</h2>
                <div class="row">
                    <div class="col-md-12">
                        <div class="accordion">
                            <button class="accordion-btn">Đối với các đơn hàng tại Thành phố Hồ Chí Minh:</button>
                            <div class="accordion-panel">
                                <p>
                                    - Tại showroom: Chúng tôi chấp nhận hình thức thanh toán bằng tiền mặt, Chuyển khoản, các loại thẻ ATM, VISA, Mastercard
                                    <br>- Ship tại TP HCM: Chúng tôi chấp nhận hình thức Ship COD (nhận hàng thanh toán) hoặc chuyển khoản trước khi Ship    
                                </p>
                            </div>
                            <button class="accordion-btn">Đối với các đơn hàng tại Tỉnh/Thành khác ngoài TP. Hồ Chí Minh</button>
                            <div class="accordion-panel">
                                <p>
                                    Bạn cũng có thể đặt hàng và theo dõi các đơn đặt hàng với tư cách là khách và đăng ký (<a href="http://mihawkperfume.com/shopperfume_laravel/dang-nhap">click vào để đăng ký</a>) vào thời điểm phù hợp với bạn.
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
