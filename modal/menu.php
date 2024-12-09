<h3 class="cent">新增主選單</h3>
<hr>
<form action="api/insert.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>主選單名稱：</td>
            <td><input type="text" name="text" id="text"></td>
        </tr>
        <tr>
            <td>選單連結網址：</td>
            <td><input type="text" name="href" id="href"></td>
        </tr>
    </table>
    <div class="cent">
    <input type="hidden" name="table" value="<?=$_GET['table'];?>">
        <input type="submit" value="新增">
        <input type="reset" value="重置">
    </div>
</form>