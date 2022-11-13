<link rel="stylesheet" href="<?= _WEB_ROOT . "/app/public/assets/clients/css/myattach.css" ?>">
<link rel="stylesheet" href="<?= _WEB_ROOT . "/app/public/assets/clients/css/bootstrap.css" ?>">

<link rel="stylesheet" href="<?= _WEB_ROOT . "/app/global/css/multi-select-dropdown.css" ?>">
<script defer src="<?= _WEB_ROOT . "/app/public/assets/clients/js/myattach.js" ?>"></script>


    <main>
      
        <section class="cb-section">
            <div class="container">
                <div class="cb-title cb-title-center">
                    <h2>Tạo Hồ Sơ Đính Kèm</h2>
                </div>
                <div class="main-quick-upload-resume created-now-wrap">
                    <form method="post" name="frmResumeDetail" id="frmResumeDetail" enctype="multipart/form-data" class="frmEditAttach" autocomplete="off">
                        <input type="hidden" name="resume_id" id="resume_id" value="0" />
                        <input type="hidden" name="intSync" id="intSync" value="0" />
                        <input type="hidden" name="is_change" id="is_change" value="0" />
                        <input type="hidden" name="resume_kind" value="2" />
                        <input type="hidden" id="resume_path" name="resume_path" value="" />
                        <input type="hidden" id="resume_path_old" name="resume_path_old" value="" />
                        <input type="hidden" id="resume_path_convert" name="resume_path_convert" value="" />
                        <input type="hidden" id="resume_path_convert_old" name="resume_path_convert_old" value="" />
                        <input type="hidden" value="0000000000" id="strConfidential" name="strConfidential" />
                        <input type="hidden" value="0000000000" id="strConfidentialTmp" name="strConfidentialTmp" />
                        <input type="hidden" name="private_info" id="private_info" value="1" />
                        <input type="hidden" name="csrf_token" id="csrf_token" value="4e46e3c57b29a018c3b2f6f3213641f0c0bc46b658c6ff7696af61b3d6b19b9c" />

                        <div class="quick-upload">
                            <div class="cb-title-h3">
                                <h3>Hồ sơ</h3>
                            </div>

                            <div class="form-show-file " id="uploadFile_file">
                                <label>* Tên Hồ Sơ:</label>
                                <em class="material-icons">picture_as_pdf</em>
                                <p class="show-file"></p>
                                <a href="javascript:void(0)" class="removefile" onclick="removefile(); return false;"><em class="material-icons">highlight_off </em>Xóa</a>
                            </div>


                            <div class="form-choose">
                                <div class="form-group">
                                    <label>* Hồ Sơ Đính Kèm<span>*Hỗ trợ định dạng *.doc, *.docx, *.pdf và không quá 5MB</span></label>
                                </div>
                                <div class="form-group">
                                    <div class="list-choose">
                                        <div class="choose-mycomputer">
                                            <label for="attach_file"><em class="mdi mdi-folder-outline"></em>Tải hồ sơ từ máy tính</label>
                                            <input class="d-none" type="file" id="attach_file" name="attach_file" onchange=" return ajaxOnlyFile(this);">
                                        </div>
                                        <!--<a class="choose-drive" href="#"><img src="./img/quick-upload-resume/Google_Drive_logo.png" alt="">Choose From Google Drive</a>-->
                                     
                                        <!--<a class="choose-dropbox" href="#"><img src="./img/quick-upload-resume/Dropbox_Logo.png" alt="">Chọn file từ Dropbox</a> -->
                                        <input type="hidden" name="dropbox_file" id="dropbox_file" value="">
                                        <input type="hidden" name="dfile_title" id="dfile_title" value="">
                                        <input type="hidden" name="dfile_size" id="dfile_size" value="">

                                    </div>
                                    <span class="error_attach_file"></span>
                                </div>
                            </div>

                            <div class="form-group form-text">
                                <input type="text"  name="resume_title" id="resume_title" maxlength="400" class="keyword" value="" autocomplete="off">
                                <label>* Tiêu đề hồ sơ</label>
                                <span class="error_resume_title"></span>
                                <div class="form-note">
                                    <p>Nhập vị trí hoặc chức danh. Ví dụ: Kế toán trưởng, Web designer</p>
                                </div>
                            </div>
                            <div class="form-group form-note">
                                <div class="box-noti">
                                    <p>
                                        <div style="clear:both;text-align:center;color:#ff0000; border:1px solid #FFE8C1; background:#FFFAF2; text-align:left; padding:10px; margin-bottom" 15px;
                                            "><b>Lưu ý:</b> Theo thống kê của CareerBuilder.vn hồ sơ Tiếng Anh được nhà tuyển dụng xem nhiều hơn 150% so với hồ sơ Tiếng Việt<br/> <span class="note ">Tất cả các bằng cấp, chứng chỉ kèm theo (nếu có) cần được gộp chung vào hồ sơ ứng tuyển với dung lượng không quá 5MB vì vượt quá dung lượng quy định có<br/>khả năng dẫn đến việc Nhà tuyển dụng không nhận được hồ sơ ứng tuyển; và chỉ hỗ trợ các định dạng .doc, .docx, *.pdf.</div>
