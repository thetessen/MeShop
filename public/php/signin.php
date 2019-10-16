<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">MESHOP</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <div class="tab">
                    <button class="tablinks" onclick="openCity(event, 'signin')" id="defaultOpen">Đăng Nhập</button>
                    <button class="tablinks" onclick="openCity(event, 'signup')">Đăng Xuất</button>
                </div>

                <div id="signin" class="tabcontent">
                    <form method="post">
                        <div class="form-group">
                            <input type="text" name="LGform1_user" class="form-control" placeholder="Địa chỉ Email" value="" required="" />
                        </div>
                        <div class="form-group">
                            <input type="password" name="LGform1_pwd" class="form-control" placeholder="Mật khẩu" value="" required="" />
                        </div>
                        <div class="form-group">
                            <input type="submit" name="LGform1" class="btn btn-danger  btn-block" value="Đăng nhập" />
                            <a href="ForgetPassword.php" class="btnForgetPwd" value="Login">Quên mật khẩu?</a>
                        </div>
                        <div class="form-group">
                            <label>Hoặc đăng nhập bằng</label>
                            <br>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="LGform1" class="btn btn-primary btn-block" value="Facebook" />
                        </div>
                    </form>
                </div>

                <div id="signup" class="tabcontent">
                    <form method="post">
                        <div class="form-group">
                            <input type="text" name="LGform2_user" class="form-control" placeholder="Họ và tên" value="" required="" />
                        </div>
                        <div class="form-group">
                            <input type="password" name="LGform2_pwd" class="form-control" placeholder="Địa chỉ email" value="" required="" />
                        </div>
                        <div class="form-group">
                            <input type="password" name="LGform2_pwd" class="form-control" placeholder="Mật khẩu" value="" required="" />
                        </div>
                        <div class="form-group">
                            <input type="password" name="LGform2_pwd" class="form-control" placeholder="Nhập lại mật khẩu" value="" required="" />
                        </div>
                        <div class="form-group">
                            <input type="submit" name="LGform2" class="btn btn-primary btn-block" value="Đăng ký" />
                        </div>
                    </form>
                </div>

            </div>
        </div>
        <!-- Modal footer -->
    </div>
</div>
</div>