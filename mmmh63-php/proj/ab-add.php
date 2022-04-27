<?php
require './parts/connect-db.php';
$pageName = 'ab-add';
$title = '新增通訊錄資料';

?>
<?php include __DIR__ . '/parts/html-head.php' ?>
<?php include __DIR__ . '/parts/navbar.php' ?>
<style>
form .warning {
    color: red;
}
</style>
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div class="card">

                <div class="card-body">
                    <h5 class="card-title">新增通訊錄資料</h5>

                    <form name="form1" method="post" onsubmit="checkForm(); return false;" novalidate>
                        <div class="mb-3">
                            <label for="name" class="form-label">* name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                            <div class="form-text warning"></div>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">email</label>
                            <input type="email" class="form-control" id="email" name="email">
                            <div class="form-text warning"></div>
                        </div>
                        <div class="mb-3">
                            <label for="mobile" class="form-label">mobile</label>
                            <input type="text" class="form-control" id="mobile" name="mobile">
                            <div class="form-text warning"></div>
                        </div>
                        <div class="mb-3">
                            <label for="birthday" class="form-label">birthday</label>
                            <input type="date" class="form-control" id="birthday" name="birthday">
                            <div class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">address</label>
                            <textarea class="form-control" name="address" id="address" cols="30" rows="3"></textarea>

                            <div class="form-text"></div>
                        </div>

                        <button type="submit" class="btn btn-primary">新增</button>
                    </form>

                </div>
            </div>
        </div>
    </div>


</div>
<?php include __DIR__ . '/parts/scripts.php' ?>
<script>
const $name = $('#name');
const $email = $('#email');
const $mobile = $('#mobile');
const msgFields = [$name, $email, $mobile];

function validateEmail(email) {
    var re =
        /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zAZ]{2,}))$/;
        // 正規表示法
    return re.test(email);
}

function validateMobile(m) {
    return /^09\d{2}-?\d{3}-?\d{3}$/.test(m);
        // 正規表示法
}


function checkForm() {

    // 清除之前的檢查訊息
    for (let f of msgFields) {
        f.css('border', '#CCCCCC 1px solid');
        f.next().html('');
    }



    // TODO: 檢查欄位資料.

    let isPass = true; // 有沒有通過檢查

    const name = $name.val().trim();

    if (name.length < 2) {
        $name.next().html('請填寫正確的姓名');
        $name.css('border', 'red 1px solid');
        isPass = false;
    }


    if ($email.val() && !validateEmail($email.val())) {
        $email.next().html('請填寫正確的email');
        $email.css('border', 'red 1px solid');
        isPass = false;
    }

    if ($mobile.val() && !validateMobile($mobile.val())) {
        $mobile.next().html('請填寫正確的手機號碼');
        $mobile.css('border', 'red 1px solid');
        isPass = false;
    }


    // AJAX
    if (isPass) {
        $.post('ab-add-api.php', $(document.form1).serialize(), function(data) {
            console.log(data);
            if (data.success) {
                alert('資料新增成功');
                location.href = 'ab-list.php';
            } else {
                alert(data.error || '資料新增失敗');
            }
        }, 'json');
    }






}
</script>
<?php include __DIR__ . '/parts/html-foot.php' ?>