</span></p>
            </div>
          </div>
        </div>
        <div class="quick-upload quick-upload-2 ">
          <div class="cb-title-h3 d-flex justify-content-sb align-center ">
			<h3>Thông tin cá nhân</h3>

			 <div class="link-edit "><a style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#thongtincanhan"> <em class="material-icons ">create</em><span> Chỉnh sửa</span></a></div>
			 </div>
			 <p class="noted "> Xin vui lòng cập nhật thông tin cá nhân để hoàn tất hồ sơ</p>
        </div>

            <div class="modal fade"  data-bs-backdrop="static" data-bs-keyboard="false"id="thongtincanhan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div  class="modal-dialog modal-dialog-centered">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h2 class="modal-title" id="exampleModalLabel">Tiêu đề hồ sơ</h2>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                 <form name="personalInfoForm" id="personalInfoForm" autocomplete="off">
                                    <div class="row">
                                       <div class="col-md-6">
                                           <label>* Họ và tên lót</label>
                                          <div class="form-group form-text">
                                             <input type="text"  name="lastname" id="lastname" value="Một" maxlength="30" class="valid">
                                             <span class="err_lastname" style=""></span>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                           <label>* Tên</label>
                                          <div class="form-group form-text">
                                             <input type="text"  name="firstname" id="firstname" value="Ba" maxlength="30">
                                             <span class="err_firstname" style="display:none"></span>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group form-radio">
                                             <p>* Giới tính</p>
                                             <div class="gender">
                                                <input type="radio" id="gender_m" value="1" checked="checked" name="gender">
                                                <label for="gender_m">Nam</label>
                                             </div>
                                             <div class="gender">
                                                <input type="radio" id="gender_f" value="2" name="gender">
                                                <label for="gender_f">Nữ</label>
                                             </div>
                                             <span class="err_gender" style="display:none"></span>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group form-birthday">
                                             <label for="">* Ngày sinh</label>
                                             <input type="text" class="date_month" name="birthday" ">
                                             <div id=" date_time_picker" class="dtpicker-overlay dtpicker-mobile">
                                                <div class="dtpicker-bg">
                                                   <div class="dtpicker-cont">
                                                      <div class="dtpicker-content">
                                                         <div class="dtpicker-subcontent"></div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <span class="err_birthday" style="display:none"></span>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                           <label for="">* Số điện thoại</label>
                                          <div class="form-group form-text">
                                             <input type="text"  name="mobile" id="mobile" value="0839704123" maxlength="20" style="margin-top:5px">
                                             <span class="err_mobile" style="display:none"></span>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                           <label for="">* Email</label>
                                          <div class="form-group form-text">
                                             <input type="text"  id="email_member_edit" value="aolang69@gmail.com" readonly="readonly" disabled="disabled" style="margin-top:5px">
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                           <label for="">* Quốc tịch</label>
                                          <div class="form-group form-select">
                                             <select name="slnationality" id="slnationality">
                                                <option value="1" selected="selected">Người Việt Nam</option>
                                                <option value="22">Người Bangladesh</option>
                                                <option value="14">Người Campuchia</option>
                                                <option value="4">Người Canada</option>
                                                <option value="25">Người Công gô</option>
                                                <option value="13">Người Hoa Kỳ</option>
                                                <option value="8">Người Hàn Quốc</option>
                                                <option value="24">Người Hồng Kong</option>
                                                <option value="169">Người Khác</option>
                                                <option value="19">Người Lào</option>
                                                <option value="9">Người Malaysia</option>
                                                <option value="21">Người Myanmar</option>
                                                <option value="2">Người Nhật</option>
                                                <option value="17">Người Qatar</option>
                                                <option value="23">Người Nước Ngoài</option>
                                                <option value="10">Người Singapore</option>
                                                <option value="5">Người Trung Quốc</option>
                                                <option value="16">Người Ukraine</option>
                                                <option value="3">Người Úc</option>
                                                <option value="20">Người Đài Loan</option>
                                             </select>
                                             <span class="err_slnationality" style="display:none"></span>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group form-select">
                                             <label for="">* Tình trạng hôn nhân</label>
                                             <select name="slMarritial">
                                                <option value="1">Đã kết hôn</option>
                                                <option value="0" selected="selected">Độc thân</option>
                                             </select>
                                             <span class="err_slMarritial" style="display:none"></span>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group form-select">
                                             <label for="">* Quốc gia</label>
                                             <select name="slcountry" id="slcountry" class="select-nation">
                                                <option value="1" selected="selected">Việt Nam</option>
                                                <option value="22">Bangladesh</option>
                                                <option value="14">Campuchia</option>
                                                <option value="4">Canada</option>
                                                <option value="25">Công Gô</option>
                                                <option value="13">Hoa Kỳ</option>
                                                <option value="8">Hàn Quốc</option>
                                                <option value="24">Hồng Kông</option>
                                                <option value="169">Khác</option>
                                                <option value="19">Lào</option>
                                                <option value="9">Malaysia</option>
                                                <option value="21">Myanmar</option>
                                                <option value="2">Nhật Bản</option>
                                                <option value="17">Qatar</option>
                                                <option value="23">Quốc tế</option>
                                                <option value="10">Singapore</option>
                                                <option value="5">Trung Quốc</option>
                                                <option value="16">Ukraine</option>
                                                <option value="3">Úc</option>
                                                <option value="20">Đài Loan</option>
                                             </select>
                                             <span class="err_slcountry" style="display:none"></span>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group form-select">
                                             <label for="">* Tỉnh / Thành phố</label>
                                             <select name="slcity" id="slcity" class="select-province-city" onchange="loadDistrictProfile(this.value);">
                                                <option value="">Chọn</option>
                                                <option value="4">Hà Nội</option>
                                                <option value="8">Hồ Chí Minh</option>
                                                <option value="76">An Giang</option>
                                                <option value="64">Bà Rịa - Vũng Tàu</option>
                                                <option value="781">Bạc Liêu</option>
                                                <option value="281">Bắc Cạn</option>
                                             </select>
                                             <span class="err_slcity" style="display:none"></span>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <!--id="areaDistrict"-->
                                          <div class="form-group form-select">
                                             <label for="">* Quận/huyện</label>
                                             <select name="sldistrict" id="sldistrict" class="select-district">
                                                <option value="">Chọn</option>
                                                <option value="347">Huyện Ba Vì</option>
                                                <option value="353">Huyện Chương Mỹ</option>
                                                <option value="349">Huyện Đan Phượng</option>
                                                <option value="339">Huyện Đông Anh</option>
                                                <option value="340">Huyện Gia Lâm</option>
                                                <option value="350">Huyện Hoài Đức</option>
                                                <option value="344">Huyện Mê Linh</option>
                                                <option value="358">Huyện Mỹ Đức</option>
                                                <option value="357">Huyện Ứng Hòa</option>
                                                <option value="356">Huyện Phú Xuyên</option>
                                                <option value="348">Huyện Phúc Thọ</option>
                                                <option value="351">Huyện Quốc Oai</option>
                                                <option value="338">Huyện Sóc Sơn</option>
                                                <option value="352">Huyện Thạch Thất</option>
                                                <option value="354">Huyện Thanh Oai</option>
                                                <option value="342">Huyện Thanh Trì</option>
                                                <option value="355">Huyện Thường Tín</option>
                                                <option value="329">Quận Ba Đình</option>
                                                <option value="343">Quận Bắc Từ Liêm</option>
                                                <option value="333">Quận Cầu Giấy</option>
                                                <option value="334">Quận Đống Đa</option>
                                                <option value="345">Quận Hà Đông</option>
                                                <option value="335">Quận Hai Bà Trưng</option>
                                                <option value="330">Quận Hoàn Kiếm</option>
                                                <option value="336">Quận Hoàng Mai</option>
                                                <option value="332">Quận Long Biên</option>
                                                <option value="341">Quận Nam Từ Liêm</option>
                                                <option value="331">Quận Tây Hồ</option>
                                                <option value="337">Quận Thanh Xuân</option>
                                                <option value="346">Thị xã Sơn Tây</option>
                                             </select>
                                             <span class="err_sldistrict" style="display:none"></span>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <label for="">* Địa chỉ (Số nhà, Đường)</label>
                                          <div class="form-group form-text">
                                             <input type="text"  name="address" value="đường 7">
                                             <span class="err_address" style="display:none"></span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="modal-footer">
                                       <div class="button-save button-center">
                                          <button class="btn-primary" data-bs-dismiss="modal" type="button">Lưu lại</button>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
        <div class="quick-upload quick-upload-2 ">
  <div class="cb-title-h3 ">
    <h3>Thông tin nghề nghiệp</h3>
    <div class="user-action ">
      <ul>
	  			<li> <a href="https://careerbuilder.vn/vi/jobseekers/myresume/myattach?sync=1 " title=" " class="action-1 "><em class="fa fa-sync "></em>Đồng bộ thông tin với Hồ Sơ CareerBuilder</a> </li>
		      </ul>
    </div>
  </div>
  <div class="row ">
    <div class="col-md-6 ">
      <div class="form-group form-select ">
        <label>* Số năm kinh nghiệm</label>
        <input type="number " onkeyup="this.setAttribute( 'value', this.value); " name="yearOfExperience " id="year_experience " value="1 "  maxlength="2 " min="1 " max="55 ">
        <span class="error_yearOfExperience "></span> </div>
    </div>
    <div class="col-md-6 ">
      <div class="form-group form-select ">
        <label>* Bằng cấp cao nhất</label>
        <select name="degree " id="degree " class="required width_186 ">
          <option value=" " >Chọn</option>
          <option value="0 ">Chưa tốt nghiệp</option>
