<h2>投稿</h2>
<?= $this->Form->create($board) ?>
    <?= $this->Form->label('名前') ?>
    <?= $this->Form->text('Boards.name') ?>
    <?= $this->Form->label('コメント') ?>
    <?= $this->Form->textarea('Boards.comment') ?>
    <?= $this->Form->submit('送信') ?>
<?= $this->Form->end() ?>

<h2>掲示板</h2>
<div>
    <?php foreach ($boards as $board): ?>
        <div style="display: flex; align-items: center; justify-contet: center">
            <div style="padding-right: 24px; border-right: 1px solid #ddd; width: 80%">
                <a href="/mycakeapp/boards/edit/<?= $board->id ?>" style="margin-bottom: 12px; display: block; width: 70%">
                    <p>名前：<?= $board->name ?></p>
                    <p>コメント：<?= $board->comment ?></p>
                </a>
                <p style="float: right; font-color: #eee; font-style: italic; width: 30%">投稿日時：<?= $board->created ?></p>
            </div>
            <div style="padding-left: 24px; width: 20%">
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $board->id], ['confirm' => __('削除しますか # {0}?', $board->id)]) ?>
            </div>
        </div>
        <hr>
    <?php endforeach; ?>
</div>

