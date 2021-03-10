
<h2>編集画面</h2>
<?= $this->Html->link(__('一覧画面'), ['action' => 'index']) ?>
<div>
    <?= $this->Form->create($board) ?>
        <?= $this->Form->label('名前') ?>
        <?= $this->Form->text('Boards.name') ?>
        <?= $this->Form->label('コメント') ?>
        <?= $this->Form->textarea('Boards.comment') ?>
        <?= $this->Form->submit('送信') ?>
    <?= $this->Form->end() ?>
</div>