<option value="1 ">Trung học</option>
<option value="2 ">Trung cấp</option>
<option value="3 ">Cao đẳng</option>
<option value="4 ">Đại học</option>
<option value="5 ">Sau đại học</option>
<option value="6 ">Khác</option>

        </select>
        <span class="error_degree "></span> </div>
    </div>
    <div class="col-md-12 ">
      <div class="form-group form-checkbox form-no-exp ">
        <input type="checkbox " name="cboExper " id="cboExper " value="1 " >
        <label for="cboExper ">Chưa có kinh nghiệm</label>
      </div>
    </div>
    <div class="col-md-6 ">
      <div class="form-group form-select ">
        <label>* Cấp bậc mong muốn</label>
        <select name="level_id " id="level_id " >
          <option value=" " >Chọn</option>
		      <option value="1 ">Sinh viên/ Thực tập sinh</option>
<option value="2 ">Mới tốt nghiệp</option>
<option value="3 ">Nhân viên</option>
<option value="4 ">Trưởng nhóm / Giám sát</option>
<option value="5 ">Quản lý</option>
<option value="6 ">Phó Giám đốc</option>
<option value="7 ">Giám đốc </option>
<option value="8 ">Tổng giám đốc</option>
<option value="9 ">Chủ tịch / Phó Chủ tịch</option>

        </select>
        <span class="error_level_id "></span> </div>
    </div>
    <div class="col-md-6 ">
      <div class="form-group form-select ">
        <label for=" ">Cấp bậc hiện tại</label>
        <select class="width_186 " name="levelcurrent_id " id="levelcurrent_id " >
          <option value=" " >Chọn</option>
          <option value="1 ">Sinh viên/ Thực tập sinh</option>
