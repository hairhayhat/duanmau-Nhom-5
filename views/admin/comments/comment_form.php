<?php if (isset($_SESSION['user_id'])): ?>
    <form method="POST" action="/index.php?act=add-comment">
        <input type="hidden" name="product_id" value="<?= $product_id ?>">
        <textarea name="noidung" required placeholder="Viết bình luận của bạn..."></textarea>
        <button type="submit">Gửi bình luận</button>
    </form>
<?php else: ?>
    <p>Vui lòng <a href="/index.php?act=login">đăng nhập</a> để bình luận.</p>
<?php endif; ?>
