<?php
include("hed.html");
?>


    <div class="container my-5">
        <h2 class="text-center mb-4">ارتباط با ما</h2> <br><br>

        <div class="row">
            <!-- Contact Form -->
            <div class="col-6 col-md-6 col-lg-6">
                <h4>فرم تماس</h4>
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">نام و نام خانوادگی</label>
                        <input type="text" class="form-control" id="name" placeholder="نام خود را وارد کنید">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">ایمیل</label>
                        <input type="email" class="form-control" id="email" placeholder="ایمیل خود را وارد کنید"
                            style="direction: rtl;">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">پیام</label>
                        <textarea class="form-control" id="message" rows="5"
                            placeholder="پیام خود را وارد کنید"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">ارسال پیام</button>
                </form>
            </div>

            <!-- Contact Information -->
            <div class="col-6 col-md-6 col-lg-6">
                <h4>اطلاعات تماس</h4>
                <ul class="list-unstyled">
                    <li><strong>آدرس:</strong> نجف آباد، خیابان شریعتی، چهار راه معلم، پلاک 20</li>
                    <li><strong>تلفن:</strong> 03142240069</li>
                    <li><strong>ایمیل:</strong> contact@novinacademy.com</li>
                </ul>

            </div>
        </div>

       
    </div>

    

    <?php
include("fot.html");
?>