<option value="2 ">Mới tốt nghiệp</option>
<option value="3 ">Nhân viên</option>
<option value="4 ">Trưởng nhóm / Giám sát</option>
<option value="5 ">Quản lý</option>
<option value="6 ">Phó Giám đốc</option>
<option value="7 ">Giám đốc </option>
<option value="8 ">Tổng giám đốc</option>
<option value="9 ">Chủ tịch / Phó Chủ tịch</option>

        </select>
      </div>
    </div>
    <div class="col-md-6 ">
      <div class="form-group form-select-chosen ">
        <label for=" ">* Ngành nghề mong muốn</label>
        <div id="dropdownSelected"></div>
        <select name="INDUSTRY_ID[] " id="select_industry_db " data-placeholder="Vui lòng chọn ngành nghề " multiple class="chosen-select-max-three " title="Vui lòng chọn ngành nghề ">
                        <optgroup label="Bán hàng / Tiếp thị ">
                            <option value="4 " >Tiếp thị / Marketing</option>
                            <option value="30 " >Bán lẻ / Bán sỉ</option>
                            <option value="31 " >Bán hàng / Kinh doanh</option>
                            <option value="37 " >Tiếp thị trực tuyến</option>
                            </optgroup>
                        <optgroup label="Chăm sóc sức khỏe ">
                            <option value="7 " >Dược phẩm</option>
                            <option value="56 " >Y tế / Chăm sóc sức khỏe</option>
                            </optgroup>
                        <optgroup label="Dịch vụ ">
                            <option value="9 " >Tư vấn</option>
                            <option value="12 " >Dịch vụ khách hàng</option>
                            <option value="20 " >Phi chính phủ / Phi lợi nhuận</option>
                            <option value="24 " >Luật / Pháp lý</option>
                            <option value="32 " >Bưu chính viễn thông</option>
                            <option value="33 " >Vận chuyển / Giao nhận /  Kho vận</option>
                            <option value="44 " >Lao động phổ thông</option>
                            <option value="51 " >An Ninh / Bảo Vệ</option>
                            </optgroup>
                        <optgroup label="Giáo dục / Đào tạo ">
                            <option value="13 " >Giáo dục / Đào tạo</option>
                            <option value="57 " >Thư viện</option>
                            </optgroup>
                        <optgroup label="Hàng tiêu dùng ">
                            <option value="10 " >Hàng gia dụng / Chăm sóc cá nhân</option>
                            <option value="21 " >Thực phẩm &amp; Đồ uống</option>
                            </optgroup>
                        <optgroup label="Hành chính / Nhân sự ">
                            <option value="3 " >Hành chính / Thư ký</option>
                            <option value="17 " >Quản lý điều hành</option>
                            <option value="22 " >Nhân sự</option>
                            <option value="38 " >Biên phiên dịch</option>
                            </optgroup>
                        <optgroup label="Kế toán / Tài chính ">
                            <option value="2 " >Kế toán / Kiểm toán</option>
                            <option value="19 " >Ngân hàng</option>
                            <option value="23 " >Bảo hiểm</option>
                            <option value="46 " >Chứng khoán</option>
                            <option value="59 " >Tài chính / Đầu tư</option>
                            </optgroup>
                        <optgroup label="Khách sạn / Du lịch ">
                            <option value="29 " >Nhà hàng / Khách sạn</option>
                            <option value="34 " >Du lịch</option>
                            <option value="60 " >Hàng không</option>
                            </optgroup>
                        <optgroup label="Khoa học ">
                            <option value="5 " >Nông nghiệp</option>
                            <option value="36 " >Thống kê</option>
                            <option value="49 " >Thủy sản / Hải sản</option>
                            <option value="50 " >Lâm Nghiệp</option>
                            <option value="52 " >Chăn nuôi / Thú y</option>
                            <option value="53 " >Thủy lợi</option>
                            <option value="54 " >Trắc địa / Địa Chất</option>
                            <option value="61 " >Hàng hải</option>
                            <option value="69 " >Công nghệ sinh học</option>
                            <option value="70 " >Công nghệ thực phẩm / Dinh dưỡng</option>
                            </optgroup>
                        <optgroup label="Kỹ thuật ">
                            <option value="14 " >Cơ khí / Ô tô / Tự động hóa</option>
                            <option value="16 " >Môi trường</option>
                            <option value="26 " >Dầu khí</option>
                            <option value="41 " >Hóa học</option>
                            <option value="48 " >Điện / Điện tử / Điện lạnh</option>
                            <option value="65 " >Khoáng sản</option>
                            <option value="71 " >Bảo trì / Sửa chữa</option>
                            </optgroup>
                        <optgroup label="Máy tính / Công nghệ thông tin ">
                            <option value="1 " >CNTT - Phần mềm</option>
                            <option value="63 " >CNTT - Phần cứng / Mạng</option>
                            </optgroup>
                        <optgroup label="Truyền thông / Media ">
                            <option value="11 " >Mỹ thuật / Nghệ thuật / Thiết kế</option>
                            <option value="15 " >Giải trí</option>
                            <option value="66 " >Truyền hình / Báo chí / Biên tập</option>
                            <option value="67 " >Quảng cáo / Đối ngoại / Truyền Thông</option>
                            <option value="68 " >Tổ chức sự kiện</option>
                            </optgroup>
                        <optgroup label="Sản xuất ">
                            <option value="18 " >Xuất nhập khẩu</option>
                            <option value="25 " >Sản xuất / Vận hành sản xuất</option>
                            <option value="35 " >Đồ gỗ</option>
                            <option value="39 " >Dệt may / Da giày / Thời trang</option>
                            <option value="42 " >Quản lý chất lượng (QA/QC)</option>
                            <option value="43 " >Thu mua / Vật tư</option>
                            <option value="58 " >An toàn lao động</option>
                            <option value="64 " >In ấn / Xuất bản</option>
                            </optgroup>
                        <optgroup label="Xây dựng ">
                            <option value="6 " >Kiến trúc</option>
                            <option value="8 " >Xây dựng</option>
                            <option value="28 " >Bất động sản</option>
                            <option value="47 " >Nội ngoại thất</option>
                            </optgroup>
                        <optgroup label="Nhóm ngành khác ">
                            <option value="27 " >Ngành khác</option>
                            <option value="45 " >Mới tốt nghiệp / Thực tập</option>
                            </optgroup>
                  </select>
        <span class="error_select_industry_db "></span> </div>
    </div>
    <div class="col-md-6 form-additional form-salary-cus ">
      <label>Mức lương mong muốn</label>
      <div class="form-big ">
        <div class="form-group form-select ">
          <select name="salary_unit " id="salary_unit ">
            <option value="ltt ">Thỏa thuận</option>
            <option value="vnd " >VNĐ</option>
            <option value="usd " >USD</option>
          </select>
        </div>
        <div class="form-group form-text ">
          <input type="text " disabled onkeyup="this.setAttribute( 'value', this.value); " name="salary_from " id="salary_from "  value=" ">
          <label>Từ</label>
        </div>
        <div class="form-group form-text ">
          <input type="text " disabled onkeyup="this.setAttribute( 'value', this.value); " name="salary_to " id="salary_to "  value=" ">
          <label>Đến </label>
        </div>
        <span class="error_salary_unit "></span> </div>
    </div>

    <div class="col-md-12 form-additional ">
      <div class="list-language " id="list-language ">
                          <div class="item row active ">
                  <div class="col-md-6 col-dt-1 ">
                    <div class="form-group form-select ">
                      <label for=" ">Trình độ ngoại ngữ</label>
                      <input type="hidden " name="rs_language_id[] " value="0 ">
                      <select name="rs_language[] "  class="width_186 ">
                        <option value=" ">Chọn</option>
                        <option value="vn ">Việt Nam</option>
                        <option value="en ">Anh</option>
                        <option value="fr ">Pháp</option>
                        <option value="de ">Đức</option>
                        <option value="ru ">Nga</option>
                        <option value="cn ">Trung Quốc</option>
                        <option value="kr ">Hàn Quốc</option>
                        <option value="jp ">Nhật</option>
                        <option value="other ">Khác</option>
                      </select>
                    </div>
                    <div class="form-group form-select ">
                      <label for=" ">Trình độ</label>
                      <select name="rs_language_level[] "  class="width_125 ">
                        <option selected value="0 ">Chọn</option>
                        <option value="2 ">Sơ cấp</option>
                        <option value="3 ">Trung cấp</option>
                        <option value="4 ">Cao cấp</option>
                        <option value="1 ">Bản ngữ</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6 col-dt-2 ">
                    <div class="outer-form-group ">
                      <label>Chứng chỉ ngôn ngữ</label>
                      <div class="form-group form-text ">
                        <input type="text " onkeyup="this.setAttribute( 'value', this.value); " name="rs_language_certify[] " value=" ">
                        <a class="btn-delete " href="javascript:void(0); "><em class="material-icons ">highlight_off</em><span>Xóa</span></a>
                      </div>
                    </div>
                  </div>
              </div>
                        <div id="language_hide " style="display:none ">
              <div class="item row active ">
                  <div class="col-md-6 col-dt-1 ">
                    <div class="form-group form-select ">
                      <label for=" ">Trình độ ngoại ngữ</label>
                      <input type="hidden " name="rs_language_id[] " value="0 ">
                      <select name="rs_language[] "  class="width_186 ">
                        <option value=" ">Chọn</option>
                        <option value="vn ">Việt Nam</option>
                        <option value="en ">Anh</option>
                        <option value="fr ">Pháp</option>
                        <option value="de ">Đức</option>
                        <option value="ru ">Nga</option>
                        <option value="cn ">Trung Quốc</option>
                        <option value="kr ">Hàn Quốc</option>
                        <option value="jp ">Nhật</option>
                        <option value="other ">Khác</option>
                      </select>
                    </div>
                    <div class="form-group form-select ">
                      <label for=" ">Trình độ</label>
                      <select name="rs_language_level[] "  class="width_125 ">
                        <option selected value="0 ">Chọn</option>
                        <option value="2 ">Sơ cấp</option>
                        <option value="3 ">Trung cấp</option>
                        <option value="4 ">Cao cấp</option>
                        <option value="1 ">Bản ngữ</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6 col-dt-2 ">
                    <div class="outer-form-group ">
                      <label>Chứng chỉ ngôn ngữ</label>
                      <div class="form-group form-text ">
                        <input type="text " onkeyup="this.setAttribute( 'value', this.value); " name="rs_language_certify[] " value=" ">
                        <a class="btn-delete " href="javascript:void(0); "><em class="material-icons ">highlight_off</em><span>Xóa</span></a>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
            <a class="btn-add " href="javascript:void(0); "><em class="material-icons ">add_circle_outline</em><span>Thêm </span></a>
      </div>
    </div>
    <div class="col-md-12 ">
      <div class="list-workplace-desired " id="list-workplace-desired "> <div class="row item active ">
    <div class="col-md-6 ">
        <div class="form-group form-select ">
            <label>* Nơi làm việc mong muốn</label>
            <select name="LOCATION_ID[] " id="select_location_id_1 " >
                <option value=" " >Chọn</option>
                                    <option value="4 " >Hà Nội</option>
                                    <option value="8 " >Hồ Chí Minh</option>
                                    <option value="76 " >An Giang</option>
                                    <option value="64 " >Bà Rịa - Vũng Tàu</option>
                                    <option value="781 " >Bạc Liêu</option>
                                    <option value="281 " >Bắc Cạn</option>
                                    <option value="240 " >Bắc Giang</option>
                                    <option value="241 " >Bắc Ninh</option>
                                    <option value="75 " >Bến Tre</option>
                                    <option value="650 " >Bình Dương</option>
                                    <option value="56 " >Bình Định</option>
                                    <option value="651 " >Bình Phước</option>
                                    <option value="62 " >Bình Thuận</option>
                                    <option value="78 " >Cà Mau</option>
                                    <option value="26 " >Cao Bằng</option>
                                    <option value="71 " >Cần Thơ</option>
                                    <option value="50 " >Dak Lak</option>
                                    <option value="1042 " >Dak Nông</option>
                                    <option value="511 " >Đà Nẵng</option>
                                    <option value="900 " >Điện Biên</option>
                                    <option value="1064 " >Đồng Bằng Sông Cửu Long</option>
                                    <option value="61 " >Đồng Nai</option>
                                    <option value="67 " >Đồng Tháp</option>
                                    <option value="59 " >Gia Lai</option>
                                    <option value="19 " >Hà Giang</option>
                                    <option value="351 " >Hà Nam</option>
                                    <option value="39 " >Hà Tĩnh</option>
                                    <option value="320 " >Hải Dương</option>
                                    <option value="31 " >Hải Phòng</option>
                                    <option value="780 " >Hậu Giang</option>
                                    <option value="18 " >Hòa Bình</option>
                                    <option value="321 " >Hưng Yên</option>
                                    <option value="901 " >Khác</option>
                                    <option value="58 " >Khánh Hòa</option>
                                    <option value="77 " >Kiên Giang</option>
                                    <option value="60 " >Kon Tum</option>
                                    <option value="1071 " >KV Bắc Trung Bộ</option>
                                    <option value="1069 " >KV Đông Nam Bộ</option>
                                    <option value="1070 " >KV Nam Trung Bộ</option>
                                    <option value="1072 " >KV Tây Nguyên</option>
                                    <option value="23 " >Lai Châu</option>
                                    <option value="25 " >Lạng Sơn</option>
                                    <option value="20 " >Lào Cai</option>
                                    <option value="63 " >Lâm Đồng</option>
                                    <option value="72 " >Long An</option>
                                    <option value="350 " >Nam Định</option>
                                    <option value="38 " >Nghệ An</option>
                                    <option value="30 " >Ninh Bình</option>
                                    <option value="68 " >Ninh Thuận</option>
                                    <option value="210 " >Phú Thọ</option>
                                    <option value="57 " >Phú Yên</option>
                                    <option value="52 " >Quảng Bình</option>
                                    <option value="510 " >Quảng Nam</option>
                                    <option value="55 " >Quảng Ngãi</option>
                                    <option value="33 " >Quảng Ninh</option>
                                    <option value="53 " >Quảng Trị</option>
                                    <option value="79 " >Sóc Trăng</option>
                                    <option value="22 " >Sơn La</option>
                                    <option value="66 " >Tây Ninh</option>
                                    <option value="36 " >Thái Bình</option>
                                    <option value="280 " >Thái Nguyên</option>
                                    <option value="37 " >Thanh Hóa</option>
                                    <option value="54 " >Thừa Thiên- Huế</option>
                                    <option value="73 " >Tiền Giang</option>
                                    <option value="74 " >Trà Vinh</option>
                                    <option value="27 " >Tuyên Quang</option>
                                    <option value="70 " >Vĩnh Long</option>
                                    <option value="211 " >Vĩnh Phúc</option>
                                    <option value="29 " >Yên Bái</option>
                            </select>
            <span class="error_location_id error_select_location_id_1 "></span>
        </div>
    </div>
    <div class="col-md-6 ">
        <div class="form-group form-select-chosen ">
            <label for=" ">Quận</label>
            <select name="DISTRICT_ID[] " id="select_district_id_1 " class=" chosen-select-max-three "  data-placeholder="Quận " multiple>
                <option value="0 " >Chọn</option>
            </select>
            <span class="error_DISTRICT_ID "></span>
        </div>
        <div class="delete "><a href="javascript:void(0) "><em class="material-icons ">highlight_off</em>Xóa</a></div>
    </div>
