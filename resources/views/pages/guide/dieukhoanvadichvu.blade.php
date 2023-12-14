@extends('layout')

@section('slider')
    @include('pages.include.slider')
@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center" style="display: flex; justify-content: center;">
        <div class="col-md-8">
            <div class="features_items">
                <h2 class="title text-center">Điều khoản và dịch vụ</h2>
                <h5 >
                    <b>
                        - Hiện nay, vấn đề quy định thông tin đã trở thành vấn đề nóng trên tất cả các diễn đàn, điều này không chỉ gây khó khăn cho các tổ chức, cá nhân tham gia truy cập và giao dịch mà còn gây nên những phiền toái vượt ra ngoài tầm kiểm soát của hệ thống.
                        <br>
                        - Quy định và chia sẻ thông tin khách hàng của <a href="http://mihawkperfume.com/shopperfume_laravel/">mihawkperfume.com</a>  như một lời cam kết với mong muốn nâng cao chất lượng dịch vụ, bảo đảm an toàn thông tin của các cá nhân, tổ chức khi tham gia truy cập hoặc giao dịch trực tiếp trên website mihawkperfume.com. Chúng tôi hiểu bảo vệ và sử dụng hợp lí thông tin của bạn cũng chính là bảo vệ lòng tin và sự yêu mến của bạn dành cho chúng tôi.
                    </b>
                    
                </h5>
                <div class="row">
                    <div class="col-md-12">
                        <div class="accordion">
                            <button class="accordion-btn">1. Mục đích thu thập thông tin cá nhân:</button>
                            <div class="accordion-panel">
                                <p>
                                    - Việc thu thập dữ liệu tại website mihawkperfume.com được xác định khi bạn muốn sử dụng dịch vụ tại website. (liên hệ, mua sắm, khiếu nại, hỏi đáp…)
                                    <br>
                                    - Chúng tôi thu thập, lưu trữ và xử lý thông tin của bạn cho quá trình thực hiện giao dịch, cho những thông báo sau này, hoặc để cung cấp dịch vụ. Chúng tôi không giới hạn các loại thông tin cá nhân thu thập: danh hiệu, tên, giới tính, ngày sinh, email, địa chỉ, số điện thoại, fax, chi tiết thanh toán, chi tiết thanh toán bằng thẻ hoặc chi tiết tài khoản ngân hàng.
                                    <br>
                                    - Chúng tôi sẽ dùng thông tin quý khách đã cung cấp để xử lý đơn đặt hàng, cung cấp các dịch vụ và thông tin yêu cầu thông qua website và theo yêu cầu của bạn. Hơn nữa, chúng tôi sẽ sử dụng các thông tin đó để quản lý tài khoản của bạn; xác minh và thực hiện giao dịch trực tuyến, kiểm toán việc tải dữ liệu từ web; cải thiện bố cục và nội dung trang web và điều chỉnh cho phù hợp với người dùng. Nếu quý khách không muốn nhận bất cứ thông tin tiếp thị của chúng tôi thì có thể từ chối bất cứ lúc nào.
                                    <br>
                                    - Chi tiết đơn đặt hàng của bạn sẽ được chúng tôi lưu giữ, nhưng vì lý do bảo mật nên chúng tôi sẽ không công khai trực tiếp. Tuy nhiên, người sử dụng có thể tiếp cận thông tin bằng cách đăng nhập tài khoản trên website mihawkperfume.com. Quý khách hiểu và cam kết sẽ bảo mật dữ liệu cá nhân của mình và không được phép tiết lộ cho bên thứ ba. Chúng tôi không chịu bất kỳ trách nhiệm nào cho việc dùng sai mật khẩu nếu đây không phải lỗi của chúng tôi.    
                                </p>
                            </div>
                            <button class="accordion-btn">2. Phạm vi sử dụng thông tin</button>
                            <div class="accordion-panel">
                                <p>
                                    <b>mihawkperfume.com có quyền sử dụng hợp pháp các thông tin cá nhân của khách hàng trong các trường hợp để đảm bảo quyền lợi của quý khách như:
                                    </b>
                                        
                                    - Thông báo các thông tin về dịch vụ quảng cáo, các chương trình khuyến mãi… đến khách hàng theo nhu cầu và thói quen của quý khách khi truy cập <br>
                                    - Liên lạc và hỗ trợ khách hàng trong những trường hợp đặc biệt <br>
                                    - Phát hiện và ngăn chặn ngay lập tức các hành vi can thiệp hoặc phá hoại tài khoản của khách hàng
                                </p>
                            </div>

                            <button class="accordion-btn">3. Thời gian lưu trữ thông tin</button>
                            <div class="accordion-panel">
                                <p>
                                    Công ty có hệ thống máy chủ có khả năng lưu trữ thông tin khách hàng tối thiểu là 03 năm và tối đa là 10 năm. Trong quá trình hoạt động, công ty có thể nâng cao khả năng lưu trữ thông tin nếu cần thiết.
                                </p>
                            </div>

                            <button class="accordion-btn">4. Các đối tượng hoặc tổ chức có thể được tiếp cận với thông tin khách hàng</button>
                            <div class="accordion-panel">
                                <p>
                                    <b>
                                        Chỉ duy nhất Mihawk Perfume được quyền tiếp cận thông tin khách hàng và chúng tôi cam kết không tiết lộ thông tin khách hàng cho bên thứ ba ngoại trừ các trường hợp sau:
                                    </b>

                                    - Thực hiện theo yêu cầu của các các cá nhân, tổ chức có thẩm quyền theo quy định của pháp luật
                                    Cần thiết phải sử dụng các thông tin để phục vụ cho việc cung cấp các dịch vụ/tiện ích cho khách hàng
                                    Nghiên cứu thị trường và đánh giá phân tích <br>
                                    - Trao đổi thông tin khách hàng với đối tác hoặc đại lí phân phối để phân tích nâng cao chất lượng dịch vụ <br>
                                    <b>Ngoài các trường hợp trên, khi cần phải trao đổi thông tin khách hàng cho bên thứ ba, Mihawk Perfume sẽ thông báo trực tiếp với khách hàng và sẽ chỉ thực hiện việc trao đổi thông tin khi có sự đồng thuận từ phía khách hàng.</b>
                                </p>
                            </div>


                            <button class="accordion-btn"> 5. Địa chỉ của đơn vị thu thập và quản lý thông tin, bao gồm cách thức liên lạc để người tiêu dùng có thể hỏi về hoạt động thu thập, xử lý thông tin liên quan đến cá nhân mình</button>
                            <div class="accordion-panel">
                                <p>
                                    Mihawk Perfume là đơn vị duy nhất được thu thập và quản lý thông tin khách hàng tại địa chỉ mihawkperfume.com, mọi thắc mắc và cần sự hỗ trợ xin vui lòng liên hệ qua số hotline <b>1900 0129</b> hoặc email hotro@mihawksupport.com để chúng tôi được phục vụ bạn.
                                </p>
                            </div>

                            <button class="accordion-btn">6. Phương tiện và công cụ để người dùng tiếp cận và chỉnh sửa dữ liệu cá nhân của mình.</button>
                            <div class="accordion-panel">
                                <p>
                                    - Người dùng có thể tiếp cận và chỉnh sửa trực tiếp dữ liệu cá nhân của mình thông qua website mihawkperfume.com bằng cách đăng nhập vào tài khoản mà mình đã đăng ký và sửa lại các thông tin, dữ liệu cá nhân của mình hoặc liên hệ hotline <b>1900 0129</b> để được hỗ trợ.
                                    <br>
                                    - Việc đăng nhập có thể thực hiện trên máy tính, điện thoại, hay các công cụ khác có tính năng truy cập vào website.
                                </p>
                            </div>

                            <button class="accordion-btn">7. Cam kết bảo mật thông tin cá nhân khách hàng</button>
                            <div class="accordion-panel">
                                <p>
                                    
                                    - Tất cả các thông tin khách hàng cung cấp và nội dung giao dịch đều được mihawkperfume.com lưu giữ bảo mật tuyệt đối trên hệ thống. Mihawk Perfume cam đoan sẽ không bán hoặc chia sẻ dẫn đến làm lộ thông tin cá nhân của bạn, không vì những mục đích thương mại mà vi phạm cam kết của chúng tôi ghi trong chính sách bảo mật này <br>
                                    - Mihawk Perfume luôn sẵn sàng về đội ngũ kĩ thuật và an ninh để có những biện pháp đối phó với những trường hợp cố tình xâm nhập và sử dụng trái phép thông tin của khách hàng. Khi thu thập dữ liệu, Mihawk Perfume thực hiện lưu giữ và bảo mật thông tin khách hàng tại hệ thống máy chủ và các thông tin khách hàng này được bảo đảm an toàn bằng các hệ thống bảo vệ tốt nhất hiện nay, cùng các biện pháp kiểm soát truy cập và mã hóa dữ liệu. <br>
                                    - Khách hàng không được phép sử dụng bất kì chương trình hay công cụ nào nhằm mục đích khai thác, thay đổi dữ liệu bất hợp pháp trên hệ thống mihawkperfume.com. Mọi hành vi cố tình xâm phạm, tùy theo tính chất sự việc, chúng tôi có quyền khởi tố với các cơ quan có thẩm quyền theo quy định pháp luật hiện hành. <br>
                                    - Khách hàng nên tự bảo vệ thông tin bảo mật của mình bằng cách không chia sẻ các thông tin cá nhân cũng như các thông tin giao dịch với bên thứ ba, cẩn thận trong việc đăng nhập/đăng xuất tài khoản để loại trừ những sự cố rò rỉ thông tin không đáng có.
                                </p>
                            </div>

                            <button class="accordion-btn">7. Cam kết bảo mật thông tin cá nhân khách hàng</button>
                            <div class="accordion-panel">
                                <p>
                                    
                                    - Tất cả các thông tin khách hàng cung cấp và nội dung giao dịch đều được mihawkperfume.com lưu giữ bảo mật tuyệt đối trên hệ thống. Mihawk Perfume cam đoan sẽ không bán hoặc chia sẻ dẫn đến làm lộ thông tin cá nhân của bạn, không vì những mục đích thương mại mà vi phạm cam kết của chúng tôi ghi trong chính sách bảo mật này <br>
                                    - Mihawk Perfume luôn sẵn sàng về đội ngũ kĩ thuật và an ninh để có những biện pháp đối phó với những trường hợp cố tình xâm nhập và sử dụng trái phép thông tin của khách hàng. Khi thu thập dữ liệu, Mihawk Perfume thực hiện lưu giữ và bảo mật thông tin khách hàng tại hệ thống máy chủ và các thông tin khách hàng này được bảo đảm an toàn bằng các hệ thống bảo vệ tốt nhất hiện nay, cùng các biện pháp kiểm soát truy cập và mã hóa dữ liệu. <br>
                                    - Khách hàng không được phép sử dụng bất kì chương trình hay công cụ nào nhằm mục đích khai thác, thay đổi dữ liệu bất hợp pháp trên hệ thống mihawkperfume.com. Mọi hành vi cố tình xâm phạm, tùy theo tính chất sự việc, chúng tôi có quyền khởi tố với các cơ quan có thẩm quyền theo quy định pháp luật hiện hành. <br>
                                    - Khách hàng nên tự bảo vệ thông tin bảo mật của mình bằng cách không chia sẻ các thông tin cá nhân cũng như các thông tin giao dịch với bên thứ ba, cẩn thận trong việc đăng nhập/đăng xuất tài khoản để loại trừ những sự cố rò rỉ thông tin không đáng có.
                                </p>
                            </div>

                            <button class="accordion-btn">8. Cơ chế tiếp nhận và giải quyết khiếu nại liên quan đến việc thông tin cá nhân khách hàng</button>
                            <div class="accordion-panel">
                                <p>
                                    - Khách hàng có quyền gửi khiếu nại về việc lộ thông tin các nhân cho bên thứ 3 đến Ban quản trị của công ty TNHH Mihawk Perfume tại địa chỉ 180 Cao Lỗ, Quận 8 hoặc qua email hotro@mihawksupport.com.
                                    <br>
                                    - Công ty có trách nhiệm thực hiện các biện pháp kỹ thuật, nghiệp vụ để xác minh các nội dung được phản ánh, qua đó hỗ trợ kịp thời và giải quyết thỏa đáng cho khách hàng theo quy định của pháp luật. Thời gian xử lý phản ánh liên quan đến thông tin cá nhân khách hàng là 15 ngày.
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
