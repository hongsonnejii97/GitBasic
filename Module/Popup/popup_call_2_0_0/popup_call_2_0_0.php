<?php
  $path = get_template_directory_uri();
  $path = $path.'/Module/Popup/popup_call_2_0_0/';
?>

<style>
    .popup_call_2_0_0 input,
    .popup_call_2_0_0 select {
    font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif; }

    .popup_call_2_0_0 article {
        background: url("data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMraHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjMtYzAxMSA2Ni4xNDU2NjEsIDIwMTIvMDIvMDYtMTQ6NTY6MjcgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDUzYgKFdpbmRvd3MpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkZCRkE5Q0Q5M0NFMTExRUFCRENBODQwNEI1NkFBOEU1IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkZCRkE5Q0RBM0NFMTExRUFCRENBODQwNEI1NkFBOEU1Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6RkJGQTlDRDczQ0UxMTFFQUJEQ0E4NDA0QjU2QUE4RTUiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6RkJGQTlDRDgzQ0UxMTFFQUJEQ0E4NDA0QjU2QUE4RTUiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYG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") center 0 no-repeat;
        text-align: center;
        position: absolute;
        max-width: 430px;
        top: 500px;
        left: 0;
        right: 0;
        z-index: 2;
        margin: 0 auto;
        height: 240px;
        background-color: #fff; }
    .popup_call_2_0_0 input,
    .popup_call_2_0_0 select {
        width: 80%;
        margin: 10px 0 10px;
        border: none;
        padding: 10px 10px;
        border-radius: 5px;
        background-color: rgba(232, 230, 230, 0.5);
        outline: none;
        font-size: 14px;
        color: #000;
        font-weight: bold; }
    .popup_call_2_0_0 select {
        font-size: 14px;
        color: #767676; }
    .popup_call_2_0_0 .fct {
        padding-left: 30px; }

    @media (max-width: 1440px) {
    .popup_call_2_0_0 article {
        top: 300px; } }
    @media (max-width: 1366px) {
    .popup_call_2_0_0 article {
        top: 310px;
        height: 200px; }
    .popup_call_2_0_0 .dkbt a img {
        width: 70%; } }
    @media (max-width: 1280px) {
    .popup_call_2_0_0 article {
        top: 300px; } }
    @media (max-width: 1024px) {
    .popup_call_2_0_0 article {
        top: 240px;
        height: 180px; }
    .popup_call_2_0_0 select, .popup_call_2_0_0 input {
        margin: 10px 0 5px;
        padding: 6px 10px; }
    .popup_call_2_0_0 .dkbt a img {
        width: 60%; } }
    @media (max-width: 812px) {
    .popup_call_2_0_0 article {
        top: 150px;
        height: 170px; }
    .popup_call_2_0_0 .dkbt a img {
        width: 50%; } }
    @media (max-width: 414px) {
    .popup_call_2_0_0 article {
        background-size: 90%;
        top: 210px;
        max-width: 390px; }
    .popup_call_2_0_0 .dkbt a img {
        width: 74%; }
    .popup_call_2_0_0 select, .popup_call_2_0_0 input {
        margin: 10px 0 5px;
        padding: 6px 10px; } }
    @media (max-width: 375px) {
    .popup_call_2_0_0 article {
        background-size: 90%;
        max-width: 345px;
        height: 140px; }
    .popup_call_2_0_0 .fct {
        padding-left: 15px; }
    .popup_call_2_0_0 input,
    .popup_call_2_0_0 select {
        font-size: 15px;
        margin: 8px 0 5px 20px;
        border: none;
        padding: 3px 10px; } }
    @media (max-width: 360px) {
    .popup_call_2_0_0 article {
        top: 200px;
        max-width: 345px;
        height: 130px; }
    .popup_call_2_0_0 input,
    .popup_call_2_0_0 select {
        font-size: 15px;
        margin: 8px 0 5px;
        border: none;
        padding: 3px 10px; }
    .popup_call_2_0_0 .dkbt a img {
        width: 60%; } }
    @media (max-width: 320px) {
    .popup_call_2_0_0 article {
        top: 190px;
        max-width: 290px;
        height: 110px; }
    .popup_call_2_0_0 .fct {
        padding-left: 8px; }
    .popup_call_2_0_0 input {
        margin-bottom: 0; }
    .popup_call_2_0_0 input,
    .popup_call_2_0_0 select {
        font-size: 12px;
        margin: 8px 0 5px 30px; } }

   
</style>
<section class="popup_call_2_0_0">
    <article>
        <div class="fct">
            <div style="display:none">
                <input id="iname" name="iname" type="text" required placeholder="* Họ tên:" value="Đăng ký nhận lì xi" style="display:none">
                <input id="iemail" name="iemail" type="email" required placeholder="* Email:" value="dangkynhanlixi@kh.vn" style="display:none">
                <textarea placeholder="Dịch vụ quan tâm: " rows="1" cols="1" id="itext" name="itext"  value="Đăng ký nhận lì xi" style="display:none"></textarea>
                <input type="hidden" id="gclid_field" name="gclid_field" value="">
                <input type="hidden" id="code_campaign" name="code_campaign" value="558803148">
                <input type="hidden" id="name_campaign" name="name_campaign" value="[Paris] Đăng ký nhận lì xi">
            </div>
            <input id="imob" name="imob" type="text" placeholder="*Nhập Số Điện Thoại... ">
            <select name="icity" id="icity" required>
                <option value="">* Chọn chi nhánh gần nhất</option>
                <option value="">* Chi nhánh nha khoa Paris 12 Thái Thịnh</option>
                <option value="">* Chi nhánh nha khoa Paris 39 Quang Trung</option>
                <option value="">* Chi nhánh nha khoa Paris Hải Phòng</option>
                <option value="">* Chi nhánh nha khoa Paris TP Vinh</option>
                <option value="">* Chi nhánh nha khoa Paris Đà Nẵng</option>
                <option value="">* Chi nhánh nha khoa Paris 97 Cộng Hòa, P4, Q.Tân Bình</option>
                <option value="">* Chi nhánh nha khoa Paris 179C Đường3/2, P11, Q.10</option>
                <option value="">* Chi nhánh nha khoa Paris 87 Nguyễn Thái Học, Q.1</option>
            </select>
        </div>
        <div class="dkbt" onclick="save_form('Paris Event Sinh Nhật');ants_send_contact(this)">
            <a href="#">
                <img src="<?php echo $path ?>images/buttom.jpg" alt="">
            </a>
        </div>
    </article>
</section>