</div>
<div class="row item ">
    <div class="col-md-6 ">
        <div class="form-group form-select ">
            <label for=" ">Nơi làm việc mong muốn</label>
            <select name="LOCATION_ID[] " id="select_location_id_2 " >
                <option value=" " >Chọn</option>
                                    <option value="4 " >Hà Nội</option>
                                    <option value="8 " >Hồ Chí Minh</option>
                                    <option value="76 " >An Giang</option>
                                    <option value="64 " >Bà Rịa - Vũng Tàu</option>
                                    <option value="781 " >Bạc Liêu</option>
                                    <option value="281 " >Bắc Cạn</option>
                                    <option value="240 " >Bắc Giang</option>
                                    <option value="241 " >Bắc Ninh</option>
                                    <option value="75 " >Bến Tre</option>
                                    <option value="650 " >Bình Dương</option>
                                    <option value="56 " >Bình Định</option>
                                    <option value="651 " >Bình Phước</option>
                                    <option value="62 " >Bình Thuận</option>
                                    <option value="78 " >Cà Mau</option>
                                    <option value="26 " >Cao Bằng</option>
                                    <option value="71 " >Cần Thơ</option>
                                    <option value="50 " >Dak Lak</option>
                                    <option value="1042 " >Dak Nông</option>
                                    <option value="511 " >Đà Nẵng</option>
                                    <option value="900 " >Điện Biên</option>
                                    <option value="1064 " >Đồng Bằng Sông Cửu Long</option>
                                    <option value="61 " >Đồng Nai</option>
                                    <option value="67 " >Đồng Tháp</option>
                                    <option value="59 " >Gia Lai</option>
                                    <option value="19 " >Hà Giang</option>
                                    <option value="351 " >Hà Nam</option>
                                    <option value="39 " >Hà Tĩnh</option>
                                    <option value="320 " >Hải Dương</option>
                                    <option value="31 " >Hải Phòng</option>
                                    <option value="780 " >Hậu Giang</option>
                                    <option value="18 " >Hòa Bình</option>
                                    <option value="321 " >Hưng Yên</option>
                                    <option value="901 " >Khác</option>
                                    <option value="58 " >Khánh Hòa</option>
                                    <option value="77 " >Kiên Giang</option>
                                    <option value="60 " >Kon Tum</option>
                                    <option value="1071 " >KV Bắc Trung Bộ</option>
                                    <option value="1069 " >KV Đông Nam Bộ</option>
                                    <option value="1070 " >KV Nam Trung Bộ</option>
                                    <option value="1072 " >KV Tây Nguyên</option>
                                    <option value="23 " >Lai Châu</option>
                                    <option value="25 " >Lạng Sơn</option>
                                    <option value="20 " >Lào Cai</option>
                                    <option value="63 " >Lâm Đồng</option>
                                    <option value="72 " >Long An</option>
                                    <option value="350 " >Nam Định</option>
                                    <option value="38 " >Nghệ An</option>
                                    <option value="30 " >Ninh Bình</option>
                                    <option value="68 " >Ninh Thuận</option>
                                    <option value="210 " >Phú Thọ</option>
                                    <option value="57 " >Phú Yên</option>
                                    <option value="52 " >Quảng Bình</option>
                                    <option value="510 " >Quảng Nam</option>
                                    <option value="55 " >Quảng Ngãi</option>
                                    <option value="33 " >Quảng Ninh</option>
                                    <option value="53 " >Quảng Trị</option>
                                    <option value="79 " >Sóc Trăng</option>
                                    <option value="22 " >Sơn La</option>
                                    <option value="66 " >Tây Ninh</option>
                                    <option value="36 " >Thái Bình</option>
                                    <option value="280 " >Thái Nguyên</option>
                                    <option value="37 " >Thanh Hóa</option>
                                    <option value="54 " >Thừa Thiên- Huế</option>
                                    <option value="73 " >Tiền Giang</option>
                                    <option value="74 " >Trà Vinh</option>
                                    <option value="27 " >Tuyên Quang</option>
                                    <option value="70 " >Vĩnh Long</option>
                                    <option value="211 " >Vĩnh Phúc</option>
                                    <option value="29 " >Yên Bái</option>
                            </select>
            <span class="error_location_id error_select_location_id_2 "></span>
        </div>
    </div>
    <div class="col-md-6 ">
        <div class="form-group form-select-chosen ">
            <label for=" ">Quận</label>
            <select name="DISTRICT_ID[] " id="select_district_id_2 " class="chosen-select-max-three " multiple>
                <option value="0 " >Chọn</option>
            </select>
            <span class="error_DISTRICT_ID "></span>
        </div>
        <div class="delete active "><a href="javascript:void(0) "><em class="material-icons ">highlight_off</em>Xóa</a></div>
    </div>
