<?php if (!empty($comments)): ?>
    <ul>
        <?php foreach ($comments as $comment): ?>
            <li>
                <strong><?= htmlspecialchars($comment['username']) ?>:</strong>
                <p><?= htmlspecialchars($comment['noidung']) ?></p>
                <small><?= date('d/m/Y H:i', strtotime($comment['ngaybinhluan'])) ?></small>
            </li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>Chưa có bình luận nào.</p>
<?php endif; ?>
