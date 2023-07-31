var d1 = document.getElementById('loginform'),
    template = '<h3 class="title"> Cảm ơn bạn đã sử dụng dịch vụ của HAZOMEDIA. <br/>Hãy nhập tên đăng nhập hoặc Email và mật khẩu để đăng nhập quản trị Website!</h3>' +
    '<div id="holine_kt">' +
    '<h2>Liên hệ bộ phận kỹ thuật</h2>' +
    '<div><i class="fa fa-phone-square" aria-hidden="true"></i>0987.355.500</div>' +
    '<div><i class="fa fa-envelope" aria-hidden="true"></i>kythuat@hazomedia.vn</div>' +
    '<div style="margin-top: 30px;"><i>* Bộ phận kỹ thuật chúng tôi sẽ hỗ trợ và xử lý các vấn đề từ 8h - 17h30 tất cả các ngày trong tuần. Đối với những yêu cầu ngoài giờ trên sẽ được xử lý vào giờ hành chính của ngày hôm sau. Xin chân thành cảm ơn!</i></div>' +
    '</div>',
    template1 = '<div id="holine_kd">' +
    '<h2>Liên hệ bộ phận kinh doanh</h2>' +
    '<h3>Trụ sở chính</h3>' +
    '<div><i class="fa fa-phone-square" aria-hidden="true"></i>0784.584.333</div>' +
    '<div><i class="fa fa-envelope" aria-hidden="true"></i>sales@hazomedia.vn</div>' +
    '<h3>Chi nhánh HCM</h3>' +
    '<div><i class="fa fa-phone-square" aria-hidden="true"></i>0784.584.555</div>' +
    '<div><i class="fa fa-envelope" aria-hidden="true"></i>hcmsales@hazomedia.vn</div>' +
    '</div>';
d1.insertAdjacentHTML('afterbegin', template);
d1.insertAdjacentHTML('beforeend', template1);