</div>
<div class="row item ">
    <div class="col-md-6 ">
        <div class="form-group form-select ">
            <label for=" ">Nơi làm việc mong muốn</label>
            <select name="LOCATION_ID[] " id="select_location_id_3 " >
                <option value=" " >Chọn</option>
                                    <option value="4 " >Hà Nội</option>
                                    <option value="8 " >Hồ Chí Minh</option>
                                    <option value="76 " >An Giang</option>
                                    <option value="64 " >Bà Rịa - Vũng Tàu</option>
                                    <option value="781 " >Bạc Liêu</option>
                                    <option value="281 " >Bắc Cạn</option>
                                    <option value="240 " >Bắc Giang</option>
                                    <option value="241 " >Bắc Ninh</option>
                                    <option value="75 " >Bến Tre</option>
                                    <option value="650 " >Bình Dương</option>
                                    <option value="56 " >Bình Định</option>
                                    <option value="651 " >Bình Phước</option>
                                    <option value="62 " >Bình Thuận</option>
                                    <option value="78 " >Cà Mau</option>
                                    <option value="26 " >Cao Bằng</option>
                                    <option value="71 " >Cần Thơ</option>
                                    <option value="50 " >Dak Lak</option>
                                    <option value="1042 " >Dak Nông</option>
                                    <option value="511 " >Đà Nẵng</option>
                                    <option value="900 " >Điện Biên</option>
                                    <option value="1064 " >Đồng Bằng Sông Cửu Long</option>
                                    <option value="61 " >Đồng Nai</option>
                                    <option value="67 " >Đồng Tháp</option>
                                    <option value="59 " >Gia Lai</option>
                                    <option value="19 " >Hà Giang</option>
                                    <option value="351 " >Hà Nam</option>
                                    <option value="39 " >Hà Tĩnh</option>
                                    <option value="320 " >Hải Dương</option>
                                    <option value="31 " >Hải Phòng</option>
                                    <option value="780 " >Hậu Giang</option>
                                    <option value="18 " >Hòa Bình</option>
                                    <option value="321 " >Hưng Yên</option>
                                    <option value="901 " >Khác</option>
                                    <option value="58 " >Khánh Hòa</option>
                                    <option value="77 " >Kiên Giang</option>
                                    <option value="60 " >Kon Tum</option>
                                    <option value="1071 " >KV Bắc Trung Bộ</option>
                                    <option value="1069 " >KV Đông Nam Bộ</option>
                                    <option value="1070 " >KV Nam Trung Bộ</option>
                                    <option value="1072 " >KV Tây Nguyên</option>
                                    <option value="23 " >Lai Châu</option>
                                    <option value="25 " >Lạng Sơn</option>
                                    <option value="20 " >Lào Cai</option>
                                    <option value="63 " >Lâm Đồng</option>
                                    <option value="72 " >Long An</option>
                                    <option value="350 " >Nam Định</option>
                                    <option value="38 " >Nghệ An</option>
                                    <option value="30 " >Ninh Bình</option>
                                    <option value="68 " >Ninh Thuận</option>
                                    <option value="210 " >Phú Thọ</option>
                                    <option value="57 " >Phú Yên</option>
                                    <option value="52 " >Quảng Bình</option>
                                    <option value="510 " >Quảng Nam</option>
                                    <option value="55 " >Quảng Ngãi</option>
                                    <option value="33 " >Quảng Ninh</option>
                                    <option value="53 " >Quảng Trị</option>
                                    <option value="79 " >Sóc Trăng</option>
                                    <option value="22 " >Sơn La</option>
                                    <option value="66 " >Tây Ninh</option>
                                    <option value="36 " >Thái Bình</option>
                                    <option value="280 " >Thái Nguyên</option>
                                    <option value="37 " >Thanh Hóa</option>
                                    <option value="54 " >Thừa Thiên- Huế</option>
                                    <option value="73 " >Tiền Giang</option>
                                    <option value="74 " >Trà Vinh</option>
                                    <option value="27 " >Tuyên Quang</option>
                                    <option value="70 " >Vĩnh Long</option>
                                    <option value="211 " >Vĩnh Phúc</option>
                                    <option value="29 " >Yên Bái</option>
                            </select>
            <span class="error_location_id error_select_location_id_3 "></span>
        </div>
    </div>
    <div class="col-md-6 ">
        <div class="form-group form-select-chosen ">
            <label for=" ">Quận</label>
            <select name="DISTRICT_ID[] " id="select_district_id_3 " class=" chosen-select-max-three " multiple disabled="disabled ">
                <option value="0 " >Chọn</option>
            </select>
            <span class="error_DISTRICT_ID "></span>
        </div>
        <div class="delete active "><a href="javascript:void(0) "><em class="material-icons ">highlight_off</em>Xóa</a></div>
    </div>
