<div id="accordion_prodotti">
    <li class="accordion-item is-active" data-accordion-item>
        <a href="" class="accordion-title">
            <?=$category['name']?>
            <?php if (isset($category['childs']) ):?>
                <span class="badge pull-right"><i class="fa fa-plus" ></i></span>
            <?php endif;?>
        </a>
    </li>
    <?php if (isset($category['childs']) ):?>
        <ul >
            <?=$this->getMenuHtml($category['childs'])?>
        </ul>
    <?php endif;?>
</div>

