<?php
    $paginator = $this->Paginator->setTemplates([
        'number'=> '<li class="page-item"><a href="{{url}}" class="page-link">{{text}}</a></li>',

        'current'=> '<li class="page-item active"><a href="{{url}}" class="page-link">{{text}}</a></li>',

        'prevActive'=> '<li class="page-item"><a href="{{url}}" class="page-link">&lt</a></li>',

        'nextActive'=> '<li class="page-item"><a href="{{url}}" class="page-link">&gt</a></li>',
    ]);
?>

<nav aria-label="paginacao">
    <ul class="pagination pagination-sm justify-content-center">
        <?php
        if($paginator->hasPrev()){
            echo $paginator->prev();
        }
        echo $paginator->numbers(['modulus' => 4]);
        if($paginator->hasNext()){
            echo $paginator->next();
        }
        ?>
    </ul>
</nav>