</div>


 <a class="btn-add " href="javascript:void(0); "><em class="material-icons ">add_circle_outline</em><span>Thêm</span></a> </div>
    </div>
    <div class="col-md-12 ">
      <div class="row ">
        <div class="col-md-6 ">
          <div class="form-group form-select-chosen " id="outcountry ">
            <select name="OUTCOUNTRY_ID[] " class="chosen-select-max-three " multiple="multiple " data-placeholder="Nước ngoài ">
                          <option value="22 " >Bangladesh</option>
			                     <option value="14 " >Campuchia</option>
			                     <option value="4 " >Canada</option>
			                     <option value="25 " >Công Gô</option>
			                     <option value="20 " >Đài Loan</option>
			                     <option value="8 " >Hàn Quốc</option>
			                     <option value="13 " >Hoa Kỳ</option>
			                     <option value="24 " >Hồng Kông</option>
			                     <option value="169 " >Khác</option>
			                     <option value="19 " >Lào</option>
			                     <option value="9 " >Malaysia</option>
			                     <option value="21 " >Myanmar</option>
			                     <option value="2 " >Nhật Bản</option>
			                     <option value="17 " >Qatar</option>
			                     <option value="23 " >Quốc tế</option>
			                     <option value="10 " >Singapore</option>
			                     <option value="5 " >Trung Quốc</option>
			                     <option value="3 " >Úc</option>
			                     <option value="16 " >Ukraine</option>
			                   </select>
          </div>
        </div>
        <div class="col-md-6 ">
          <div class="form-group form-select-chosen ">
            <select name="BENEFIT_ID[] " class="chosen-select-max-three " multiple="multiple " data-placeholder="Phúc lợi mong muốn ">
                          <option value="2 " >Chế độ bảo hiểm</option>
                           <option value="3 " >Du Lịch</option>
                           <option value="8 " >Chế độ thưởng</option>
                           <option value="9 " >Chăm sóc sức khỏe</option>
                           <option value="10 " >Đào tạo</option>
                           <option value="11 " >Tăng lương</option>
                           <option value="1 " >Laptop</option>
                           <option value="4 " >Phụ cấp</option>
                           <option value="5 " >Xe đưa đón</option>
                           <option value="6 " >Du lịch nước ngoài</option>
                           <option value="7 " >Đồng phục</option>
                           <option value="12 " >Công tác phí</option>
                           <option value="13 " >Phụ cấp thâm niên</option>
                           <option value="14 " >Nghỉ phép năm</option>
                           <option value="15 " >CLB thể thao</option>
                         </select>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-12 form-of-work ">
      <h6>* Hình thức làm việc</h6>
      <div class="row ">
        <div class="col-md-6 ">
          <div class="form-group form-checkbox ">
            <input type="checkbox " name="chkResumeType_1 " id="chkResumeType_1 "  value="1 ">
            <label for="chkResumeType_1 ">Nhân viên chính thức</label>
          </div>
        </div>
        <div class="col-md-6 ">
          <div class="form-group form-checkbox ">
            <input type="checkbox " name="chkResumeType_3 " id="chkResumeType_3 "  value="3 " >
            <label for="chkResumeType_3 ">Bán thời gian</label>
          </div>
        </div>
        <div class="col-md-6 ">
          <div class="form-group form-checkbox ">
            <input type="checkbox " name="chkResumeType_2 " id="chkResumeType_2 "  value="2 " >
            <label for="chkResumeType_2 ">Nghề tự do</label>
          </div>
        </div>
        <div class="col-md-6 ">
          <div class="form-group form-checkbox ">
            <input type="checkbox " name="chkResumeType_4 " id="chkResumeType_4 "  value="4 " >
            <label for="chkResumeType_4 ">Thực tập</label>
          </div>
        </div>
      </div>
      <span class="error_chkResumeType_1 "></span> 
    </div>
    <div class="col-md-12 form-of-work ">
      <h6>Phương thức công việc</h6>
      <div class="row ">
        <div class="col-md-6 ">
          <div class="form-group form-checkbox ">
            <input type="checkbox " name="chkWorkHome " id="chkWorkHome "  value="1 ">
            <label for="chkWorkHome ">Làm việc từ nhà</label>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
