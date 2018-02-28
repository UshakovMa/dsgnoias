   <form action="file/send_ans.php" method="post">
    <textarea name="msg" id="edit_text" cols="30" rows="10" class="editor"></textarea><br>
    <input type="hidden" name="id" value="<?echo $_COOKIE[id]?>">
    <input type="hidden" name="post_id" value="<?echo $_GET[id]?>">
    <input type="submit" class="btn btn-outline-success fr" style="margin-bottom: 15px;">
</form>