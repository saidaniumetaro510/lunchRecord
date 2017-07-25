<h1>ランチ記録</h1>

        <?php
                echo $this->Paginator->prev('前へ' . __(''), array(), null, array('class' => 'prev disabled'));
                echo $this->Paginator->next(__('') . ' 次へ', array(), null, array('class' => 'next disabled'));
                ?>

<table>
<?php

        echo "<tr>";
        echo "<td>".$this->Paginator->sort('lunch_date', '日付')."</td>";
        echo "<td>".$this->Paginator->sort('store_name', '店名')."</td>";
        echo "<td>".$this->Paginator->sort('created', '作成日')."</td>";
        echo "<td>".$this->Paginator->sort('modified', '更新日')."</td>";
        echo "<tr>";

        for($i = 0; $i < count($data); $i++) {

        $arr = $data[$i]['ResultHeader'];
        echo "<tr>";
        echo "<td>{$arr['lunch_date']}</td>";
        //        echo "<td>{$arr['store_id']}</td>";
        echo "<td>{$data[$i]['Store']['store_name']}</td>";
        echo "<td>{$arr['created']}</td>";
        echo "<td>{$arr['modified']}</td>";
        echo "</tr>";

        }
        ?>

</table>

<?php
        echo $this->Paginator->counter(array('format' => __('{:page}/{:pages}ページを表示')));
?>


