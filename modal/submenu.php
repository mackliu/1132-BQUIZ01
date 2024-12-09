<h3 class="cent">編輯次選單</h3>
<hr>
<form action="api/insert.php" method="post" enctype="multipart/form-data" class='cent'>
    <table style="width:70%;margin:auto">
        <tr>
            <td>次選單名稱：</td>
            <td>次選單連結網址：</td>
            <td>刪除</td>
        </tr>
        <tr>
            <td><input type="text" name="text" id="text"></td>
            <td><input type="text" name="href" id="href"></td>
            <td><input type="checkbox" name="del[]"></td>
        </tr>
    </table>
    <div class="cent">
    
        <input type="submit" value="修改確定">
        <input type="reset" value="重置">
        <input type="button" value="更多次選單">
    </div>
</form>