@media (min-width: 1200px) {
  .main-quick-upload-resume .list-language .item .form-group {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 44%;
    flex: 0 0 44%;
    max-width: 100%;
    padding: 0 5px;
  }
}
</style>

		<div class="quick-upload quick-upload-2 ">
	<div class="cb-title-h3 ">
		<h3>Người tham khảo <span>Không bắt buộc</span></h3>
	</div>
	<div class="list-references ">
		<div class="row " id="list_refer ">
		
		</div>
		<div class="row ">
			<div class="col-md-6 ">
				<a onclick="show_frmRefer(0);return false; " href="javascript:void(0); "> <em class="material-icons ">note_add</em><span>Thêm người tham khảo</span></a>
			</div>
		</div>
	</div>
</div>		<div class="quick-upload quick-upload-2 ">
  <div class="cb-title-h3 ">
    <h3>Quyền riêng tư của hồ sơ</h3>
  </div>
  <div class="status-area ">
    <div class="switch-status switch-status-element ">
      <a href="javascript:void(0); " data-type="1 " class="lock switch-status-element-1 active "><em class="mdi mdi-lock "></em>Khóa</a>
      <a href="javascript:void(0); " data-type="2 " class="public switch-status-element-2 "><em class="mdi mdi-web "></em>Công khai</a>
      <a href="javascript:void(0); " data-type="3 " class="flash switch-status-element-3 "><em class="mdi mdi-flash "></em>Khẩn cấp</a>
    </div>
    <div class="swap-content-1 ">
      <p class="content-1 active ">
        Bạn đang <span>vô hiệu hóa</span> hồ sơ. Nhà tuyển dụng sẽ không thấy được hồ sơ này của bạn.													
      </p>
      <p class="content-2 ">
        Hồ sơ của bạn đang ở trạng thái <span>Công Khai</span>. Nhà tuyển dụng có thể tìm thấy Hồ sơ này của bạn.														
      </p>
      <p class="content-3 ">
        Hồ sơ của bạn đang ở trạng thái <span>Khẩn cấp</span>. Hồ sơ của bạn sẽ được ưu tiên tìm thấy bởi các nhà tuyển dụng.															
      </p>
    </div>
  </div>
  <div class="row search-resume ">
    <div class="col-md-6 ">
      <div class="form-group ">
        <span class="hide-infor ">Ẩn một số thông tin</span>
      </div>
    </div>
  </div>
  <div class="row ">
    <div class="col-md-12 ">
  
	  <div class="form-group form-submit form-back "><a class="btn-gradient save-and-finish " href="javascript:void(0); " onclick="checkValidForm(2); ">Lưu và hoàn thành</a></div>
    </div>
    <div class="col-md-12 ">
      <div class="form-group form-note ">
        <p>* Thông tin bắt buộc</p>
      </div>
    </div>
  </div>
</div>      </form>
    </div>
  </div>
</section>
<div class="hide-infor-modal " id="hide-info " style="display: none ">
	<div class="modal-title ">
		<p>Ẩn một số thông tin</p>
	</div>
	<div class="modal-body ">
		<form name="frmConfident " id="frmConfident " method="POST ">
			<input type="hidden " name="r_id " value="0 " />
			<input type="hidden " name="j_id " value="6327211 " />
									<div class="line ">
				<p>Thông tin cá nhân</p>
			</div>
			<div class="row data-list ">
				<div class="col-md-6 ">
					<div class="form-group form-checkbox ">
						<input class="input_confident " type="checkbox " id="chkConfidential_6 " name="chkConfidential[6] " data-bit="6 " value="1 "  />
						<label for="chkConfidential_6 ">Tình trạng hôn nhân</label>
					</div>
				</div>
				<div class="col-md-6 ">
					<div class="form-group form-checkbox ">
						<input class="input_confident " type="checkbox " id="chkConfidential_0 " name="chkConfidential[0] " data-bit="0 " value="1 "  />
						<label for="chkConfidential_0 ">Ẩn Họ và tên</label>
					</div>
				</div>
				<div class="col-md-6 ">
					<div class="form-group form-checkbox ">
						<input class="input_confident " type="checkbox " id="chkConfidential_1 " name="chkConfidential[1] " data-bit="1 " value="1 "  />
						<label for="chkConfidential_1 ">Ẩn Địa chỉ</label>
					</div>
				</div>
				<div class="col-md-6 ">
					<div class="form-group form-checkbox ">
						<input class="input_confident " id="chkConfidential_2 " type="checkbox "  name="chkConfidential[3] " data-bit="3 " value="1 "  />
						<label for="chkConfidential_2 ">Ẩn Số điện thoại</label>
					</div>
				</div>
			</div>
			<div class="line ">
				<p>Thông tin công việc</p>
			</div>
			<div class="row data-list ">
				<div class="col-md-6 ">
					<div class="form-group form-checkbox ">
						<input class="input_confident " type="checkbox " id="chkConfidential_7 " name="chkConfidential[7] " data-bit="7 " value="1 "  />
						<label for="chkConfidential_7 ">Hình thức làm việc</label>
					</div>
				</div>
				<div class="col-md-6 ">
					<div class="form-group form-checkbox ">
						<input class="input_confident " type="checkbox " id="chkConfidential_9 " name="chkConfidential[9] " data-bit="9 " value="1 "  />
						<label for="chkConfidential_9 ">Mức lương mong muốn</label>
					</div>
				</div>
				<div class="col-md-6 ">
					<div class="form-group form-checkbox ">
						<input class="input_confident " type="checkbox " id="chkConfidential_8 " name="chkConfidential[8] " data-bit="8 " value="1 "  />
						<label for="chkConfidential_8 ">Phúc lợi mong muốn</label>
					</div>
				</div>
			</div>
		</form>
		<div class="button-modal "><a class="btn-gradient " onclick="saveConfResume(); "  href="javascript:void(0); ">Lưu lại</a></div>
	</div>
</div>





    </main>
  
