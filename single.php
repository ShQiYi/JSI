
<?php
include 'header.php';
$post = get_post($_POST['p']);
?>
<div class="about">
    <div class="container  clearfloat">
        文章详情页
    </div><!--container 结束-->
</div>
<script>
    //Your JAVASCRIPT Code
</script>
<?php
include 'footer.php';
?>






<!---->
<!--post_date：(字符）文章发表的日期和时间（YYYY-MM-DD HH-MM-SS)-->
<!---->
<!--post_date_gmt：（字符）文章发表的格林尼治标准时间（GMT） （YYYY-MM-DD HH-MM-SS)-->
<!---->
<!--post_content：（字符）文章内容-->
<!---->
<!--post_title：（字符）文章标题-->
<!---->
<!--post_category：（整数）文章类别的编号。注意：该值在WordPress 2.1之后的版本总为0。定义文章的类别时可使用 get_the_category()函数。-->
<!---->
<!--post_excerpt：（字符）文章摘要-->
<!---->
<!--post_status：(字符）文章状态（publish|pending|draft|private|static|object|attachment|inherit|future）-->
<!---->
<!--comment_status：（字符）评论状态（open|closed|registered_only）-->
<!---->
<!--ping_status：（字符）pingback/trackback状态（open|closed）-->
<!---->
<!--post_password：(字符）文章密码-->
<!---->
<!--post_name：(字符）文章的URL嵌套-->
<!---->
<!--to_ping：(字符）要引用的URL链接-->
<!---->
<!--pinged：（字符）引用过的链接-->
<!---->
<!--post_modified：(字符）文章最后修改时间（YYYY-MM-DD HH-MM-SS)-->
<!---->
<!--post_modified_gmt：(字符）文章最后修改GMT时间（YYYY-MM-DD HH-MM-SS)-->
<!---->
<!--post_parent：(整数）父级文章编号（供附件等）-->
<!---->
<!--guid：（字符）文章的一个链接。注意：不能将GUID作为永久链接（虽然在2.5之前的版本中它的确被当作永久链接），也不能将它作为文章的可用链接。GUID是一种独有的标识符，只是目前恰巧成为文章的一个链接。-->
<!---->
<!--post_type：（字符）（日志 | 页面 | 附件）-->
