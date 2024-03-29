<h2 class="text"><b>MY LIST</b></h2>
<ul class="navbar-nav">
    <li class="nav-item">
        <a class=" nav-link <?php if ($this->request->getParam('controller') == 'Content' && 
            $this->request->getParam('action') == 'index') echo 'active' ?>" href="<?=$this->Url->build([
                "controller" => "Content",
                "action" => "index"
            ]);?>"> 
        All Task
    </a>
    </li>
    <?php
        foreach ($categories as $category):
            if ($this->request->getParam('controller') == 'Content' && 
                $this->request->getParam('action') == 'viewCategories' && 
                $this->request->getParam('id') == $category->id) 
                $activeClass = 'active';
            else
                $activeClass = '';
    ?>
    <li class="nav-item">
        <?= $this->Html->link($category->name,
            ['_name' => 'viewCategories', 'id' => $category->id, '_full' => true],
            ['class' => 'nav-link ' . $activeClass]);
        ?>
        </a>
    </li>
    <?php
        endforeach;
    ?>
</ul>